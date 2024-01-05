<?php
/**
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

namespace WorldlineOP\PrestaShop\Presenter;

use OnlinePayments\Sdk\Domain\WebhooksEvent;
use WorldlineOP\PrestaShop\Configuration\Entity\Settings;
use WorldlineOP\PrestaShop\Logger\LoggerFactory;

/**
 * Class TransactionPresenter
 * @package WorldlineOP\PrestaShop\Presenter
 */
class WebhookEventPresenter implements PresenterInterface
{
    const EVENTS_PAYMENT_AUTHORIZED = [
        'payment.pending_approval',
        'payment.pending_completion',
        'payment.pending_capture',
    ];
    const EVENTS_PAYMENT_ACCEPTED = ['payment.captured'];
    const EVENTS_PAYMENT_PENDING = ['payment.authorization_requested'];
    const EVENTS_REFUNDED = ['payment.refunded'];
    const EVENTS_PAYMENT_CANCELLED = ['payment.cancelled'];
    const EVENTS_PAYMENT_REJECTED = ['payment.rejected'];

    /** @var GetPaymentPresenter $paymentPresenter */
    private $paymentPresenter;

    /** @var GetRefundPresenter $refundPresenter */
    private $refundPresenter;

    /** @var \Monolog\Logger $logger */
    private $logger;

    /**
     * WebhookEventPresenter constructor.
     * @param GetPaymentPresenter $paymentPresenter
     * @param GetRefundPresenter  $refundPresenter
     * @param LoggerFactory       $loggerFactory
     */
    public function __construct(
        GetPaymentPresenter $paymentPresenter,
        GetRefundPresenter $refundPresenter,
        LoggerFactory $loggerFactory
    ) {
        $this->paymentPresenter = $paymentPresenter;
        $this->refundPresenter = $refundPresenter;
        $this->logger = $loggerFactory->setChannel('Webhooks');
    }

    /**
     * @param WebhooksEvent $event
     * @param Settings $settings
     */
    public function handlePending($event, $settings)
    {
        $paymentEvents = array_merge(
            self::EVENTS_PAYMENT_AUTHORIZED,
            self::EVENTS_PAYMENT_ACCEPTED,
            self::EVENTS_PAYMENT_REJECTED
        );

        if (in_array($event->getType(), $paymentEvents)) {
            $this->logger->debug('Sleeeeep', ['time' => $settings->advancedSettings->paymentSettings->safetyDelay]);
            sleep($settings->advancedSettings->paymentSettings->safetyDelay);
        }
    }

    /**
     * @param WebhooksEvent|bool $event
     * @param int|bool           $idShop
     * @return TransactionPresented
     * @throws \PrestaShopException
     * @throws \PrestaShop\Decimal\Exception\DivisionByZeroException
     */
    public function present($event = false, $idShop = false)
    {
        $paymentEvents = array_merge(
            self::EVENTS_PAYMENT_PENDING,
            self::EVENTS_PAYMENT_AUTHORIZED,
            self::EVENTS_PAYMENT_ACCEPTED,
            self::EVENTS_PAYMENT_CANCELLED,
            self::EVENTS_PAYMENT_REJECTED
        );
        if (in_array($event->getType(), self::EVENTS_REFUNDED)) {
            $presentedData = $this->refundPresenter->present($event->getRefund(), $idShop);
        } elseif (in_array($event->getType(), $paymentEvents)) {
            $presentedData = $this->paymentPresenter->present($event->getPayment(), $idShop);
        } else {
            $presentedData = new TransactionPresented();
        }
        $this->logger->debug('Returning data', ['data' => $presentedData]);

        return $presentedData;
    }
}
