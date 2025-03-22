<div class="boite__flex global">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php if (in_category('galerie')) {

      the_content();
    
    } else {?>

    <article class="carte carte--grande">
        
        <div class="carte__contenu">
            <?php
            if (has_post_thumbnail()) {
            
                the_post_thumbnail('thumbnail'); }
            ?>
            <div class="carte__infos">

              <a class="carte__titre" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

              <div class="carte__description">

                <p><?php echo wp_trim_words(get_the_excerpt(), 10, "...")?></p>

                <p>Température minimale: <?php echo the_field("temperature_minimale"); ?> °C</p>

                <p>Température maximale: <?php echo the_field("temperature_maximale"); ?> °C</p>
                
                <a class="carte__bouton carte__bouton--actif" href="<?php the_permalink(); ?>">Suite</a>
              </div>

              <div class="carte__categorie">
                <?php the_category(); ?>
              </div>
            </div>
        </div>
    </article>

    <?php } ?>
    <?php endwhile; endif; ?>
</div>