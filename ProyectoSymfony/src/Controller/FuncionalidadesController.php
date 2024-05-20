<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FuncionalidadesController extends AbstractController
{
    #[Route('/funcionalidades', name: 'funcionalidades')]
    public function index(): Response
    {
        return $this->render('funcionalidades/index.html.twig');
    }
}
