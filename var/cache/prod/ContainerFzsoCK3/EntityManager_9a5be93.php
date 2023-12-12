<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder92654 = null;
    private $initializer95a6e = null;
    private static $publicPropertiesefcfa = [
        
    ];
    public function getConnection()
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'getConnection', array(), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        return $this->valueHolder92654->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'getMetadataFactory', array(), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        return $this->valueHolder92654->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'getExpressionBuilder', array(), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        return $this->valueHolder92654->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'beginTransaction', array(), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        return $this->valueHolder92654->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'getCache', array(), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        return $this->valueHolder92654->getCache();
    }
    public function transactional($func)
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'transactional', array('func' => $func), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        return $this->valueHolder92654->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'wrapInTransaction', array('func' => $func), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        return $this->valueHolder92654->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'commit', array(), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        return $this->valueHolder92654->commit();
    }
    public function rollback()
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'rollback', array(), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        return $this->valueHolder92654->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'getClassMetadata', array('className' => $className), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        return $this->valueHolder92654->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'createQuery', array('dql' => $dql), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        return $this->valueHolder92654->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'createNamedQuery', array('name' => $name), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        return $this->valueHolder92654->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        return $this->valueHolder92654->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        return $this->valueHolder92654->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'createQueryBuilder', array(), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        return $this->valueHolder92654->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'flush', array('entity' => $entity), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        return $this->valueHolder92654->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        return $this->valueHolder92654->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        return $this->valueHolder92654->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        return $this->valueHolder92654->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'clear', array('entityName' => $entityName), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        return $this->valueHolder92654->clear($entityName);
    }
    public function close()
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'close', array(), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        return $this->valueHolder92654->close();
    }
    public function persist($entity)
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'persist', array('entity' => $entity), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        return $this->valueHolder92654->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'remove', array('entity' => $entity), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        return $this->valueHolder92654->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'refresh', array('entity' => $entity), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        return $this->valueHolder92654->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'detach', array('entity' => $entity), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        return $this->valueHolder92654->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'merge', array('entity' => $entity), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        return $this->valueHolder92654->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        return $this->valueHolder92654->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        return $this->valueHolder92654->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'getRepository', array('entityName' => $entityName), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        return $this->valueHolder92654->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'contains', array('entity' => $entity), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        return $this->valueHolder92654->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'getEventManager', array(), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        return $this->valueHolder92654->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'getConfiguration', array(), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        return $this->valueHolder92654->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'isOpen', array(), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        return $this->valueHolder92654->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'getUnitOfWork', array(), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        return $this->valueHolder92654->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        return $this->valueHolder92654->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        return $this->valueHolder92654->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'getProxyFactory', array(), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        return $this->valueHolder92654->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'initializeObject', array('obj' => $obj), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        return $this->valueHolder92654->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'getFilters', array(), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        return $this->valueHolder92654->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'isFiltersStateClean', array(), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        return $this->valueHolder92654->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, 'hasFilters', array(), $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        return $this->valueHolder92654->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer95a6e = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder92654) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder92654 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder92654->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer95a6e && ($this->initializer95a6e->__invoke($valueHolder92654, $this, '__get', ['name' => $name], $this->initializer95a6e) || 1) && $this->valueHolder92654 = $valueHolder92654;
        if (isset(self::$publicPropertiesefcfa[$name])) {
            return $this->valueHolder92654->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
