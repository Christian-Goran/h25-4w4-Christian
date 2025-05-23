<?php
/**
 * Genere une liste de sous-categories
 * @param string $parent_slug Le slug de la categorie parente
 */

 function categories_liste($parent_slug) {
  $parent_category = get_category_by_slug($parent_slug);

    // Vérifier si la catégorie parente existe

  if ($parent_category) {
    $parent_id = $parent_category->term_id;
  };

 
  $sous_categories = get_categories(array(
    'parent' => $parent_id, // Filtrer par le parent "destination"
    'hide_empty' => true, // Ne pas afficher les catégories vides
  ));

    if (!empty($sous_categories)) {
      echo '<div class="categorie__div">';
      foreach ($sous_categories as $categorie) {
     
        echo '<button  data-category-id="' . esc_html($categorie->term_id) . '" class="categorie__bouton">' . esc_html($categorie->name) . '</button>';
      }
      echo '</div>';

    } else {
      echo "<script>console.log('Aucune sous-catégorie trouvée.');</script>";
    }


  }
?>