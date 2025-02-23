<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/add_categorie' => [[['_route' => 'app_categorie_add', '_controller' => 'App\\Controller\\CategorieController::add'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/add_hebergement' => [[['_route' => 'app_hebergement_add', '_controller' => 'App\\Controller\\HerbergementController::addHebergement'], null, null, null, false, false, null]],
        '/hebergements' => [[['_route' => 'app_hebergements', '_controller' => 'App\\Controller\\HerbergementController::allhebergements'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/mention' => [[['_route' => 'app_mention', '_controller' => 'App\\Controller\\MentionController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/mes-reservations' => [[['_route' => 'app_mes_reservations', '_controller' => 'App\\Controller\\ReservationController::mesReservations'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'app_mon_profil', '_controller' => 'App\\Controller\\UserController::showProfile'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/hebergement(?'
                    .'|/(?'
                        .'|categorie/([^/]++)(*:79)'
                        .'|([^/]++)/reserver(*:103)'
                    .')'
                    .'|_([^/]++)(*:121)'
                .')'
                .'|/modifier_commentaire_([^/]++)(*:160)'
                .'|/supprimer_commentaire_([^/]++)(*:199)'
                .'|/u(?'
                    .'|pdate_hebergement_(\\d+)(*:235)'
                    .'|ser/edition(?'
                        .'|/([^/]++)(*:266)'
                        .'|\\-(?'
                            .'|mot\\-de\\-passe/([^/]++)(*:302)'
                            .'|photo/([^/]++)(*:324)'
                        .')'
                    .')'
                .')'
                .'|/delete_hebergement_(\\d+)(*:360)'
                .'|/passer\\-en\\-admin\\-(\\d+)(*:393)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        79 => [[['_route' => 'app_hebergement_categorie', '_controller' => 'App\\Controller\\CategorieController::hebergementByCategorie'], ['slug'], null, null, false, true, null]],
        103 => [[['_route' => 'reservation_reserver', '_controller' => 'App\\Controller\\ReservationController::reserver'], ['id'], null, null, false, false, null]],
        121 => [[['_route' => 'app_hebergement', '_controller' => 'App\\Controller\\HerbergementController::oneProduct'], ['id'], null, null, false, true, null]],
        160 => [[['_route' => 'app_commentaire_modifier', '_controller' => 'App\\Controller\\CommentaireController::update'], ['id'], null, null, false, true, null]],
        199 => [[['_route' => 'app_commentaire_supprimer', '_controller' => 'App\\Controller\\CommentaireController::delete'], ['id'], null, null, false, true, null]],
        235 => [[['_route' => 'app_hebergement_update', '_controller' => 'App\\Controller\\HerbergementController::update'], ['id'], null, null, false, true, null]],
        266 => [[['_route' => 'user.edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], null, null, false, true, null]],
        302 => [[['_route' => 'user.edit.password', '_controller' => 'App\\Controller\\UserController::editPassword'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        324 => [[['_route' => 'user.edit.photo', '_controller' => 'App\\Controller\\UserController::editPhoto'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        360 => [[['_route' => 'app_hebergement_delete', '_controller' => 'App\\Controller\\HerbergementController::delete'], ['id'], null, null, false, true, null]],
        393 => [
            [['_route' => 'app_passer_en_admin', '_controller' => 'App\\Controller\\SecurityController::passerEnAdmin'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
