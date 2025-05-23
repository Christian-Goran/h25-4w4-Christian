<?php
/*
Template Name: Pays
*/
?>
<?php get_header(); ?>

<section class="populaire">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="populaire__article">
                    <?php
                    if (has_post_thumbnail())
                     the_post_thumbnail(); ?>
                    <h2 class="populaire__titre"><?php the_title(); ?></h2>
                    <div class="pouplaire__contenu"><?php the_content(); ?></div>

                </article>
            <?php endwhile; endif; ?>
        </div>
    </section>

    <svg xmlns="http://www.w3.org/2000/svg"
    class = "vague"
    style = "top:21px;" 
    viewBox="0 0 1440 320">
    <path 
        fill="#fff2ab" 
        fill-opacity="1"
        d="M0,160L48,138.7C96,117,192,75,288,85.3C384,96,480,160,576,165.3C672,171,768,117,864,112C960,107,1056,149,1152,165.3C1248,181,1344,171,1392,165.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>
    <section class = "destinationLesPays">
    <h2 class="destination__titre">Articles de la catégorie</h2>
    <div id="menu-ListeDesPays" class="menu-ListeDesPays"></div>
    <div class="destination__list"></div>
    </section>
<?php get_footer(); ?>