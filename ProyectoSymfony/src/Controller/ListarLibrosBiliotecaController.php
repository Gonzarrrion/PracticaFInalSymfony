<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Biblioteca;
use App\Entity\Libro;

class ListarLibrosBiliotecaController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/listar/libros/bilioteca', name: 'app_listar_libros_bilioteca')]
    public function index(): Response
    {
        // Obtenemos el repositorio de la entidad Biblioteca y Libro
        $repositoryBiblioteca = $this->em->getRepository(Biblioteca::class);
        $repositoryLibro = $this->em->getRepository(Libro::class);

        // Obtenemos todos los libros de la biblioteca con id 1
        $biblioteca = $repositoryBiblioteca->find(1);
        $libros = $repositoryLibro->findBy(['biblioteca' => $biblioteca]);

        // Renderizamos la vista y le pasamos los libros
        return $this->render('listar_libros_biblioteca/index.html.twig', [
            'libros' => $libros,
        ]);
    }
}
