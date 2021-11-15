<?php

namespace Container4BvOugU;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6bd1c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd2ced = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesba80d = [
        
    ];

    public function getConnection()
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, 'getConnection', array(), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        return $this->valueHolder6bd1c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, 'getMetadataFactory', array(), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        return $this->valueHolder6bd1c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, 'getExpressionBuilder', array(), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        return $this->valueHolder6bd1c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, 'beginTransaction', array(), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        return $this->valueHolder6bd1c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, 'getCache', array(), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        return $this->valueHolder6bd1c->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, 'transactional', array('func' => $func), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        return $this->valueHolder6bd1c->transactional($func);
    }

    public function commit()
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, 'commit', array(), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        return $this->valueHolder6bd1c->commit();
    }

    public function rollback()
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, 'rollback', array(), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        return $this->valueHolder6bd1c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, 'getClassMetadata', array('className' => $className), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        return $this->valueHolder6bd1c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, 'createQuery', array('dql' => $dql), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        return $this->valueHolder6bd1c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, 'createNamedQuery', array('name' => $name), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        return $this->valueHolder6bd1c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        return $this->valueHolder6bd1c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        return $this->valueHolder6bd1c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, 'createQueryBuilder', array(), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        return $this->valueHolder6bd1c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, 'flush', array('entity' => $entity), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        return $this->valueHolder6bd1c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        return $this->valueHolder6bd1c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        return $this->valueHolder6bd1c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        return $this->valueHolder6bd1c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, 'clear', array('entityName' => $entityName), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        return $this->valueHolder6bd1c->clear($entityName);
    }

    public function close()
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, 'close', array(), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        return $this->valueHolder6bd1c->close();
    }

    public function persist($entity)
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, 'persist', array('entity' => $entity), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        return $this->valueHolder6bd1c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, 'remove', array('entity' => $entity), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        return $this->valueHolder6bd1c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, 'refresh', array('entity' => $entity), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        return $this->valueHolder6bd1c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, 'detach', array('entity' => $entity), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        return $this->valueHolder6bd1c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, 'merge', array('entity' => $entity), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        return $this->valueHolder6bd1c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        return $this->valueHolder6bd1c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        return $this->valueHolder6bd1c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        return $this->valueHolder6bd1c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, 'contains', array('entity' => $entity), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        return $this->valueHolder6bd1c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, 'getEventManager', array(), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        return $this->valueHolder6bd1c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, 'getConfiguration', array(), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        return $this->valueHolder6bd1c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, 'isOpen', array(), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        return $this->valueHolder6bd1c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, 'getUnitOfWork', array(), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        return $this->valueHolder6bd1c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        return $this->valueHolder6bd1c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        return $this->valueHolder6bd1c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, 'getProxyFactory', array(), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        return $this->valueHolder6bd1c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, 'initializeObject', array('obj' => $obj), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        return $this->valueHolder6bd1c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, 'getFilters', array(), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        return $this->valueHolder6bd1c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, 'isFiltersStateClean', array(), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        return $this->valueHolder6bd1c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, 'hasFilters', array(), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        return $this->valueHolder6bd1c->hasFilters();
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

        $instance->initializerd2ced = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6bd1c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6bd1c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6bd1c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, '__get', ['name' => $name], $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        if (isset(self::$publicPropertiesba80d[$name])) {
            return $this->valueHolder6bd1c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6bd1c;

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

        $targetObject = $this->valueHolder6bd1c;
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
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6bd1c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6bd1c;
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
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, '__isset', array('name' => $name), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6bd1c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6bd1c;
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
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, '__unset', array('name' => $name), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6bd1c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6bd1c;
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
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, '__clone', array(), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        $this->valueHolder6bd1c = clone $this->valueHolder6bd1c;
    }

    public function __sleep()
    {
        $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, '__sleep', array(), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;

        return array('valueHolder6bd1c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd2ced = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd2ced;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd2ced && ($this->initializerd2ced->__invoke($valueHolder6bd1c, $this, 'initializeProxy', array(), $this->initializerd2ced) || 1) && $this->valueHolder6bd1c = $valueHolder6bd1c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6bd1c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6bd1c;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
