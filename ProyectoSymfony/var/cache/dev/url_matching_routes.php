<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
<<<<<<< Updated upstream
=======
        '/buscar/bilioteca/ciudad' => [[['_route' => 'app_buscar_bilioteca_ciudad', '_controller' => 'App\\Controller\\BuscarBiliotecaCiudadController::index'], null, null, null, false, false, null]],
        '/buscar/bilioteca/nombre' => [[['_route' => 'app_buscar_bilioteca_nombre', '_controller' => 'App\\Controller\\BuscarBiliotecaNombreController::index'], null, null, null, false, false, null]],
        '/buscar/libro/autor/bilioteca' => [[['_route' => 'app_buscar_libro_autor_bilioteca', '_controller' => 'App\\Controller\\BuscarLibroAutorBiliotecaController::index'], null, null, null, false, false, null]],
        '/buscar/libro/editorial/bilioteca' => [[['_route' => 'app_buscar_libro_editorial_bilioteca', '_controller' => 'App\\Controller\\BuscarLibroEditorialBiliotecaController::index'], null, null, null, false, false, null]],
        '/buscar/libro/titulo/bilioteca' => [[['_route' => 'app_buscar_libro_titulo_bilioteca', '_controller' => 'App\\Controller\\BuscarLibroTituloBiliotecaController::index'], null, null, null, false, false, null]],
        '/buscar/libro/titulo' => [[['_route' => 'app_buscar_libro_titulo', '_controller' => 'App\\Controller\\BuscarLibroTituloController::index'], null, null, null, false, false, null]],
        '/buscar/libro/titulo/disponibilidad' => [[['_route' => 'app_buscar_libro_titulo_disponibilidad', '_controller' => 'App\\Controller\\BuscarLibroTituloDisponibilidadController::index'], null, null, null, false, false, null]],
        '/insertar/biblioteca' => [[['_route' => 'app_insertar_biblioteca', '_controller' => 'App\\Controller\\InsertarBibliotecaController::index'], null, null, null, false, false, null]],
        '/listar/bibliotecas' => [[['_route' => 'app_listar_bibliotecas', '_controller' => 'App\\Controller\\ListarBibliotecasController::index'], null, null, null, false, false, null]],
        '/listar/libros/bilioteca' => [[['_route' => 'app_listar_libros_bilioteca', '_controller' => 'App\\Controller\\ListarLibrosBiliotecaController::index'], null, null, null, false, false, null]],
>>>>>>> Stashed changes
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
