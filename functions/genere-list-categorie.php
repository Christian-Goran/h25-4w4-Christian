<?php
/**
 * Genere une liste de sous-categories
 * @param string $parent_slug Le slug de la categorie parente
 */

 function categories_liste($parent_slug) {
  // recuperer la categorie parente a partir de son slug
  // $parent_category = get_category_by_slug($parent_slug);

    // Vérifier si la catégorie parente existe

  // if ($parent_category) {
  //   $parent_id = $parent_category->term_id;
  // };

  // Récupérer les sous-catégories de "destination"
  $sous_categories = get_categories(array(
    // 'parent' => $parent_id, // Filtrer par le parent "destination"
    'hide_empty' => true, // Ne pas afficher les catégories vides
  ));

    // Vérifier s'il y a des sous-catégories
    if (!empty($sous_categories)) {
      echo '<div class="categorie__div">';
      foreach ($sous_categories as $categorie) {
        // Afficher le nom de chaque sous-catégorie
        echo '<button  data-category-id="' . esc_html($categorie->term_id) . '" class="categorie__bouton">' . esc_html($categorie->name) . '</button>';
      }
      echo '</div>';

    } else {
      echo "<script>console.log('Aucune sous-catégorie trouvée.');</script>";
    }
  }

  function pays_liste() {
  // Récupérer les sous-catégories de "pays"
  $sous_pays = get_posts(array(
    'hide_empty' => true,
  ));

    // Vérifier s'il y a des sous-catégories
    if (!empty($sous_pays)) {

      echo '<div class="pays__div">';
        // Afficher le nom de chaque sous-catégorie
        echo '<button  data-pays-id="france" class="pays__div--bouton"> France </button>';
        echo '<button  data-pays-id="etats-unis" class="pays__div--bouton"> États-Unis </button>';
        echo '<button  data-pays-id="canada" class="pays__div--bouton"> Argentine </button>';
        echo '<button  data-pays-id="chili" class="pays__div--bouton"> Chili </button>';
        echo '<button  data-pays-id="belgique" class="pays__div--bouton"> Belgique </button>';
        echo '<button  data-pays-id="maroc" class="pays__div--bouton"> Maroc </button>';
        echo '<button  data-pays-id="mexique" class="pays__div--bouton"> Mexique </button>';
        echo '<button  data-pays-id="japon" class="pays__div--bouton"> Japon </button>';
        echo '<button  data-pays-id="italie" class="pays__div--bouton"> Italie </button>';
        echo '<button  data-pays-id="islande" class="pays__div--bouton"> Islande </button>';
        echo '<button  data-pays-id="chine" class="pays__div--bouton"> Chine </button>';
        echo '<button  data-pays-id="grece" class="pays__div--bouton"> Grèce </button>';
        echo '<button  data-pays-id="suisse" class="pays__div--bouton"> Suisse </button>';
      }
      echo '</div>';
  }
?>