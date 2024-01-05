/*
 * 2021 Worldline Online Payments
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0).
 * It is also available through the world-wide-web at this URL: https://opensource.org/licenses/AFL-3.0
 *
 * @author    PrestaShop partner
 * @copyright 2021 Worldline Online Payments
 * @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *
 */

var hostedTokenizationObj;

const htpPrototype = function (e) {
  this.payButtonClick = function (event) {
    if (!event.target.matches('#' + this.elems.payBtnId)) {
      return;
    }
    event.preventDefault();

    event.target.disabled = true;
    const errorDivElem = this.elems.iframeContainer.querySelector('.js-worldlineop-error');
    const genericErrorDivElem = this.elems.iframeContainer.querySelector('.js-worldlineop-generic-error');
    const client = this.client;
    const self = this;

    this.client.submitTokenization().then(function (data) {
      if (data.success) {
        worldlineopCreatePayment(data.hostedTokenizationId, self).then((result) => {
          if (result.success) {
            if (result.needRedirect) {
              window.top.location.href = result.redirectUrl;
            }
          } else {
            errorDivElem.querySelector('span').textContent = result.message;
            errorDivElem.style.display = 'block';
            client.destroy();
          }
        }).catch(() => {
          genericErrorDivElem.style.display = 'block';
          client.destroy();
        });
      } else {
        errorDivElem.querySelector('span').textContent = data.error.message;
        errorDivElem.style.display = 'block';
        client.destroy();
      }
    }).catch(() => {
      genericErrorDivElem.style.display = 'block';
      client.destroy();
    });
  };

  this.init = function () {
    this.client = new Tokenizer(
      this.urls.htp,
      this.elems.iframeContainer.querySelector('.js-worldlineop-htp').id,
      {
        hideCardholderName: false,
        validationCallback: this.validationCallback,
        storePermanently:false,
      }
    );
    this.client.initialize();
    if (this.cartDetails.cardToken !== undefined) {
      this.client.useToken(this.cartDetails.cardToken);
    }
  };

  this.validationCallback = function (result) {
    var btn = document.querySelector('.js-payment-binary:not([style*="display: none"]):not([style*="display:none"])');
    btn.querySelector('button').disabled = !result.valid;
  };

  this.payButtonClick = this.payButtonClick.bind(this);
  this.init = this.init.bind(this);
  e.addEventListener('click', this.payButtonClick, false);
};

async function worldlineopCreatePayment(hostedTokenizationId, htp) {
  const controller = htp.urls.paymentController.replace(/\amp;/g, '');

  return new Promise(function (resolve, reject) {
    const form = new FormData();

    form.append('ajax', true);
    form.append('action', 'createPayment');
    form.append('hostedTokenizationId', hostedTokenizationId);
    form.append('worldlineopTotalCartCents', htp.cartDetails.totalCents);
    form.append('worldlineopCartCurrencyCode', htp.cartDetails.currencyCode);
    form.append('ccForm[colorDepth]', screen.colorDepth);
    form.append('ccForm[javaEnabled]', navigator.javaEnabled());
    form.append('ccForm[locale]', navigator.language);
    form.append('ccForm[screenHeight]', screen.height);
    form.append('ccForm[screenWidth]', screen.width);
    form.append('ccForm[timezoneOffsetUtcMinutes]', new Date().getTimezoneOffset());
    form.append('token', htp.cartDetails.customerToken);

    fetch(controller, {
      body: form,
      method: 'post',
    }).then((response) => {
      resolve(response.json());
    }).catch((err) => {
      reject(err);
    });
  });
}
