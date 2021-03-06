<?php

namespace App\Entity;


use App\Repository\GroupeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GroupeRepository::class)
 */
class Groupe
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $libelle;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, inversedBy="groupes")
     */
    private $user_id;

    /**
     * @ORM\ManyToMany(targetEntity=Post::class, mappedBy="id_groupe")
     */
    private $posts;

    /**
     * @ORM\ManyToOne(targetEntity=GroupeType::class, inversedBy="groupes")
     */
    private $groupe_type;



    /**
     * @ORM\ManyToMany(targetEntity=Ressource::class, mappedBy="groupe")
     */
    private $ressources;

    /**
     * @ORM\ManyToOne(targetEntity=ProjetDef::class, inversedBy="groupeTravail")
     */
    private $projetDef;

    /**
     * @ORM\OneToMany(targetEntity=ProjetDef::class, mappedBy="groupe")
     */
    private $projetDefs;











    public function __construct()
    {
        $this->user_id = new ArrayCollection();
        $this->posts = new ArrayCollection();
        $this->ressources = new ArrayCollection();
        $this->projetDefs = new ArrayCollection();
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
     * @return Collection|User[]
     */
    public function getUserId(): Collection
    {
        return $this->user_id;
    }

    public function addUserId(User $userId): self
    {
        if (!$this->user_id->contains($userId)) {
            $this->user_id[] = $userId;
        }

        return $this;
    }

    public function removeUserId(User $userId): self
    {
        $this->user_id->removeElement($userId);

        return $this;
    }

    /**
     * @return Collection|Post[]
     */
    public function getPosts(): Collection
    {
        return $this->posts;
    }

    public function addPost(Post $post): self
    {
        if (!$this->posts->contains($post)) {
            $this->posts[] = $post;
            $post->addIdGroupe($this);
        }

        return $this;
    }

    public function removePost(Post $post): self
    {
        if ($this->posts->removeElement($post)) {
            $post->removeIdGroupe($this);
        }

        return $this;
    }

    public function getGroupeType(): ?GroupeType
    {
        return $this->groupe_type;
    }

    public function setGroupeType(?GroupeType $groupe_type): self
    {
        $this->groupe_type = $groupe_type;

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
            $ressource->addGroupe($this);
        }

        return $this;
    }

    public function removeRessource(Ressource $ressource): self
    {
        if ($this->ressources->removeElement($ressource)) {
            $ressource->removeGroupe($this);
        }

        return $this;
    }

    public function getProjetDef(): ?ProjetDef
    {
        return $this->projetDef;
    }

    public function setProjetDef(?ProjetDef $projetDef): self
    {
        $this->projetDef = $projetDef;

        return $this;
    }

    /**
     * @return Collection|ProjetDef[]
     */
    public function getProjetDefs(): Collection
    {
        return $this->projetDefs;
    }

    public function addProjetDef(ProjetDef $projetDef): self
    {
        if (!$this->projetDefs->contains($projetDef)) {
            $this->projetDefs[] = $projetDef;
            $projetDef->setGroupe($this);
        }

        return $this;
    }

    public function removeProjetDef(ProjetDef $projetDef): self
    {
        if ($this->projetDefs->removeElement($projetDef)) {
            // set the owning side to null (unless already changed)
            if ($projetDef->getGroupe() === $this) {
                $projetDef->setGroupe(null);
            }
        }

        return $this;
    }






}

