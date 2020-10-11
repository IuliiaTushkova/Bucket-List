<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/idea' => [[['_route' => 'idea', '_controller' => 'App\\Controller\\Idea\\IdeaController::idea'], null, null, null, false, false, null]],
        '/add' => [[['_route' => 'idea_add', '_controller' => 'App\\Controller\\Idea\\IdeaController::add'], null, null, null, false, false, null]],
        '/remove/all' => [[['_route' => 'remove_all', '_controller' => 'App\\Controller\\Idea\\RemoveController::removeAll'], null, null, null, false, false, null]],
        '/categories' => [[['_route' => 'sort_by_category', '_controller' => 'App\\Controller\\Idea\\SortConstrollerController::goToSorting'], null, null, null, false, false, null]],
        '/categories/sort' => [[['_route' => 'get_sorted', '_controller' => 'App\\Controller\\Idea\\SortConstrollerController::sort'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\MainController::home'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\MainController::about'], null, null, null, false, false, null]],
        '/admin/dashbord' => [[['_route' => 'back_office', '_controller' => 'App\\Controller\\User\\BackOfficeController::index'], null, null, null, false, false, null]],
        '/profile/me' => [[['_route' => 'my_profile', '_controller' => 'App\\Controller\\User\\ProfileController::homeConnected'], null, null, null, false, false, null]],
        '/account/creation' => [[['_route' => 'to_register', '_controller' => 'App\\Controller\\User\\RegistrationController::goToAccountCreation'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\User\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\User\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\User\\SecurityController::logout'], null, null, null, false, false, null]],
        '/update/profile' => [[['_route' => 'update_profile', '_controller' => 'App\\Controller\\User\\UpdateProfileController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/idea/detail(?:/(\\d+))?(*:192)'
                .'|/remove/(\\d+)(*:213)'
                .'|/categories/sorted/([^/]++)(*:248)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        192 => [[['_route' => 'idea_details', 'id' => null, '_controller' => 'App\\Controller\\Idea\\IdeaController::detail'], ['id'], null, null, false, true, null]],
        213 => [[['_route' => 'remove_one', '_controller' => 'App\\Controller\\Idea\\RemoveController::removeOne'], ['id'], null, null, false, true, null]],
        248 => [
            [['_route' => 'display_ideas_by_cat', '_controller' => 'App\\Controller\\Idea\\SortConstrollerController::displayIdeasSortedByCategories'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
