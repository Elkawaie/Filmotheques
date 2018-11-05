<?php

namespace App\Controller;

use App\Entity\Film;
use App\Form\FilmType;
use App\Repository\FilmRepository;
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
           $fkacteur = $form->get('fkActeur');
           $acteur = $fkacteur->getData();
           
           $fkgenre = $form->get('fkGenre');
           $genre = $fkgenre->getData();
           
           $fkrealisateur = $form->get('fkRealisateur');
           $realisateur = $fkrealisateur->getData();
           
           $film->addFkActeur($acteur);
           $film->addFkGenre($genre);
           $film->addFkRealisateur($realisateur);

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
    public function edit(Request $request, Film $film): Response
    {
        $form = $this->createForm(FilmType::class, $film);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
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
