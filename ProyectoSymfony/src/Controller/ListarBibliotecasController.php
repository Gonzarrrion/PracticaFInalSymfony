<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Biblioteca;
use Doctrine\ORM\EntityManagerInterface;

use App\Entity\Libro;

class ListarBibliotecasController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }
    
    #[Route('/listar/bibliotecas', name: 'listar_bibliotecas')]
    public function index(): Response
    {   
        
         // Obtenemos el repositorio de la entidad Biblioteca
         $repository = $this->em->getRepository(Biblioteca::class);

         // Utilizamos el método findAll() para obtener todas las bibliotecas
         $bibliotecas = $repository->findAll();
 
         // Renderizamos la vista y le pasamos las bibliotecas
         return $this->render('listar_bibliotecas/index.html.twig', [
             'bibliotecas' => $bibliotecas,
         ]);
    }


    #[Route('/borrar/biblioteca/{id}', name: 'borrar_biblioteca', methods: ["POST"])]
    public function borrarBiblioteca(int $id): Response
    {
        $biblioteca = $this->em->getRepository(Biblioteca::class)->find($id);
        if ($biblioteca) {
            // Obtener los libros asociados a la biblioteca
            $libros = $this->em->getRepository(Libro::class)->findBy(['biblioteca' => $biblioteca]);

            // Eliminar los libros
            foreach ($libros as $libro) {
                $this->em->remove($libro);
            }

            // Ahora puedes eliminar la biblioteca
            $this->em->remove($biblioteca);
            $this->em->flush();
        }

        return $this->redirectToRoute('listar_bibliotecas');
    }
}
