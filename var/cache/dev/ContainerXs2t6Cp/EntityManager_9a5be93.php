<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc2994 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer90bb1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8251b = [
        
    ];

    public function getConnection()
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'getConnection', array(), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return $this->valueHolderc2994->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'getMetadataFactory', array(), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return $this->valueHolderc2994->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'getExpressionBuilder', array(), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return $this->valueHolderc2994->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'beginTransaction', array(), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return $this->valueHolderc2994->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'getCache', array(), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return $this->valueHolderc2994->getCache();
    }

    public function transactional($func)
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'transactional', array('func' => $func), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return $this->valueHolderc2994->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'wrapInTransaction', array('func' => $func), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return $this->valueHolderc2994->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'commit', array(), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return $this->valueHolderc2994->commit();
    }

    public function rollback()
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'rollback', array(), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return $this->valueHolderc2994->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'getClassMetadata', array('className' => $className), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return $this->valueHolderc2994->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'createQuery', array('dql' => $dql), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return $this->valueHolderc2994->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'createNamedQuery', array('name' => $name), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return $this->valueHolderc2994->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return $this->valueHolderc2994->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return $this->valueHolderc2994->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'createQueryBuilder', array(), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return $this->valueHolderc2994->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'flush', array('entity' => $entity), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return $this->valueHolderc2994->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return $this->valueHolderc2994->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return $this->valueHolderc2994->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return $this->valueHolderc2994->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'clear', array('entityName' => $entityName), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return $this->valueHolderc2994->clear($entityName);
    }

    public function close()
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'close', array(), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return $this->valueHolderc2994->close();
    }

    public function persist($entity)
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'persist', array('entity' => $entity), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return $this->valueHolderc2994->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'remove', array('entity' => $entity), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return $this->valueHolderc2994->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'refresh', array('entity' => $entity), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return $this->valueHolderc2994->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'detach', array('entity' => $entity), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return $this->valueHolderc2994->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'merge', array('entity' => $entity), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return $this->valueHolderc2994->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return $this->valueHolderc2994->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return $this->valueHolderc2994->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'getRepository', array('entityName' => $entityName), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return $this->valueHolderc2994->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'contains', array('entity' => $entity), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return $this->valueHolderc2994->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'getEventManager', array(), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return $this->valueHolderc2994->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'getConfiguration', array(), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return $this->valueHolderc2994->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'isOpen', array(), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return $this->valueHolderc2994->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'getUnitOfWork', array(), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return $this->valueHolderc2994->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return $this->valueHolderc2994->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return $this->valueHolderc2994->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'getProxyFactory', array(), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return $this->valueHolderc2994->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'initializeObject', array('obj' => $obj), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return $this->valueHolderc2994->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'getFilters', array(), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return $this->valueHolderc2994->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'isFiltersStateClean', array(), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return $this->valueHolderc2994->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'hasFilters', array(), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return $this->valueHolderc2994->hasFilters();
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

        $instance->initializer90bb1 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc2994) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc2994 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc2994->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, '__get', ['name' => $name], $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        if (isset(self::$publicProperties8251b[$name])) {
            return $this->valueHolderc2994->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc2994;

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

        $targetObject = $this->valueHolderc2994;
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
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc2994;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc2994;
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
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, '__isset', array('name' => $name), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc2994;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc2994;
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
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, '__unset', array('name' => $name), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc2994;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc2994;
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
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, '__clone', array(), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        $this->valueHolderc2994 = clone $this->valueHolderc2994;
    }

    public function __sleep()
    {
        $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, '__sleep', array(), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;

        return array('valueHolderc2994');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer90bb1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer90bb1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer90bb1 && ($this->initializer90bb1->__invoke($valueHolderc2994, $this, 'initializeProxy', array(), $this->initializer90bb1) || 1) && $this->valueHolderc2994 = $valueHolderc2994;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc2994;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc2994;
    }
}
