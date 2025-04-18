(function() {
  console.log("carroussel fonctionne");

  let hero__radio__input = document.querySelectorAll(".hero__radio__input");
  let hero__carroussel = document.querySelectorAll(".hero__carroussel");
  let i = 0;

  console.log("radio input", hero__radio__input);
  console.log("carroussel", hero__carroussel);

  const removeAllActive = () => {
    hero__carroussel.forEach(slide => {
      slide.classList.remove("hero__carroussel--active");
    });
  };

  hero__radio__input.forEach(elm => {
    elm.addEventListener('click', function() {
      removeAllActive();
      let index = Number(elm.dataset.id_radio);
      hero__carroussel[index].classList.add("hero__carroussel--active");
      i = index; // mettre à jour l'index courant
    });
  });

  setInterval(() => {
    i++;
    if (i >= hero__carroussel.length) {
      i = 0;
    }

    removeAllActive();
    hero__carroussel[i].classList.add("hero__carroussel--active");

    console.log(i);
  }, 5000);
})();
