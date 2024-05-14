<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;

use App\Entity\Libro;
use App\Entity\Biblioteca;
use Symfony\Component\HttpFoundation\Request;

class BuscarLibroTituloController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/buscar/libro/titulo', name: 'buscar_libro_titulo')]
    public function index(Request $request): Response
    {
        $libros = [];

        if ($request->isMethod('POST')) {
            $titulo = $request->request->get('titulo');

            if (!$titulo) {
                $this->addFlash('error', 'Por favor, proporciona un título para buscar.');
                return $this->redirectToRoute('buscar_libro_titulo');
            }

            $query = $this->em->createQueryBuilder()
                ->select('l', 'b')
                ->from('App\Entity\Libro', 'l')
                ->join('l.biblioteca', 'b')
                ->where('l.titulo LIKE :titulo')
                ->setParameter('titulo', '%' . $titulo . '%')
                ->getQuery();

            $libros = $query->getResult();
        }
        
        return $this->render('buscar_libro_titulo/index.html.twig', [
            'libros' => $libros
        ]);
    }
}
