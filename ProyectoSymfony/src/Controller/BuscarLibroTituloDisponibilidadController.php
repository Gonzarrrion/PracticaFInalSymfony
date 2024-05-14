<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\Libro;
use App\Entity\Biblioteca;

class BuscarLibroTituloDisponibilidadController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/buscar/libro/titulo/disponibilidad', name: 'buscar_libro_titulo_disponibilidad')]
    public function index(Request $request) : Response
    {
        $libros = [];

        if ($request->isMethod('POST')) {
            $titulo = $request->request->get('titulo');

            if (!$titulo) {
                $this->addFlash('error', 'Por favor, proporciona un título para buscar.');
                return $this->redirectToRoute('buscar_libro_titulo_disponibilidad');
            }

            $query = $this->em->createQueryBuilder()
                ->select('l', 'b')
                ->from('App\Entity\Libro', 'l')
                ->join('l.biblioteca', 'b')
                ->where('l.titulo LIKE :titulo')
                ->setParameter('titulo', '%' . $titulo . '%')
                ->getQuery();

            $resultados = $query->getResult();

            // Agrupar los libros por título y biblioteca y contar el número de ejemplares
            foreach ($resultados as $libro) {
                $claveTitulo = $libro->getTitulo();
                $claveBiblioteca = $libro->getBiblioteca()->getNombre();
                if (!isset($libros[$claveTitulo])) {
                    $libros[$claveTitulo] = [];
                }
                if (!isset($libros[$claveTitulo][$claveBiblioteca])) {
                    $libros[$claveTitulo][$claveBiblioteca] = [
                        'autor' => $libro->getAutor(),
                        'editorial' => $libro->getEditorial(),
                        'num_ejemplares' => 0,
                    ];
                }
                $libros[$claveTitulo][$claveBiblioteca]['num_ejemplares']++;
            }
        }

        return $this->render('buscar_libro_titulo_disponibilidad/index.html.twig', [
            'libros' => $libros,
        ]);
    }
}