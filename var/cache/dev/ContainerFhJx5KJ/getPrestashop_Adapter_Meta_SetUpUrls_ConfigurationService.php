<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.meta.set_up_urls.configuration' shared service.

return $this->services['prestashop.adapter.meta.set_up_urls.configuration'] = new \PrestaShop\PrestaShop\Adapter\Meta\SetUpUrlsDataConfiguration(($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())), ($this->services['prestashop.adapter.shop.context'] ?? ($this->services['prestashop.adapter.shop.context'] = new \PrestaShop\PrestaShop\Adapter\Shop\Context())), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Feature\\MultistoreFeature'] ?? $this->getMultistoreFeatureService()), ($this->services['prestashop.adapter.file.htaccess_file_generator'] ?? $this->load('getPrestashop_Adapter_File_HtaccessFileGeneratorService.php')), ($this->services['translator'] ?? $this->getTranslatorService()));