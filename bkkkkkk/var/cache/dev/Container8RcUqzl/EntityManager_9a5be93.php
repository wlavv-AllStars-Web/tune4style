<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere444e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7144e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6c649 = [
        
    ];

    public function getConnection()
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'getConnection', array(), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return $this->valueHoldere444e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'getMetadataFactory', array(), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return $this->valueHoldere444e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'getExpressionBuilder', array(), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return $this->valueHoldere444e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'beginTransaction', array(), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return $this->valueHoldere444e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'getCache', array(), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return $this->valueHoldere444e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'transactional', array('func' => $func), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return $this->valueHoldere444e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return $this->valueHoldere444e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'commit', array(), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return $this->valueHoldere444e->commit();
    }

    public function rollback()
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'rollback', array(), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return $this->valueHoldere444e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'getClassMetadata', array('className' => $className), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return $this->valueHoldere444e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'createQuery', array('dql' => $dql), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return $this->valueHoldere444e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'createNamedQuery', array('name' => $name), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return $this->valueHoldere444e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return $this->valueHoldere444e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return $this->valueHoldere444e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'createQueryBuilder', array(), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return $this->valueHoldere444e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'flush', array('entity' => $entity), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return $this->valueHoldere444e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return $this->valueHoldere444e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return $this->valueHoldere444e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return $this->valueHoldere444e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'clear', array('entityName' => $entityName), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return $this->valueHoldere444e->clear($entityName);
    }

    public function close()
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'close', array(), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return $this->valueHoldere444e->close();
    }

    public function persist($entity)
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'persist', array('entity' => $entity), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return $this->valueHoldere444e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'remove', array('entity' => $entity), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return $this->valueHoldere444e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'refresh', array('entity' => $entity), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return $this->valueHoldere444e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'detach', array('entity' => $entity), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return $this->valueHoldere444e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'merge', array('entity' => $entity), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return $this->valueHoldere444e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return $this->valueHoldere444e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return $this->valueHoldere444e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return $this->valueHoldere444e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'contains', array('entity' => $entity), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return $this->valueHoldere444e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'getEventManager', array(), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return $this->valueHoldere444e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'getConfiguration', array(), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return $this->valueHoldere444e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'isOpen', array(), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return $this->valueHoldere444e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'getUnitOfWork', array(), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return $this->valueHoldere444e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return $this->valueHoldere444e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return $this->valueHoldere444e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'getProxyFactory', array(), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return $this->valueHoldere444e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'initializeObject', array('obj' => $obj), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return $this->valueHoldere444e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'getFilters', array(), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return $this->valueHoldere444e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'isFiltersStateClean', array(), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return $this->valueHoldere444e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'hasFilters', array(), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return $this->valueHoldere444e->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer7144e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere444e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere444e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere444e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, '__get', ['name' => $name], $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        if (isset(self::$publicProperties6c649[$name])) {
            return $this->valueHoldere444e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere444e;

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

        $targetObject = $this->valueHoldere444e;
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
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere444e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere444e;
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
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, '__isset', array('name' => $name), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere444e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere444e;
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
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, '__unset', array('name' => $name), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere444e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere444e;
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
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, '__clone', array(), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        $this->valueHoldere444e = clone $this->valueHoldere444e;
    }

    public function __sleep()
    {
        $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, '__sleep', array(), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;

        return array('valueHoldere444e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7144e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7144e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7144e && ($this->initializer7144e->__invoke($valueHoldere444e, $this, 'initializeProxy', array(), $this->initializer7144e) || 1) && $this->valueHoldere444e = $valueHoldere444e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere444e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere444e;
    }
}
