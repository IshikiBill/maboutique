<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/compte/adresses' => [[['_route' => 'app_account_address', '_controller' => 'App\\Controller\\AccountAddressController::index'], null, null, null, false, false, null]],
        '/compte/ajouter-une-adresse' => [[['_route' => 'app_account_address_add', '_controller' => 'App\\Controller\\AccountAddressController::add'], null, null, null, false, false, null]],
        '/compte' => [[['_route' => 'app_account', '_controller' => 'App\\Controller\\AccountController::index'], null, null, null, false, false, null]],
        '/compte/mes-commandes' => [[['_route' => 'app_account_order', '_controller' => 'App\\Controller\\AccountOrderController::index'], null, null, null, false, false, null]],
        '/compte/modifier-mon-mot-de-passe' => [[['_route' => 'app_account_password', '_controller' => 'App\\Controller\\AccountPasswordController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/category' => [[['_route' => 'app_category_index', '_controller' => 'App\\Controller\\Administrateur\\CategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/category/new' => [[['_route' => 'app_category_new', '_controller' => 'App\\Controller\\Administrateur\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/mon-panier' => [[['_route' => 'cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/cart/remove' => [[['_route' => 'remove_my_cart', '_controller' => 'App\\Controller\\CartController::remove'], null, null, null, false, false, null]],
        '/nous-contacter' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/commande' => [[['_route' => 'app_order', '_controller' => 'App\\Controller\\OrderController::index'], null, null, null, false, false, null]],
        '/commande/recapitulatif' => [[['_route' => 'app_order_recap', '_controller' => 'App\\Controller\\OrderController::add'], null, ['POST' => 0], null, false, false, null]],
        '/nos-produits' => [[['_route' => 'app_products', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegisterController::index'], null, null, null, false, false, null]],
        '/mot-de-passe-oublie' => [[['_route' => 'reset_password', '_controller' => 'App\\Controller\\ResetPasswordController::index'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/c(?'
                    .'|om(?'
                        .'|pte/(?'
                            .'|m(?'
                                .'|odifier\\-une\\-adresse/([^/]++)(*:58)'
                                .'|es\\-commandes/([^/]++)(*:87)'
                            .')'
                            .'|supprimer\\-une\\-adresse/([^/]++)(*:127)'
                        .')'
                        .'|mande/(?'
                            .'|erreur/([^/]++)(*:160)'
                            .'|merci/([^/]++)(*:182)'
                            .'|create\\-session/([^/]++)(*:214)'
                        .')'
                    .')'
                    .'|a(?'
                        .'|tegory/([^/]++)(?'
                            .'|(*:246)'
                            .'|/edit(*:259)'
                            .'|(*:267)'
                        .')'
                        .'|rt/(?'
                            .'|add/([^/]++)(*:294)'
                            .'|de(?'
                                .'|lete/([^/]++)(*:320)'
                                .'|crease/([^/]++)(*:343)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/produit/([^/]++)(*:372)'
                .'|/modifier\\-mon\\-mot\\-de\\-passe/([^/]++)(*:419)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        58 => [[['_route' => 'app_account_address_edit', '_controller' => 'App\\Controller\\AccountAddressController::edit'], ['id'], null, null, false, true, null]],
        87 => [[['_route' => 'app_account_order_show', '_controller' => 'App\\Controller\\AccountOrderController::show'], ['reference'], null, null, false, true, null]],
        127 => [[['_route' => 'app_account_address_delete', '_controller' => 'App\\Controller\\AccountAddressController::delete'], ['id'], null, null, false, true, null]],
        160 => [[['_route' => 'app_order_cancel', '_controller' => 'App\\Controller\\OrderCancelController::index'], ['stripeSessionId'], null, null, false, true, null]],
        182 => [[['_route' => 'order_validate', '_controller' => 'App\\Controller\\OrderSuccesController::index'], ['stripeSessionId'], null, null, false, true, null]],
        214 => [[['_route' => 'app_stripe_create_session', '_controller' => 'App\\Controller\\StripeController::index'], ['reference'], null, null, false, true, null]],
        246 => [[['_route' => 'app_category_show', '_controller' => 'App\\Controller\\Administrateur\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        259 => [[['_route' => 'app_category_edit', '_controller' => 'App\\Controller\\Administrateur\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        267 => [[['_route' => 'app_category_delete', '_controller' => 'App\\Controller\\Administrateur\\CategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        294 => [[['_route' => 'add_to_cart', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        320 => [[['_route' => 'delete_to_cart', '_controller' => 'App\\Controller\\CartController::delete'], ['id'], null, null, false, true, null]],
        343 => [[['_route' => 'decrease_to_cart', '_controller' => 'App\\Controller\\CartController::decrease'], ['id'], null, null, false, true, null]],
        372 => [[['_route' => 'app_product', '_controller' => 'App\\Controller\\ProductController::show'], ['slug'], null, null, false, true, null]],
        419 => [
            [['_route' => 'update_password', '_controller' => 'App\\Controller\\ResetPasswordController::update'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
