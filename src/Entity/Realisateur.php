<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RealisateurRepository")
 */
class Realisateur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $prenom;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Film", mappedBy="fkRealisateur", cascade={"persist", "remove", "refresh"})
     */
    private $fkFilm;

    public function __construct()
    {
        $this->fkFilm = new ArrayCollection();
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * @return Collection|Film[]
     */
    public function getFkFilm(): Collection
    {
        return $this->fkFilm;
    }

    public function addFkFilm(Film $fkFilm): self
    {
        if (!$this->fkFilm->contains($fkFilm)) {
            $this->fkFilm[] = $fkFilm;
            $fkFilm->addFkRealisateur($this);
        }

        return $this;
    }

    public function removeFkFilm(Film $fkFilm): self
    {
        if ($this->fkFilm->contains($fkFilm)) {
            $this->fkFilm->removeElement($fkFilm);
            $fkFilm->removeFkRealisateur($this);
        }

        return $this;
    }
}
