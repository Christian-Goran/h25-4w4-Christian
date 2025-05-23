<?php
/*
Template Name: Template Pays
*/
?>

<?php 
  $couleur_haut = get_theme_mod('examen_couleur_haut', 'Default Title');
  $couleur_bas = get_theme_mod('examen_couleur_bas', 'Default Title');
?>

<!-- header -->
<?php get_header(); ?>

<div style="background-color: <?php echo $couleur_bas ?>">

  <!-- section introduction -->
  <div class="pays__intro" style="background-color: <?php echo $couleur_haut ?>">

    <div class="pays__intro--texte global">
      <h1 class="pays__intro--titre">Les plus beaux pays</h1>
      <p class="pays__intro--desc">
        Plongez au cœur de l’aventure et laissez-vous emporter par l’appel du large ! Notre planète regorge de destinations incroyables, chacune promettant une expérience unique et mémorable. Que vous rêviez de plages idylliques baignées de soleil, de sommets majestueux invitant à la randonnée, de villes vibrantes d’histoire et de modernité, ou de rencontres culturelles authentiques, il y a un pays fait pour vous.
      </p>

      <?php the_content('galerie'); ?>
    </div>

   
    <svg xmlns="http://www.w3.org/2000/svg" class="vague" viewBox="0 0 1440 320"><path fill="<?php echo $couleur_bas ?>" fill-opacity="1" d="M0,192L34.3,186.7C68.6,181,137,171,206,192C274.3,213,343,267,411,277.3C480,288,549,256,617,250.7C685.7,245,754,267,823,256C891.4,245,960,203,1029,181.3C1097.1,160,1166,160,1234,176C1302.9,192,1371,224,1406,240L1440,256L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
  </div>
  <div class="pays__rest" style="background-color: <?php echo $couleur_bas ?>">

    <div class="pays__rest--texte global">

      <section class="pays__rest">
        <h2 class="pays__rest--titre">Articles par pays</h2>
        <?php pays_liste()?>
        <div class="pays__rest--list"></div>
      </section>

    </div>

  </div>

  <!-- footer -->
  <?php get_footer(); ?>
</div>