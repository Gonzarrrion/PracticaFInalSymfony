<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BuscarBiliotecaCiudadController extends AbstractController
{
    #[Route('/buscar/bilioteca/ciudad', name: 'app_buscar_bilioteca_ciudad')]
    public function index(): Response
    {
        return $this->render('buscar_bilioteca_ciudad/index.html.twig', [
            'controller_name' => 'BuscarBiliotecaCiudadController',
        ]);
    }
    
}
