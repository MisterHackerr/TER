<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Ventilation extends \App\Entity\Ventilation implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Ventilation' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Ventilation' . "\0" . 'typeVentilation', '' . "\0" . 'App\\Entity\\Ventilation' . "\0" . 'surfaceChambreSalon', '' . "\0" . 'App\\Entity\\Ventilation' . "\0" . 'surfaceCuisineWc', '' . "\0" . 'App\\Entity\\Ventilation' . "\0" . 'prix'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Ventilation' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Ventilation' . "\0" . 'typeVentilation', '' . "\0" . 'App\\Entity\\Ventilation' . "\0" . 'surfaceChambreSalon', '' . "\0" . 'App\\Entity\\Ventilation' . "\0" . 'surfaceCuisineWc', '' . "\0" . 'App\\Entity\\Ventilation' . "\0" . 'prix'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Ventilation $proxy) {
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
    public function getTypeVentilation(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeVentilation', []);

        return parent::getTypeVentilation();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeVentilation(string $typeVentilation): \App\Entity\Ventilation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeVentilation', [$typeVentilation]);

        return parent::setTypeVentilation($typeVentilation);
    }

    /**
     * {@inheritDoc}
     */
    public function getSurfaceChambreSalon(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSurfaceChambreSalon', []);

        return parent::getSurfaceChambreSalon();
    }

    /**
     * {@inheritDoc}
     */
    public function setSurfaceChambreSalon(int $surfaceChambreSalon): \App\Entity\Ventilation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSurfaceChambreSalon', [$surfaceChambreSalon]);

        return parent::setSurfaceChambreSalon($surfaceChambreSalon);
    }

    /**
     * {@inheritDoc}
     */
    public function getSurfaceCuisineWc(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSurfaceCuisineWc', []);

        return parent::getSurfaceCuisineWc();
    }

    /**
     * {@inheritDoc}
     */
    public function setSurfaceCuisineWc(int $surfaceCuisineWc): \App\Entity\Ventilation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSurfaceCuisineWc', [$surfaceCuisineWc]);

        return parent::setSurfaceCuisineWc($surfaceCuisineWc);
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
    public function setPrix(float $prix): \App\Entity\Ventilation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrix', [$prix]);

        return parent::setPrix($prix);
    }

}
