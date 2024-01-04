<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final
 */
class FrontContainer extends \PrestaShop\PrestaShop\Adapter\Container\LegacyContainer
{
    private $parameters = [];
    private $getService;

    public function __construct()
    {
        $this->getService = \Closure::fromCallable([$this, 'getService']);
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->syntheticIds = [
            'employee' => true,
            'shop' => true,
        ];
        $this->methodMap = [
            'PrestaShop\\PrestaShop\\Adapter\\Configuration' => 'getConfigurationService',
            'PrestaShop\\PrestaShop\\Adapter\\ContextStateManager' => 'getContextStateManagerService',
            'PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider' => 'getCurrencyDataProviderService',
            'PrestaShop\\PrestaShop\\Adapter\\LegacyContext' => 'getLegacyContextService',
            'PrestaShop\\PrestaShop\\Adapter\\Tools' => 'getToolsService',
            'PrestaShop\\PrestaShop\\Core\\Localization\\Locale\\Repository' => 'getRepositoryService',
            'annotation_reader' => 'getAnnotationReaderService',
            'array' => 'getArrayService',
            'configuration' => 'getConfiguration2Service',
            'container.env_var_processors_locator' => 'getContainer_EnvVarProcessorsLocatorService',
            'context' => 'getContextService',
            'db' => 'getDbService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'hashing' => 'getHashingService',
            'prestashop.adapter.data_provider.country' => 'getPrestashop_Adapter_DataProvider_CountryService',
            'prestashop.adapter.environment' => 'getPrestashop_Adapter_EnvironmentService',
            'prestashop.adapter.module.repository.module_repository' => 'getPrestashop_Adapter_Module_Repository_ModuleRepositoryService',
            'prestashop.adapter.validate' => 'getPrestashop_Adapter_ValidateService',
            'prestashop.core.circuit_breaker.advanced_factory' => 'getPrestashop_Core_CircuitBreaker_AdvancedFactoryService',
            'prestashop.core.circuit_breaker.cache' => 'getPrestashop_Core_CircuitBreaker_CacheService',
            'prestashop.core.circuit_breaker.doctrine_cache' => 'getPrestashop_Core_CircuitBreaker_DoctrineCacheService',
            'prestashop.core.circuit_breaker.storage' => 'getPrestashop_Core_CircuitBreaker_StorageService',
            'prestashop.core.filter.front_end_object.cart' => 'getPrestashop_Core_Filter_FrontEndObject_CartService',
            'prestashop.core.filter.front_end_object.configuration' => 'getPrestashop_Core_Filter_FrontEndObject_ConfigurationService',
            'prestashop.core.filter.front_end_object.customer' => 'getPrestashop_Core_Filter_FrontEndObject_CustomerService',
            'prestashop.core.filter.front_end_object.main' => 'getPrestashop_Core_Filter_FrontEndObject_MainService',
            'prestashop.core.filter.front_end_object.product' => 'getPrestashop_Core_Filter_FrontEndObject_ProductService',
            'prestashop.core.filter.front_end_object.product_collection' => 'getPrestashop_Core_Filter_FrontEndObject_ProductCollectionService',
            'prestashop.core.filter.front_end_object.search_result_product' => 'getPrestashop_Core_Filter_FrontEndObject_SearchResultProductService',
            'prestashop.core.filter.front_end_object.search_result_product_collection' => 'getPrestashop_Core_Filter_FrontEndObject_SearchResultProductCollectionService',
            'prestashop.core.filter.front_end_object.shop' => 'getPrestashop_Core_Filter_FrontEndObject_ShopService',
            'prestashop.core.localization.cache.adapter' => 'getPrestashop_Core_Localization_Cache_AdapterService',
            'prestashop.core.localization.cldr.cache.adapter' => 'getPrestashop_Core_Localization_Cldr_Cache_AdapterService',
            'prestashop.core.localization.cldr.datalayer.locale_cache' => 'getPrestashop_Core_Localization_Cldr_Datalayer_LocaleCacheService',
            'prestashop.core.localization.cldr.datalayer.locale_reference' => 'getPrestashop_Core_Localization_Cldr_Datalayer_LocaleReferenceService',
            'prestashop.core.localization.cldr.locale_data_source' => 'getPrestashop_Core_Localization_Cldr_LocaleDataSourceService',
            'prestashop.core.localization.cldr.locale_repository' => 'getPrestashop_Core_Localization_Cldr_LocaleRepositoryService',
            'prestashop.core.localization.cldr.reader' => 'getPrestashop_Core_Localization_Cldr_ReaderService',
            'prestashop.core.localization.currency.datasource' => 'getPrestashop_Core_Localization_Currency_DatasourceService',
            'prestashop.core.localization.currency.middleware.cache' => 'getPrestashop_Core_Localization_Currency_Middleware_CacheService',
            'prestashop.core.localization.currency.middleware.database' => 'getPrestashop_Core_Localization_Currency_Middleware_DatabaseService',
            'prestashop.core.localization.currency.middleware.installed' => 'getPrestashop_Core_Localization_Currency_Middleware_InstalledService',
            'prestashop.core.localization.currency.middleware.reference' => 'getPrestashop_Core_Localization_Currency_Middleware_ReferenceService',
            'prestashop.core.localization.currency.repository' => 'getPrestashop_Core_Localization_Currency_RepositoryService',
            'prestashop.core.localization.locale.context_locale' => 'getPrestashop_Core_Localization_Locale_ContextLocaleService',
            'prestashop.core.string.character_cleaner' => 'getPrestashop_Core_String_CharacterCleanerService',
            'prestashop.database.naming_strategy' => 'getPrestashop_Database_NamingStrategyService',
            'prestashop.translation.translator_language_loader' => 'getPrestashop_Translation_TranslatorLanguageLoaderService',
            'product_comment_criterion_repository' => 'getProductCommentCriterionRepositoryService',
            'product_comment_repository' => 'getProductCommentRepositoryService',
            'worldlineop.checksum.address' => 'getWorldlineop_Checksum_AddressService',
            'worldlineop.checksum.cart' => 'getWorldlineop_Checksum_CartService',
            'worldlineop.context' => 'getWorldlineop_ContextService',
            'worldlineop.event.presenter' => 'getWorldlineop_Event_PresenterService',
            'worldlineop.getpayment.presenter' => 'getWorldlineop_Getpayment_PresenterService',
            'worldlineop.getrefund.presenter' => 'getWorldlineop_Getrefund_PresenterService',
            'worldlineop.hosted_payment_request.builder' => 'getWorldlineop_HostedPaymentRequest_BuilderService',
            'worldlineop.hosted_payment_request.director' => 'getWorldlineop_HostedPaymentRequest_DirectorService',
            'worldlineop.installer' => 'getWorldlineop_InstallerService',
            'worldlineop.logger' => 'getWorldlineop_LoggerService',
            'worldlineop.logger.factory' => 'getWorldlineop_Logger_FactoryService',
            'worldlineop.module' => 'getWorldlineop_ModuleService',
            'worldlineop.payment.presenter' => 'getWorldlineop_Payment_PresenterService',
            'worldlineop.payment_request.builder' => 'getWorldlineop_PaymentRequest_BuilderService',
            'worldlineop.payment_request.director' => 'getWorldlineop_PaymentRequest_DirectorService',
            'worldlineop.processor.transaction' => 'getWorldlineop_Processor_TransactionService',
            'worldlineop.repository.created_payment' => 'getWorldlineop_Repository_CreatedPaymentService',
            'worldlineop.repository.hosted_checkout' => 'getWorldlineop_Repository_HostedCheckoutService',
            'worldlineop.repository.token' => 'getWorldlineop_Repository_TokenService',
            'worldlineop.repository.transaction' => 'getWorldlineop_Repository_TransactionService',
            'worldlineop.sdk.client' => 'getWorldlineop_Sdk_ClientService',
            'worldlineop.sdk.client.factory' => 'getWorldlineop_Sdk_Client_FactoryService',
            'worldlineop.sdk.communicator' => 'getWorldlineop_Sdk_CommunicatorService',
            'worldlineop.sdk.communicator_configuration.factory' => 'getWorldlineop_Sdk_CommunicatorConfiguration_FactoryService',
            'worldlineop.sdk.connection' => 'getWorldlineop_Sdk_ConnectionService',
            'worldlineop.settings' => 'getWorldlineop_SettingsService',
            'worldlineop.settings.account.resolver' => 'getWorldlineop_Settings_Account_ResolverService',
            'worldlineop.settings.account.updater' => 'getWorldlineop_Settings_Account_UpdaterService',
            'worldlineop.settings.account.validation' => 'getWorldlineop_Settings_Account_ValidationService',
            'worldlineop.settings.advanced_settings.resolver' => 'getWorldlineop_Settings_AdvancedSettings_ResolverService',
            'worldlineop.settings.advanced_settings.updater' => 'getWorldlineop_Settings_AdvancedSettings_UpdaterService',
            'worldlineop.settings.advanced_settings.validation' => 'getWorldlineop_Settings_AdvancedSettings_ValidationService',
            'worldlineop.settings.factory' => 'getWorldlineop_Settings_FactoryService',
            'worldlineop.settings.get_products' => 'getWorldlineop_Settings_GetProductsService',
            'worldlineop.settings.loader' => 'getWorldlineop_Settings_LoaderService',
            'worldlineop.settings.payment_methods.resolver' => 'getWorldlineop_Settings_PaymentMethods_ResolverService',
            'worldlineop.settings.payment_methods.updater' => 'getWorldlineop_Settings_PaymentMethods_UpdaterService',
            'worldlineop.settings.payment_methods.validation' => 'getWorldlineop_Settings_PaymentMethods_ValidationService',
            'worldlineop.settings.presenter' => 'getWorldlineop_Settings_PresenterService',
            'worldlineop.settings.serializer' => 'getWorldlineop_Settings_SerializerService',
            'worldlineop.shopping_cart.presenter' => 'getWorldlineop_ShoppingCart_PresenterService',
            'worldlineop.status.manager' => 'getWorldlineop_Status_ManagerService',
            'worldlineop.storedcards.presenter' => 'getWorldlineop_Storedcards_PresenterService',
            'worldlineop.tab.manager' => 'getWorldlineop_Tab_ManagerService',
            'prestashop.adapter.tools' => 'getPrestashop_Adapter_ToolsService',
        ];
        $this->aliases = [
            'PrestaShop\\PrestaShop\\Core\\Currency\\CurrencyDataProviderInterface' => 'PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider',
            'PrestaShop\\PrestaShop\\Core\\Localization\\LocaleInterface' => 'prestashop.core.localization.locale.context_locale',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'prestashop.adapter.context_state_manager' => 'PrestaShop\\PrestaShop\\Adapter\\ContextStateManager',
            'prestashop.adapter.data_provider.currency' => 'PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider',
            'prestashop.adapter.legacy.configuration' => 'PrestaShop\\PrestaShop\\Adapter\\Configuration',
            'prestashop.adapter.legacy.context' => 'PrestaShop\\PrestaShop\\Adapter\\LegacyContext',
            'prestashop.core.localization.cldr.datalayer.top_layer' => 'prestashop.core.localization.cldr.datalayer.locale_cache',
            'prestashop.core.localization.currency.middleware.top_layer' => 'prestashop.core.localization.currency.middleware.cache',
            'prestashop.core.localization.locale.repository' => 'PrestaShop\\PrestaShop\\Core\\Localization\\Locale\\Repository',
        ];
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return [
            '.service_locator.zH65KBq' => true,
            'Doctrine\\Bundle\\DoctrineBundle\\Controller\\ProfilerController' => true,
            'Doctrine\\Bundle\\DoctrineBundle\\Dbal\\ManagerRegistryAwareConnectionProvider' => true,
            'Doctrine\\Common\\Persistence\\ManagerRegistry' => true,
            'Doctrine\\DBAL\\Connection' => true,
            'Doctrine\\DBAL\\Connection $defaultConnection' => true,
            'Doctrine\\DBAL\\Driver\\Connection' => true,
            'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand' => true,
            'Doctrine\\ORM\\EntityManagerInterface' => true,
            'Doctrine\\ORM\\EntityManagerInterface $defaultEntityManager' => true,
            'Doctrine\\Persistence\\ManagerRegistry' => true,
            'PrestaShopBundle\\DependencyInjection\\CacheAdapterFactory' => true,
            'PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor' => true,
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
            'data_collector.doctrine' => true,
            'doctrine.cache_clear_metadata_command' => true,
            'doctrine.cache_clear_query_cache_command' => true,
            'doctrine.cache_clear_result_command' => true,
            'doctrine.cache_collection_region_command' => true,
            'doctrine.clear_entity_region_command' => true,
            'doctrine.clear_query_region_command' => true,
            'doctrine.database_create_command' => true,
            'doctrine.database_drop_command' => true,
            'doctrine.database_import_command' => true,
            'doctrine.dbal.connection' => true,
            'doctrine.dbal.connection.configuration' => true,
            'doctrine.dbal.connection.event_manager' => true,
            'doctrine.dbal.connection_factory' => true,
            'doctrine.dbal.default_connection.configuration' => true,
            'doctrine.dbal.default_connection.event_manager' => true,
            'doctrine.dbal.event_manager' => true,
            'doctrine.dbal.logger' => true,
            'doctrine.dbal.logger.backtrace' => true,
            'doctrine.dbal.logger.chain' => true,
            'doctrine.dbal.logger.profiling' => true,
            'doctrine.dbal.schema_asset_filter_manager' => true,
            'doctrine.dbal.well_known_schema_asset_filter' => true,
            'doctrine.ensure_production_settings_command' => true,
            'doctrine.mapping_convert_command' => true,
            'doctrine.mapping_import_command' => true,
            'doctrine.mapping_info_command' => true,
            'doctrine.orm.configuration' => true,
            'doctrine.orm.container_repository_factory' => true,
            'doctrine.orm.default_annotation_metadata_driver' => true,
            'doctrine.orm.default_configuration' => true,
            'doctrine.orm.default_entity_listener_resolver' => true,
            'doctrine.orm.default_entity_manager.event_manager' => true,
            'doctrine.orm.default_entity_manager.property_info_extractor' => true,
            'doctrine.orm.default_entity_manager.validator_loader' => true,
            'doctrine.orm.default_listeners.attach_entity_listeners' => true,
            'doctrine.orm.default_manager_configurator' => true,
            'doctrine.orm.default_metadata_cache' => true,
            'doctrine.orm.default_metadata_driver' => true,
            'doctrine.orm.default_query_cache' => true,
            'doctrine.orm.default_result_cache' => true,
            'doctrine.orm.entity_manager.abstract' => true,
            'doctrine.orm.listeners.resolve_target_entity' => true,
            'doctrine.orm.manager_configurator.abstract' => true,
            'doctrine.orm.messenger.event_subscriber.doctrine_clear_entity_manager' => true,
            'doctrine.orm.metadata.annotation_reader' => true,
            'doctrine.orm.naming_strategy.default' => true,
            'doctrine.orm.naming_strategy.underscore' => true,
            'doctrine.orm.naming_strategy.underscore_number_aware' => true,
            'doctrine.orm.proxy_cache_warmer' => true,
            'doctrine.orm.quote_strategy.ansi' => true,
            'doctrine.orm.quote_strategy.default' => true,
            'doctrine.orm.security.user.provider' => true,
            'doctrine.orm.validator.unique' => true,
            'doctrine.orm.validator_initializer' => true,
            'doctrine.query_dql_command' => true,
            'doctrine.query_sql_command' => true,
            'doctrine.schema_create_command' => true,
            'doctrine.schema_drop_command' => true,
            'doctrine.schema_update_command' => true,
            'doctrine.schema_validate_command' => true,
            'doctrine.twig.doctrine_extension' => true,
            'form.type.entity' => true,
            'form.type_guesser.doctrine' => true,
            'messenger.middleware.doctrine_close_connection' => true,
            'messenger.middleware.doctrine_open_transaction_logger' => true,
            'messenger.middleware.doctrine_ping_connection' => true,
            'messenger.middleware.doctrine_transaction' => true,
            'messenger.transport.doctrine.factory' => true,
        ];
    }

    /**
     * Gets the public 'PrestaShop\PrestaShop\Adapter\Configuration' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Configuration
     */
    protected function getConfigurationService()
    {
        return $this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration();
    }

    /**
     * Gets the public 'PrestaShop\PrestaShop\Adapter\ContextStateManager' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\ContextStateManager
     */
    protected function getContextStateManagerService()
    {
        return $this->services['PrestaShop\\PrestaShop\\Adapter\\ContextStateManager'] = new \PrestaShop\PrestaShop\Adapter\ContextStateManager(($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService()));
    }

    /**
     * Gets the public 'PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider
     */
    protected function getCurrencyDataProviderService()
    {
        return $this->services['PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider'] = new \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider(($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())), ((($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->shop) ? (($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->shop->id) : (null)));
    }

    /**
     * Gets the public 'PrestaShop\PrestaShop\Adapter\LegacyContext' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\LegacyContext
     */
    protected function getLegacyContextService()
    {
        return $this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] = new \PrestaShop\PrestaShop\Adapter\LegacyContext('/mails/themes', ($this->services['PrestaShop\\PrestaShop\\Adapter\\Tools'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Tools'] = new \PrestaShop\PrestaShop\Adapter\Tools())));
    }

    /**
     * Gets the public 'PrestaShop\PrestaShop\Adapter\Tools' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Tools
     */
    protected function getToolsService()
    {
        return $this->services['PrestaShop\\PrestaShop\\Adapter\\Tools'] = new \PrestaShop\PrestaShop\Adapter\Tools();
    }

    /**
     * Gets the public 'PrestaShop\PrestaShop\Core\Localization\Locale\Repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Locale\Repository
     */
    protected function getRepositoryService()
    {
        return $this->services['PrestaShop\\PrestaShop\\Core\\Localization\\Locale\\Repository'] = new \PrestaShop\PrestaShop\Core\Localization\Locale\Repository(($this->services['prestashop.core.localization.cldr.locale_repository'] ?? $this->getPrestashop_Core_Localization_Cldr_LocaleRepositoryService()), ($this->services['prestashop.core.localization.currency.repository'] ?? $this->getPrestashop_Core_Localization_Currency_RepositoryService()));
    }

    /**
     * Gets the public 'annotation_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\AnnotationReader();
    }

    /**
     * Gets the public 'array' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getArrayService()
    {
        return $this->services['array'] = (new \PrestaShopBundle\DependencyInjection\CacheAdapterFactory())->getCacheAdapter('array');
    }

    /**
     * Gets the public 'configuration' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Configuration
     */
    protected function getConfiguration2Service()
    {
        return $this->services['configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration();
    }

    /**
     * Gets the public 'container.env_var_processors_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getContainer_EnvVarProcessorsLocatorService()
    {
        return $this->services['container.env_var_processors_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'const' => ['privates', 'PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor', 'getRuntimeConstEnvVarProcessorService', false],
        ], [
            'const' => '?',
        ]);
    }

    /**
     * Gets the public 'context' shared service.
     *
     * @return \Context
     */
    protected function getContextService()
    {
        return $this->services['context'] = \Context::getContext();
    }

    /**
     * Gets the public 'db' shared service.
     *
     * @return \Db
     */
    protected function getDbService()
    {
        return $this->services['db'] = \Db::getInstance();
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /**
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        return $this->services['doctrine.dbal.default_connection'] = (new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]))->createConnection(['driver' => 'pdo_mysql', 'host' => '127.0.0.1', 'port' => '3307', 'dbname' => 'asw161123_tune4style', 'user' => 'root', 'password' => '', 'charset' => 'utf8mb4', 'driverOptions' => [1002 => 'SET sql_mode=(SELECT REPLACE(@@sql_mode,\'ONLY_FULL_GROUP_BY\',\'\'))', 1013 => $this->getEnv('const:runtime:_PS_ALLOW_MULTI_STATEMENTS_QUERIES_')], 'defaultTableOptions' => []], new \Doctrine\DBAL\Configuration(), new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this), ['enum' => 'string']);
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        $a = new \Doctrine\ORM\Configuration();

        $b = ($this->services['array'] ?? $this->getArrayService());
        $c = new \Doctrine\Persistence\Mapping\Driver\MappingDriverChain();

        $d = ($this->services['annotation_reader'] ?? ($this->services['annotation_reader'] = new \Doctrine\Common\Annotations\AnnotationReader()));
        $e = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($d, [0 => '/opt/lampp/htdocs/tune4style/modules/productcomments/src/Entity']);
        $e->addExcludePaths([0 => '/opt/lampp/htdocs/tune4style/modules/productcomments/src/Entity/index.php']);

        $c->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($d, [0 => '/opt/lampp/htdocs/tune4style/src/PrestaShopBundle/Entity']), 'PrestaShop');
        $c->addDriver($e, 'PrestaShop\\Module\\ProductComment\\Entity');

        $a->setEntityNamespaces(['PrestaShopBundle\\Entity' => 'PrestaShop']);
        $a->setMetadataCache($b);
        $a->setQueryCache($b);
        $a->setResultCache($b);
        $a->setMetadataDriverImpl($c);
        $a->setProxyDir('/opt/lampp/htdocs/tune4style/var/cache/prod//doctrine/orm/Proxies');
        $a->setProxyNamespace('Proxies');
        $a->setAutoGenerateProxyClasses(false);
        $a->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $a->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $a->setNamingStrategy(($this->services['prestashop.database.naming_strategy'] ?? ($this->services['prestashop.database.naming_strategy'] = new \PrestaShopBundle\Service\Database\DoctrineNamingStrategy('ps_'))));
        $a->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $a->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this));
        $a->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\ServiceLocator([])));
        $a->addCustomStringFunction('regexp', 'DoctrineExtensions\\Query\\Mysql\\Regexp');
        $a->addEntityNamespace('Moduleproductcomments', 'PrestaShop\\Module\\ProductComment\\Entity');

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), $a);

        (new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'hashing' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Crypto\Hashing
     */
    protected function getHashingService()
    {
        return $this->services['hashing'] = new \PrestaShop\PrestaShop\Core\Crypto\Hashing();
    }

    /**
     * Gets the public 'prestashop.adapter.data_provider.country' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Country\CountryDataProvider
     */
    protected function getPrestashop_Adapter_DataProvider_CountryService()
    {
        return $this->services['prestashop.adapter.data_provider.country'] = new \PrestaShop\PrestaShop\Adapter\Country\CountryDataProvider();
    }

    /**
     * Gets the public 'prestashop.adapter.environment' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Environment
     */
    protected function getPrestashop_Adapter_EnvironmentService()
    {
        return $this->services['prestashop.adapter.environment'] = new \PrestaShop\PrestaShop\Adapter\Environment(false);
    }

    /**
     * Gets the public 'prestashop.adapter.module.repository.module_repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Module\Repository\ModuleRepository
     */
    protected function getPrestashop_Adapter_Module_Repository_ModuleRepositoryService()
    {
        return $this->services['prestashop.adapter.module.repository.module_repository'] = new \PrestaShop\PrestaShop\Adapter\Module\Repository\ModuleRepository('/opt/lampp/htdocs/tune4style', '/opt/lampp/htdocs/tune4style/modules/');
    }

    /**
     * Gets the public 'prestashop.adapter.validate' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Validate
     */
    protected function getPrestashop_Adapter_ValidateService()
    {
        return $this->services['prestashop.adapter.validate'] = new \PrestaShop\PrestaShop\Adapter\Validate();
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.advanced_factory' shared service.
     *
     * @return \PrestaShop\CircuitBreaker\AdvancedCircuitBreakerFactory
     */
    protected function getPrestashop_Core_CircuitBreaker_AdvancedFactoryService()
    {
        return $this->services['prestashop.core.circuit_breaker.advanced_factory'] = new \PrestaShop\CircuitBreaker\AdvancedCircuitBreakerFactory();
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.cache' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getPrestashop_Core_CircuitBreaker_CacheService()
    {
        return $this->services['prestashop.core.circuit_breaker.cache'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('', 0, (($this->services['prestashop.adapter.environment'] ?? ($this->services['prestashop.adapter.environment'] = new \PrestaShop\PrestaShop\Adapter\Environment(false)))->getCacheDir() . "/circuit_breaker"));
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.doctrine_cache' shared service.
     *
     * @return \Symfony\Component\Cache\DoctrineProvider
     */
    protected function getPrestashop_Core_CircuitBreaker_DoctrineCacheService()
    {
        return $this->services['prestashop.core.circuit_breaker.doctrine_cache'] = new \Symfony\Component\Cache\DoctrineProvider(($this->services['prestashop.core.circuit_breaker.cache'] ?? $this->getPrestashop_Core_CircuitBreaker_CacheService()));
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.storage' shared service.
     *
     * @return \PrestaShop\CircuitBreaker\Storage\DoctrineCache
     */
    protected function getPrestashop_Core_CircuitBreaker_StorageService()
    {
        return $this->services['prestashop.core.circuit_breaker.storage'] = new \PrestaShop\CircuitBreaker\Storage\DoctrineCache(($this->services['prestashop.core.circuit_breaker.doctrine_cache'] ?? $this->getPrestashop_Core_CircuitBreaker_DoctrineCacheService()));
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.cart' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\CartFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_CartService()
    {
        return $this->services['prestashop.core.filter.front_end_object.cart'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\CartFilter(($this->services['prestashop.core.filter.front_end_object.product_collection'] ?? $this->getPrestashop_Core_Filter_FrontEndObject_ProductCollectionService()));
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.configuration' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ConfigurationFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_ConfigurationService()
    {
        return $this->services['prestashop.core.filter.front_end_object.configuration'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ConfigurationFilter();
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.customer' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\CustomerFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_CustomerService()
    {
        return $this->services['prestashop.core.filter.front_end_object.customer'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\CustomerFilter();
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.main' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\MainFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_MainService()
    {
        return $this->services['prestashop.core.filter.front_end_object.main'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\MainFilter(['cart' => ($this->services['prestashop.core.filter.front_end_object.cart'] ?? $this->getPrestashop_Core_Filter_FrontEndObject_CartService()), 'customer' => ($this->services['prestashop.core.filter.front_end_object.customer'] ?? ($this->services['prestashop.core.filter.front_end_object.customer'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\CustomerFilter())), 'shop' => ($this->services['prestashop.core.filter.front_end_object.shop'] ?? ($this->services['prestashop.core.filter.front_end_object.shop'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ShopFilter())), 'configuration' => ($this->services['prestashop.core.filter.front_end_object.configuration'] ?? ($this->services['prestashop.core.filter.front_end_object.configuration'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ConfigurationFilter()))]);
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.product' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ProductFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_ProductService()
    {
        return $this->services['prestashop.core.filter.front_end_object.product'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ProductFilter();
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.product_collection' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\CollectionFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_ProductCollectionService()
    {
        $this->services['prestashop.core.filter.front_end_object.product_collection'] = $instance = new \PrestaShop\PrestaShop\Core\Filter\CollectionFilter();

        $instance->queue([0 => ($this->services['prestashop.core.filter.front_end_object.product'] ?? ($this->services['prestashop.core.filter.front_end_object.product'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ProductFilter()))]);

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.search_result_product' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\SearchResultProductFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_SearchResultProductService()
    {
        return $this->services['prestashop.core.filter.front_end_object.search_result_product'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\SearchResultProductFilter();
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.search_result_product_collection' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\CollectionFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_SearchResultProductCollectionService()
    {
        $this->services['prestashop.core.filter.front_end_object.search_result_product_collection'] = $instance = new \PrestaShop\PrestaShop\Core\Filter\CollectionFilter();

        $instance->queue([0 => ($this->services['prestashop.core.filter.front_end_object.search_result_product'] ?? ($this->services['prestashop.core.filter.front_end_object.search_result_product'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\SearchResultProductFilter()))]);

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.shop' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ShopFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_ShopService()
    {
        return $this->services['prestashop.core.filter.front_end_object.shop'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ShopFilter();
    }

    /**
     * Gets the public 'prestashop.core.localization.cache.adapter' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getPrestashop_Core_Localization_Cache_AdapterService()
    {
        return $this->services['prestashop.core.localization.cache.adapter'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.cache.adapter' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getPrestashop_Core_Localization_Cldr_Cache_AdapterService()
    {
        return $this->services['prestashop.core.localization.cldr.cache.adapter'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('CLDR', 0, '/opt/lampp/htdocs/tune4style/var/cache/prod//localization');
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.datalayer.locale_cache' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleCache
     */
    protected function getPrestashop_Core_Localization_Cldr_Datalayer_LocaleCacheService()
    {
        $this->services['prestashop.core.localization.cldr.datalayer.locale_cache'] = $instance = new \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleCache(($this->services['prestashop.core.localization.cldr.cache.adapter'] ?? ($this->services['prestashop.core.localization.cldr.cache.adapter'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('CLDR', 0, '/opt/lampp/htdocs/tune4style/var/cache/prod//localization'))));

        $instance->setLowerLayer(($this->services['prestashop.core.localization.cldr.datalayer.locale_reference'] ?? $this->getPrestashop_Core_Localization_Cldr_Datalayer_LocaleReferenceService()));

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.datalayer.locale_reference' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleReference
     */
    protected function getPrestashop_Core_Localization_Cldr_Datalayer_LocaleReferenceService()
    {
        return $this->services['prestashop.core.localization.cldr.datalayer.locale_reference'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleReference(($this->services['prestashop.core.localization.cldr.reader'] ?? ($this->services['prestashop.core.localization.cldr.reader'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\Reader())));
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.locale_data_source' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleDataSource
     */
    protected function getPrestashop_Core_Localization_Cldr_LocaleDataSourceService()
    {
        return $this->services['prestashop.core.localization.cldr.locale_data_source'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleDataSource(($this->services['prestashop.core.localization.cldr.datalayer.locale_cache'] ?? $this->getPrestashop_Core_Localization_Cldr_Datalayer_LocaleCacheService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.locale_repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleRepository
     */
    protected function getPrestashop_Core_Localization_Cldr_LocaleRepositoryService()
    {
        return $this->services['prestashop.core.localization.cldr.locale_repository'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleRepository(($this->services['prestashop.core.localization.cldr.locale_data_source'] ?? $this->getPrestashop_Core_Localization_Cldr_LocaleDataSourceService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.reader' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\Reader
     */
    protected function getPrestashop_Core_Localization_Cldr_ReaderService()
    {
        return $this->services['prestashop.core.localization.cldr.reader'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\Reader();
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.datasource' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\CurrencyDataSource
     */
    protected function getPrestashop_Core_Localization_Currency_DatasourceService()
    {
        return $this->services['prestashop.core.localization.currency.datasource'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\CurrencyDataSource(($this->services['prestashop.core.localization.currency.middleware.cache'] ?? $this->getPrestashop_Core_Localization_Currency_Middleware_CacheService()), ($this->services['prestashop.core.localization.currency.middleware.installed'] ?? $this->getPrestashop_Core_Localization_Currency_Middleware_InstalledService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.cache' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyCache
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_CacheService()
    {
        $this->services['prestashop.core.localization.currency.middleware.cache'] = $instance = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyCache(($this->services['prestashop.core.localization.cache.adapter'] ?? ($this->services['prestashop.core.localization.cache.adapter'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())));

        $instance->setLowerLayer(($this->services['prestashop.core.localization.currency.middleware.database'] ?? $this->getPrestashop_Core_Localization_Currency_Middleware_DatabaseService()));

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.database' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyDatabase
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_DatabaseService()
    {
        $this->services['prestashop.core.localization.currency.middleware.database'] = $instance = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyDatabase(($this->services['PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider'] ?? $this->getCurrencyDataProviderService()));

        $instance->setLowerLayer(($this->services['prestashop.core.localization.currency.middleware.reference'] ?? $this->getPrestashop_Core_Localization_Currency_Middleware_ReferenceService()));

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.installed' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyInstalled
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_InstalledService()
    {
        return $this->services['prestashop.core.localization.currency.middleware.installed'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyInstalled(($this->services['PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider'] ?? $this->getCurrencyDataProviderService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.reference' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyReference
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_ReferenceService()
    {
        return $this->services['prestashop.core.localization.currency.middleware.reference'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyReference(($this->services['prestashop.core.localization.cldr.locale_repository'] ?? $this->getPrestashop_Core_Localization_Cldr_LocaleRepositoryService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\Repository
     */
    protected function getPrestashop_Core_Localization_Currency_RepositoryService()
    {
        return $this->services['prestashop.core.localization.currency.repository'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\Repository(($this->services['prestashop.core.localization.currency.datasource'] ?? $this->getPrestashop_Core_Localization_Currency_DatasourceService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.locale.context_locale' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Locale
     */
    protected function getPrestashop_Core_Localization_Locale_ContextLocaleService()
    {
        return $this->services['prestashop.core.localization.locale.context_locale'] = ($this->services['PrestaShop\\PrestaShop\\Core\\Localization\\Locale\\Repository'] ?? $this->getRepositoryService())->getLocale(($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->language->getLocale());
    }

    /**
     * Gets the public 'prestashop.core.string.character_cleaner' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\String\CharacterCleaner
     *
     * @deprecated The "prestashop.core.string.character_cleaner" service is deprecated. You should stop using it, as it will be removed in the future.
     */
    protected function getPrestashop_Core_String_CharacterCleanerService()
    {
        @trigger_error('The "prestashop.core.string.character_cleaner" service is deprecated. You should stop using it, as it will be removed in the future.', E_USER_DEPRECATED);

        return $this->services['prestashop.core.string.character_cleaner'] = new \PrestaShop\PrestaShop\Core\String\CharacterCleaner();
    }

    /**
     * Gets the public 'prestashop.database.naming_strategy' shared service.
     *
     * @return \PrestaShopBundle\Service\Database\DoctrineNamingStrategy
     */
    protected function getPrestashop_Database_NamingStrategyService()
    {
        return $this->services['prestashop.database.naming_strategy'] = new \PrestaShopBundle\Service\Database\DoctrineNamingStrategy('ps_');
    }

    /**
     * Gets the public 'prestashop.translation.translator_language_loader' shared service.
     *
     * @return \PrestaShopBundle\Translation\TranslatorLanguageLoader
     */
    protected function getPrestashop_Translation_TranslatorLanguageLoaderService()
    {
        return $this->services['prestashop.translation.translator_language_loader'] = new \PrestaShopBundle\Translation\TranslatorLanguageLoader(($this->services['prestashop.adapter.module.repository.module_repository'] ?? ($this->services['prestashop.adapter.module.repository.module_repository'] = new \PrestaShop\PrestaShop\Adapter\Module\Repository\ModuleRepository('/opt/lampp/htdocs/tune4style', '/opt/lampp/htdocs/tune4style/modules/'))));
    }

    /**
     * Gets the public 'product_comment_criterion_repository' shared service.
     *
     * @return \PrestaShop\Module\ProductComment\Repository\ProductCommentCriterionRepository
     */
    protected function getProductCommentCriterionRepositoryService()
    {
        return $this->services['product_comment_criterion_repository'] = new \PrestaShop\Module\ProductComment\Repository\ProductCommentCriterionRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), 'ps_');
    }

    /**
     * Gets the public 'product_comment_repository' shared service.
     *
     * @return \PrestaShop\Module\ProductComment\Repository\ProductCommentRepository
     */
    protected function getProductCommentRepositoryService()
    {
        return $this->services['product_comment_repository'] = new \PrestaShop\Module\ProductComment\Repository\ProductCommentRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), 'ps_', ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()))->get("PRODUCT_COMMENTS_ALLOW_GUESTS"), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()))->get("PRODUCT_COMMENTS_MINIMAL_TIME"));
    }

    /**
     * Gets the public 'worldlineop.checksum.address' shared service.
     *
     * @return \AddressChecksum
     */
    protected function getWorldlineop_Checksum_AddressService()
    {
        return $this->services['worldlineop.checksum.address'] = new \AddressChecksum();
    }

    /**
     * Gets the public 'worldlineop.checksum.cart' shared service.
     *
     * @return \WorldlineopCartChecksum
     */
    protected function getWorldlineop_Checksum_CartService()
    {
        return $this->services['worldlineop.checksum.cart'] = new \WorldlineopCartChecksum(($this->services['worldlineop.checksum.address'] ?? ($this->services['worldlineop.checksum.address'] = new \AddressChecksum())));
    }

    /**
     * Gets the public 'worldlineop.context' shared service.
     *
     * @return \Context
     */
    protected function getWorldlineop_ContextService()
    {
        return $this->services['worldlineop.context'] = \Context::getContext();
    }

    /**
     * Gets the public 'worldlineop.event.presenter' shared service.
     *
     * @return \WorldlineOP\PrestaShop\Presenter\WebhookEventPresenter
     */
    protected function getWorldlineop_Event_PresenterService()
    {
        return $this->services['worldlineop.event.presenter'] = new \WorldlineOP\PrestaShop\Presenter\WebhookEventPresenter(($this->services['worldlineop.getpayment.presenter'] ?? $this->getWorldlineop_Getpayment_PresenterService()), ($this->services['worldlineop.getrefund.presenter'] ?? $this->getWorldlineop_Getrefund_PresenterService()), ($this->services['worldlineop.logger.factory'] ?? $this->getWorldlineop_Logger_FactoryService()));
    }

    /**
     * Gets the public 'worldlineop.getpayment.presenter' shared service.
     *
     * @return \WorldlineOP\PrestaShop\Presenter\GetPaymentPresenter
     */
    protected function getWorldlineop_Getpayment_PresenterService()
    {
        return $this->services['worldlineop.getpayment.presenter'] = new \WorldlineOP\PrestaShop\Presenter\GetPaymentPresenter(($this->services['worldlineop.module'] ?? $this->getWorldlineop_ModuleService()), ($this->services['worldlineop.sdk.client.factory'] ?? $this->getWorldlineop_Sdk_Client_FactoryService()), ($this->services['worldlineop.settings.loader'] ?? $this->getWorldlineop_Settings_LoaderService()), ($this->services['worldlineop.logger.factory'] ?? $this->getWorldlineop_Logger_FactoryService()));
    }

    /**
     * Gets the public 'worldlineop.getrefund.presenter' shared service.
     *
     * @return \WorldlineOP\PrestaShop\Presenter\GetRefundPresenter
     */
    protected function getWorldlineop_Getrefund_PresenterService()
    {
        return $this->services['worldlineop.getrefund.presenter'] = new \WorldlineOP\PrestaShop\Presenter\GetRefundPresenter(($this->services['worldlineop.module'] ?? $this->getWorldlineop_ModuleService()), ($this->services['worldlineop.logger.factory'] ?? $this->getWorldlineop_Logger_FactoryService()));
    }

    /**
     * Gets the public 'worldlineop.hosted_payment_request.builder' shared service.
     *
     * @return \WorldlineOP\PrestaShop\Builder\HostedPaymentRequestBuilder
     */
    protected function getWorldlineop_HostedPaymentRequest_BuilderService()
    {
        return $this->services['worldlineop.hosted_payment_request.builder'] = new \WorldlineOP\PrestaShop\Builder\HostedPaymentRequestBuilder(($this->services['worldlineop.settings.factory'] ?? $this->getWorldlineop_Settings_FactoryService())->deserialize(($this->services['worldlineop.settings.serializer'] ?? ($this->services['worldlineop.settings.serializer'] = new \WorldlineOP\PrestaShop\Serializer\SettingsSerializer()))->getSerializer()), ($this->services['worldlineop.module'] ?? $this->getWorldlineop_ModuleService()), ($this->services['worldlineop.context'] ?? $this->getWorldlineop_ContextService()), ($this->services['worldlineop.shopping_cart.presenter'] ?? ($this->services['worldlineop.shopping_cart.presenter'] = new \WorldlineOP\PrestaShop\Presenter\ShoppingCartPresenter())));
    }

    /**
     * Gets the public 'worldlineop.hosted_payment_request.director' shared service.
     *
     * @return \WorldlineOP\PrestaShop\Builder\PaymentRequestDirector
     */
    protected function getWorldlineop_HostedPaymentRequest_DirectorService()
    {
        $this->services['worldlineop.hosted_payment_request.director'] = $instance = new \WorldlineOP\PrestaShop\Builder\PaymentRequestDirector();

        $instance->setBuilder(($this->services['worldlineop.hosted_payment_request.builder'] ?? $this->getWorldlineop_HostedPaymentRequest_BuilderService()));

        return $instance;
    }

    /**
     * Gets the public 'worldlineop.installer' shared service.
     *
     * @return \WorldlineOP\PrestaShop\Installer\Installer
     */
    protected function getWorldlineop_InstallerService()
    {
        return $this->services['worldlineop.installer'] = new \WorldlineOP\PrestaShop\Installer\Installer(($this->services['worldlineop.module'] ?? $this->getWorldlineop_ModuleService()), ($this->services['worldlineop.tab.manager'] ?? ($this->services['worldlineop.tab.manager'] = new \WorldlineOP\PrestaShop\Utils\TabManager())), ($this->services['worldlineop.status.manager'] ?? ($this->services['worldlineop.status.manager'] = new \WorldlineOP\PrestaShop\Utils\OrderStatusManager())), ($this->services['worldlineop.settings.account.updater'] ?? $this->getWorldlineop_Settings_Account_UpdaterService()), ($this->services['worldlineop.settings.advanced_settings.updater'] ?? $this->getWorldlineop_Settings_AdvancedSettings_UpdaterService()), ($this->services['worldlineop.settings.payment_methods.updater'] ?? $this->getWorldlineop_Settings_PaymentMethods_UpdaterService()), '8.1.3', ($this->services['worldlineop.logger.factory'] ?? $this->getWorldlineop_Logger_FactoryService()));
    }

    /**
     * Gets the public 'worldlineop.logger' shared service.
     *
     * @return \WorldlineOP\PrestaShop\Logger\LoggerFactory
     */
    protected function getWorldlineop_LoggerService()
    {
        return $this->services['worldlineop.logger'] = ($this->services['worldlineop.logger.factory'] ?? $this->getWorldlineop_Logger_FactoryService())->getLogger(($this->services['worldlineop.settings.factory'] ?? $this->getWorldlineop_Settings_FactoryService())->deserialize(($this->services['worldlineop.settings.serializer'] ?? ($this->services['worldlineop.settings.serializer'] = new \WorldlineOP\PrestaShop\Serializer\SettingsSerializer()))->getSerializer()));
    }

    /**
     * Gets the public 'worldlineop.logger.factory' shared service.
     *
     * @return \WorldlineOP\PrestaShop\Logger\LoggerFactory
     */
    protected function getWorldlineop_Logger_FactoryService()
    {
        return $this->services['worldlineop.logger.factory'] = new \WorldlineOP\PrestaShop\Logger\LoggerFactory(($this->services['worldlineop.settings.factory'] ?? $this->getWorldlineop_Settings_FactoryService())->deserialize(($this->services['worldlineop.settings.serializer'] ?? ($this->services['worldlineop.settings.serializer'] = new \WorldlineOP\PrestaShop\Serializer\SettingsSerializer()))->getSerializer()));
    }

    /**
     * Gets the public 'worldlineop.module' shared service.
     *
     * @return \Worldlineop
     */
    protected function getWorldlineop_ModuleService()
    {
        return $this->services['worldlineop.module'] = \Module::getInstanceByName('worldlineop');
    }

    /**
     * Gets the public 'worldlineop.payment.presenter' shared service.
     *
     * @return \WorldlineOP\PrestaShop\Presenter\PaymentOptionsPresenter
     */
    protected function getWorldlineop_Payment_PresenterService()
    {
        return $this->services['worldlineop.payment.presenter'] = new \WorldlineOP\PrestaShop\Presenter\PaymentOptionsPresenter(($this->services['worldlineop.module'] ?? $this->getWorldlineop_ModuleService()), ($this->services['worldlineop.settings.factory'] ?? $this->getWorldlineop_Settings_FactoryService())->deserialize(($this->services['worldlineop.settings.serializer'] ?? ($this->services['worldlineop.settings.serializer'] = new \WorldlineOP\PrestaShop\Serializer\SettingsSerializer()))->getSerializer()), ($this->services['worldlineop.context'] ?? $this->getWorldlineop_ContextService()));
    }

    /**
     * Gets the public 'worldlineop.payment_request.builder' shared service.
     *
     * @return \WorldlineOP\PrestaShop\Builder\PaymentRequestBuilder
     */
    protected function getWorldlineop_PaymentRequest_BuilderService()
    {
        return $this->services['worldlineop.payment_request.builder'] = new \WorldlineOP\PrestaShop\Builder\PaymentRequestBuilder(($this->services['worldlineop.settings.factory'] ?? $this->getWorldlineop_Settings_FactoryService())->deserialize(($this->services['worldlineop.settings.serializer'] ?? ($this->services['worldlineop.settings.serializer'] = new \WorldlineOP\PrestaShop\Serializer\SettingsSerializer()))->getSerializer()), ($this->services['worldlineop.module'] ?? $this->getWorldlineop_ModuleService()), ($this->services['worldlineop.context'] ?? $this->getWorldlineop_ContextService()), ($this->services['worldlineop.shopping_cart.presenter'] ?? ($this->services['worldlineop.shopping_cart.presenter'] = new \WorldlineOP\PrestaShop\Presenter\ShoppingCartPresenter())));
    }

    /**
     * Gets the public 'worldlineop.payment_request.director' shared service.
     *
     * @return \WorldlineOP\PrestaShop\Builder\PaymentRequestDirector
     */
    protected function getWorldlineop_PaymentRequest_DirectorService()
    {
        $this->services['worldlineop.payment_request.director'] = $instance = new \WorldlineOP\PrestaShop\Builder\PaymentRequestDirector();

        $instance->setBuilder(($this->services['worldlineop.payment_request.builder'] ?? $this->getWorldlineop_PaymentRequest_BuilderService()));

        return $instance;
    }

    /**
     * Gets the public 'worldlineop.processor.transaction' shared service.
     *
     * @return \WorldlineOP\PrestaShop\Processor\TransactionResponseProcessor
     */
    protected function getWorldlineop_Processor_TransactionService()
    {
        return $this->services['worldlineop.processor.transaction'] = new \WorldlineOP\PrestaShop\Processor\TransactionResponseProcessor(($this->services['worldlineop.module'] ?? $this->getWorldlineop_ModuleService()), ($this->services['worldlineop.logger.factory'] ?? $this->getWorldlineop_Logger_FactoryService()));
    }

    /**
     * Gets the public 'worldlineop.repository.created_payment' shared service.
     *
     * @return \WorldlineOP\PrestaShop\Repository\CreatedPaymentRepository
     */
    protected function getWorldlineop_Repository_CreatedPaymentService()
    {
        return $this->services['worldlineop.repository.created_payment'] = new \WorldlineOP\PrestaShop\Repository\CreatedPaymentRepository();
    }

    /**
     * Gets the public 'worldlineop.repository.hosted_checkout' shared service.
     *
     * @return \WorldlineOP\PrestaShop\Repository\HostedCheckoutRepository
     */
    protected function getWorldlineop_Repository_HostedCheckoutService()
    {
        return $this->services['worldlineop.repository.hosted_checkout'] = new \WorldlineOP\PrestaShop\Repository\HostedCheckoutRepository();
    }

    /**
     * Gets the public 'worldlineop.repository.token' shared service.
     *
     * @return \WorldlineOP\PrestaShop\Repository\TokenRepository
     */
    protected function getWorldlineop_Repository_TokenService()
    {
        return $this->services['worldlineop.repository.token'] = new \WorldlineOP\PrestaShop\Repository\TokenRepository();
    }

    /**
     * Gets the public 'worldlineop.repository.transaction' shared service.
     *
     * @return \WorldlineOP\PrestaShop\Repository\TransactionRepository
     */
    protected function getWorldlineop_Repository_TransactionService()
    {
        return $this->services['worldlineop.repository.transaction'] = new \WorldlineOP\PrestaShop\Repository\TransactionRepository();
    }

    /**
     * Gets the public 'worldlineop.sdk.client' shared service.
     *
     * @return \WorldlineOP\PrestaShop\Sdk\ClientFactory
     */
    protected function getWorldlineop_Sdk_ClientService()
    {
        return $this->services['worldlineop.sdk.client'] = ($this->services['worldlineop.sdk.client.factory'] ?? $this->getWorldlineop_Sdk_Client_FactoryService())->getMerchant(($this->services['worldlineop.sdk.communicator'] ?? $this->getWorldlineop_Sdk_CommunicatorService()), ($this->services['worldlineop.settings.factory'] ?? $this->getWorldlineop_Settings_FactoryService())->deserialize(($this->services['worldlineop.settings.serializer'] ?? ($this->services['worldlineop.settings.serializer'] = new \WorldlineOP\PrestaShop\Serializer\SettingsSerializer()))->getSerializer()));
    }

    /**
     * Gets the public 'worldlineop.sdk.client.factory' shared service.
     *
     * @return \WorldlineOP\PrestaShop\Sdk\ClientFactory
     */
    protected function getWorldlineop_Sdk_Client_FactoryService()
    {
        return $this->services['worldlineop.sdk.client.factory'] = new \WorldlineOP\PrestaShop\Sdk\ClientFactory(($this->services['worldlineop.sdk.communicator'] ?? $this->getWorldlineop_Sdk_CommunicatorService()), ($this->services['worldlineop.settings.factory'] ?? $this->getWorldlineop_Settings_FactoryService())->deserialize(($this->services['worldlineop.settings.serializer'] ?? ($this->services['worldlineop.settings.serializer'] = new \WorldlineOP\PrestaShop\Serializer\SettingsSerializer()))->getSerializer()));
    }

    /**
     * Gets the public 'worldlineop.sdk.communicator' shared service.
     *
     * @return \OnlinePayments\Sdk\Communicator
     */
    protected function getWorldlineop_Sdk_CommunicatorService()
    {
        return $this->services['worldlineop.sdk.communicator'] = new \OnlinePayments\Sdk\Communicator(($this->services['worldlineop.sdk.connection'] ?? ($this->services['worldlineop.sdk.connection'] = new \OnlinePayments\Sdk\DefaultConnection())), ($this->services['worldlineop.sdk.communicator_configuration.factory'] ?? $this->getWorldlineop_Sdk_CommunicatorConfiguration_FactoryService())->getInstance());
    }

    /**
     * Gets the public 'worldlineop.sdk.communicator_configuration.factory' shared service.
     *
     * @return \WorldlineOP\PrestaShop\Sdk\CommunicatorConfigurationFactory
     */
    protected function getWorldlineop_Sdk_CommunicatorConfiguration_FactoryService()
    {
        return $this->services['worldlineop.sdk.communicator_configuration.factory'] = new \WorldlineOP\PrestaShop\Sdk\CommunicatorConfigurationFactory(($this->services['worldlineop.settings.factory'] ?? $this->getWorldlineop_Settings_FactoryService())->deserialize(($this->services['worldlineop.settings.serializer'] ?? ($this->services['worldlineop.settings.serializer'] = new \WorldlineOP\PrestaShop\Serializer\SettingsSerializer()))->getSerializer()), ($this->services['worldlineop.module'] ?? $this->getWorldlineop_ModuleService()));
    }

    /**
     * Gets the public 'worldlineop.sdk.connection' shared service.
     *
     * @return \OnlinePayments\Sdk\DefaultConnection
     */
    protected function getWorldlineop_Sdk_ConnectionService()
    {
        return $this->services['worldlineop.sdk.connection'] = new \OnlinePayments\Sdk\DefaultConnection();
    }

    /**
     * Gets the public 'worldlineop.settings' service.
     *
     * @return \WorldlineOP\PrestaShop\Configuration\Loader\SettingsLoader
     */
    protected function getWorldlineop_SettingsService()
    {
        return ($this->services['worldlineop.settings.factory'] ?? $this->getWorldlineop_Settings_FactoryService())->deserialize(($this->services['worldlineop.settings.serializer'] ?? ($this->services['worldlineop.settings.serializer'] = new \WorldlineOP\PrestaShop\Serializer\SettingsSerializer()))->getSerializer());
    }

    /**
     * Gets the public 'worldlineop.settings.account.resolver' shared service.
     *
     * @return \WorldlineOP\PrestaShop\OptionsResolver\AccountSettingsResolver
     */
    protected function getWorldlineop_Settings_Account_ResolverService()
    {
        return $this->services['worldlineop.settings.account.resolver'] = new \WorldlineOP\PrestaShop\OptionsResolver\AccountSettingsResolver();
    }

    /**
     * Gets the public 'worldlineop.settings.account.updater' shared service.
     *
     * @return \WorldlineOP\PrestaShop\Configuration\Updater\AccountSettingsUpdater
     */
    protected function getWorldlineop_Settings_Account_UpdaterService()
    {
        return $this->services['worldlineop.settings.account.updater'] = new \WorldlineOP\PrestaShop\Configuration\Updater\AccountSettingsUpdater(($this->services['worldlineop.settings.serializer'] ?? ($this->services['worldlineop.settings.serializer'] = new \WorldlineOP\PrestaShop\Serializer\SettingsSerializer()))->getSerializer(), ($this->services['worldlineop.settings.account.resolver'] ?? ($this->services['worldlineop.settings.account.resolver'] = new \WorldlineOP\PrestaShop\OptionsResolver\AccountSettingsResolver())), ($this->services['worldlineop.settings.factory'] ?? $this->getWorldlineop_Settings_FactoryService())->deserialize(($this->services['worldlineop.settings.serializer'] ?? ($this->services['worldlineop.settings.serializer'] = new \WorldlineOP\PrestaShop\Serializer\SettingsSerializer()))->getSerializer()), ($this->services['worldlineop.settings.account.validation'] ?? $this->getWorldlineop_Settings_Account_ValidationService()), ($this->services['worldlineop.module'] ?? $this->getWorldlineop_ModuleService()));
    }

    /**
     * Gets the public 'worldlineop.settings.account.validation' shared service.
     *
     * @return \WorldlineOP\PrestaShop\Configuration\Validation\AccountValidationData
     */
    protected function getWorldlineop_Settings_Account_ValidationService()
    {
        return $this->services['worldlineop.settings.account.validation'] = new \WorldlineOP\PrestaShop\Configuration\Validation\AccountValidationData(($this->services['worldlineop.module'] ?? $this->getWorldlineop_ModuleService()));
    }

    /**
     * Gets the public 'worldlineop.settings.advanced_settings.resolver' shared service.
     *
     * @return \WorldlineOP\PrestaShop\OptionsResolver\AdvancedSettingsResolver
     */
    protected function getWorldlineop_Settings_AdvancedSettings_ResolverService()
    {
        return $this->services['worldlineop.settings.advanced_settings.resolver'] = new \WorldlineOP\PrestaShop\OptionsResolver\AdvancedSettingsResolver();
    }

    /**
     * Gets the public 'worldlineop.settings.advanced_settings.updater' shared service.
     *
     * @return \WorldlineOP\PrestaShop\Configuration\Updater\AdvancedSettingsUpdater
     */
    protected function getWorldlineop_Settings_AdvancedSettings_UpdaterService()
    {
        return $this->services['worldlineop.settings.advanced_settings.updater'] = new \WorldlineOP\PrestaShop\Configuration\Updater\AdvancedSettingsUpdater(($this->services['worldlineop.settings.serializer'] ?? ($this->services['worldlineop.settings.serializer'] = new \WorldlineOP\PrestaShop\Serializer\SettingsSerializer()))->getSerializer(), ($this->services['worldlineop.settings.advanced_settings.resolver'] ?? ($this->services['worldlineop.settings.advanced_settings.resolver'] = new \WorldlineOP\PrestaShop\OptionsResolver\AdvancedSettingsResolver())), ($this->services['worldlineop.settings.factory'] ?? $this->getWorldlineop_Settings_FactoryService())->deserialize(($this->services['worldlineop.settings.serializer'] ?? ($this->services['worldlineop.settings.serializer'] = new \WorldlineOP\PrestaShop\Serializer\SettingsSerializer()))->getSerializer()), ($this->services['worldlineop.settings.advanced_settings.validation'] ?? $this->getWorldlineop_Settings_AdvancedSettings_ValidationService()), ($this->services['worldlineop.module'] ?? $this->getWorldlineop_ModuleService()));
    }

    /**
     * Gets the public 'worldlineop.settings.advanced_settings.validation' shared service.
     *
     * @return \WorldlineOP\PrestaShop\Configuration\Validation\AdvancedSettingsValidationData
     */
    protected function getWorldlineop_Settings_AdvancedSettings_ValidationService()
    {
        return $this->services['worldlineop.settings.advanced_settings.validation'] = new \WorldlineOP\PrestaShop\Configuration\Validation\AdvancedSettingsValidationData(($this->services['worldlineop.module'] ?? $this->getWorldlineop_ModuleService()));
    }

    /**
     * Gets the public 'worldlineop.settings.factory' shared service.
     *
     * @return \WorldlineOP\PrestaShop\Configuration\Loader\SettingsLoader
     */
    protected function getWorldlineop_Settings_FactoryService()
    {
        return $this->services['worldlineop.settings.factory'] = new \WorldlineOP\PrestaShop\Configuration\Loader\SettingsLoader(($this->services['worldlineop.settings.serializer'] ?? ($this->services['worldlineop.settings.serializer'] = new \WorldlineOP\PrestaShop\Serializer\SettingsSerializer()))->getSerializer());
    }

    /**
     * Gets the public 'worldlineop.settings.get_products' shared service.
     *
     * @return \WorldlineOP\PrestaShop\Configuration\Product\GetProductsRequest
     */
    protected function getWorldlineop_Settings_GetProductsService()
    {
        return $this->services['worldlineop.settings.get_products'] = new \WorldlineOP\PrestaShop\Configuration\Product\GetProductsRequest(($this->services['worldlineop.sdk.client'] ?? $this->getWorldlineop_Sdk_ClientService()), ($this->services['worldlineop.settings.factory'] ?? $this->getWorldlineop_Settings_FactoryService())->deserialize(($this->services['worldlineop.settings.serializer'] ?? ($this->services['worldlineop.settings.serializer'] = new \WorldlineOP\PrestaShop\Serializer\SettingsSerializer()))->getSerializer()), ($this->services['worldlineop.logger.factory'] ?? $this->getWorldlineop_Logger_FactoryService()));
    }

    /**
     * Gets the public 'worldlineop.settings.loader' shared service.
     *
     * @return \WorldlineOP\PrestaShop\Configuration\Loader\SettingsLoader
     */
    protected function getWorldlineop_Settings_LoaderService()
    {
        return $this->services['worldlineop.settings.loader'] = new \WorldlineOP\PrestaShop\Configuration\Loader\SettingsLoader(($this->services['worldlineop.settings.serializer'] ?? ($this->services['worldlineop.settings.serializer'] = new \WorldlineOP\PrestaShop\Serializer\SettingsSerializer()))->getSerializer());
    }

    /**
     * Gets the public 'worldlineop.settings.payment_methods.resolver' shared service.
     *
     * @return \WorldlineOP\PrestaShop\OptionsResolver\PaymentMethodsSettingsResolver
     */
    protected function getWorldlineop_Settings_PaymentMethods_ResolverService()
    {
        return $this->services['worldlineop.settings.payment_methods.resolver'] = new \WorldlineOP\PrestaShop\OptionsResolver\PaymentMethodsSettingsResolver();
    }

    /**
     * Gets the public 'worldlineop.settings.payment_methods.updater' shared service.
     *
     * @return \WorldlineOP\PrestaShop\Configuration\Updater\PaymentMethodsSettingsUpdater
     */
    protected function getWorldlineop_Settings_PaymentMethods_UpdaterService()
    {
        return $this->services['worldlineop.settings.payment_methods.updater'] = new \WorldlineOP\PrestaShop\Configuration\Updater\PaymentMethodsSettingsUpdater(($this->services['worldlineop.settings.serializer'] ?? ($this->services['worldlineop.settings.serializer'] = new \WorldlineOP\PrestaShop\Serializer\SettingsSerializer()))->getSerializer(), ($this->services['worldlineop.settings.payment_methods.resolver'] ?? ($this->services['worldlineop.settings.payment_methods.resolver'] = new \WorldlineOP\PrestaShop\OptionsResolver\PaymentMethodsSettingsResolver())), ($this->services['worldlineop.settings.factory'] ?? $this->getWorldlineop_Settings_FactoryService())->deserialize(($this->services['worldlineop.settings.serializer'] ?? ($this->services['worldlineop.settings.serializer'] = new \WorldlineOP\PrestaShop\Serializer\SettingsSerializer()))->getSerializer()), ($this->services['worldlineop.settings.payment_methods.validation'] ?? $this->getWorldlineop_Settings_PaymentMethods_ValidationService()), ($this->services['worldlineop.module'] ?? $this->getWorldlineop_ModuleService()));
    }

    /**
     * Gets the public 'worldlineop.settings.payment_methods.validation' shared service.
     *
     * @return \WorldlineOP\PrestaShop\Configuration\Validation\PaymentMethodsValidationData
     */
    protected function getWorldlineop_Settings_PaymentMethods_ValidationService()
    {
        return $this->services['worldlineop.settings.payment_methods.validation'] = new \WorldlineOP\PrestaShop\Configuration\Validation\PaymentMethodsValidationData(($this->services['worldlineop.module'] ?? $this->getWorldlineop_ModuleService()));
    }

    /**
     * Gets the public 'worldlineop.settings.presenter' shared service.
     *
     * @return \WorldlineOP\PrestaShop\Presenter\ModuleConfigurationPresenter
     */
    protected function getWorldlineop_Settings_PresenterService()
    {
        return $this->services['worldlineop.settings.presenter'] = new \WorldlineOP\PrestaShop\Presenter\ModuleConfigurationPresenter(($this->services['worldlineop.module'] ?? $this->getWorldlineop_ModuleService()), ($this->services['worldlineop.settings.loader'] ?? $this->getWorldlineop_Settings_LoaderService()));
    }

    /**
     * Gets the public 'worldlineop.settings.serializer' shared service.
     *
     * @return \WorldlineOP\PrestaShop\Serializer\SettingsSerializer
     */
    protected function getWorldlineop_Settings_SerializerService()
    {
        return $this->services['worldlineop.settings.serializer'] = new \WorldlineOP\PrestaShop\Serializer\SettingsSerializer();
    }

    /**
     * Gets the public 'worldlineop.shopping_cart.presenter' shared service.
     *
     * @return \WorldlineOP\PrestaShop\Presenter\ShoppingCartPresenter
     */
    protected function getWorldlineop_ShoppingCart_PresenterService()
    {
        return $this->services['worldlineop.shopping_cart.presenter'] = new \WorldlineOP\PrestaShop\Presenter\ShoppingCartPresenter();
    }

    /**
     * Gets the public 'worldlineop.status.manager' shared service.
     *
     * @return \WorldlineOP\PrestaShop\Utils\OrderStatusManager
     */
    protected function getWorldlineop_Status_ManagerService()
    {
        return $this->services['worldlineop.status.manager'] = new \WorldlineOP\PrestaShop\Utils\OrderStatusManager();
    }

    /**
     * Gets the public 'worldlineop.storedcards.presenter' shared service.
     *
     * @return \WorldlineOP\PrestaShop\Presenter\StoredCardsPresenter
     */
    protected function getWorldlineop_Storedcards_PresenterService()
    {
        return $this->services['worldlineop.storedcards.presenter'] = new \WorldlineOP\PrestaShop\Presenter\StoredCardsPresenter(($this->services['worldlineop.module'] ?? $this->getWorldlineop_ModuleService()), ($this->services['worldlineop.context'] ?? $this->getWorldlineop_ContextService()), ($this->services['worldlineop.sdk.client'] ?? $this->getWorldlineop_Sdk_ClientService()), ($this->services['worldlineop.repository.token'] ?? ($this->services['worldlineop.repository.token'] = new \WorldlineOP\PrestaShop\Repository\TokenRepository())));
    }

    /**
     * Gets the public 'worldlineop.tab.manager' shared service.
     *
     * @return \WorldlineOP\PrestaShop\Utils\TabManager
     */
    protected function getWorldlineop_Tab_ManagerService()
    {
        return $this->services['worldlineop.tab.manager'] = new \WorldlineOP\PrestaShop\Utils\TabManager();
    }

    /**
     * Gets the private 'PrestaShopBundle\DependencyInjection\RuntimeConstEnvVarProcessor' shared service.
     *
     * @return \PrestaShopBundle\DependencyInjection\RuntimeConstEnvVarProcessor
     */
    protected function getRuntimeConstEnvVarProcessorService()
    {
        return $this->privates['PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor'] = new \PrestaShopBundle\DependencyInjection\RuntimeConstEnvVarProcessor();
    }

    /**
     * Gets the public 'prestashop.adapter.tools' alias.
     *
     * @return object The "PrestaShop\PrestaShop\Adapter\Tools" service.
     */
    protected function getPrestashop_Adapter_ToolsService()
    {
        @trigger_error('The "prestashop.adapter.tools" service alias is deprecated. You should stop using it, as it will be removed in the future.', E_USER_DEPRECATED);

        return $this->get('PrestaShop\\PrestaShop\\Adapter\\Tools');
    }

    /**
     * @return array|bool|float|int|string|\UnitEnum|null
     */
    public function getParameter($name)
    {
        $name = (string) $name;

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name): bool
    {
        $name = (string) $name;

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value): void
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag(): ParameterBagInterface
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [];
    private $dynamicParameters = [];

    private function getDynamicParameter(string $name)
    {
        throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
    }

    protected function getDefaultParameters(): array
    {
        return [
            'database_host' => '127.0.0.1',
            'database_port' => '3307',
            'database_name' => 'asw161123_tune4style',
            'database_user' => 'root',
            'database_password' => '',
            'database_prefix' => 'ps_',
            'database_engine' => 'InnoDB',
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'secret' => 'EYFWGzrEKKZB0isnOxy6psDO6F0Ts084zRAWJ7pyEH6eo3IGmI5jhdXWryQiKuRp',
            'ps_caching' => 'CacheMemcache',
            'ps_cache_enable' => false,
            'ps_creation_date' => '2023-12-11',
            'locale' => 'en-US',
            'use_debug_toolbar' => true,
            'cookie_key' => 'NUaOYdeZ56yztenbBiYmMKGauNV7uR22vBKDXJIMnbJ5YJPoyIDoCjXrvFoys4yP',
            'cookie_iv' => '81EhAYBTiRcSaOy3YIoZ7odphqvi3IKs',
            'new_cookie_key' => 'def00000a22ea83ca9b3a1c1b78398a40c615053c929c9116877a0181151bb0910d6ecae837a2549b709993b55f0b4cc7ccdb666a2eb9afe6482bf31e99572a38204f9e5',
            'api_public_key' => '-----BEGIN PUBLIC KEY-----'."\n".'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA20gBnPjdgKjOv7+UDidk'."\n".'/1HCkSM9FFS6D+g6wSEeoXnPU7i47IDC80nR0n3mWo7TT/dJXUBDrcBJEL2rV4Al'."\n".'+iIdvCkfQct7Es16OPRuIUl/Cj+MNNWFwjIaG4VGLqr+xMf4dmRY81rbMzX7nvdo'."\n".'XhApf4SExiOyov5OgRH7hAkr3+3oeIeSoqOSf4Z/JT6ThYIvGvCqDb7HL3KZnj81'."\n".'faWcJNxCEpDFM6aSWsVvClFS02I9dJ3bY6kPeBKjyu6c21G+6lHBH1xCxj+iBLXo'."\n".'9VQAPgixeXFpjwQanNn15mLbrha7uYrsvZ/IMISQReHBe1CJ3tVnt3K3bF9s+BoX'."\n".'rQIDAQAB'."\n".'-----END PUBLIC KEY-----'."\n".'',
            'api_private_key' => '-----BEGIN PRIVATE KEY-----'."\n".'MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQDbSAGc+N2AqM6/'."\n".'v5QOJ2T/UcKRIz0UVLoP6DrBIR6hec9TuLjsgMLzSdHSfeZajtNP90ldQEOtwEkQ'."\n".'vatXgCX6Ih28KR9By3sSzXo49G4hSX8KP4w01YXCMhobhUYuqv7Ex/h2ZFjzWtsz'."\n".'Nfue92heECl/hITGI7Ki/k6BEfuECSvf7eh4h5Kio5J/hn8lPpOFgi8a8KoNvscv'."\n".'cpmePzV9pZwk3EISkMUzppJaxW8KUVLTYj10ndtjqQ94EqPK7pzbUb7qUcEfXELG'."\n".'P6IEtej1VAA+CLF5cWmPBBqc2fXmYtuuFru5iuy9n8gwhJBF4cF7UIne1We3crds'."\n".'X2z4GhetAgMBAAECggEBAIb+i0+xvdtpEO7m6CTWh8zO7rMfOIj9qBYG57ThyNOs'."\n".'A8EM5XtjwaC4/11QeLGjX9/I4vdvirq6t8CAo60YjUiyHBAsWLvOoxPuP6I0iGAh'."\n".'uP38JTqZgOEOqxfqMkykpHdMjF+GY2RduLiMMT2qHixaUtHYKU05yM2jNX0sLuUX'."\n".'BCvDhF5iDVDt40KQslU5B7eKNmkkmHyWymaMTI6XmDzeZaRTnMhvGs6aBCgky8Pj'."\n".'PU8BE4PESNz79H5575hGWInHjrxFHsHCL73bgKH1oTXVNZeKtNFbzeub+GbnpBio'."\n".'M8jgnu66pEAMtdJAiDy/zqQsCnIapOkExdGAGXZ3ksECgYEA+k/sSMkG7LkHre/x'."\n".'vIUjaYN7JReq4j99i9mRN0N/drxoGkK3ho0pXSKrthRnt0JJcLOKzvuIwssTw2si'."\n".'rpmHxwzOpgN8RlZ91VlqWwaZZnJ3EwnwPzizQjYVhjgPs3ZDmNwno+nKGIF10zxm'."\n".'xqlcenzbReLGdj8gUNa6dbsjLJkCgYEA4EOTN8qRcG3/nIc7L9nJiNngRVF9H/uJ'."\n".'w0pDsDqQzHhUs6zcqFvLGxOaAPlX0UjOC9xqeE10ZUzn+iuh3JXVIiz6QVi3iW+w'."\n".'SfflvwHt8SKknGmouB/5ALwYFt59NfYqx+vICKAd59mHgpIIBUxRbc0DOiyUMmh2'."\n".'CtHcLMMOPDUCfyv/4IjqzUzPOYpZoySAQrlJY1whzOf4QRlUJTKRqtY0SBhVoe0E'."\n".'40B717Mp4xFTlZU5+ixoCqIzEEZJjs8iLbvPhIOqGS5EBdp63Tci8dQQSt4N4S07'."\n".'ykbZOu9c62WgZEF6cX1emyezmgKHm4lQO/FMAT9HnZsrfYK4PA511rkCgYEAiHlW'."\n".'+5qwSyUFanH5GLOGK1u7WTOv22ite0SUUIgzWdrYYMcPOP0zanTRQUp7oIaXrSwj'."\n".'Nrab4JGekeU/iQc9PqD0YhPlDSQEud671zMLY7TbS7wYyoPaehH87t3SgKYffq4D'."\n".'ewxFZrQ//Lt1WhQJcbJTBnHedZaQTyFKxYql/QkCgYEAppQ2YU9xwXERomAGoMZs'."\n".'bwiMDMFO/pnvALi9ODMYSK6mvwZVY7vZZ2oUw5vOnwCWQP3Y2IrMRnHszomS4U4w'."\n".'NOf/FCgFPX8oLjqTrWYZ5P6VWDxfExEq+XdbatoRgCVL6pIIDP1Z+Gl3iEhM7zyz'."\n".'Y0Bn+CAZV55IsO34m3MfYd0='."\n".'-----END PRIVATE KEY-----'."\n".'',
            'cache.driver' => 'array',
            'cache.adapter' => 'cache.adapter.array',
            'kernel.bundles' => [

            ],
            'kernel.root_dir' => '/opt/lampp/htdocs/tune4style/app',
            'kernel.project_dir' => '/opt/lampp/htdocs/tune4style',
            'kernel.name' => 'app',
            'kernel.debug' => false,
            'kernel.environment' => 'prod',
            'kernel.cache_dir' => '/opt/lampp/htdocs/tune4style/var/cache/prod/',
            'kernel.active_modules' => [
                0 => 'ps_linklist',
                1 => 'blockreassurance',
                2 => 'blockwishlist',
                3 => 'psgdpr',
                4 => 'ps_contactinfo',
                5 => 'ps_languageselector',
                6 => 'ps_currencyselector',
                7 => 'ps_customersignin',
                8 => 'ps_shoppingcart',
                9 => 'ps_mainmenu',
                10 => 'ps_searchbar',
                11 => 'ps_emailsubscription',
                12 => 'ps_socialfollow',
                13 => 'ps_customeraccountlinks',
                14 => 'productcomments',
                15 => 'ps_categorytree',
                16 => 'ps_facetedsearch',
                17 => 'contactform',
                18 => 'ps_sharebuttons',
                19 => 'graphnvd3',
                20 => 'statsdata',
                21 => 'dashactivity',
                22 => 'statscatalog',
                23 => 'statsbestmanufacturers',
                24 => 'statsforecast',
                25 => 'ps_distributionapiclient',
                26 => 'statsnewsletter',
                27 => 'gsitemap',
                28 => 'statspersonalinfos',
                29 => 'dashproducts',
                30 => 'ps_themecusto',
                31 => 'ps_wirepayment',
                32 => 'statsstock',
                33 => 'ps_checkpayment',
                34 => 'ps_faviconnotificationbo',
                35 => 'statscarrier',
                36 => 'statsbestproducts',
                37 => 'statsbestsuppliers',
                38 => 'statsbestcustomers',
                39 => 'ps_crossselling',
                40 => 'ps_emailalerts',
                41 => 'statsbestvouchers',
                42 => 'statsproduct',
                43 => 'ps_categoryproducts',
                44 => 'pagesnotfound',
                45 => 'statscheckup',
                46 => 'dashtrends',
                47 => 'ps_viewedproduct',
                48 => 'statsregistrations',
                49 => 'ps_googleanalytics',
                50 => 'statssearch',
                51 => 'statssales',
                52 => 'statsbestcategories',
                53 => 'gridhtml',
                54 => 'dashgoals',
                55 => 'ps_dataprivacy',
                56 => 'bmsprocurement',
                57 => 'autoupgrade',
                58 => 'angarfastconfig',
                59 => 'angarbanners',
                60 => 'angarbestsellers',
                61 => 'angarcmsinfo',
                62 => 'angarnewproducts',
                63 => 'angarslider',
                64 => 'angarspecials',
                65 => 'angarcontact',
                66 => 'angarscrolltop',
                67 => 'angarthemeconfigurator',
                68 => 'worldlineop',
                69 => 'alma',
            ],
            'ps_cache_dir' => '/opt/lampp/htdocs/tune4style/var/cache/prod/',
            'mail_themes_uri' => '/mails/themes',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => [
                'default' => 'doctrine.orm.default_entity_manager',
            ],
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => [

            ],
            'doctrine.connections' => [
                'default' => 'doctrine.dbal.default_connection',
            ],
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.metadata.attribute.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AttributeDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => false,
            'doctrine.orm.proxy_dir' => '/opt/lampp/htdocs/tune4style/var/cache/prod//doctrine/orm/Proxies',
            'doctrine.orm.proxy_namespace' => 'Proxies',
        ];
    }
}
