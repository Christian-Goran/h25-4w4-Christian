<?php
// modele front-page.php, affiche la page accueil
?>

<?php get_header(); ?>

<?php get_template_part('gabarit/hero')?>

<section class="populaire">
  <?php get_template_part('gabarit/carte')?>
</section>

<section class="destination">
  <h2 class="destination__titre">Articles par catégorie</h2>
  <?php categories_liste("destination")?>
  <div class="destination__list"></div>
</section>

<?php get_footer(); ?>

</body>
</html>