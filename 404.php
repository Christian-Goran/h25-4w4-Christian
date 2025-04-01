<?php
/**
 *  404.php. Page qui apparait lors de l'erreur 404
 */
?>

<?php 
  $image_erreur_404 = get_theme_mod('erreur_image_fond', '');
  $couleur_erreur_404 = get_theme_mod('erreur_couleur_fond', '#ffffff');

  $titre_erreur_404 = get_theme_mod('erreur_titre', 'Default Title');
  $message_erreur_404 = get_theme_mod('erreur_message', 'Default Title');

  $lien_retour_accueil = get_theme_mod('erreur_lien_accueil', home_url());

  $suggestion_article_1 = get_theme_mod('erreur_404_nom_article_1', 'Default Title');
  $lien_suggestion_1 = get_theme_mod('erreur_404_lien_article_1', 'Default Title');

  $suggestion_article_2 = get_theme_mod('erreur_404_nom_article_2', 'Default Title');
  $lien_suggestion_2 = get_theme_mod('erreur_404_lien_article_2', 'Default Title');

  $suggestion_article_3 = get_theme_mod('erreur_404_nom_article_3', 'Default Title');
  $lien_suggestion_3 = get_theme_mod('erreur_404_lien_article_3', 'Default Title');

  $suggestion_article_4 = get_theme_mod('erreur_404_nom_article_4', 'Default Title');
  $lien_suggestion_4 = get_theme_mod('erreur_404_lien_article_4', 'Default Title');
?>

<?php get_header(); ?>
    
  <section class="erreur-404" style="background-image: url(<?php echo esc_url($image_erreur_404); ?>); background-color: <?php echo esc_attr($couleur_erreur_404); ?>;">
    <h1 class="erreur-404__titre"><?php echo esc_html($titre_erreur_404); ?></h1>
    <h3 class="erreur-404__message"><?php echo esc_html($message_erreur_404); ?></h3>

    <a href="<?php echo esc_url($lien_retour_accueil); ?>" class="erreur-404__bouton no-underline">Retourner à la page d'accueil</a>

    <div class="erreur-404__suggestions">
      <?php if ($suggestion_article_1) : ?>
        <a href="<?php echo esc_url($lien_suggestion_1); ?>" style="background-color: <?php echo esc_attr($couleur_erreur_404); ?>;">
          <?php echo esc_html($suggestion_article_1); ?>
        </a>
      <?php endif; ?>
      <?php if ($suggestion_article_2) : ?>
        <a href="<?php echo esc_url($lien_suggestion_2); ?>" style="background-color: <?php echo esc_attr($couleur_erreur_404); ?>;">
          <?php echo esc_html($suggestion_article_2); ?>
        </a>
      <?php endif; ?>
      <?php if ($suggestion_article_3) : ?>
        <a href="<?php echo esc_url($lien_suggestion_3); ?>" style="background-color: <?php echo esc_attr($couleur_erreur_404); ?>;">
          <?php echo esc_html($suggestion_article_3); ?>
        </a>
      <?php endif; ?>
      <?php if ($suggestion_article_4) : ?>
        <a href="<?php echo esc_url($lien_suggestion_4); ?>" style="background-color: <?php echo esc_attr($couleur_erreur_404); ?>;">
          <?php echo esc_html($suggestion_article_4); ?>
        </a>
      <?php endif; ?>
    </div>

    <div class="erreur-404__recherche">
        <?php get_search_form(); ?>
    </div>
  </section>

<?php get_footer(); ?>
