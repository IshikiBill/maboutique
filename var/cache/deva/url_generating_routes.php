<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_account_address' => [[], ['_controller' => 'App\\Controller\\AccountAddressController::index'], [], [['text', '/compte/adresses']], [], [], []],
    'app_account_address_add' => [[], ['_controller' => 'App\\Controller\\AccountAddressController::add'], [], [['text', '/compte/ajouter-une-adresse']], [], [], []],
    'app_account_address_edit' => [['id'], ['_controller' => 'App\\Controller\\AccountAddressController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/compte/modifier-une-adresse']], [], [], []],
    'app_account_address_delete' => [['id'], ['_controller' => 'App\\Controller\\AccountAddressController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/compte/supprimer-une-adresse']], [], [], []],
    'app_account' => [[], ['_controller' => 'App\\Controller\\AccountController::index'], [], [['text', '/compte']], [], [], []],
    'app_account_order' => [[], ['_controller' => 'App\\Controller\\AccountOrderController::index'], [], [['text', '/compte/mes-commandes']], [], [], []],
    'app_account_order_show' => [['reference'], ['_controller' => 'App\\Controller\\AccountOrderController::show'], [], [['variable', '/', '[^/]++', 'reference', true], ['text', '/compte/mes-commandes']], [], [], []],
    'app_account_password' => [[], ['_controller' => 'App\\Controller\\AccountPasswordController::index'], [], [['text', '/compte/modifier-mon-mot-de-passe']], [], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'app_category_index' => [[], ['_controller' => 'App\\Controller\\Administrateur\\CategoryController::index'], [], [['text', '/category/']], [], [], []],
    'app_category_new' => [[], ['_controller' => 'App\\Controller\\Administrateur\\CategoryController::new'], [], [['text', '/category/new']], [], [], []],
    'app_category_show' => [['id'], ['_controller' => 'App\\Controller\\Administrateur\\CategoryController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], [], []],
    'app_category_edit' => [['id'], ['_controller' => 'App\\Controller\\Administrateur\\CategoryController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], [], []],
    'app_category_delete' => [['id'], ['_controller' => 'App\\Controller\\Administrateur\\CategoryController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], [], []],
    'cart' => [[], ['_controller' => 'App\\Controller\\CartController::index'], [], [['text', '/mon-panier']], [], [], []],
    'add_to_cart' => [['id'], ['_controller' => 'App\\Controller\\CartController::add'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cart/add']], [], [], []],
    'remove_my_cart' => [[], ['_controller' => 'App\\Controller\\CartController::remove'], [], [['text', '/cart/remove']], [], [], []],
    'delete_to_cart' => [['id'], ['_controller' => 'App\\Controller\\CartController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cart/delete']], [], [], []],
    'decrease_to_cart' => [['id'], ['_controller' => 'App\\Controller\\CartController::decrease'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cart/decrease']], [], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/nous-contacter']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'app_order_cancel' => [['stripeSessionId'], ['_controller' => 'App\\Controller\\OrderCancelController::index'], [], [['variable', '/', '[^/]++', 'stripeSessionId', true], ['text', '/commande/erreur']], [], [], []],
    'app_order' => [[], ['_controller' => 'App\\Controller\\OrderController::index'], [], [['text', '/commande']], [], [], []],
    'app_order_recap' => [[], ['_controller' => 'App\\Controller\\OrderController::add'], [], [['text', '/commande/recapitulatif']], [], [], []],
    'order_validate' => [['stripeSessionId'], ['_controller' => 'App\\Controller\\OrderSuccesController::index'], [], [['variable', '/', '[^/]++', 'stripeSessionId', true], ['text', '/commande/merci']], [], [], []],
    'app_products' => [[], ['_controller' => 'App\\Controller\\ProductController::index'], [], [['text', '/nos-produits']], [], [], []],
    'app_product' => [['slug'], ['_controller' => 'App\\Controller\\ProductController::show'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/produit']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegisterController::index'], [], [['text', '/inscription']], [], [], []],
    'reset_password' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::index'], [], [['text', '/mot-de-passe-oublie']], [], [], []],
    'update_password' => [['token'], ['_controller' => 'App\\Controller\\ResetPasswordController::update'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/modifier-mon-mot-de-passe']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/connexion']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/deconnexion']], [], [], []],
    'app_stripe_create_session' => [['reference'], ['_controller' => 'App\\Controller\\StripeController::index'], [], [['variable', '/', '[^/]++', 'reference', true], ['text', '/commande/create-session']], [], [], []],
];