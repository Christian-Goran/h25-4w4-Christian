<?php
/**
 *  404.php - Page qui apparait lors de l'erreur 404
 */
?>

<?php 
  $image_erreur_404 = get_theme_mod('erreur_image_fond', '');
  $couleur_erreur_404 = get_theme_mod('erreur_couleur_fond', 'Default Title');
  $couleur_texte_404 = get_theme_mod('erreur_couleur_texte', 'Default Title');

  $titre_erreur_404 = get_theme_mod('erreur_titre', 'Default Title');
  $message_erreur_404 = get_theme_mod('erreur_message', "Default Title");
  
  $lien_retour_accueil = get_theme_mod('erreur_lien_accueil', home_url());
?>

<?php get_header(); ?>
    
<section class="erreur-404" style="background-image: url(<?php echo esc_url($image_erreur_404); ?>); background-color: <?php echo esc_attr($couleur_erreur_404); ?>; color: <?php echo esc_attr($couleur_texte_404); ?>;">
    <h1 class="erreur-404__titre"> <?php echo esc_html($titre_erreur_404); ?> </h1>
    <h3 class="erreur-404__message"> <?php echo esc_html($message_erreur_404); ?> </h3>

    <a href="<?php echo esc_url($lien_retour_accueil); ?>" class="erreur-404__bouton">Retourner à l'accueil</a>

    <nav class="erreur__nav">
        <?php wp_nav_menu(array(
            'menu'            => 'menu_404',
            'container'       => 'div',
            'container_class' => 'erreur__menu',
        )); ?>
    </nav>

    <form class="erreur__recherche" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" style="border-bottom: 2px solid <?php echo esc_attr($couleur_texte_404); ?>; color: <?php echo esc_attr($couleur_texte_404); ?>;">
        <input class="erreur__recherche--input" type="search" placeholder="Rechercher..." value="<?php echo get_search_query(); ?>" name="s" />
    </form>
</section>

<?php get_footer(); ?>