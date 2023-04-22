<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * [Route("/")]
     */
    public function homepage()
    {
        return new Response("Hello");
    }

    /**
     * @Route("/questions")
     * @param $
     * @return void
     */
    public function show($question)
    {
        $answers = [
            'Cat', 'Dog', ' Giraffe'
        ];

        return $this->render('question/show.html.twig', [
           'question' => ucwords(str_replace('-', '-', $question)),
            'answers' => $answers,
        ]);
        return new Response('Hello from different page.');

    }
}