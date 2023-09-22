<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController' shared service.

$a = new \League\OAuth2\Server\AuthorizationServer(new \PrestaShopBundle\Security\OAuth2\Repository\ClientRepository(($this->privates['security.user.provider.concrete.oauth2'] ?? ($this->privates['security.user.provider.concrete.oauth2'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider([]))), ($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php'))), ($this->privates['PrestaShopBundle\\Security\\OAuth2\\Repository\\AccessTokenRepository'] ?? ($this->privates['PrestaShopBundle\\Security\\OAuth2\\Repository\\AccessTokenRepository'] = new \PrestaShopBundle\Security\OAuth2\Repository\AccessTokenRepository())), new \PrestaShopBundle\Security\OAuth2\Repository\NullScopeRepository(), new \League\OAuth2\Server\CryptKey('-----BEGIN PRIVATE KEY-----
$a->enableGrantType(new \League\OAuth2\Server\Grant\ClientCredentialsGrant());

return $this->services['PrestaShopBundle\\Controller\\Api\\OAuth2\\AccessTokenController'] = new \PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController($a, ($this->privates['Symfony\\Bridge\\PsrHttpMessage\\Factory\\PsrHttpFactory'] ?? $this->load('getPsrHttpFactoryService.php')), new \Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory(), ($this->privates['Nyholm\\Psr7\\Factory\\Psr17Factory'] ?? ($this->privates['Nyholm\\Psr7\\Factory\\Psr17Factory'] = new \Nyholm\Psr7\Factory\Psr17Factory())));