<?php
/**
 *   functions.php
 */


 function mon_theme_supports() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action( 'after_setup_theme', 'mon_theme_supports' );

?>





<?php
function ajouter_css_dans_header() {

    wp_enqueue_style(
        'style_normalize',
        get_template_directory_uri() . '/normalize.css',
        array(),
        filemtime(get_template_directory() . '/normalize.css'));
   
   
     wp_enqueue_style(
        'style_principal',
        get_template_directory_uri() . '/style.css',
        array(),
        filemtime(get_template_directory() . '/style.css'));

}
add_action('wp_enqueue_scripts', 'ajouter_css_dans_header');

function modifie_requete_principal( $query ) {
    if ( $query->is_home() && $query->is_main_query() && ! is_admin() ) {
      $query->set( 'category_name', 'populaire' );
      $query->set( 'orderby', 'title' );
      $query->set( 'order', 'ASC' );
      }
     }
     add_action( 'pre_get_posts', 'modifie_requete_principal' );
?>
