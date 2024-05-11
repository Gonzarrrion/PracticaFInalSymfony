<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BuscarLibroTituloBiliotecaController extends AbstractController
{
    #[Route('/buscar/libro/titulo/bilioteca', name: 'app_buscar_libro_titulo_bilioteca')]
    public function index(): Response
    {
        return $this->render('buscar_libro_titulo_bilioteca/index.html.twig', [
            'controller_name' => 'BuscarLibroTituloBiliotecaController',
        ]);
    }
}
