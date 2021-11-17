<?php

namespace App\Entity;

use App\Repository\ProjetEquipeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProjetEquipeRepository::class)
 */
class ProjetEquipe
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=90)
     */
    private $libelle;

    /**
     * @ORM\ManyToMany(targetEntity=Ressource::class, inversedBy="projetEquipes")
     */
    private $ressource_id;

    /**
     * @ORM\ManyToOne(targetEntity=Groupe::class, inversedBy="projetEquipes")
     */
    private $groupe;

    public function __construct()
    {
        $this->ressource_id = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * @return Collection|Ressource[]
     */
    public function getRessourceId(): Collection
    {
        return $this->ressource_id;
    }

    public function addRessourceId(Ressource $ressourceId): self
    {
        if (!$this->ressource_id->contains($ressourceId)) {
            $this->ressource_id[] = $ressourceId;
        }

        return $this;
    }

    public function removeRessourceId(Ressource $ressourceId): self
    {
        $this->ressource_id->removeElement($ressourceId);

        return $this;
    }

    public function getGroupe(): ?Groupe
    {
        return $this->groupe;
    }

    public function setGroupe(?Groupe $groupe): self
    {
        $this->groupe = $groupe;

        return $this;
    }
}
