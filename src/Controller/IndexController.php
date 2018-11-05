<?php

namespace App\Controller;
 
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\FilmRepository;
 
class IndexController extends Controller
{
    
    /**
     * @Route("/", name="index")
     */
    public function index(FilmRepository $filmRepository): Response
    {
       
       
       
        
        return $this->render('index/index.html.twig', ['films' => $filmRepository->findAll()]);
    }
 
}

