<?php 
  $hero_auteur = get_theme_mod('general_auteur', 'Default Title');
  $hero_adresse = get_theme_mod('general_adresse', 'Default Title');
  $hero_telephone = get_theme_mod('general_telephone', 'Default Title');
  $hero_email = get_theme_mod('general_email', 'Default Title');
?>

<h1 class="hero__titre">
    Club de voyages Mondo
</h1>
<p class="hero__description">
Faites partie de notre club de voyage et profitez de nos offres exclusives !!!
<button class="hero__bouton">
    Inscription
</button>
<div class="hero__info">
  <p><?php echo($hero_auteur);?></p>
  <p><?php echo($hero_adresse);?></p>
  <p><?php echo($hero_telephone);?></p>
  <p><?php echo($hero_email);?></p>
</div>