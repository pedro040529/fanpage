<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CasaController extends AbstractController
{
    #[Route('/casa', name: 'app_casa')]
    public function index(): Response
    {
        return $this->render('casa/index.html.twig', [
            'controller_name' => 'CasaController',
        ]);
    }
}
