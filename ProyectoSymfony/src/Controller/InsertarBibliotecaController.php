<?php

namespace App\Controller;

use App\Entity\Biblioteca;
use App\Form\InsertarBibliotecaFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InsertarBibliotecaController extends AbstractController
{
    #[Route('/insertar/biblioteca', name: 'insertar_biblioteca')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $biblioteca = new Biblioteca();
        $form = $this->createForm(InsertarBibliotecaFormType::class, $biblioteca);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($biblioteca);
            $entityManager->flush();

            // Vaciar formulario por si queremos añadir otra biblioteca
            $biblioteca = new Biblioteca();
            $form = $this->createForm(InsertarBibliotecaFormType::class, $biblioteca);

            // Redirigir a funcionalidades
            return $this->redirectToRoute('funcionalidades');
        }
        return $this->render('insertar_biblioteca/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
