<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Elevation extends \App\Entity\Elevation implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Elevation' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Elevation' . "\0" . 'nb_poutres', '' . "\0" . 'App\\Entity\\Elevation' . "\0" . 'LongueurPoutre', '' . "\0" . 'App\\Entity\\Elevation' . "\0" . 'TaillePoutre', '' . "\0" . 'App\\Entity\\Elevation' . "\0" . 'TypeMateriauxMur', '' . "\0" . 'App\\Entity\\Elevation' . "\0" . 'HauteurMur', '' . "\0" . 'App\\Entity\\Elevation' . "\0" . 'NombreFenetre', '' . "\0" . 'App\\Entity\\Elevation' . "\0" . 'TypeFenetre', '' . "\0" . 'App\\Entity\\Elevation' . "\0" . 'TypeLinteaux', '' . "\0" . 'App\\Entity\\Elevation' . "\0" . 'prix'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Elevation' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Elevation' . "\0" . 'nb_poutres', '' . "\0" . 'App\\Entity\\Elevation' . "\0" . 'LongueurPoutre', '' . "\0" . 'App\\Entity\\Elevation' . "\0" . 'TaillePoutre', '' . "\0" . 'App\\Entity\\Elevation' . "\0" . 'TypeMateriauxMur', '' . "\0" . 'App\\Entity\\Elevation' . "\0" . 'HauteurMur', '' . "\0" . 'App\\Entity\\Elevation' . "\0" . 'NombreFenetre', '' . "\0" . 'App\\Entity\\Elevation' . "\0" . 'TypeFenetre', '' . "\0" . 'App\\Entity\\Elevation' . "\0" . 'TypeLinteaux', '' . "\0" . 'App\\Entity\\Elevation' . "\0" . 'prix'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Elevation $proxy) {
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
    public function getNbPoutres(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbPoutres', []);

        return parent::getNbPoutres();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbPoutres(int $nb_poutres): \App\Entity\Elevation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbPoutres', [$nb_poutres]);

        return parent::setNbPoutres($nb_poutres);
    }

    /**
     * {@inheritDoc}
     */
    public function getLongueurPoutre(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLongueurPoutre', []);

        return parent::getLongueurPoutre();
    }

    /**
     * {@inheritDoc}
     */
    public function setLongueurPoutre(float $LongueurPoutre): \App\Entity\Elevation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLongueurPoutre', [$LongueurPoutre]);

        return parent::setLongueurPoutre($LongueurPoutre);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaillePoutre(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaillePoutre', []);

        return parent::getTaillePoutre();
    }

    /**
     * {@inheritDoc}
     */
    public function setTaillePoutre(float $TaillePoutre): \App\Entity\Elevation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTaillePoutre', [$TaillePoutre]);

        return parent::setTaillePoutre($TaillePoutre);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeMateriauxMur(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeMateriauxMur', []);

        return parent::getTypeMateriauxMur();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeMateriauxMur(string $TypeMateriauxMur): \App\Entity\Elevation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeMateriauxMur', [$TypeMateriauxMur]);

        return parent::setTypeMateriauxMur($TypeMateriauxMur);
    }

    /**
     * {@inheritDoc}
     */
    public function getHauteurMur(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHauteurMur', []);

        return parent::getHauteurMur();
    }

    /**
     * {@inheritDoc}
     */
    public function setHauteurMur(float $HauteurMur): \App\Entity\Elevation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHauteurMur', [$HauteurMur]);

        return parent::setHauteurMur($HauteurMur);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombreFenetre(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombreFenetre', []);

        return parent::getNombreFenetre();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombreFenetre(int $NombreFenetre): \App\Entity\Elevation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombreFenetre', [$NombreFenetre]);

        return parent::setNombreFenetre($NombreFenetre);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeFenetre(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeFenetre', []);

        return parent::getTypeFenetre();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeFenetre(string $TypeFenetre): \App\Entity\Elevation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeFenetre', [$TypeFenetre]);

        return parent::setTypeFenetre($TypeFenetre);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeLinteaux(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeLinteaux', []);

        return parent::getTypeLinteaux();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeLinteaux(string $TypeLinteaux): \App\Entity\Elevation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeLinteaux', [$TypeLinteaux]);

        return parent::setTypeLinteaux($TypeLinteaux);
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
    public function setPrix(float $prix): \App\Entity\Elevation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrix', [$prix]);

        return parent::setPrix($prix);
    }

}