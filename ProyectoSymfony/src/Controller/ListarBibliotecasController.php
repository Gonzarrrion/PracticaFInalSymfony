<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ListarBibliotecasController extends AbstractController
{
    #[Route('/listar/bibliotecas', name: 'app_listar_bibliotecas')]
    public function index(): Response
    {
        return $this->render('listar_bibliotecas/index.html.twig', [
            'controller_name' => 'ListarBibliotecasController',
        ]);
    }


    #[Route('/borrar/biblioteca/{id}', name: 'app_borrar_biblioteca', methods: ["POST"])]
    public function borrarBiblioteca(int $id): Response
    {
        $biblioteca = $this->em->getRepository(Biblioteca::class)->find($id);

        if ($biblioteca) {
            $this->em->remove($biblioteca);
            $this->em->flush();
        }

        return $this->redirectToRoute('app_listar_bibliotecas');
    }
}
