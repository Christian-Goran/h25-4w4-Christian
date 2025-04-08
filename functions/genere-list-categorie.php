<?php 
/**
 * Génére une liste de sous-catégories
 * @param string $parent_slug Le slug de la catégorie parente
 */
function categories_liste($parent_slug){
// Récupérer la catégorie parente à partir de son slug
$parent_category = get_category_by_slug($parent_slug);
// Vérifier si la catégorie parente existe
if ($parent_category) {
    $parent_id = $parent_category->term_id;
    // Récupérer les sous-catégories de "destination"
    $sous_categories = get_categories(array(
    'parent' => $parent_id, // Filtrer par le parent "destination"
    'hide_empty' => true, // Ne pas afficher les catégories vides
));


}