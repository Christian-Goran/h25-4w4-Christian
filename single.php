<?php
/**
 *  single.php, modele qui sert a montrer des articles singuliers
 */
?>
<?php get_header() ?>
    <section class="populaire">

        <div class="global">


            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article class="populaire__article">

                <?php 

                if (has_post_thumbnail())

                the_post_thumbnail(); ?>

                <h2 class="populaire__titre"><?php the_title(); ?></h2>

                <div class="populaire__contenu"><?php the_content(); ?></div>

            </article>

            <?php endwhile; endif; ?>

            <div class="single__infos">

              <p>Écrit par <?php the_author()?> le <?php the_date()?></p>

              <?php the_category(); ?>
              
            </div>
        </div>
    </section>
    <?php get_footer(); ?>
</body>
</html>