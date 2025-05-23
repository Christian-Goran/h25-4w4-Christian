
 <!-- <?php
  $examen_couleur = get_theme_mod('examen_couleur', 'Default Title'); 
  ?> -->
 
 <form  class="recherche">
     <input class="recherche__input" type="search" placeholder="Rechercher..." value="<?php echo get_search_query(); ?>" name="s"/>
     <button class="recherche__bouton" type="submit">
         <img  class="recherche__img" src="https://s2.svgbox.net/hero-outline.svg?ic=search&color=000" width="20" height="20">
     </button>
 </form>