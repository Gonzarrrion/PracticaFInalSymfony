<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;

use App\Entity\Libro;
use App\Entity\Biblioteca;

class BuscarBiliotecaNombreController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/buscar/bilioteca/nombre', name: 'app_buscar_bilioteca_nombre')]
    public function index(): Response
    {
        // Obtenemos el repositorio de la entidad Biblioteca
        $repository = $this->em->getRepository(Biblioteca::class);

        // Utilizamos el método findBy() para obtener las bibliotecas con el nombre 'Biblioteca Nacional'
        $bibliotecas = $repository->findBy(['nombre' => 'Biblioteca Nacional']);

        // Renderizamos la vista y le pasamos las bibliotecas
        return $this->render('buscar_biblioteca_nombre/index.html.twig', [
            'bibliotecas' => $bibliotecas,
        ]);
    }
}
