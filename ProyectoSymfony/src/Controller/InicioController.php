<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class InicioController extends AbstractController
{
    #[Route('/inicio', name: 'inicio')]
    public function index(): Response
    {
        
        return $this->render('inicio/index.html.twig');
    }
}
