<?php
/**
 *  category.php est le modèle utilisé quand tu cliques sur les boutons du menu
 */

  $resultats = $wp_query->found_posts;
?>

<?php get_header() ?>
    <section class="searched__populaire">
            <?php get_template_part("gabarit/carte"); ?>
      <h2><?php echo $resultats ?> résultats trouvés</h2>
      <?php get_template_part("gabarit/carte"); ?>
    </section>
<?php get_footer(); ?>
</body>