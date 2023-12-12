<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \PrestaShop\PrestaShop\Core\Module\ModuleRepository|null wrapped object, if the proxy is initialized
     */
    private $valueHolder92654 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer95a6e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesefcfa = [
        
    ];

    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'getList', array(), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;

        return $this->valueHolder92654->getList();
    }

    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'getInstalledModules', array(), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;

        return $this->valueHolder92654->getInstalledModules();
    }

    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'getMustBeConfiguredModules', array(), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;

        return $this->valueHolder92654->getMustBeConfiguredModules();
    }

    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'getUpgradableModules', array(), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;

        return $this->valueHolder92654->getUpgradableModules();
    }

    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;

        return $this->valueHolder92654->getModule($moduleName);
    }

    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;

        return $this->valueHolder92654->getModulePath($moduleName);
    }

    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'setActionUrls', array('collection' => $collection), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;

        return $this->valueHolder92654->setActionUrls($collection);
    }

    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;

        return $this->valueHolder92654->clearCache($moduleName, $allShops);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);

        $instance->initializer95a6e = $initializer;

        return $instance;
    }

    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;

        if (! $this->valueHolder92654) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder92654 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);

        }

        $this->valueHolder92654->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }

    public function & __get($name)
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, '__get', ['name' => $name], $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;

        if (isset(self::$publicPropertiesefcfa[$name])) {
            return $this->valueHolder92654->$name;
        }

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder92654;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder92654;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder92654;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder92654;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, '__isset', array('name' => $name), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder92654;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder92654;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, '__unset', array('name' => $name), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder92654;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder92654;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, '__clone', array(), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;

        $this->valueHolder92654 = clone $this->valueHolder92654;
    }

    public function __sleep()
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, '__sleep', array(), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;

        return array('valueHolder92654');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer95a6e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer95a6e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'initializeProxy', array(), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder92654;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder92654;
    }
}
