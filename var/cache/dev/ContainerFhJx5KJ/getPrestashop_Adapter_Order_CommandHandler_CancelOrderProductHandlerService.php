<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.order.command_handler.cancel_order_product_handler' shared service.

return $this->services['prestashop.adapter.order.command_handler.cancel_order_product_handler'] = new \PrestaShop\PrestaShop\Adapter\Order\CommandHandler\CancelOrderProductHandler(($this->services['prestashop.adapter.order.product_quantity.updater'] ?? $this->load('getPrestashop_Adapter_Order_ProductQuantity_UpdaterService.php')), ($this->services['logger'] ?? $this->getLoggerService()), ($this->services['translator'] ?? $this->getTranslatorService()));