<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BuscarLibroTituloController extends AbstractController
{
    #[Route('/buscar/libro/titulo', name: 'app_buscar_libro_titulo')]
    public function index(): Response
    {
        return $this->render('buscar_libro_titulo/index.html.twig', [
            'controller_name' => 'BuscarLibroTituloController',
        ]);
    }
}
