<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class RP extends \App\Entity\RP implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\RP' . "\0" . 'id', '' . "\0" . 'App\\Entity\\RP' . "\0" . 'libcourt', '' . "\0" . 'App\\Entity\\RP' . "\0" . 'besoin', '' . "\0" . 'App\\Entity\\RP' . "\0" . 'dateDebut', '' . "\0" . 'App\\Entity\\RP' . "\0" . 'dateFin', '' . "\0" . 'App\\Entity\\RP' . "\0" . 'environnement', '' . "\0" . 'App\\Entity\\RP' . "\0" . 'moyen', '' . "\0" . 'App\\Entity\\RP' . "\0" . 'dateModif', '' . "\0" . 'App\\Entity\\RP' . "\0" . 'activites', '' . "\0" . 'App\\Entity\\RP' . "\0" . 'commentaires', '' . "\0" . 'App\\Entity\\RP' . "\0" . 'localisation', '' . "\0" . 'App\\Entity\\RP' . "\0" . 'statut', '' . "\0" . 'App\\Entity\\RP' . "\0" . 'source', '' . "\0" . 'App\\Entity\\RP' . "\0" . 'cadre', '' . "\0" . 'App\\Entity\\RP' . "\0" . 'productions', '' . "\0" . 'App\\Entity\\RP' . "\0" . 'archivage', '' . "\0" . 'App\\Entity\\RP' . "\0" . 'niveauRP', '' . "\0" . 'App\\Entity\\RP' . "\0" . 'etudiant', '' . "\0" . 'App\\Entity\\RP' . "\0" . 'enseignant'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\RP' . "\0" . 'id', '' . "\0" . 'App\\Entity\\RP' . "\0" . 'libcourt', '' . "\0" . 'App\\Entity\\RP' . "\0" . 'besoin', '' . "\0" . 'App\\Entity\\RP' . "\0" . 'dateDebut', '' . "\0" . 'App\\Entity\\RP' . "\0" . 'dateFin', '' . "\0" . 'App\\Entity\\RP' . "\0" . 'environnement', '' . "\0" . 'App\\Entity\\RP' . "\0" . 'moyen', '' . "\0" . 'App\\Entity\\RP' . "\0" . 'dateModif', '' . "\0" . 'App\\Entity\\RP' . "\0" . 'activites', '' . "\0" . 'App\\Entity\\RP' . "\0" . 'commentaires', '' . "\0" . 'App\\Entity\\RP' . "\0" . 'localisation', '' . "\0" . 'App\\Entity\\RP' . "\0" . 'statut', '' . "\0" . 'App\\Entity\\RP' . "\0" . 'source', '' . "\0" . 'App\\Entity\\RP' . "\0" . 'cadre', '' . "\0" . 'App\\Entity\\RP' . "\0" . 'productions', '' . "\0" . 'App\\Entity\\RP' . "\0" . 'archivage', '' . "\0" . 'App\\Entity\\RP' . "\0" . 'niveauRP', '' . "\0" . 'App\\Entity\\RP' . "\0" . 'etudiant', '' . "\0" . 'App\\Entity\\RP' . "\0" . 'enseignant'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (RP $proxy) {
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
    public function getLibcourt(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLibcourt', []);

        return parent::getLibcourt();
    }

    /**
     * {@inheritDoc}
     */
    public function setLibcourt(string $libcourt): \App\Entity\RP
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLibcourt', [$libcourt]);

        return parent::setLibcourt($libcourt);
    }

    /**
     * {@inheritDoc}
     */
    public function getBesoin(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBesoin', []);

        return parent::getBesoin();
    }

    /**
     * {@inheritDoc}
     */
    public function setBesoin(?string $besoin): \App\Entity\RP
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBesoin', [$besoin]);

        return parent::setBesoin($besoin);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateDebut(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateDebut', []);

        return parent::getDateDebut();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateDebut(\DateTimeInterface $dateDebut): \App\Entity\RP
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateDebut', [$dateDebut]);

        return parent::setDateDebut($dateDebut);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateFin(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateFin', []);

        return parent::getDateFin();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateFin(\DateTimeInterface $dateFin): \App\Entity\RP
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateFin', [$dateFin]);

        return parent::setDateFin($dateFin);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnvironnement(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnvironnement', []);

        return parent::getEnvironnement();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnvironnement(?string $environnement): \App\Entity\RP
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnvironnement', [$environnement]);

        return parent::setEnvironnement($environnement);
    }

    /**
     * {@inheritDoc}
     */
    public function getMoyen(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMoyen', []);

        return parent::getMoyen();
    }

    /**
     * {@inheritDoc}
     */
    public function setMoyen(?string $moyen): \App\Entity\RP
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMoyen', [$moyen]);

        return parent::setMoyen($moyen);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateModif(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateModif', []);

        return parent::getDateModif();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateModif(?\DateTimeInterface $dateModif): \App\Entity\RP
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateModif', [$dateModif]);

        return parent::setDateModif($dateModif);
    }

    /**
     * {@inheritDoc}
     */
    public function getActivites(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActivites', []);

        return parent::getActivites();
    }

    /**
     * {@inheritDoc}
     */
    public function addActivite(\App\Entity\RPActivite $activite): \App\Entity\RP
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addActivite', [$activite]);

        return parent::addActivite($activite);
    }

    /**
     * {@inheritDoc}
     */
    public function removeActivite(\App\Entity\RPActivite $activite): \App\Entity\RP
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeActivite', [$activite]);

        return parent::removeActivite($activite);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommentaires(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommentaires', []);

        return parent::getCommentaires();
    }

    /**
     * {@inheritDoc}
     */
    public function addCommentaire(\App\Entity\Commentaire $commentaire): \App\Entity\RP
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCommentaire', [$commentaire]);

        return parent::addCommentaire($commentaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocalisation(): ?\App\Entity\Localisation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocalisation', []);

        return parent::getLocalisation();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocalisation(?\App\Entity\Localisation $localisation): \App\Entity\RP
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocalisation', [$localisation]);

        return parent::setLocalisation($localisation);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatut(): ?\App\Entity\Statut
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatut', []);

        return parent::getStatut();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatut(?\App\Entity\Statut $statut): \App\Entity\RP
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatut', [$statut]);

        return parent::setStatut($statut);
    }

    /**
     * {@inheritDoc}
     */
    public function getSource(): ?\App\Entity\Source
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSource', []);

        return parent::getSource();
    }

    /**
     * {@inheritDoc}
     */
    public function setSource(?\App\Entity\Source $source): \App\Entity\RP
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSource', [$source]);

        return parent::setSource($source);
    }

    /**
     * {@inheritDoc}
     */
    public function getCadre(): ?\App\Entity\Cadre
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCadre', []);

        return parent::getCadre();
    }

    /**
     * {@inheritDoc}
     */
    public function setCadre(?\App\Entity\Cadre $cadre): \App\Entity\RP
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCadre', [$cadre]);

        return parent::setCadre($cadre);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductions(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductions', []);

        return parent::getProductions();
    }

    /**
     * {@inheritDoc}
     */
    public function addProduction(\App\Entity\Production $production): \App\Entity\RP
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProduction', [$production]);

        return parent::addProduction($production);
    }

    /**
     * {@inheritDoc}
     */
    public function removeProduction(\App\Entity\Production $production): \App\Entity\RP
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeProduction', [$production]);

        return parent::removeProduction($production);
    }

    /**
     * {@inheritDoc}
     */
    public function getArchivage(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArchivage', []);

        return parent::getArchivage();
    }

    /**
     * {@inheritDoc}
     */
    public function setArchivage(?bool $archivage): \App\Entity\RP
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArchivage', [$archivage]);

        return parent::setArchivage($archivage);
    }

    /**
     * {@inheritDoc}
     */
    public function getNiveauRP(): ?\App\Entity\NiveauRP
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNiveauRP', []);

        return parent::getNiveauRP();
    }

    /**
     * {@inheritDoc}
     */
    public function setNiveauRP(?\App\Entity\NiveauRP $niveauRP): \App\Entity\RP
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNiveauRP', [$niveauRP]);

        return parent::setNiveauRP($niveauRP);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtudiant(): ?\App\Entity\Etudiant
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtudiant', []);

        return parent::getEtudiant();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtudiant(?\App\Entity\Etudiant $etudiant): \App\Entity\RP
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtudiant', [$etudiant]);

        return parent::setEtudiant($etudiant);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnseignant(): ?\App\Entity\Enseignant
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnseignant', []);

        return parent::getEnseignant();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnseignant(?\App\Entity\Enseignant $enseignant): \App\Entity\RP
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnseignant', [$enseignant]);

        return parent::setEnseignant($enseignant);
    }

}