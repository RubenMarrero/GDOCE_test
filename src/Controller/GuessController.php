<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class GuessController extends AbstractController
{
public static function Guess(int $number): int { return 2; }
    /**
     * @Route("/", name="guess_app")
     */
    public function index(): Response
    {
        return $this->render('index.html.twig'); 
    }

    /**
     * @Route("/guess/{number}", name="guess_controller")
     * @param Request $request
     * @return Response
     */
    public function guess(Request $request): Response
    {
        return $this->render('guess.html.twig', [
            'number'    =>  $request->get('number')
        ]); 
    }
}
