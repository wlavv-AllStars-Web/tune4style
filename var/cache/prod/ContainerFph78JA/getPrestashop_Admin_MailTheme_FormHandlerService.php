<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.admin.mail_theme.form_handler' shared service.

return $this->services['prestashop.admin.mail_theme.form_handler'] = new \PrestaShop\PrestaShop\Core\Form\Handler(($this->services['form.factory'] ?? $this->load('getForm_FactoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? $this->getHookDispatcherService()), ($this->services['prestashop.admin.mail_theme.form_data_provider'] ?? $this->load('getPrestashop_Admin_MailTheme_FormDataProviderService.php')), 'PrestaShopBundle\\Form\\Admin\\Improve\\Design\\MailTheme\\MailThemeConfigurationType', 'MailTheme');