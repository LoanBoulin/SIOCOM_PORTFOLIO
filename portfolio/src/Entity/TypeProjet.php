<?php

namespace App\Entity;

use App\Repository\TypeProjetRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TypeProjetRepository::class)
 */
class TypeProjet
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $libelle;

    /**
     * @ORM\ManyToMany(targetEntity=ProjetDef::class, inversedBy="typeProjets")
     */
    private $ProjetDef;


    public function __construct()
    {
        $this->ProjetDef = new ArrayCollection();
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
     * @return Collection|ProjetDef[]
     */
    public function getProjetDef(): Collection
    {
        return $this->ProjetDef;
    }

    public function addProjetDef(ProjetDef $projetDef): self
    {
        if (!$this->ProjetDef->contains($projetDef)) {
            $this->ProjetDef[] = $projetDef;
        }

        return $this;
    }

    public function removeProjetDef(ProjetDef $projetDef): self
    {
        $this->ProjetDef->removeElement($projetDef);

        return $this;
    }


}
