<?php 
  $hero_auteur = get_theme_mod('general_auteur', 'Default Title');
  $hero_adresse = get_theme_mod('general_adresse', 'Default Title');
  $hero_telephone = get_theme_mod('general_telephone', 'Default Title');
  $hero_email = get_theme_mod('general_email', 'Default Title');
?>

<h1 class="hero__titre">
Voyagez autrement avec Mondo Voyages !
</h1>
<p class="hero__description">
Découvrez des destinations uniques et inoubliables avec Mondo Voyages. Nous vous offrons des expériences authentiques, des paysages à couper le souffle et des aventures sur mesure. Partez à la découverte du monde avec nous et crées des souvenirs impérissables
</p>
<button class="hero__bouton">
    Inscription
</button>
<div class="hero__info">
  <p><?php echo($hero_auteur);?></p>
  <p><?php echo($hero_adresse);?></p>
  <p><?php echo($hero_telephone);?></p>
  <p><?php echo($hero_email);?></p>
</div>