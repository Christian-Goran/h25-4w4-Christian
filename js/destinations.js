(function(){
  console.log("destination.js")
  categoryId = 3; // Remplacez par l'ID de la catégorie souhaitée
  paysName = "france"; // Remplacez par l'ID du pays souhaitée
  const domaine = window.location.href
  apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
  paysUrl = `${domaine}wp-json/wp/v2/posts?s=${paysName}`;
  console.log(apiUrl)
  console.log(paysUrl)

  parcourir_bouton()

  function parcourir_bouton(){
    const bouton = document.querySelectorAll(".categorie__bouton")
    // console.log("bouton.length = ", bouton.length)
    bouton.forEach(elm => {
        elm.addEventListener('mousedown', function(){
            // console.log(elm.tagName)
            console.log("ID bouton = " , elm.dataset.categoryId)
            console.log("ID bouton pays = " , elm.dataset.paysId)
            

            categoryId = elm.dataset.categoryId;
            paysName = elm.dataset.paysId;
            apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
            paysUrl = `${domaine}wp-json/wp/v2/posts?s=${paysName}`;
            return(categoryId, apiUrl, paysName)
        })
        elm.addEventListener('mousedown', function(){


          // pour les boutons de categories (front-page)
            document.querySelector('.destination__list').innerHTML = "";

            fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                const destinationList = document.querySelector('.destination__list');
                data.forEach(article => {
                    const articleElement = document.createElement('div');
                    // console.log(article.title.rendered)

                    articleElement.innerHTML = `
                        <div class="destination__list-titre">
                          <label for="chk__destination" class="titre__destination">
                            <h3>${article.title.rendered}</h3>
                          </label>
                          <input type="checkbox" id="chk__destination" class="chk__destination">
                          <div class="destination__list-hidden">
                              ${article.excerpt.rendered}
                              <a href="${article.link}">Lire plus</a>
                          </div>
                        </div>
                    `;

                    destinationList.appendChild(articleElement);
                });
          })


          // pour les boutons de pays (pays)
            document.querySelector('.pays__rest--list').innerHTML = "";


            fetch(paysName)
            .then(response => response.json())
            .then(data => {
                const paysList = document.querySelector('.pays__rest--list');
                data.forEach(article => {
                    const paysElement = document.createElement('div');
                    console.log(article.title.rendered)

                    paysElement.innerHTML = `
                        <div class="pays__list--titre">
                            <h3>${article.title.rendered}</h3>
                          <div class="pays__list">
                              <p>${article.excerpt.rendered}</p>
                              <a href="${article.link}">Lire plus</a>
                          </div>
                        </div>
                    `;

                    paysList.appendChild(articleElement);
                });
          })
        })
    })
  }
})()
(function () {
  // Récupère l'URL de base depuis la balise <base>
  const domaine = document.querySelector('base')?.getAttribute('href') || window.location.origin;

  // Liste des pays
  const pays = [
    "France", "États-Unis", "Canada", "Argentine", "Chili",
    "Belgique", "Maroc", "Mexique", "Japon", "Italie",
    "Islande", "Chine", "Grèce", "Suisse"
  ];

  const menuPays = document.getElementById("menu-ListeDesPays");
  const destinationList = document.querySelector(".destination__list");

  // Génère les boutons pour chaque pays
  pays.forEach((nomPays, index) => {
    const btn = document.createElement("button");
    btn.classList.add("categorie__ul__li");
    if (index === 0) btn.classList.add("active");
    btn.textContent = nomPays;
    btn.dataset.country = nomPays;
    menuPays.appendChild(btn);
  });

  // Active les événements de clic sur les boutons
  function parcourir_bouton() {
    const buttons = document.querySelectorAll(".categorie__ul__li");

    buttons.forEach(btn => {
      btn.addEventListener("click", () => {
        buttons.forEach(b => b.classList.remove("active"));
        btn.classList.add("active");

        const paysChoisi = btn.dataset.country;
        fetchArticles(paysChoisi);
      });
    });
  }

  function fetchArticles(filtre) {
    const isCategory = Number.isInteger(parseInt(filtre));
    const param = isCategory ? `categories=${filtre}` : `search=${encodeURIComponent(filtre)}`;
    const url = `${domaine.replace(/\/$/, '')}/wp-json/wp/v2/posts?${param}`;
    fetch(url)
      .then(res => res.json())
      .then(data => {
        destinationList.innerHTML = "";

        if (data.length > 0) {
          data.forEach(article => {
            const articleEl = document.createElement("div");
            articleEl.classList.add("destination__item");

            const titreWrapper = document.createElement("div");
            titreWrapper.classList.add("destination__title-wrapper");

            const h3 = document.createElement("h3");
            h3.textContent = article.title.rendered;
            h3.classList.add("destination__titre");

            const boutonToggle = document.createElement("button");
            boutonToggle.textContent = "...";
            boutonToggle.classList.add("destination__toggle-button");

            const extrait = document.createElement("div");
            extrait.classList.add("destination__texte");
            extrait.innerHTML = article.excerpt.rendered;
            extrait.style.display = "none";

            const lien = document.createElement("a");
            lien.href = article.link;
            lien.textContent = "Lire plus";
            lien.style.display = "none";

            titreWrapper.appendChild(h3);
            titreWrapper.appendChild(boutonToggle);
            articleEl.appendChild(titreWrapper);
            articleEl.appendChild(extrait);
            articleEl.appendChild(lien);

            boutonToggle.addEventListener("click", () => {
              const visible = extrait.style.display === "block";
              extrait.style.display = visible ? "none" : "block";
              lien.style.display = visible ? "none" : "inline";
              boutonToggle.textContent = visible ? "..." : "Fermer";
            });

            destinationList.appendChild(articleEl);
          });
        } 
      })
      .catch(err => {
        console.error("Erreur API:", err);
        destinationList.innerHTML = "<p>Erreur lors du chargement des destinations.</p>";
      });
  }
  // la France est par défaut
  fetchArticles("France");
  // Activer les boutons après les avoir créés
  parcourir_bouton();
})();
