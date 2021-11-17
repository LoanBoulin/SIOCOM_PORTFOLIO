<?php

namespace App\Entity;

use App\Repository\PostRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PostRepository::class)
 */
class Post
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateTimePost;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\ManyToMany(targetEntity=Groupe::class, inversedBy="posts")
     */
    private $id_groupe;

    /**
     * @ORM\ManyToOne(targetEntity=TypePost::class, inversedBy="posts")
     */
    private $type_id;

    /**
     * @ORM\ManyToMany(targetEntity=Ressource::class, mappedBy="post_id")
     */
    private $ressources;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="posts")
     */
    private $user;

    public function __construct()
    {
        $this->id_groupe = new ArrayCollection();
        $this->ressources = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateTimePost(): ?\DateTimeInterface
    {
        return $this->dateTimePost;
    }

    public function setDateTimePost(\DateTimeInterface $dateTimePost): self
    {
        $this->dateTimePost = $dateTimePost;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection|Groupe[]
     */
    public function getIdGroupe(): Collection
    {
        return $this->id_groupe;
    }

    public function addIdGroupe(Groupe $idGroupe): self
    {
        if (!$this->id_groupe->contains($idGroupe)) {
            $this->id_groupe[] = $idGroupe;
        }

        return $this;
    }

    public function removeIdGroupe(Groupe $idGroupe): self
    {
        $this->id_groupe->removeElement($idGroupe);

        return $this;
    }

    public function getTypeId(): ?TypePost
    {
        return $this->type_id;
    }

    public function setTypeId(?TypePost $type_id): self
    {
        $this->type_id = $type_id;

        return $this;
    }

    /**
     * @return Collection|Ressource[]
     */
    public function getRessources(): Collection
    {
        return $this->ressources;
    }

    public function addRessource(Ressource $ressource): self
    {
        if (!$this->ressources->contains($ressource)) {
            $this->ressources[] = $ressource;
            $ressource->addPostId($this);
        }

        return $this;
    }

    public function removeRessource(Ressource $ressource): self
    {
        if ($this->ressources->removeElement($ressource)) {
            $ressource->removePostId($this);
        }

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
