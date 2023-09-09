<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder18e11 = null;
    private $initializer27a31 = null;
    private static $publicPropertiesc81a9 = [
        
    ];
    public function getConnection()
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'getConnection', array(), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return $this->valueHolder18e11->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'getMetadataFactory', array(), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return $this->valueHolder18e11->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'getExpressionBuilder', array(), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return $this->valueHolder18e11->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'beginTransaction', array(), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return $this->valueHolder18e11->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'getCache', array(), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return $this->valueHolder18e11->getCache();
    }
    public function transactional($func)
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'transactional', array('func' => $func), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return $this->valueHolder18e11->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'wrapInTransaction', array('func' => $func), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return $this->valueHolder18e11->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'commit', array(), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return $this->valueHolder18e11->commit();
    }
    public function rollback()
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'rollback', array(), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return $this->valueHolder18e11->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'getClassMetadata', array('className' => $className), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return $this->valueHolder18e11->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'createQuery', array('dql' => $dql), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return $this->valueHolder18e11->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'createNamedQuery', array('name' => $name), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return $this->valueHolder18e11->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return $this->valueHolder18e11->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return $this->valueHolder18e11->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'createQueryBuilder', array(), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return $this->valueHolder18e11->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'flush', array('entity' => $entity), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return $this->valueHolder18e11->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return $this->valueHolder18e11->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return $this->valueHolder18e11->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return $this->valueHolder18e11->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'clear', array('entityName' => $entityName), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return $this->valueHolder18e11->clear($entityName);
    }
    public function close()
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'close', array(), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return $this->valueHolder18e11->close();
    }
    public function persist($entity)
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'persist', array('entity' => $entity), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return $this->valueHolder18e11->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'remove', array('entity' => $entity), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return $this->valueHolder18e11->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'refresh', array('entity' => $entity), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return $this->valueHolder18e11->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'detach', array('entity' => $entity), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return $this->valueHolder18e11->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'merge', array('entity' => $entity), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return $this->valueHolder18e11->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return $this->valueHolder18e11->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return $this->valueHolder18e11->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'getRepository', array('entityName' => $entityName), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return $this->valueHolder18e11->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'contains', array('entity' => $entity), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return $this->valueHolder18e11->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'getEventManager', array(), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return $this->valueHolder18e11->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'getConfiguration', array(), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return $this->valueHolder18e11->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'isOpen', array(), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return $this->valueHolder18e11->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'getUnitOfWork', array(), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return $this->valueHolder18e11->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return $this->valueHolder18e11->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return $this->valueHolder18e11->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'getProxyFactory', array(), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return $this->valueHolder18e11->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'initializeObject', array('obj' => $obj), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return $this->valueHolder18e11->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'getFilters', array(), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return $this->valueHolder18e11->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'isFiltersStateClean', array(), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return $this->valueHolder18e11->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'hasFilters', array(), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return $this->valueHolder18e11->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer27a31 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder18e11) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder18e11 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder18e11->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, '__get', ['name' => $name], $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        if (isset(self::$publicPropertiesc81a9[$name])) {
            return $this->valueHolder18e11->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder18e11;
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
        $targetObject = $this->valueHolder18e11;
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
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder18e11;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder18e11;
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
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, '__isset', array('name' => $name), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder18e11;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder18e11;
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
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, '__unset', array('name' => $name), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder18e11;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder18e11;
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
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, '__clone', array(), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        $this->valueHolder18e11 = clone $this->valueHolder18e11;
    }
    public function __sleep()
    {
        $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, '__sleep', array(), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
        return array('valueHolder18e11');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer27a31 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer27a31;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer27a31 && ($this->initializer27a31->__invoke($valueHolder18e11, $this, 'initializeProxy', array(), $this->initializer27a31) || 1) && $this->valueHolder18e11 = $valueHolder18e11;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder18e11;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder18e11;
    }
}
