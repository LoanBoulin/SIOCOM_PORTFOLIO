<?php

namespace App\Entity;

use App\Repository\ProjetTypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProjetTypeRepository::class)
 */
class ProjetType
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity=ProjetDef::class, inversedBy="projetTypes")
     */
    private $projet;

    public function __construct()
    {
        $this->projet = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|ProjetDef[]
     */
    public function getProjet(): Collection
    {
        return $this->projet;
    }

    public function addProjet(ProjetDef $projet): self
    {
        if (!$this->projet->contains($projet)) {
            $this->projet[] = $projet;
        }

        return $this;
    }

    public function removeProjet(ProjetDef $projet): self
    {
        $this->projet->removeElement($projet);

        return $this;
    }
}
