<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Collections\ArrayCollection;

use App\Entity\Libro;
use App\Entity\Biblioteca;

class BuscarLibroAutorBibliotecaController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/buscar/libro/autor/biblioteca', name: 'buscar_libro_autor_biblioteca')]
    public function index(Request $request): Response
    {
        // Obtenemos el repositorio de la entidad Libro
        $repository = $this->em->getRepository(Libro::class);

        // Obtenemos el autor del libro y el nombre de la biblioteca del formulario
        $autor = $request->query->get('autor');
        $nombreBiblioteca = $request->query->get('nombreBiblioteca');

        // Creamos un query builder
        $queryBuilder = $repository->createQueryBuilder('l')
                                   ->innerJoin('l.biblioteca', 'b');

        // Añadimos las condiciones de búsqueda
        $queryBuilder->where($queryBuilder->expr()->like('l.autor', ':autor'))
                     ->andWhere($queryBuilder->expr()->like('b.nombre', ':nombreBiblioteca'));

        // Creamos un ArrayCollection y añadimos los parámetros
        $parameters = new ArrayCollection([
            new \Doctrine\ORM\Query\Parameter('autor', '%' . $autor . '%'),
            new \Doctrine\ORM\Query\Parameter('nombreBiblioteca', '%' . $nombreBiblioteca . '%')
        ]);

        // Asignamos los parámetros a la consulta
        $queryBuilder->setParameters($parameters);

        // Ejecutamos la consulta
        $libros = $queryBuilder->getQuery()->getResult();

        // Renderizamos la vista y le pasamos los libros
        return $this->render('buscar_libro_autor_biblioteca/index.html.twig', [
            'libros' => $libros,
        ]);
    }
}