<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BuscarLibroAutorBiliotecaController extends AbstractController
{
    #[Route('/buscar/libro/autor/bilioteca', name: 'app_buscar_libro_autor_bilioteca')]
    public function index(): Response
    {
        return $this->render('buscar_libro_autor_bilioteca/index.html.twig', [
            'controller_name' => 'BuscarLibroAutorBiliotecaController',
        ]);
    }
}
