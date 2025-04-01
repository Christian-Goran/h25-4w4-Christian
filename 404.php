<?php
/**
 *  404.php. Page qui apparait lors de l'erreur 404
 */
?>

<?php 
  $image_erreur_404 = get_theme_mod('erreur_404_image_fond', 'Image de fond par défaut');
  $couleur_erreur_404 = get_theme_mod('erreur_404_couleur_fond', 'Couleur par défaut');

  $titre_erreur_404 = get_theme_mod('erreur_404_titre', 'Oops, vous avez échoué sur l\'île 404!');
  $message_erreur_404 = get_theme_mod('erreur_404_message', 'Désolé, la page que vous recherchez n’existe pas ou a été déplacée.');

  $lien_retour_accueil = get_theme_mod('erreur_404_lien_accueil', 'Retour à la page principale');

  $suggestion_article_1 = get_theme_mod('erreur_404_nom_article_1', 'Article recommandé 1');
  $lien_suggestion_1 = get_theme_mod('erreur_404_lien_article_1', '#');

  $suggestion_article_2 = get_theme_mod('erreur_404_nom_article_2', 'Article recommandé 2');
  $lien_suggestion_2 = get_theme_mod('erreur_404_lien_article_2', '#');

  $suggestion_article_3 = get_theme_mod('erreur_404_nom_article_3', 'Article recommandé 3');
  $lien_suggestion_3 = get_theme_mod('erreur_404_lien_article_3', '#');

  $suggestion_article_4 = get_theme_mod('erreur_404_nom_article_4', 'Article recommandé 4');
  $lien_suggestion_4 = get_theme_mod('erreur_404_lien_article_4', '#');
?>

<?php get_header(); ?>
    
  <section class="erreur-404" style="background-image: url(<?php echo($image_erreur_404) ?>)">
    <h1 class="erreur-404__titre"><?php echo($titre_erreur_404)?></h1>
    <h3 class="erreur-404__message"><?php echo($message_erreur_404)?></h3>

    <a href="<?php echo($lien_retour_accueil)?>" class="erreur-404__bouton no-underline">Retourner à la page d'accueil</a>

    <div class="erreur-404__suggestions">
      <a href="<?php echo($lien_suggestion_1)?>" class="" 
      style="background-color: <?php echo($couleur_erreur_404) ?>;">
        <?php echo($suggestion_article_1)?>
      </a>
      <a href="<?php echo($lien_suggestion_2)?>" class="" 
      style="background-color: <?php echo($couleur_erreur_404) ?>;">
        <?php echo($suggestion_article_2)?>
      </a>
      <a href="<?php echo($lien_suggestion_3)?>" class="" 
      style="background-color: <?php echo($couleur_erreur_404) ?>;">
        <?php echo($suggestion_article_3)?>
      </a>
      <a href="<?php echo($lien_suggestion_4)?>" class="" 
      style="background-color: <?php echo($couleur_erreur_404) ?>;">
        <?php echo($suggestion_article_4)?>
      </a>
    </div>

    <div class="erreur-404__recherche">
        <?php get_search_form() ?>
    </div>
  </section>

  <?php get_footer(); ?>

</body>
</html>