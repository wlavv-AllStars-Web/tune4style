<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController' shared service.

$a = new \League\OAuth2\Server\AuthorizationServer(new \PrestaShopBundle\Security\OAuth2\Repository\ClientRepository(($this->privates['security.user.provider.concrete.oauth2'] ?? ($this->privates['security.user.provider.concrete.oauth2'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider([]))), ($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php'))), new \PrestaShopBundle\Security\OAuth2\Repository\AccessTokenRepository(), new \PrestaShopBundle\Security\OAuth2\Repository\NullScopeRepository(), new \League\OAuth2\Server\CryptKey('-----BEGIN PRIVATE KEY-----'."\n".'MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQDAB/HGraZ9Pono'."\n".'IxQhpL8JHPlhtN/a2FBbWrIYDui+SqKP+fZD1LPq2UaNoXpDs20Z/YqncdyPE+wq'."\n".'UcIU3CPMaLgN/QX7pSomaQ1FYcVoExpXcNvuuQbG3HxRZ9EQc4co3kqT9TV4k5rr'."\n".'jR6ZCvwqpWxCInY4rajp53tJGfHKMVc6M1GJgblls05j/ma1+aVLg13JO9hjDzaQ'."\n".'NO2qkt/0Cx/Nyx3tYm0BGWGdpqTYSHnV+XRsfYYRNSQr3nsvYx0pHplGzOZ25qo9'."\n".'cUiG+Jk8acr67Xks4+uUjR7amzKpWs25u0YICcw0QN4py0uv9QZz6xLIyi+08Kfd'."\n".'or7cQJOTAgMBAAECggEANwrP6XPi0el4G/raDV6sh08vyCrRM2hneBgCDlVPryOz'."\n".'fvNV/FFelMVcrMIJSpiGgDmlYaOIZdZ/Dg5LRDFpbXDiuNe6vEu2TjY0YJvKuq8n'."\n".'EMM/tyh/4cZXN/o6+a0zo6o71Dcn8XzVngjgKVv1tb+ezUIVgt98GDeKpgRywtJs'."\n".'VHAFX33QdLQ4aqOWRXSulHzPb+ircztw3rFpChVLyIsd82ZDOXcZ1QegLJ1f468P'."\n".'pqlFvYSFGZtjTdwmndq1J2ojDwUcEWIK8K11uq1jXDMDFkznMQ7Q9o2PRo9nGbDo'."\n".'NiMs7Llf6diOsLtMtdocqF+XvrN/9gjSoTqYO+ibQQKBgQDtx3TrXh1Tt0PqJfHx'."\n".'JAu1fQ0ZHwcmfL0NESmIQbldVCYuIbalXoXIMPa6VS+k9Q/XoKHbDb6k42wIwTUC'."\n".'E7C94z7bHxRL+/cVdW9/hcIxIgm8MN6guBk0XVy2I8WSPqhvEqPAdPd/4nbtkj5m'."\n".'EgVMI6zYHh0IlypBENyJa+zaoQKBgQDOvwqi2PfWjd5uFWkFaXEM293T3uBOXOYT'."\n".'72OZeZt91GrmRbDQtP0BiRLCsvkVpolxRj3nsUXJj1rKXkEhpPBaCcVhR2dWz547'."\n".'W906yDuSNIkkWCf7d4Dyllh2uNeX+tbB7mo+BArqr625BvHmn5L/JC5BcwtCDSbk'."\n".'QfGe8+SVswKBgDnFc0fYZwG3Dj4ul/kBzAJ9bphC7KbSOdCZ8eBUL6hYUKp2sHy/'."\n".'WXvJQbkGB3xpuj6mnYyuazp+svnxj2KAzDlmpBfzFihcAK1rCfsO0Z7EaV8a9IxS'."\n".'DnWllWf/ivo8VQofmj+ha5zbtg+Er7p2+GiGZnFf56f1qmOCqEKPQU3hAoGARZqr'."\n".'ygeh6On6aLVslhXZqaqcFCiE+9zq2OtPbOw0HTjWhJAR5zIHu+yaFFKM6W0X+Lrd'."\n".'PJPCGwnYVylEZD9Ta/y+JvITKHbdnr5ezNt8ssxdH49OZqrlDsbvIYk5jEE27DOI'."\n".'MTjLNBfRNOnRpwMyShO0PvSsZaBn55EL96fE3WECgYADbVnOwbxyxK+kmiQtc6K2'."\n".'wri2PXXEu1RKfTx0dbYUaKZDfBdXv591J3LZAs9Hwa5dF6ea/ecsO2prTKfXM3WH'."\n".'J3xGTMBskxSqWAAzrZOITdWCLEZGAkPegHyKBJ4T0U3CNo9zjO6ZB6nmUeLifPlu'."\n".'bRfnqDu8q7peBK+PAPbMEA=='."\n".'-----END PRIVATE KEY-----'."\n".''), 'def00000a22ea83ca9b3a1c1b78398a40c615053c929c9116877a0181151bb0910d6ecae837a2549b709993b55f0b4cc7ccdb666a2eb9afe6482bf31e99572a38204f9e5');
$a->enableGrantType(new \League\OAuth2\Server\Grant\ClientCredentialsGrant());
$b = new \Nyholm\Psr7\Factory\Psr17Factory();

return $this->services['PrestaShopBundle\\Controller\\Api\\OAuth2\\AccessTokenController'] = new \PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController($a, new \Symfony\Bridge\PsrHttpMessage\Factory\PsrHttpFactory($b, $b, $b, $b), new \Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory(), $b);
