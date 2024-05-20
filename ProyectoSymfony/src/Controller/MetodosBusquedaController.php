<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MetodosBusquedaController extends AbstractController
{
    #[Route('/busqueda', name: 'metodos_busqueda')]
    public function index(): Response
    {
        
        return $this->render('metodos_busqueda/index.html.twig');
    }
}
