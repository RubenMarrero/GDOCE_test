<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class GuessController extends AbstractController
{
    /**
     * @Route("/", name="guess_app")
     */
    public function index(): Response
    {
        return new Response('<h1>Guess App</h1>'); 
    }

    /**
     * @Route("/guess/{number}", name="guess_controller")
     * @param Request $request
     * @return Response
     */
    public function guess(Request $request): Response
    {
        return new Response($request->get('number')); 
    }
}
