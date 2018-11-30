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
                'label' => 'Acteur :',
                'label_attr' => array('class' => 'titreActeur'),
                'choice_label' => function ($acteur){
                    
                    return $acteur->getNom();
                },
                'multiple' => true,
                'expanded' => true,     
                'mapped' => false,
            ))
            ->add('fkGenre', EntityType::class, array(
                'class' => Genre::class ,
                'label' => 'Genre :',
                'label_attr' => array('class' => 'titreGenre'),
                'choice_label' => function($genre){
                    return $genre->getGenre();
                },
                'multiple' => true,
                'expanded' => true,
                'mapped' => false,
            ))
            ->add('fkRealisateur', EntityType::class, array(
                'class' => Realisateur::class ,
                'label' => 'Réalisateur :',
                'label_attr' => array('class' => 'titreReal'),
                'choice_label' => function ($realisateur){
                    return $realisateur->getNom();
                },
                'multiple' => true,
                'expanded' => true,
                'mapped' => false,
            ));
        
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Film::class,
        ]);
    }
}
