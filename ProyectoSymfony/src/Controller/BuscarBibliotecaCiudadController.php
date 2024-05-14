<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

use App\Entity\Biblioteca;

class BuscarBibliotecaCiudadController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/buscar/biblioteca/ciudad', name: 'buscar_biblioteca_ciudad')]
    public function index(Request $request): Response
    {
        // Obtenemos el repositorio de la entidad Biblioteca
        $repository = $this->em->getRepository(Biblioteca::class);

        // Obtenemos la ciudad de la biblioteca del formulario
        $ciudad = $request->query->get('ciudad');

        // Creamos un query builder
        $queryBuilder = $repository->createQueryBuilder('b');

        // Añadimos la condición de búsqueda parcial
        $queryBuilder->where($queryBuilder->expr()->like('b.ciudad', ':ciudad'))
                     ->setParameter('ciudad', '%' . $ciudad . '%');

        // Ejecutamos la consulta
        $bibliotecas = $queryBuilder->getQuery()->getResult();

        // Renderizamos la vista y le pasamos las bibliotecas
        return $this->render('buscar_biblioteca_ciudad/index.html.twig', [
            'bibliotecas' => $bibliotecas,
        ]);
    }
}