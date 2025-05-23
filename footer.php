<!-- format du footer -->

<?php 
  $footer_auteur = get_theme_mod('general_auteur', 'Default Title');
  $footer_adresse = get_theme_mod('general_adresse', 'Default Title');
  $footer_telephone = get_theme_mod('general_telephone', 'Default Title');
  $footer_email = get_theme_mod('general_email', 'Default Title');
  $footer_info = get_theme_mod('footer_mission', 'Default Title');
  $footer_img = get_theme_mod('footer_img', 'Default Title');
  $footer_img_texte = get_theme_mod('footer_img_texte', 'Default Title');
  $footer_img_lien = get_theme_mod('footer_img_lien', 'Default Title');
?>

<svg xmlns="http://www.w3.org/2000/svg" class="vague" viewBox="0 0 1440 320"><path fill="rgb(180, 224, 116)" fill-opacity="1" d="M0,192L34.3,186.7C68.6,181,137,171,206,192C274.3,213,343,267,411,277.3C480,288,549,256,617,250.7C685.7,245,754,267,823,256C891.4,245,960,203,1029,181.3C1097.1,160,1166,160,1234,176C1302.9,192,1371,224,1406,240L1440,256L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
<footer>
    <div class="piedpage global">
        <?php wp_nav_menu(array(
            "menu"=> "externe",
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
                <a href="https://www.sommets.com/en/online-store/sommet-saint-sauveur-water-park/" target="_blank">Sommet Saint-Sauveur</a>
               
            </div>

            <div class="piedpage__img">
              <h3>Destionation INCROYABLE</h3>
              <a class="piedpage__img--lien" href="<?php echo $footer_img_lien ?>"><?php echo $footer_img_texte ?></a>
              <img src="<?php echo $footer_img ?>">
            </div>
        </section>

          <div class="piedpage__s1__description">
            <?php echo($footer_info); ?>
          </div>

    </div>
</footer>
<?php wp_footer() ?>