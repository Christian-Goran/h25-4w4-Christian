<?php get_header(); ?>

<main class="erreur-404">
    <section class="contenu">
        <h1>Erreur 404</h1>
        <p>Désolé, la page que vous recherchez est introuvable.</p>
        <a href="<?php echo home_url(); ?>" class="btn-retour">Retour à l'accueil</a>
    </section>

    <div class="searched__populaire">
        <h2>Pages populaires</h2>
        <?php get_template_part('gabarit/carte'); ?>
    </div>
</main>

<?php get_footer(); ?>
