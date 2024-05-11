<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BuscarBiliotecaNombreController extends AbstractController
{
    #[Route('/buscar/bilioteca/nombre', name: 'app_buscar_bilioteca_nombre')]
    public function index(): Response
    {
        return $this->render('buscar_bilioteca_nombre/index.html.twig', [
            'controller_name' => 'BuscarBiliotecaNombreController',
        ]);
    }
}
