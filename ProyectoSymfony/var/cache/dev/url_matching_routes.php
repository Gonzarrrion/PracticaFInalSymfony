<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/anadir/nuevo/libro' => [[['_route' => 'anadir_nuevo_libro', '_controller' => 'App\\Controller\\AnadirNuevoLibroController::nuevo'], null, null, null, false, false, null]],
        '/buscar/biblioteca/ciudad' => [[['_route' => 'buscar_biblioteca_ciudad', '_controller' => 'App\\Controller\\BuscarBibliotecaCiudadController::index'], null, null, null, false, false, null]],
        '/buscar/biblioteca/nombre' => [[['_route' => 'buscar_biblioteca_nombre', '_controller' => 'App\\Controller\\BuscarBibliotecaNombreController::index'], null, null, null, false, false, null]],
        '/buscar/bilioteca/ciudad' => [[['_route' => 'app_buscar_bilioteca_ciudad', '_controller' => 'App\\Controller\\BuscarBiliotecaCiudadController::index'], null, null, null, false, false, null]],
        '/buscar/libro/autor/biblioteca' => [[['_route' => 'buscar_libro_autor_biblioteca', '_controller' => 'App\\Controller\\BuscarLibroAutorBibliotecaController::index'], null, null, null, false, false, null]],
        '/buscar/libro/editorial/biblioteca' => [[['_route' => 'buscar_libro_editorial_biblioteca', '_controller' => 'App\\Controller\\BuscarLibroEditorialBibliotecaController::index'], null, null, null, false, false, null]],
        '/buscar/libro/titulo/biblioteca' => [[['_route' => 'buscar_libro_titulo_biblioteca', '_controller' => 'App\\Controller\\BuscarLibroTituloBibliotecaController::index'], null, null, null, false, false, null]],
        '/buscar/libro/titulo' => [[['_route' => 'buscar_libro_titulo', '_controller' => 'App\\Controller\\BuscarLibroTituloController::index'], null, null, null, false, false, null]],
        '/buscar/libro/titulo/disponibilidad' => [[['_route' => 'buscar_libro_titulo_disponibilidad', '_controller' => 'App\\Controller\\BuscarLibroTituloDisponibilidadController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_default', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/funcionalidades' => [[['_route' => 'funcionalidades', '_controller' => 'App\\Controller\\FuncionalidadesController::index'], null, null, null, false, false, null]],
        '/inicio' => [[['_route' => 'inicio', '_controller' => 'App\\Controller\\InicioController::index'], null, null, null, false, false, null]],
        '/insertar/biblioteca' => [[['_route' => 'insertar_biblioteca', '_controller' => 'App\\Controller\\InsertarBibliotecaController::index'], null, null, null, false, false, null]],
        '/listar/bibliotecas' => [[['_route' => 'listar_bibliotecas', '_controller' => 'App\\Controller\\ListarBibliotecasController::index'], null, null, null, false, false, null]],
        '/listar/libros/biblioteca' => [[['_route' => 'listar_libros_biblioteca', '_controller' => 'App\\Controller\\ListarLibrosBibliotecaController::index'], null, null, null, false, false, null]],
        '/busqueda' => [[['_route' => 'metodos_busqueda', '_controller' => 'App\\Controller\\MetodosBusquedaController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/editar/(?'
                    .'|biblioteca/([^/]++)(*:72)'
                    .'|libro/([^/]++)(*:93)'
                .')'
                .'|/borrar/(?'
                    .'|biblioteca/([^/]++)(*:131)'
                    .'|libro/([^/]++)(*:153)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        72 => [[['_route' => 'editar_biblioteca', '_controller' => 'App\\Controller\\EditarBibliotecaController::index'], ['id'], null, null, false, true, null]],
        93 => [[['_route' => 'editar_libro', '_controller' => 'App\\Controller\\EditarLibroController::index'], ['id'], null, null, false, true, null]],
        131 => [[['_route' => 'borrar_biblioteca', '_controller' => 'App\\Controller\\ListarBibliotecasController::borrarBiblioteca'], ['id'], ['POST' => 0], null, false, true, null]],
        153 => [
            [['_route' => 'borrar_libro', '_controller' => 'App\\Controller\\ListarLibrosBibliotecaController::borrarLibro'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
