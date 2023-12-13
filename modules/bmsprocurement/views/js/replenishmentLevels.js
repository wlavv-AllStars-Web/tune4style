/**
 * 2007-2022 Boostmyshop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2022 Boostmyshop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

function toggleTextboxVisibilityFromCheckbox(checkbox)
{
    var textboxId = $(checkbox).attr("data-textbox-id");
    if (checkbox.checked)
        $("#" + textboxId).hide();
    else
        $("#" + textboxId).show();
}

function saveReplenishmentSetting(control)
{
    var value = $(control).val();
    if ($(control).is(":checkbox"))
        value = (control.checked ? 1 : 0);

    $.ajax({
        type: 'POST',
        async: false,
        url: ajaxSaveReplenishmentLevelUrl,
        data: {
            'method': 'saveField',
            'ajax': '1',
            'id_product': ( $(control).attr("data-product-id") ? $(control).attr("data-product-id") : 0),
            'id_attribute': ( $(control).attr("data-attribute-id") ? $(control).attr("data-attribute-id") : 0 ),
            'value': value,
            'field': ( $(control).attr("data-field") ? $(control).attr("data-field") : '')
        },
        dataType: 'json',
        success: function(data) {
            console.log(data)
        },
        error: function(data)
        {
            alert('An error occured during replenishment save');
        }
    });
}