<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.customer.query_handler.get_customer_for_viewing' shared service.

return $this->services['prestashop.adapter.customer.query_handler.get_customer_for_viewing'] = new \PrestaShop\PrestaShop\Adapter\Customer\QueryHandler\GetCustomerForViewingHandler(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->language->id, ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->link, ($this->services['prestashop.core.localization.locale.context_locale'] ?? $this->load('getPrestashop_Core_Localization_Locale_ContextLocaleService.php')));
