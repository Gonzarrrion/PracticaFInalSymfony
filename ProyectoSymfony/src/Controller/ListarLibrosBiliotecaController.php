<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ListarLibrosBiliotecaController extends AbstractController
{
    #[Route('/listar/libros/bilioteca', name: 'app_listar_libros_bilioteca')]
    public function index(): Response
    {
        return $this->render('listar_libros_bilioteca/index.html.twig', [
            'controller_name' => 'ListarLibrosBiliotecaController',
        ]);
    }
}
