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
    
    #[Route('/listar/bibliotecas', name: 'app_listar_bibliotecas')]
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
}
