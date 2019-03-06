<?php

// Pour savoir si WorPress exécute l'interface de back-office, On utilise la 
// fonction is_admin()
// https://developer.wordpress.org/reference/functions/is_admin/
// https://codex.wordpress.org/fonction_Reference/is_admin
// is_admin();

// La plupart des fonctions sont déclenchées par des évènements.
// On utilise la méthode "add_action" pour associer le déclenchement d'une
// fonction à un évènement.
// https://developer.wordpress.org/reference/functions/add_action/

//  active la gestion des menus
function register_menu() {
    register_nav_menu("new-menu", __("New-Menu", "myWpTheme_TextDomain"));
}
add_action("init", "register_menu");

// Ajout de bootsrap
function load_bootstrap()
{
    // https://developer.wordpress.org/reference/functions/wp_enqueue_style/

    wp_enqueue_style("bootstrap", "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css")
}
add_action("wp_loaded", "load_bootstrap");
//  - Uniquement sur le front-office
// - Event: wp_loaded
// - wp_enqueue_style