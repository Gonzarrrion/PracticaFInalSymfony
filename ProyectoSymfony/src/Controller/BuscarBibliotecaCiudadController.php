<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;

use App\Entity\Libro;
use App\Entity\Biblioteca;

class BuscarBibliotecaCiudadController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/buscar/biblioteca/ciudad', name: 'buscar_biblioteca_ciudad')]
    public function index(): Response
    {
        // Obtenemos el repositorio de la entidad Biblioteca
        $repository = $this->em->getRepository(Biblioteca::class);

        // Utilizamos el método findBy() para obtener las bibliotecas con la ciudad 'Madrid'
        $bibliotecas = $repository->findBy(['ciudad' => 'Madrid']);

        // Renderizamos la vista y le pasamos las bibliotecas
        return $this->render('buscar_biblioteca_ciudad/index.html.twig', [
            'bibliotecas' => $bibliotecas,
        ]);
    }
}
