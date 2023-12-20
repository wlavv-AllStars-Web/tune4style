<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder58630 = null;
    private $initializer40715 = null;
    private static $publicPropertiesb01a0 = [
        
    ];
    public function getConnection()
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'getConnection', array(), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'getMetadataFactory', array(), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'getExpressionBuilder', array(), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'beginTransaction', array(), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'getCache', array(), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->getCache();
    }
    public function transactional($func)
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'transactional', array('func' => $func), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'wrapInTransaction', array('func' => $func), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'commit', array(), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->commit();
    }
    public function rollback()
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'rollback', array(), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'getClassMetadata', array('className' => $className), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'createQuery', array('dql' => $dql), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'createNamedQuery', array('name' => $name), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'createQueryBuilder', array(), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'flush', array('entity' => $entity), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'clear', array('entityName' => $entityName), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->clear($entityName);
    }
    public function close()
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'close', array(), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->close();
    }
    public function persist($entity)
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'persist', array('entity' => $entity), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'remove', array('entity' => $entity), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'refresh', array('entity' => $entity), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'detach', array('entity' => $entity), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'merge', array('entity' => $entity), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'getRepository', array('entityName' => $entityName), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'contains', array('entity' => $entity), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'getEventManager', array(), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'getConfiguration', array(), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'isOpen', array(), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'getUnitOfWork', array(), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'getProxyFactory', array(), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'initializeObject', array('obj' => $obj), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'getFilters', array(), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'isFiltersStateClean', array(), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, 'hasFilters', array(), $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        return $this->valueHolder58630->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer40715 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder58630) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder58630 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder58630->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer40715 && ($this->initializer40715->__invoke($valueHolder58630, $this, '__get', ['name' => $name], $this->initializer40715) || 1) && $this->valueHolder58630 = $valueHolder58630;
        if (isset(self::$publicPropertiesb01a0[$name])) {
            return $this->valueHolder58630->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
