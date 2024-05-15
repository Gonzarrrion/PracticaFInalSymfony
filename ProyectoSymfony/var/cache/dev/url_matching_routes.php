<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
<<<<<<< Updated upstream
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
=======
                .'|/editar/(?'
                    .'|biblioteca/([^/]++)(*:72)'
                    .'|libro/([^/]++)(*:93)'
                .')'
                .'|/borrar/biblioteca/([^/]++)(*:128)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        72 => [[['_route' => 'editar_biblioteca', '_controller' => 'App\\Controller\\EditarBibliotecaController::index'], ['id'], null, null, false, true, null]],
        93 => [[['_route' => 'editar_libro', '_controller' => 'App\\Controller\\EditarLibroController::index'], ['id'], null, null, false, true, null]],
        128 => [
            [['_route' => 'app_borrar_biblioteca', '_controller' => 'App\\Controller\\ListarBibliotecasController::borrarBiblioteca'], ['id'], ['POST' => 0], null, false, true, null],
>>>>>>> Stashed changes
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
