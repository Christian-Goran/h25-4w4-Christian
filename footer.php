<!-- format du footer -->

<?php 
  $footer_auteur = get_theme_mod('general_auteur', 'Default Title');

  $footer_adresse = get_theme_mod('general_adresse', 'Default Title');

  $footer_telephone = get_theme_mod('general_telephone', 'Default Title');

  $footer_email = get_theme_mod('general_email', 'Default Title');
  
  $footer_info = get_theme_mod('footer_mission', 'Default Title');
?>

<footer>
    <div class="piedpage global">
        <?php wp_nav_menu(array(
            "menu"=> "principal",
            "container" => "nav",
            "container_class" => "piedpage__s1__externe"
        )); ?>

        <section class="piedpage__s1">
            <div class="piedpage__s1__adresse">
                  <div class="piedpage__s1__adresse__recherche">
                    <?php get_search_form() ?>
                  </div>

                  <p class="piedpage__s1__coord"><?php echo($footer_auteur)?></p>

                  <p class="piedpage__s1__coord"><?php echo($footer_adresse)?></p> 

                  <p class="piedpage__s1__coord"><?php echo($footer_telephone)?></p> 

                  <p class="piedpage__s1__coord"><?php echo($footer_email)?></p> 
                  
                  <div class="piedpage__s1__icone-app">
                    <?php get_template_part('gabarit/icones_sociaux')?>
                  </div>  
            </div>

            <div class="piedpage__s1__externe">
              <h2>Liens externes</h2>
              <div class="menu__ext">
                <a href="https://www.cmaisonneuve.qc.ca/" target="_blank">Collège de Maisonneuve</a>
                <a href="https://www.sommets.com/fr/decouvrir-les-sommets/sommet-saint-sauveur-hiver/" target="_blank">Sommet St-Sauveur</a>
                
              </div>
            </div>

            <div class="piedpage__s1__description">
              <?php echo($footer_info); ?>
            </div>
        </section>
        
        <section class="piedpage__s2">
        </section>
    </div>
</footer>
<?php wp_footer() ?>