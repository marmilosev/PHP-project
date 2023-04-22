<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    /**
     * @Route("/")
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
        return new Response(sprintf('Hello from different page "%q"!', $question));

    }
}