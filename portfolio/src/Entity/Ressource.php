<?php

namespace App\Entity;

use App\Repository\RessourceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RessourceRepository::class)
 */
class Ressource
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nom;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $lien;

    /**
     * @ORM\ManyToMany(targetEntity=Post::class, inversedBy="ressources")
     */
    private $post_id;

    /**
     * @ORM\ManyToMany(targetEntity=ProjetEquipe::class, mappedBy="ressource_id")
     */
    private $projetEquipes;

    public function __construct()
    {
        $this->post_id = new ArrayCollection();
        $this->projetEquipes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getLien(): ?string
    {
        return $this->lien;
    }

    public function setLien(?string $lien): self
    {
        $this->lien = $lien;

        return $this;
    }

    /**
     * @return Collection|Post[]
     */
    public function getPostId(): Collection
    {
        return $this->post_id;
    }

    public function addPostId(Post $postId): self
    {
        if (!$this->post_id->contains($postId)) {
            $this->post_id[] = $postId;
        }

        return $this;
    }

    public function removePostId(Post $postId): self
    {
        $this->post_id->removeElement($postId);

        return $this;
    }

    /**
     * @return Collection|ProjetEquipe[]
     */
    public function getProjetEquipes(): Collection
    {
        return $this->projetEquipes;
    }

    public function addProjetEquipe(ProjetEquipe $projetEquipe): self
    {
        if (!$this->projetEquipes->contains($projetEquipe)) {
            $this->projetEquipes[] = $projetEquipe;
            $projetEquipe->addRessourceId($this);
        }

        return $this;
    }

    public function removeProjetEquipe(ProjetEquipe $projetEquipe): self
    {
        if ($this->projetEquipes->removeElement($projetEquipe)) {
            $projetEquipe->removeRessourceId($this);
        }

        return $this;
    }
}
