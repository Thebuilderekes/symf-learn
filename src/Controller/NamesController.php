<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class NamesController extends AbstractController
{
    #[Route('/names', name: 'app_names')]
    public function index(): Response
    {
         $number = random_int(0, 10);
        return $this->render('names/index.html.twig', [
            'controller_name' => 'NamesController',
        ]);
    }
}
