/**
  *  Script js permettant d'extraite des destinations de voyage
  */
boutons.forEach(function(){
    console.log('destinations.js loaded');
    const categoryId = 3; // Remplacez par l'ID de la catégorie souhaitée
    const domaine = window.location.href
    let apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
    const categorie__ul__list = document.querySelectorAll('.categorie__ul__li');

    categorie__ul__list.forEach(li => {
        li.addEventListener('mousedown', function() {
            const selectedCategoryId = this.getAttribute('data-category-id');

            categoryId = li.dataset.id;
            apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${selectedCategoryId}`;
            console.log('ApiUrl = ', apiUrl);
            mon_fetch(apiUrl);
            
        });
    })



    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            const destinationList = document.querySelector('.destination__list');
            data.forEach(article => {
                const articleElement = document.createElement('div');
                articleElement.innerHTML = `
                    <h3>${article.title.rendered}</h3>
                    <div>${article.excerpt.rendered}</div>
                    <a href="${article.link}">Lire plus</a>
                `;
                destinationList .appendChild(articleElement);
            });
        })
        .catch(error => console.error('Erreur lors de la récupération des articles:', error));
    })()