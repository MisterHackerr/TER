<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Cloison extends \App\Entity\Cloison implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Cloison' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Cloison' . "\0" . 'prix', '' . "\0" . 'App\\Entity\\Cloison' . "\0" . 'cloisonsAmovibles', '' . "\0" . 'App\\Entity\\Cloison' . "\0" . 'cloisonsSeches', '' . "\0" . 'App\\Entity\\Cloison' . "\0" . 'cloisonsPiecesHumides', '' . "\0" . 'App\\Entity\\Cloison' . "\0" . 'cloisonsVerre', '' . "\0" . 'App\\Entity\\Cloison' . "\0" . 'cloisonsJaponaises', '' . "\0" . 'App\\Entity\\Cloison' . "\0" . 'claustraInterieur', '' . "\0" . 'App\\Entity\\Cloison' . "\0" . 'cloisonsVitreesStyleAtelier', '' . "\0" . 'App\\Entity\\Cloison' . "\0" . 'cloisonsVegetales'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Cloison' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Cloison' . "\0" . 'prix', '' . "\0" . 'App\\Entity\\Cloison' . "\0" . 'cloisonsAmovibles', '' . "\0" . 'App\\Entity\\Cloison' . "\0" . 'cloisonsSeches', '' . "\0" . 'App\\Entity\\Cloison' . "\0" . 'cloisonsPiecesHumides', '' . "\0" . 'App\\Entity\\Cloison' . "\0" . 'cloisonsVerre', '' . "\0" . 'App\\Entity\\Cloison' . "\0" . 'cloisonsJaponaises', '' . "\0" . 'App\\Entity\\Cloison' . "\0" . 'claustraInterieur', '' . "\0" . 'App\\Entity\\Cloison' . "\0" . 'cloisonsVitreesStyleAtelier', '' . "\0" . 'App\\Entity\\Cloison' . "\0" . 'cloisonsVegetales'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Cloison $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
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
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
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
    public function getPrix(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrix', []);

        return parent::getPrix();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrix(float $prix): \App\Entity\Cloison
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrix', [$prix]);

        return parent::setPrix($prix);
    }

    /**
     * {@inheritDoc}
     */
    public function getCloisonsAmovibles(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCloisonsAmovibles', []);

        return parent::getCloisonsAmovibles();
    }

    /**
     * {@inheritDoc}
     */
    public function setCloisonsAmovibles(?float $cloisonsAmovibles): \App\Entity\Cloison
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCloisonsAmovibles', [$cloisonsAmovibles]);

        return parent::setCloisonsAmovibles($cloisonsAmovibles);
    }

    /**
     * {@inheritDoc}
     */
    public function getCloisonsSeches(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCloisonsSeches', []);

        return parent::getCloisonsSeches();
    }

    /**
     * {@inheritDoc}
     */
    public function setCloisonsSeches(?float $cloisonsSeches): \App\Entity\Cloison
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCloisonsSeches', [$cloisonsSeches]);

        return parent::setCloisonsSeches($cloisonsSeches);
    }

    /**
     * {@inheritDoc}
     */
    public function getCloisonsPiecesHumides(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCloisonsPiecesHumides', []);

        return parent::getCloisonsPiecesHumides();
    }

    /**
     * {@inheritDoc}
     */
    public function setCloisonsPiecesHumides(?float $cloisonsPiecesHumides): \App\Entity\Cloison
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCloisonsPiecesHumides', [$cloisonsPiecesHumides]);

        return parent::setCloisonsPiecesHumides($cloisonsPiecesHumides);
    }

    /**
     * {@inheritDoc}
     */
    public function getCloisonsVerre(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCloisonsVerre', []);

        return parent::getCloisonsVerre();
    }

    /**
     * {@inheritDoc}
     */
    public function setCloisonsVerre(?float $cloisonsVerre): \App\Entity\Cloison
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCloisonsVerre', [$cloisonsVerre]);

        return parent::setCloisonsVerre($cloisonsVerre);
    }

    /**
     * {@inheritDoc}
     */
    public function getCloisonsJaponaises(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCloisonsJaponaises', []);

        return parent::getCloisonsJaponaises();
    }

    /**
     * {@inheritDoc}
     */
    public function setCloisonsJaponaises(?float $cloisonsJaponaises): \App\Entity\Cloison
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCloisonsJaponaises', [$cloisonsJaponaises]);

        return parent::setCloisonsJaponaises($cloisonsJaponaises);
    }

    /**
     * {@inheritDoc}
     */
    public function getClaustraInterieur(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClaustraInterieur', []);

        return parent::getClaustraInterieur();
    }

    /**
     * {@inheritDoc}
     */
    public function setClaustraInterieur(?float $claustraInterieur): \App\Entity\Cloison
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClaustraInterieur', [$claustraInterieur]);

        return parent::setClaustraInterieur($claustraInterieur);
    }

    /**
     * {@inheritDoc}
     */
    public function getCloisonsVitreesStyleAtelier(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCloisonsVitreesStyleAtelier', []);

        return parent::getCloisonsVitreesStyleAtelier();
    }

    /**
     * {@inheritDoc}
     */
    public function setCloisonsVitreesStyleAtelier(?float $cloisonsVitreesStyleAtelier): \App\Entity\Cloison
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCloisonsVitreesStyleAtelier', [$cloisonsVitreesStyleAtelier]);

        return parent::setCloisonsVitreesStyleAtelier($cloisonsVitreesStyleAtelier);
    }

    /**
     * {@inheritDoc}
     */
    public function getCloisonsVegetales(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCloisonsVegetales', []);

        return parent::getCloisonsVegetales();
    }

    /**
     * {@inheritDoc}
     */
    public function setCloisonsVegetales(?float $cloisonsVegetales): \App\Entity\Cloison
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCloisonsVegetales', [$cloisonsVegetales]);

        return parent::setCloisonsVegetales($cloisonsVegetales);
    }

}