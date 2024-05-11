<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BuscarLibroEditorialBiliotecaController extends AbstractController
{
    #[Route('/buscar/libro/editorial/bilioteca', name: 'app_buscar_libro_editorial_bilioteca')]
    public function index(): Response
    {
        return $this->render('buscar_libro_editorial_bilioteca/index.html.twig', [
            'controller_name' => 'BuscarLibroEditorialBiliotecaController',
        ]);
    }
}
