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
        $faker = \Faker\Factory::create('fr_FR');

        for($i = 0; $i <= 10; $i++){
            $film = new Film();
           
            $film->setTitre($faker->sentence())
                 ->setDescription($faker->paragraph())
                 ->setNote(rand(1,5));
            for($k = 0; $k <= 3; $k++){
             $acteur = new Acteur();
             
             $acteur->setNom($faker->firstName())
                    ->setPrenom($faker->lastName());

             $manager->persist($acteur);

             $film->addFkActeur($acteur);
            }
            $genre = new Genre();
            $genre->setGenre($faker->sentence(1));

            $manager->persist($genre);
            $film->addFkGenre($genre);
            
            $real = new Realisateur();
            $real->setNom($faker->firstName())
                 ->setPrenom($faker->lastName());
            
            $manager->persist($real);

            $film->addFkRealisateur($real);

            $manager->persist($film);    
           
            
        }


        $manager->flush();
    }
}
