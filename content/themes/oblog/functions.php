<?php

// Exemple simple de fonction sur le hook "wp_head"
// function hello() {
//     echo 'Hello !';
// }
// add_action('wp_head', 'hello', 1);

// on prépare le chargement de notre feuille de style et de notre script js
function oBlog_scripts() {
    wp_enqueue_style('theme-css', get_theme_file_uri('public/css/style.css'), [], '20200903', 'all');
    wp_enqueue_script('theme-script', get_theme_file_uri('public/js/app.js'), [], '20200309', true);
}

// puis on l'accroche sur un hook
add_action('wp_enqueue_scripts', 'oBlog_scripts');

if (!function_exists('oBlog_setup')) :

    // On ajoute des fonctionnalités à notre thème oBlog
    function oBlog_setup() {

        // Laisser à WP la gestion de la balise <title>
        add_theme_support('title-tag');

        // Active les images mises en avant pour les articles
        add_theme_support( 'post-thumbnails' );

        // Menus
        register_nav_menus([
            'main' => 'Menu principal',
            'social' => 'Menu social'
        ]);
    }

endif;

add_action('after_setup_theme', 'oBlog_setup');

// Supprime WP EMOJI
remove_action( 'wp_head', 'print_emoji_detection_script', 7);
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action( 'wp_print_styles', 'print_emoji_styles');

// Supprime le lien vers Windows Live Editor Manifest
remove_action( 'wp_head', 'wlwmanifest_link' );

// Supprime le lien RSD + XML
remove_action( 'wp_head', 'rsd_link' );

// Supprime la meta generator
remove_action( 'wp_head', 'wp_generator' );

// Supprime les extra feed rss
remove_action( 'wp_head', 'feed_links_extra', 3 );

// Supprime les feeds des Posts et des Commentaires
remove_action( 'wp_head', 'feed_links', 2 );