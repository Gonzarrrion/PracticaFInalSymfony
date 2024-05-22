<?php

namespace App\Controller;

use App\Entity\Biblioteca;
use App\Form\EditarBibliotecaType;
use App\Repository\BibliotecaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class EditarBibliotecaController extends AbstractController
{
    #[Route('/editar/biblioteca/{id}', name: 'editar_biblioteca')]
    public function index(int $id, Request $request, EntityManagerInterface $entityManager, BibliotecaRepository $bibliotecaRepository): Response
    {
        $biblioteca = $bibliotecaRepository->find($id);

        if (!$biblioteca) {
            // Mostramos un mensaje de error 
            return $this->render('editar_biblioteca/index.html.twig');
        }

        $form = $this->createForm(EditarBibliotecaType::class, $biblioteca);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'Biblioteca actualizada correctamente.');

            // para que no se añada 2 veces si recargas la pagina 
            return $this->redirectToRoute('funcionalidades');
        }

        return $this->render('editar_biblioteca/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
