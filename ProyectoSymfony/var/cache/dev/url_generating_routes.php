<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'buscar_biblioteca_ciudad' => [[], ['_controller' => 'App\\Controller\\BuscarBibliotecaCiudadController::index'], [], [['text', '/buscar/biblioteca/ciudad']], [], [], []],
    'buscar_biblioteca_nombre' => [[], ['_controller' => 'App\\Controller\\BuscarBibliotecaNombreController::index'], [], [['text', '/buscar/biblioteca/nombre']], [], [], []],
    'buscar_libro_autor_biblioteca' => [[], ['_controller' => 'App\\Controller\\BuscarLibroAutorBibliotecaController::index'], [], [['text', '/buscar/libro/autor/biblioteca']], [], [], []],
    'buscar_libro_editorial_biblioteca' => [[], ['_controller' => 'App\\Controller\\BuscarLibroEditorialBibliotecaController::index'], [], [['text', '/buscar/libro/editorial/biblioteca']], [], [], []],
    'app_buscar_libro_titulo_biblioteca' => [[], ['_controller' => 'App\\Controller\\BuscarLibroTituloBibliotecaController::index'], [], [['text', '/buscar/libro/titulo/bilbioteca']], [], [], []],
    'buscar_libro_titulo' => [[], ['_controller' => 'App\\Controller\\BuscarLibroTituloController::index'], [], [['text', '/buscar/libro/titulo']], [], [], []],
    'buscar_libro_titulo_disponibilidad' => [[], ['_controller' => 'App\\Controller\\BuscarLibroTituloDisponibilidadController::index'], [], [['text', '/buscar/libro/titulo/disponibilidad']], [], [], []],
    'app_listar_bibliotecas' => [[], ['_controller' => 'App\\Controller\\ListarBibliotecasController::index'], [], [['text', '/listar/bibliotecas']], [], [], []],
    'listar_libros_biblioteca' => [[], ['_controller' => 'App\\Controller\\ListarLibrosBibliotecaController::index'], [], [['text', '/listar/libros/biblioteca']], [], [], []],
    'App\Controller\BuscarBibliotecaCiudadController::index' => [[], ['_controller' => 'App\\Controller\\BuscarBibliotecaCiudadController::index'], [], [['text', '/buscar/biblioteca/ciudad']], [], [], []],
    'App\Controller\BuscarBibliotecaNombreController::index' => [[], ['_controller' => 'App\\Controller\\BuscarBibliotecaNombreController::index'], [], [['text', '/buscar/biblioteca/nombre']], [], [], []],
    'App\Controller\BuscarLibroAutorBibliotecaController::index' => [[], ['_controller' => 'App\\Controller\\BuscarLibroAutorBibliotecaController::index'], [], [['text', '/buscar/libro/autor/biblioteca']], [], [], []],
    'App\Controller\BuscarLibroEditorialBibliotecaController::index' => [[], ['_controller' => 'App\\Controller\\BuscarLibroEditorialBibliotecaController::index'], [], [['text', '/buscar/libro/editorial/biblioteca']], [], [], []],
    'App\Controller\BuscarLibroTituloBibliotecaController::index' => [[], ['_controller' => 'App\\Controller\\BuscarLibroTituloBibliotecaController::index'], [], [['text', '/buscar/libro/titulo/bilbioteca']], [], [], []],
    'App\Controller\BuscarLibroTituloController::index' => [[], ['_controller' => 'App\\Controller\\BuscarLibroTituloController::index'], [], [['text', '/buscar/libro/titulo']], [], [], []],
    'App\Controller\BuscarLibroTituloDisponibilidadController::index' => [[], ['_controller' => 'App\\Controller\\BuscarLibroTituloDisponibilidadController::index'], [], [['text', '/buscar/libro/titulo/disponibilidad']], [], [], []],
    'App\Controller\ListarBibliotecasController::index' => [[], ['_controller' => 'App\\Controller\\ListarBibliotecasController::index'], [], [['text', '/listar/bibliotecas']], [], [], []],
    'App\Controller\ListarLibrosBibliotecaController::index' => [[], ['_controller' => 'App\\Controller\\ListarLibrosBibliotecaController::index'], [], [['text', '/listar/libros/biblioteca']], [], [], []],
];
