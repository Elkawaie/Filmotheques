<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GenreRepository")
 */
class Genre
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
    private $genre;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Film", mappedBy="fkGenre")
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

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): self
    {
        $this->genre = $genre;

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
            $fkFilm->addFkGenre($this);
        }

        return $this;
    }

    public function removeFkFilm(Film $fkFilm): self
    {
        if ($this->fkFilm->contains($fkFilm)) {
            $this->fkFilm->removeElement($fkFilm);
            $fkFilm->removeFkGenre($this);
        }

        return $this;
    }
}
