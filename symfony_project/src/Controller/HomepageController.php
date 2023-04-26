<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/")
     * @return Response
     */
    public function homepage(){
        return $this->render('homepage/homepage.html.twig');
        return $this->render('pages/homepage.html.twig');
    }

    /**
     * @Route("/login.html.twig")
     */
    public function login(){
        return $this->render('pages/login.html.twig');
    }

    /**
     * @Route("/registration.html.twig")
     */
    public function registration(){
        return $this->render('pages/registration.html.twig');
    }
}