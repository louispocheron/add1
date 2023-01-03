<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Associations extends \App\Entity\Associations implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Associations' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Associations' . "\0" . 'name', '' . "\0" . 'App\\Entity\\Associations' . "\0" . 'logo', '' . "\0" . 'App\\Entity\\Associations' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Associations' . "\0" . 'users', '' . "\0" . 'App\\Entity\\Associations' . "\0" . 'actions', '' . "\0" . 'App\\Entity\\Associations' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Associations' . "\0" . 'numeroSiret', '' . "\0" . 'App\\Entity\\Associations' . "\0" . 'region', '' . "\0" . 'App\\Entity\\Associations' . "\0" . 'departement'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Associations' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Associations' . "\0" . 'name', '' . "\0" . 'App\\Entity\\Associations' . "\0" . 'logo', '' . "\0" . 'App\\Entity\\Associations' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Associations' . "\0" . 'users', '' . "\0" . 'App\\Entity\\Associations' . "\0" . 'actions', '' . "\0" . 'App\\Entity\\Associations' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Associations' . "\0" . 'numeroSiret', '' . "\0" . 'App\\Entity\\Associations' . "\0" . 'region', '' . "\0" . 'App\\Entity\\Associations' . "\0" . 'departement'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Associations $proxy) {
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
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName(string $name): \App\Entity\Associations
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getLogo(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogo', []);

        return parent::getLogo();
    }

    /**
     * {@inheritDoc}
     */
    public function setLogo(string $logo): \App\Entity\Associations
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLogo', [$logo]);

        return parent::setLogo($logo);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(?string $description): \App\Entity\Associations
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsers(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsers', []);

        return parent::getUsers();
    }

    /**
     * {@inheritDoc}
     */
    public function addUser(\App\Entity\User $user): \App\Entity\Associations
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUser', [$user]);

        return parent::addUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function removeUser(\App\Entity\User $user): \App\Entity\Associations
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUser', [$user]);

        return parent::removeUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getActions(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActions', []);

        return parent::getActions();
    }

    /**
     * {@inheritDoc}
     */
    public function addAction(\App\Entity\Action $action): \App\Entity\Associations
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAction', [$action]);

        return parent::addAction($action);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAction(\App\Entity\Action $action): \App\Entity\Associations
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAction', [$action]);

        return parent::removeAction($action);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser(): ?\App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(?\App\Entity\User $user): \App\Entity\Associations
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumeroSiret(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumeroSiret', []);

        return parent::getNumeroSiret();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumeroSiret(string $numeroSiret): \App\Entity\Associations
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumeroSiret', [$numeroSiret]);

        return parent::setNumeroSiret($numeroSiret);
    }

    /**
     * {@inheritDoc}
     */
    public function getRegion(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRegion', []);

        return parent::getRegion();
    }

    /**
     * {@inheritDoc}
     */
    public function setRegion(?string $region): \App\Entity\Associations
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRegion', [$region]);

        return parent::setRegion($region);
    }

    /**
     * {@inheritDoc}
     */
    public function getDepartement(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDepartement', []);

        return parent::getDepartement();
    }

    /**
     * {@inheritDoc}
     */
    public function setDepartement(?string $departement): \App\Entity\Associations
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDepartement', [$departement]);

        return parent::setDepartement($departement);
    }

}
