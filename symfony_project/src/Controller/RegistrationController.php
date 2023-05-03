<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use ContainerFsuv0eQ\getSecurity_Validator_UserPasswordService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends AbstractController
{
    /**
     * @Route("/registration")
     * @param Request $request
     * @param $encoder
     * @return Response
     */
    public function register(Request $request, EntityManagerInterface $entityManager):Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $entityManager->persist($user);
            $entityManager->flush();
            return $this->redirectToRoute('app_homepage_homepage');
        }


        return $this->render('pages/registration.html.twig', array(
            'form' => $form->createView()
        ));
    }
}