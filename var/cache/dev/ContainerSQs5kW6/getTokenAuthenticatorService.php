<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShop\PrestaShop\Core\Security\TokenAuthenticator' shared service.

return $this->privates['PrestaShop\\PrestaShop\\Core\\Security\\TokenAuthenticator'] = new \PrestaShop\PrestaShop\Core\Security\TokenAuthenticator(new \PrestaShopBundle\Security\OAuth2\ResourceServer(new \League\OAuth2\Server\ResourceServer(($this->privates['PrestaShopBundle\\Security\\OAuth2\\Repository\\AccessTokenRepository'] ?? ($this->privates['PrestaShopBundle\\Security\\OAuth2\\Repository\\AccessTokenRepository'] = new \PrestaShopBundle\Security\OAuth2\Repository\AccessTokenRepository())), new \League\OAuth2\Server\CryptKey('-----BEGIN PUBLIC KEY-----'."\n".'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAwAfxxq2mfT6J6CMUIaS/'."\n".'CRz5YbTf2thQW1qyGA7ovkqij/n2Q9Sz6tlGjaF6Q7NtGf2Kp3HcjxPsKlHCFNwj'."\n".'zGi4Df0F+6UqJmkNRWHFaBMaV3Db7rkGxtx8UWfREHOHKN5Kk/U1eJOa640emQr8'."\n".'KqVsQiJ2OK2o6ed7SRnxyjFXOjNRiYG5ZbNOY/5mtfmlS4NdyTvYYw82kDTtqpLf'."\n".'9Asfzcsd7WJtARlhnaak2Eh51fl0bH2GETUkK957L2MdKR6ZRszmduaqPXFIhviZ'."\n".'PGnK+u15LOPrlI0e2psyqVrNubtGCAnMNEDeKctLr/UGc+sSyMovtPCn3aK+3ECT'."\n".'kwIDAQAB'."\n".'-----END PUBLIC KEY-----'."\n".'')), ($this->privates['security.user.provider.concrete.oauth2'] ?? ($this->privates['security.user.provider.concrete.oauth2'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider([])))), ($this->privates['Symfony\\Bridge\\PsrHttpMessage\\Factory\\PsrHttpFactory'] ?? $this->load('getPsrHttpFactoryService.php')));