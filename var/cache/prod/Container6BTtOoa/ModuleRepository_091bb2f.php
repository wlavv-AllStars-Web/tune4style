<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder58630 = null;
    private $initializer40715 = null;
    private static $publicPropertiesb01a0 = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'getList', array(), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'getInstalledModules', array(), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'getMustBeConfiguredModules', array(), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'getUpgradableModules', array(), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'setActionUrls', array('collection' => $collection), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializer40715 = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolder58630) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder58630 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolder58630->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, '__get', ['name' => $name], $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        if (isset(self::$publicPropertiesb01a0[$name])) {
            return $this->valueHolder58630->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder58630;
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
        $targetObject = $this->valueHolder58630;
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
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder58630;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder58630;
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
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, '__isset', array('name' => $name), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder58630;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder58630;
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
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, '__unset', array('name' => $name), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder58630;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder58630;
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
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, '__clone', array(), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        $this->valueHolder58630 = clone $this->valueHolder58630;
    }
    public function __sleep()
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, '__sleep', array(), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return array('valueHolder58630');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer40715 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer40715;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'initializeProxy', array(), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder58630;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder58630;
    }
}
