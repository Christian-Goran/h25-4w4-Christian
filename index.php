<?php
/**
 *  index.php est le modèle par défaut
 *  si aucun modèle peut satisfaire la requête http dans ce cas c'est index.php qui affichera le contenu de la page
 */
?>
<?php get_header();
    get_template_part('gabarit/carte');
get_footer(); ?>
</body>
</html>