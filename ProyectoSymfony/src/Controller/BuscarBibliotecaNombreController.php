<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

use App\Entity\Biblioteca;

class BuscarBibliotecaNombreController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/buscar/biblioteca/nombre', name: 'buscar_biblioteca_nombre')]
    public function index(Request $request): Response
    {
        // Obtenemos el repositorio de la entidad Biblioteca
        $repository = $this->em->getRepository(Biblioteca::class);

        // Obtenemos el nombre de la biblioteca del formulario
        $nombre = $request->query->get('nombre');

        // Creamos un query builder
        $queryBuilder = $repository->createQueryBuilder('b');

        // Añadimos la condición de búsqueda parcial
        $queryBuilder->where($queryBuilder->expr()->like('b.nombre', ':nombre'))
                     ->setParameter('nombre', '%' . $nombre . '%');

        // Ejecutamos la consulta
        $bibliotecas = $queryBuilder->getQuery()->getResult();

        // Renderizamos la vista y le pasamos las bibliotecas
        return $this->render('buscar_biblioteca_nombre/index.html.twig', [
            'bibliotecas' => $bibliotecas,
        ]);
    }
}