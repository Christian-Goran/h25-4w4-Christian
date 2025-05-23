(function() {
 
  let hero__radio__input = document.querySelectorAll(".hero__radio__input")
  let hero__carroussel = document.querySelectorAll(".hero__carroussel")


  let i = 0 

  
  

  // pour chaque bouton radio
  hero__radio__input.forEach(elm=>{
    // quand tu cliques sur le bouton radio...
    elm.addEventListener('click', function(){

      hero__carroussel[i].classList.remove("hero__carroussel--active"); // mettre invisible l'image d'avant
      i = elm.getAttribute('data-id_radio'); // aller prendre l'id du bouton sélectioné
      hero__carroussel[i].classList.add('hero__carroussel--active'); // mettre visible l'image lie au bouton selectionné
    })
  })


  hero__carroussel[0].classList.add("hero__carroussel--active");



  setInterval(() => {
    
   
    i++;


    
    if (i >= hero__carroussel.length) {
      hero__carroussel[hero__carroussel.length - 1].classList.remove("hero__carroussel--active");
      i = 0;
    }
    // enlever la classe d'opacité à l'item d'avant
    if (i > 0) {
      hero__carroussel[i-1].classList.remove("hero__carroussel--active");
    }
    // remettre la class d'opacité
    hero__carroussel[i].classList.add("hero__carroussel--active");


    // loop a travers les boutons
    hero__radio__input.forEach((bouton)=>{
      if (bouton.getAttribute('data-id_radio') == i) {
        bouton.checked = true; // on active le bon bouton radio
      } else {
        bouton.checked = false; // on desactive les autres boutons radio
      }
    })


    // s'assurer que ca marche
    // console.log (i)
  }, 5000); 
})()