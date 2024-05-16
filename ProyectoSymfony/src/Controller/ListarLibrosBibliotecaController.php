<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
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

    #[Route('/listar/libros/biblioteca', name: 'listar_libros_biblioteca')]
    public function index(Request $request): Response
    {
        // Obtenemos el repositorio de la entidad Biblioteca y Libro
        $repositoryBiblioteca = $this->em->getRepository(Biblioteca::class);
        $repositoryLibro = $this->em->getRepository(Libro::class);

        // Obtenemos todas las bibliotecas
        $bibliotecas = $repositoryBiblioteca->findAll();

        // Obtenemos la biblioteca seleccionada por el usuario
        $bibliotecaId = $request->query->get('biblioteca');

        if ($bibliotecaId === null || !is_numeric($bibliotecaId)) {
            // Añadimos un mensaje flash de error
            $this->addFlash(
                'error',
                'El ID de la biblioteca es inválido.'
            );
            
            $libros = [];
            $biblioteca = null;

        } else {
            $biblioteca = $repositoryBiblioteca->find((int)$bibliotecaId);
            // Obtenemos todos los libros de la biblioteca seleccionada
            $libros = $repositoryLibro->findBy(['biblioteca' => $biblioteca]);
        }

        // Renderizamos la vista y le pasamos los libros y las bibliotecas
        return $this->render('listar_libros_biblioteca/index.html.twig', [
            'libros' => $libros,
            'bibliotecas' => $bibliotecas,
            'biblioteca' => $biblioteca,
        ]);
        
    }

    #[Route('/borrar/libro/{id}', name: 'borrar_libro', methods: ['POST'])]
    public function borrarLibro(Request $request, int $id): Response
    {
        
        $libro = $this->em->getRepository(Libro::class)->find($id);
        if ($libro) {
            $this->em->remove($libro);
            $this->em->flush();
        }
    
        return $this->redirectToRoute('listar_libros_biblioteca', ['biblioteca' => $request->request->get('biblioteca_id')]);
    }
}