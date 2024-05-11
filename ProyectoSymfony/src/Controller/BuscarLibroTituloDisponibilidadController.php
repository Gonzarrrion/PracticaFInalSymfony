<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BuscarLibroTituloDisponibilidadController extends AbstractController
{
    #[Route('/buscar/libro/titulo/disponibilidad', name: 'app_buscar_libro_titulo_disponibilidad')]
    public function index(): Response
    {
        return $this->render('buscar_libro_titulo_disponibilidad/index.html.twig', [
            'controller_name' => 'BuscarLibroTituloDisponibilidadController',
        ]);
    }
}
