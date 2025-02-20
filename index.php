<?php
/**
 * 
 * Index.php est le modèle par défaut 
 * si aucun modèle peut satisfaire la requête http dans ce cas index.php est utilisé
 */
?>




<?php get_header(); ?>
<h1><index class="php"></index></h1>
    <section class="populaire">
      <div class="global">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article class="populaire__article">
        <h2 class="populaire__titre"><?php the_title(); ?></h2>
        <div class="populaire__contenu"><?php echo wp_trim_words(the_content(), 20, "..."); ?></div>
      </article>
      <?php endwhile; endif; ?>
      </div>
    </section>
    <?php get_footer(); ?>
</body>
</html>