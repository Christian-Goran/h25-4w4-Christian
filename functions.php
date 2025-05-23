<?php
// Définir le chemin vers le dossier "functions"
$functions_dir = get_template_directory() . '/functions/';


include_once $functions_dir . 'options.php';
include_once $functions_dir . 'customizer.php';
include_once $functions_dir . 'genere-list-categorie.php';


// Déclaration des scripts
function pays_enqueue_scripts() {
    wp_enqueue_script('destination-js', get_template_directory_uri() . '/js/destination.js', ['jquery'], null, true);
    wp_localize_script('destination-js', 'pays_ajax', [
        'api_url' => home_url('/wp-json/wp/v2/posts'),
    ]);
}
add_action('wp_enqueue_scripts', 'pays_enqueue_scripts');

// Fonction pour créer une vague
// Enregistrer le Custom Post Type "destination"
function creer_post_type_destination() {
    register_post_type('destination',
        array(
            'labels' => array(
                'name' => __('Destinations'),
                'singular_name' => __('Destination')
            ),
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true, // Important pour l'API REST
            'supports' => array('title', 'editor', 'thumbnail'),
            'taxonomies' => array('pays'),
        )
    );
}
add_action('init', 'creer_post_type_destination');

// Créer la taxonomie "pays"
function creer_taxonomie_pays() {
    register_taxonomy(
        'pays',
        'destination',
        array(
            'label' => __('Pays'),
            'rewrite' => array('slug' => 'pays'),
            'hierarchical' => true,
            'show_in_rest' => true // Important pour l'API REST
        )
    );
}
add_action('init', 'creer_taxonomie_pays');
