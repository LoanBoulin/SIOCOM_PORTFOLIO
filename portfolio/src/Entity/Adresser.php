<?php

namespace App\Entity;

use App\Repository\AdresserRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AdresserRepository::class)
 */
class Adresser
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isAdressed;

    /**
     * @ORM\ManyToOne(targetEntity=Groupe::class, inversedBy="adressers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $groupe;

    /**
     * @ORM\ManyToOne(targetEntity=ProjetDef::class, inversedBy="Projets")
     * @ORM\JoinColumn(nullable=false)
     */
    private $projet;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIsAdressed(): ?bool
    {
        return $this->isAdressed;
    }

    public function setIsAdressed(bool $isAdressed): self
    {
        $this->isAdressed = $isAdressed;

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

    public function getProjet(): ?ProjetDef
    {
        return $this->projet;
    }

    public function setProjet(?ProjetDef $projet): self
    {
        $this->projet = $projet;

        return $this;
    }
}
