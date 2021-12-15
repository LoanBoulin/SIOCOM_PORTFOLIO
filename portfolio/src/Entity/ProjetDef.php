<?php

namespace App\Entity;

use App\Repository\ProjetDefRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProjetDefRepository::class)
 */
class ProjetDef
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $dateDebut;

    /**
     * @ORM\Column(type="date")
     */
    private $dateFin;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $libelle;

    /**
     * @ORM\ManyToMany(targetEntity=Matiere::class, inversedBy="projetDefs")
     */
    private $matiere;

    /**
     * @ORM\ManyToMany(targetEntity=Enseignant::class, inversedBy="projetDefs")
     */
    private $enseignant;

    /**
     * @ORM\OneToMany(targetEntity=Groupe::class, mappedBy="projetDef")
     */
    private $groupeTravail;

    /**
     * @ORM\ManyToOne(targetEntity=Groupe::class, inversedBy="projetDefs")
     */
    private $groupe;





    public function __construct()
    {
        $this->matiere = new ArrayCollection();
        $this->enseignant = new ArrayCollection();
        $this->groupeTravail = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
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
     * @return Collection|Matiere[]
     */
    public function getMatiere(): Collection
    {
        return $this->matiere;
    }

    public function addMatiere(Matiere $matiere): self
    {
        if (!$this->matiere->contains($matiere)) {
            $this->matiere[] = $matiere;
        }

        return $this;
    }

    public function removeMatiere(Matiere $matiere): self
    {
        $this->matiere->removeElement($matiere);

        return $this;
    }

    /**
     * @return Collection|Enseignant[]
     */
    public function getEnseignant(): Collection
    {
        return $this->enseignant;
    }

    public function addEnseignant(Enseignant $enseignant): self
    {
        if (!$this->enseignant->contains($enseignant)) {
            $this->enseignant[] = $enseignant;
        }

        return $this;
    }

    public function removeEnseignant(Enseignant $enseignant): self
    {
        $this->enseignant->removeElement($enseignant);

        return $this;
    }

    /**
     * @return Collection|Groupe[]
     */
    public function getGroupeTravail(): Collection
    {
        return $this->groupeTravail;
    }

    public function addGroupeTravail(Groupe $groupeTravail): self
    {
        if (!$this->groupeTravail->contains($groupeTravail)) {
            $this->groupeTravail[] = $groupeTravail;
            $groupeTravail->setProjetDef($this);
        }

        return $this;
    }

    public function removeGroupeTravail(Groupe $groupeTravail): self
    {
        if ($this->groupeTravail->removeElement($groupeTravail)) {
            // set the owning side to null (unless already changed)
            if ($groupeTravail->getProjetDef() === $this) {
                $groupeTravail->setProjetDef(null);
            }
        }

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
