<?php

namespace App\Controller;

use App\Entity\Film;
use App\Entity\Genre;
use App\Entity\Realisateur;
use App\Entity\Acteur;
use App\Form\FilmType;
use App\Repository\FilmRepository;
use App\Repository\ActeurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/film")
 */
class FilmController extends AbstractController
{
    /**
     * @Route("/", name="film_index", methods="GET")
     */
    public function index(FilmRepository $filmRepository): Response
    {
        return $this->render('film/index.html.twig', ['films' => $filmRepository->findAll()]);
    }

    /**
     * @Route("/new", name="film_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $film = new Film();
        $form = $this->createForm(FilmType::class, $film);
        
        $form->handleRequest($request);
            
      
        if ($form->isSubmitted() && $form->isValid()) {
        $fkActeur = $form->get('fkActeur');
        $formResultActeur = $fkActeur->getData(); 
        for($i =0 ; $i <= count($formResultActeur); $i++){
               if ($formResultActeur[$i] !== null){
                $em = $this->getDoctrine()->getManager();
                $idActeur = $formResultActeur[$i]->getId();
                //On Utilise l'entity manager de doctrine instancié plus haut dans la variable $em, pour crée des objets Acteur pour chaque id d'acteur
                $acteur = $em->getRepository(Acteur::class)->find($idActeur);
                $film->addFkActeur($acteur);
               }    
            } 
            
           $fkgenre = $form->get('fkGenre');
           $formResultGenre = $fkgenre->getData();       
           for($i = 0 ; $i <= count($formResultGenre); $i++){
              if ($formResultGenre[$i] !== null ){
                $em = $this->getDoctrine()->getManager();
                $idGenre = $formResultGenre[$i]->getId();      
                $genre = $em->getRepository(Genre::class)->find($idGenre);
                $film->addFkGenre($genre);
               }
           }
           
           
           $fkrealisateur = $form->get('fkRealisateur');
           $formResultRealisateur = $fkrealisateur->getData();
            for($i = 0 ; $i <= count($formResultRealisateur); $i++){
              if ($formResultRealisateur[$i] !== null ){
                $em = $this->getDoctrine()->getManager();
                $idRealisateur = $formResultRealisateur[$i]->getId();      
                $realisateur = $em->getRepository(Realisateur::class)->find($idRealisateur);
                $film->addFkRealisateur($realisateur);
               }
           }
     
            dump($film);
            $em = $this->getDoctrine()->getManager();
            $em->persist($film);
            
            $em->flush();

            return $this->redirectToRoute('film_index');
        }

        return $this->render('film/new.html.twig', [
            'film' => $film,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="film_show", methods="GET")
     */
    public function show(Film $film): Response
    {
        return $this->render('film/show.html.twig', ['film' => $film]);
    }

    /**
     * @Route("/{id}/edit", name="film_edit", methods="GET|POST")
     */
    public function edit(Request $request, Film $film, ActeurRepository $acteurRepo): Response
    {
        $form = $this->createForm(FilmType::class, $film);
        $form->handleRequest($request);
       
        if ($form->isSubmitted() && $form->isValid()) {
            //On initialise ici la variable fkActeur et formResult qui contiendra les donnée de fk Acteur transmi dans le form
            $fkActeur = $form->get('fkActeur');
            $formResult = $fkActeur->getData(); 
            // on boucle sur le tableau de formResult pour pouvoir crée different objet Acteur a partir de leur ID
            for($i =0 ; $i <= count($formResult); $i++){
               if ($formResult[$i] !== null){
                $em = $this->getDoctrine()->getManager();
                $idActeur = $formResult[$i]->getId();
                //On Utilise l'entity manager de doctrine instancié plus haut dans la variable $em, pour crée des objets Acteur pour chaque id d'acteur
                $acteur = $em->getRepository(Acteur::class)->find($idActeur);
                $film->addFkActeur($acteur);
               }    
            } 
            //Doctrine met à jour tout seul en ignorant les valeur déja éxistante 
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('film_index', ['id' => $film->getId()]);
        }

        return $this->render('film/edit.html.twig', [
            'film' => $film,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="film_delete", methods="DELETE")
     */
    public function delete(Request $request, Film $film): Response
    {
        if ($this->isCsrfTokenValid('delete'.$film->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($film);
            $em->flush();
        }

        return $this->redirectToRoute('film_index');
    }
}
