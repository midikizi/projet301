<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/clients' => [[['_route' => 'app_clients_index', '_controller' => 'App\\Controller\\ClientsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/clients/new' => [[['_route' => 'app_clients_new', '_controller' => 'App\\Controller\\ClientsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/comptes' => [[['_route' => 'app_comptes_index', '_controller' => 'App\\Controller\\ComptesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/comptes/new' => [[['_route' => 'app_comptes_new', '_controller' => 'App\\Controller\\ComptesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/depot' => [[['_route' => 'app_depot_index', '_controller' => 'App\\Controller\\DepotController::index'], null, ['GET' => 0], null, true, false, null]],
        '/depot/new' => [[['_route' => 'app_depot_new', '_controller' => 'App\\Controller\\DepotController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/pret' => [[['_route' => 'app_pret_index', '_controller' => 'App\\Controller\\PretController::index'], null, ['GET' => 0], null, true, false, null]],
        '/pret/new' => [[['_route' => 'app_pret_new', '_controller' => 'App\\Controller\\PretController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/remboursements' => [[['_route' => 'app_remboursements_index', '_controller' => 'App\\Controller\\RemboursementsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/remboursements/new' => [[['_route' => 'app_remboursements_new', '_controller' => 'App\\Controller\\RemboursementsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/retraits' => [[['_route' => 'app_retraits_index', '_controller' => 'App\\Controller\\RetraitsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/retraits/new' => [[['_route' => 'app_retraits_new', '_controller' => 'App\\Controller\\RetraitsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/tontines' => [[['_route' => 'app_tontines_index', '_controller' => 'App\\Controller\\TontinesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/tontines/new' => [[['_route' => 'app_tontines_new', '_controller' => 'App\\Controller\\TontinesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/c(?'
                    .'|lients/([^/]++)(?'
                        .'|(*:65)'
                        .'|/edit(*:77)'
                        .'|(*:84)'
                    .')'
                    .'|omptes/([^/]++)(?'
                        .'|(*:110)'
                        .'|/edit(*:123)'
                        .'|(*:131)'
                    .')'
                .')'
                .'|/depot/([^/]++)(?'
                    .'|(*:159)'
                    .'|/edit(*:172)'
                    .'|(*:180)'
                .')'
                .'|/pret/([^/]++)(?'
                    .'|(*:206)'
                    .'|/edit(*:219)'
                    .'|(*:227)'
                .')'
                .'|/re(?'
                    .'|mboursements/([^/]++)(?'
                        .'|(*:266)'
                        .'|/edit(*:279)'
                        .'|(*:287)'
                    .')'
                    .'|traits/([^/]++)(?'
                        .'|(*:314)'
                        .'|/edit(*:327)'
                        .'|(*:335)'
                    .')'
                .')'
                .'|/tontines/([^/]++)(?'
                    .'|(*:366)'
                    .'|/edit(*:379)'
                    .'|(*:387)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        65 => [[['_route' => 'app_clients_show', '_controller' => 'App\\Controller\\ClientsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        77 => [[['_route' => 'app_clients_edit', '_controller' => 'App\\Controller\\ClientsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        84 => [[['_route' => 'app_clients_delete', '_controller' => 'App\\Controller\\ClientsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        110 => [[['_route' => 'app_comptes_show', '_controller' => 'App\\Controller\\ComptesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        123 => [[['_route' => 'app_comptes_edit', '_controller' => 'App\\Controller\\ComptesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        131 => [[['_route' => 'app_comptes_delete', '_controller' => 'App\\Controller\\ComptesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        159 => [[['_route' => 'app_depot_show', '_controller' => 'App\\Controller\\DepotController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        172 => [[['_route' => 'app_depot_edit', '_controller' => 'App\\Controller\\DepotController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        180 => [[['_route' => 'app_depot_delete', '_controller' => 'App\\Controller\\DepotController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        206 => [[['_route' => 'app_pret_show', '_controller' => 'App\\Controller\\PretController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        219 => [[['_route' => 'app_pret_edit', '_controller' => 'App\\Controller\\PretController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        227 => [[['_route' => 'app_pret_delete', '_controller' => 'App\\Controller\\PretController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        266 => [[['_route' => 'app_remboursements_show', '_controller' => 'App\\Controller\\RemboursementsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        279 => [[['_route' => 'app_remboursements_edit', '_controller' => 'App\\Controller\\RemboursementsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        287 => [[['_route' => 'app_remboursements_delete', '_controller' => 'App\\Controller\\RemboursementsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        314 => [[['_route' => 'app_retraits_show', '_controller' => 'App\\Controller\\RetraitsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        327 => [[['_route' => 'app_retraits_edit', '_controller' => 'App\\Controller\\RetraitsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        335 => [[['_route' => 'app_retraits_delete', '_controller' => 'App\\Controller\\RetraitsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        366 => [[['_route' => 'app_tontines_show', '_controller' => 'App\\Controller\\TontinesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        379 => [[['_route' => 'app_tontines_edit', '_controller' => 'App\\Controller\\TontinesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        387 => [
            [['_route' => 'app_tontines_delete', '_controller' => 'App\\Controller\\TontinesController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
