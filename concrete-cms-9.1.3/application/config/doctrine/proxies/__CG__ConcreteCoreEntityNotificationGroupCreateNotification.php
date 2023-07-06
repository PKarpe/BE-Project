<?php

namespace DoctrineProxies\__CG__\Concrete\Core\Entity\Notification;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class GroupCreateNotification extends \Concrete\Core\Entity\Notification\GroupCreateNotification implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'create', 'nID', 'nDate', 'alerts'];
        }

        return ['__isInitialized__', 'create', 'nID', 'nDate', 'alerts'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (GroupCreateNotification $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getCreate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreate', []);

        return parent::getCreate();
    }

    /**
     * {@inheritDoc}
     */
    public function getListView()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getListView', []);

        return parent::getListView();
    }

    /**
     * {@inheritDoc}
     */
    public function getNotificationID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNotificationID', []);

        return parent::getNotificationID();
    }

    /**
     * {@inheritDoc}
     */
    public function getNotificationDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNotificationDate', []);

        return parent::getNotificationDate();
    }

    /**
     * {@inheritDoc}
     */
    public function getNotificationDateTimeZone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNotificationDateTimeZone', []);

        return parent::getNotificationDateTimeZone();
    }

    /**
     * {@inheritDoc}
     */
    public function setNotificationDate($nDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNotificationDate', [$nDate]);

        return parent::setNotificationDate($nDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlerts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlerts', []);

        return parent::getAlerts();
    }

}
