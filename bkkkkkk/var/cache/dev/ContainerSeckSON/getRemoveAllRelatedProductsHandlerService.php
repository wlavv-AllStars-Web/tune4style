<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\PrestaShop\Adapter\Product\CommandHandler\RemoveAllRelatedProductsHandler' shared service.

return $this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\CommandHandler\\RemoveAllRelatedProductsHandler'] = new \PrestaShop\PrestaShop\Adapter\Product\CommandHandler\RemoveAllRelatedProductsHandler(($this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Update\\RelatedProductsUpdater'] ?? $this->load('getRelatedProductsUpdaterService.php')));
