<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FilmRepository")
 */
class Film
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Titre;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $note;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Acteur", inversedBy="fkFilm")
     */
    private $fkActeur;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Genre", inversedBy="fkFilm")
     */
    private $fkGenre;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Realisateur", inversedBy="fkFilm")
     */
    private $fkRealisateur;

    public function __construct()
    {
        $this->fkActeur = new ArrayCollection();
        $this->fkGenre = new ArrayCollection();
        $this->fkRealisateur = new ArrayCollection();
    }



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->Titre;
    }

    public function setTitre(string $Titre): self
    {
        $this->Titre = $Titre;

        return $this;
    }

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote(?int $note): self
    {
        $this->note = $note;

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
     * @return Collection|Acteur[]
     */
    public function getFkActeur(): Collection
    {
        return $this->fkActeur;
    }

    public function addFkActeur(Acteur $fkActeur): self
    {
        if (!$this->fkActeur->contains($fkActeur)) {
            $this->fkActeur[] = $fkActeur;
        }

        return $this;
    }

    public function removeFkActeur(Acteur $fkActeur): self
    {
        if ($this->fkActeur->contains($fkActeur)) {
            $this->fkActeur->removeElement($fkActeur);
        }

        return $this;
    }

    /**
     * @return Collection|Genre[]
     */
    public function getFkGenre(): Collection
    {
        return $this->fkGenre;
    }

    public function addFkGenre(Genre $fkGenre): self
    {
        if (!$this->fkGenre->contains($fkGenre)) {
            $this->fkGenre[] = $fkGenre;
        }

        return $this;
    }

    public function removeFkGenre(Genre $fkGenre): self
    {
        if ($this->fkGenre->contains($fkGenre)) {
            $this->fkGenre->removeElement($fkGenre);
        }

        return $this;
    }

    /**
     * @return Collection|Realisateur[]
     */
    public function getFkRealisateur(): Collection
    {
        return $this->fkRealisateur;
    }

    public function addFkRealisateur(Realisateur $fkRealisateur): self
    {
        if (!$this->fkRealisateur->contains($fkRealisateur)) {
            $this->fkRealisateur[] = $fkRealisateur;
        }

        return $this;
    }

    public function removeFkRealisateur(Realisateur $fkRealisateur): self
    {
        if ($this->fkRealisateur->contains($fkRealisateur)) {
            $this->fkRealisateur->removeElement($fkRealisateur);
        }

        return $this;
    }

}
