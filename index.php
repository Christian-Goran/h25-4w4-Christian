<?php /**
 * Modèle de base de notre thème
 */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>voyage</title>
  <link rel="stylesheet" href="style.css">

</head>
<body>
  <header>
    <div class="entete">
      <figure class="entete__logo">
        <img src="images/logo_voyage.png" alt="" width="150" height="150">
      </figure>
      <label for="chk__burger" class="burger">
        <img src="https://s2.svgbox.net/hero-outline.svg?ic=menu&color=000" width="32" height="32">
      </label>
      <input type="checkbox" id="chk__burger" class="chk__burger">
      <div class="entete__nav">
        <nav class="entete__menu">
          <ul class="menu">
            <li class="menu__li">
              <a href="menu__a">Aventure</a>
            </li>

            <li class="menu__li">
              <a href="menu__a">Sportive</a>
            </li>

            <li class="menu__li">
              <a href="menu__a">Culturelle</a>
            </li>

            <li class="menu__li">
              <a href="menu__a">Zen</a>
            </li>
          </ul>


        </nav>
        <div class="entete__recherche">
          <form class="recherche">
            <input type="text" class="recherche_input">
            <img class="recherche_input" src="https://s2.svgbox.net/hero-outline.svg?ic=search"  width="32" height="32">


          </form>
        </div>
      </div>
    </div>
  </header>
  <section class="hero">
    <h1 class="hero__titre">
      Club de voyage
    </h1>
    <p class="hero__description">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed doloremque aperiam tenetur voluptatem porro saepe vero perferendis, odit repellat dignissimos maiores accusamus doloribus ipsa maxime qui architecto ipsum commodi quis!
    </p>
    <a href="" class="hero_courriel">
      info@cmaisonneuve.qc.ca
    </a>
    <button class="hero_button">
      inscription
    </button>
    <div class="hero__icone-app">
      <img src="https://s2.svgbox.net/materialui.svg?ic=facebook" width="20" height="20">
      <img src="https://s2.svgbox.net/social.svg?ic=linkedin" width="20" height="20">
      <img src="https://s2.svgbox.net/social.svg?ic=paypal" alt="" width="20" height="20">
    </div>
  </section>

  
    <section class="galerie">
      <figure class="galerie__fig">
        <img src="" alt="">
      </figure>
    </section>
  



  <section class="promotion">
  <div class="carte carte--grande">
    <figure class="carte__image">
      <img src="images/plage.jpeg" alt="Image de voyage">
    </figure>
    <div class="carte__contenu">
      <h2 class="carte__titre">Destination de rêve</h2>
      <p class="carte__description">Découvrez des endroits magnifiques à travers le monde.</p>
      <button class="carte__bouton carte__bouton--actif">Réserver</button>
    </div>
  </div>  
  </section>
</body>
</html>