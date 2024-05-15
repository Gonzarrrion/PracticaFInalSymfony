<?php

namespace App\Controller;

use App\Entity\Libro;
use App\Form\EditarLibroType;
use App\Repository\LibroRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class EditarLibroController extends AbstractController
{
    #[Route('/editar/libro/{id}', name: 'editar_libro')]
    public function index(int $id, Request $request, EntityManagerInterface $entityManager, LibroRepository $libroRepository): Response
    {

        $libro = $libroRepository->find($id);

        if (!$libro) {
            $this->addFlash('error', 'El libro no existe.');//para comprobar , se puede eliminar esto alfinal 
            return $this->render('editar_libro/index.html.twig');  // Modificar para no mostrar formulario
        }


        $form = $this->createForm(EditarLibroType::class, $libro);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'Libro actualizado correctamente.');

            return $this->redirectToRoute('editar_libro', ['id' => $libro->getId()]);  // evitar el que se cargue vrias veces 
        }

        return $this->render('editar_libro/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
