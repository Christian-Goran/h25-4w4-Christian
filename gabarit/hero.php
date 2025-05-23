<?php 
  $nombre_img_bg = get_theme_mod('nombre_img_bg', '1');

  for ($i=0; $i<$nombre_img_bg; $i++){
  $hero_background[$i] = get_theme_mod('hero_background_'. $i, '');
  } print_r($hero_background);
?>

<section class="hero">
  <?php 
    for ($j = 0; $j<$nombre_img_bg; $j++){
  ?>
    <div class="hero__carroussel" style="background-image: url('<?php echo $hero_background[$j] ?>')"></div>
  <?php } ?>

    <div class="hero__contenu global">
        <?php get_template_part('gabarit/hero__info')?>
        <div class="hero__icone-app">
          <?php get_template_part('gabarit/icones_sociaux')?>
        </div>
    </div>
    
    <div class="hero__radio">
      <?php 
        for ($k = 0; $k<$nombre_img_bg; $k++){
          echo "<input  class=\"hero__radio__input\" data-id_radio=\"$k\"   type=\"radio\" name=\"carroussel\"  checked=\"checked\">";
        }
      ?>
    </div>
</section>