<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;


use App\Entity\Libro;
use App\Entity\Biblioteca;

class BuscarLibroAutorBiliotecaController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/buscar/libro/autor/bilioteca', name: 'app_buscar_libro_autor_bilioteca')]
    public function index(): Response
    {
        // Obtenemos el repositorio de la entidad Libro
        $repository = $this->em->getRepository(Libro::class);

        // Utilizamos el método findBy() para obtener los libros con el autor 'Cervantes' y que pertenezcan a la biblioteca con id 1
        $libros = $repository->findBy(['autor' => 'Cervantes', 'biblioteca' => 1]);

        // Renderizamos la vista y le pasamos los libros
        return $this->render('buscar_libro_autor_biblioteca/index.html.twig', [
            'libros' => $libros,
        ]);
    }
}
