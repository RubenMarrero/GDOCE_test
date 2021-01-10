<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use App\Utils\Numbers;


class GuessController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('index.html.twig'); 
    }

    public function guess_resource(Request $request): Response
    {
        $number = intval($request->get('number'));
        if( ! Numbers::number_in_range($number) ){
            return $this->redirectToRoute('index', [] , 301);
        }

        return $this->render('guess.html.twig', [
            'number'    =>  $number
        ]); 
    }
}
