<?php

namespace App\DataFixtures;

use App\Entity\Acteur;
use App\Entity\Film;
use App\Entity\Genre;
use App\Entity\Realisateur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        for($i = 0; $i <= 10; $i++){
            $film = new Film();
            $acteur = new Acteur();
            $genre = new Genre();
            $real = new Realisateur();
            // Fixtures des Réalisateurs
            $real->setNom("Nom du Réalisateur n° $i")
                 ->setPrenom("Prenom du Réalisateur n° $i");
            // Fixtures des Genres
            $genre->setGenre("Genre n° $i");
            // Fixtures des Acteurs
            $acteur->setNom("Nom de l'acteur n° $i")
                   ->setPrenom("Prénom de l'acteur n° $i");
            // Fixtures des Films
            $film->setTitre("Titre du film n° $i")
                 ->setDescription("Description du Film n° $i")
                 ->setNote(rand(1,5))
                 ->addFkActeur($acteur)
                 ->addFkGenre($genre)
                 ->addFkRealisateur($real);
            // Ajouts des relations
            $real->addFkFilm($film);
            $acteur->addFkFilm($film);
            $genre->addFkFilm($film);
            
            $manager->persist($film);
            $manager->persist($acteur);
            $manager->persist($genre);
            $manager->persist($real);
            
        }


        $manager->flush();
    }
}
