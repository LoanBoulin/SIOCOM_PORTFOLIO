<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Enseignant extends \App\Entity\Enseignant implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Enseignant' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Enseignant' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\Enseignant' . "\0" . 'prenom', '' . "\0" . 'App\\Entity\\Enseignant' . "\0" . 'rPs', '' . "\0" . 'App\\Entity\\Enseignant' . "\0" . 'matiere', '' . "\0" . 'App\\Entity\\Enseignant' . "\0" . 'niveau', '' . "\0" . 'App\\Entity\\Enseignant' . "\0" . 'stages'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Enseignant' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Enseignant' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\Enseignant' . "\0" . 'prenom', '' . "\0" . 'App\\Entity\\Enseignant' . "\0" . 'rPs', '' . "\0" . 'App\\Entity\\Enseignant' . "\0" . 'matiere', '' . "\0" . 'App\\Entity\\Enseignant' . "\0" . 'niveau', '' . "\0" . 'App\\Entity\\Enseignant' . "\0" . 'stages'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Enseignant $proxy) {
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
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
    public function getNom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom(string $nom): \App\Entity\Enseignant
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenom', []);

        return parent::getPrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenom(string $prenom): \App\Entity\Enseignant
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenom', [$prenom]);

        return parent::setPrenom($prenom);
    }

    /**
     * {@inheritDoc}
     */
    public function getRPs(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRPs', []);

        return parent::getRPs();
    }

    /**
     * {@inheritDoc}
     */
    public function addRP(\App\Entity\RP $rP): \App\Entity\Enseignant
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRP', [$rP]);

        return parent::addRP($rP);
    }

    /**
     * {@inheritDoc}
     */
    public function removeRP(\App\Entity\RP $rP): \App\Entity\Enseignant
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeRP', [$rP]);

        return parent::removeRP($rP);
    }

    /**
     * {@inheritDoc}
     */
    public function getMatiere(): ?\App\Entity\Matiere
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMatiere', []);

        return parent::getMatiere();
    }

    /**
     * {@inheritDoc}
     */
    public function setMatiere(?\App\Entity\Matiere $matiere): \App\Entity\Enseignant
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMatiere', [$matiere]);

        return parent::setMatiere($matiere);
    }

    /**
     * {@inheritDoc}
     */
    public function getNiveau(): ?\App\Entity\Niveau
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNiveau', []);

        return parent::getNiveau();
    }

    /**
     * {@inheritDoc}
     */
    public function setNiveau(?\App\Entity\Niveau $niveau): \App\Entity\Enseignant
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNiveau', [$niveau]);

        return parent::setNiveau($niveau);
    }

    /**
     * {@inheritDoc}
     */
    public function getStages(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStages', []);

        return parent::getStages();
    }

    /**
     * {@inheritDoc}
     */
    public function addStage(\App\Entity\Stage $stage): \App\Entity\Enseignant
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addStage', [$stage]);

        return parent::addStage($stage);
    }

    /**
     * {@inheritDoc}
     */
    public function removeStage(\App\Entity\Stage $stage): \App\Entity\Enseignant
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeStage', [$stage]);

        return parent::removeStage($stage);
    }

}
