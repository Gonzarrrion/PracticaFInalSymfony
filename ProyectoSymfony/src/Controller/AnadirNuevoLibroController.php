<?php

namespace App\Controller;

use App\Entity\Libro;
use App\Form\AnadirNuevoLibroFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class AnadirNuevoLibroController extends AbstractController
{
    #[Route('/anadir/nuevo/libro', name: 'anadir_nuevo_libro')]
    public function nuevo(Request $request, EntityManagerInterface $entityManager): Response
    {
        $libro = new Libro();
        $form = $this->createForm(AnadirNuevoLibroFormType::class, $libro);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($libro);
            $entityManager->flush();

        
            // Redirigir a funcionalidades
            return $this->redirectToRoute('funcionalidades');
        }

        return $this->render('anadir_nuevo_libro/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
