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

class BuscarLibroEditorialBibliotecaController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/buscar/libro/editorial/biblioteca', name: 'buscar_libro_editorial_biblioteca')]
    public function index(Request $request): Response
    {
        // Obtenemos el repositorio de la entidad Libro
        $repository = $this->em->getRepository(Libro::class);

        // Obtenemos la editorial del libro y el nombre de la biblioteca del formulario
        $editorial = $request->query->get('editorial');
        $nombreBiblioteca = $request->query->get('nombreBiblioteca');

        // Creamos un query builder
        $queryBuilder = $repository->createQueryBuilder('l')
                                   ->innerJoin('l.biblioteca', 'b');

        // Añadimos las condiciones de búsqueda
        $queryBuilder->where($queryBuilder->expr()->like('l.editorial', ':editorial'))
                     ->andWhere($queryBuilder->expr()->like('b.nombre', ':nombreBiblioteca'));

        // Creamos un ArrayCollection y añadimos los parámetros
        $parameters = new ArrayCollection([
            new \Doctrine\ORM\Query\Parameter('editorial', '%' . $editorial . '%'),
            new \Doctrine\ORM\Query\Parameter('nombreBiblioteca', '%' . $nombreBiblioteca . '%')
        ]);

        // Asignamos los parámetros a la consulta
        $queryBuilder->setParameters($parameters);

        // Ejecutamos la consulta
        $libros = $queryBuilder->getQuery()->getResult();

        // Renderizamos la vista y le pasamos los libros
        return $this->render('buscar_libro_editorial_biblioteca/index.html.twig', [
            'libros' => $libros,
        ]);
    }
}