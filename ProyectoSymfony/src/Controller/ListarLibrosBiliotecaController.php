<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Biblioteca;
use App\Entity\Libro;

class ListarLibrosBibliotecaController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/listar/libros/biblioteca', name: 'app_listar_libros_biblioteca')]
    public function index(Request $request): Response
    {
        // Obtenemos el repositorio de la entidad Biblioteca y Libro
        $repositoryBiblioteca = $this->em->getRepository(Biblioteca::class);
        $repositoryLibro = $this->em->getRepository(Libro::class);

        // Obtenemos todas las bibliotecas
        $bibliotecas = $repositoryBiblioteca->findAll();

        // Obtenemos la biblioteca seleccionada por el usuario
        $bibliotecaId = $request->query->get('biblioteca');
        $biblioteca = $repositoryBiblioteca->find($bibliotecaId);

        // Obtenemos todos los libros de la biblioteca seleccionada
        $libros = $repositoryLibro->findBy(['Biblioteca' => $biblioteca]);

        // Renderizamos la vista y le pasamos los libros y las bibliotecas
        return $this->render('listar_libros_biblioteca/index.html.twig', [
            'libros' => $libros,
            'bibliotecas' => $bibliotecas,
        ]);
    }
}