<?php
// modele front-page.php, affiche la page accueil
?>

<?php get_header();
  $hero_background = get_theme_mod('hero_background', 'Default Title');
?>

    <section class="hero" style="background-image: url(<?php echo($hero_background) ?>)">
        
     <div class="hero__contenu global">
            
        <?php get_template_part('gabarit/hero')?>
            
            <div class="hero__icone-app">
              
                <?php get_template_part('gabarit/icones_sociaux')?>
            
                </div>
        
    </div>
    
    </section>
 
    
    <section class="populaire">
      
        <?php get_template_part('gabarit/carte')?>
    
    </section>
    
    <?php get_footer(); ?>
</body>
</html>