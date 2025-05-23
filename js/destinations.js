(function(){
    // console.log("destination.js")
    categoryId = 3; // Remplacez par l'ID de la catégorie souhaitée
    const domaine = window.location.href
    apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
    // console.log(apiUrl)
  
    parcourir_bouton()
  
    function parcourir_bouton(){
      const bouton = document.querySelectorAll(".categorie__bouton")
      // console.log("bouton.length = ", bouton.length)
      bouton.forEach(elm => {
          elm.addEventListener('mousedown', function(){
              // console.log(elm.tagName)
              // console.log("ID bouton = " , elm.dataset.categoryId)
  
              categoryId = elm.dataset.categoryId;
              apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
              return(categoryId, apiUrl)
          })
          elm.addEventListener('mousedown', function(){
  
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
  
                    destinationList .appendChild(articleElement);
                });
            })
            .catch(error => console.error('Erreur lors de la récupération des articles:', error));
          })
      })
    }
  })()