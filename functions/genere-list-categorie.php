<?php
/**
 * Genere une liste de sous-categories
 * @param string $parent_slug Le slug de la categorie parente
 */

 function categories_liste($parent_slug) {
  // recuperer la categorie parente a partir de son slug
  $parent_category = get_category_by_slug($parent_slug);

    // Vérifier si la catégorie parente existe

  if ($parent_category) {
    $parent_id = $parent_category->term_id;
  };

  // Récupérer les sous-catégories de "destination"
  $sous_categories = get_categories(array(
    'parent' => $parent_id, // Filtrer par le parent "destination"
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
?>