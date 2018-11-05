<?php

namespace App\Form;

use App\Entity\Film;
use App\Entity\Acteur;
use App\Entity\Genre;
use App\Entity\Realisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class FilmType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Titre')
            ->add('note')
            ->add('description')
            ->add('fkActeur', EntityType::class, array(
                'class' => Acteur::class ,
                'choice_label' => function ($acteur){
                    return $acteur->getNom();
                },
                
                'mapped' => false,
            ))
            ->add('fkGenre', EntityType::class, array(
                'class' => Genre::class ,
                'choice_label' => function($genre){
                    return $genre->getGenre();
                },
                'mapped' => false,
            ))
            ->add('fkRealisateur', EntityType::class, array(
                'class' => Realisateur::class ,
                'choice_label' => function ($realisateur){
                    return $realisateur->getNom();
                },
                'mapped' => false,
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Film::class,
        ]);
    }
}
