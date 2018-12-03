<?php

namespace App\Controller;

use App\Entity\Acteur;
use App\Form\ActeurType;
use App\Repository\ActeurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Persistence\ObjectManager;


/**
 * @Route("/acteur")
 */
class ActeurController extends AbstractController
{
    /**
     * @Route("/", name="acteur_index", methods="GET")
     */
    public function index(ActeurRepository $acteurRepository): Response
    {
        return $this->render('acteur/index.html.twig', ['acteurs' => $acteurRepository->findAll()]);
    }



    /**
     * Ajout d'un acteur avec Ajax
     *
     * @Route("/nouveau", name="acteur_nouveau", condition="request.isXmlHttpRequest()")
     * @return Response
     */
    public function new(Request $request, ObjectManager $manager)
    {
        $acteur = new Acteur();
        $form = $this->createForm(ActeurType::class, $acteur, array(
            'action' => $this->generateUrl($request->get('_route'))
        ));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($acteur);
            $em->flush();

            return new Response('Yeah !');
        }
        return $this->render('acteur/_nouveau.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="acteur_show", methods="GET")
     */
    public function show(Acteur $acteur): Response
    {
        return $this->render('acteur/show.html.twig', ['acteur' => $acteur]);
    }

    /**
     * @Route("/{id}/edit", name="acteur_edit", methods="GET|POST")
     */
    public function edit(Request $request, Acteur $acteur): Response
    {
        $form = $this->createForm(ActeurType::class, $acteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('acteur_index', ['id' => $acteur->getId()]);
        }

        return $this->render('acteur/edit.html.twig', [
            'acteur' => $acteur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="acteur_delete", methods="DELETE")
     */
    public function delete(Request $request, Acteur $acteur): Response
    {
        if ($this->isCsrfTokenValid('delete'.$acteur->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($acteur);
            $em->flush();
        }

        return $this->redirectToRoute('acteur_index');
    }
    
}
