<?php 

// Ajouter de l'info directement dans wordpress
function theme_31w_customize_register($wp_customize) {

  /*
  *** SECTION GENERAL ***
  */
  $wp_customize->add_section('general_section', array(
    'title' => __('Infos Générales', 'theme_31w'),
    'priority' => 30,
  ));


  // auteur
  $wp_customize->add_setting('general_auteur', array(
    'default' => __('Christian Goran', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('general_auteur', array(
    'label' => __('Auteur', 'theme_31w'),
    'section' => 'general_section',
    'type' => 'text',
  ));


  // email
  $wp_customize->add_setting('general_email', array(
    'default' => __('', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('general_email', array(
    'label' => __('E-Mail', 'theme_31w'),
    'section' => 'general_section',
    'type' => 'text',
  ));

    // adresse dans le footer
  $wp_customize->add_setting('general_adresse', array(
    'default' => __('', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('general_adresse', array(
    'label' => __('Adresse', 'theme_31w'),
    'section' => 'general_section',
    'type' => 'text',
  ));


  // numero de telephone footer
  $wp_customize->add_setting('general_telephone', array(
    'default' => __('', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('general_telephone', array(
    'label' => __('Téléphone', 'theme_31w'),
    'section' => 'general_section',
    'type' => 'text',
  ));

   /*
  *** ICONES SOCIAUX ***
  */
  $wp_customize->add_section('social_section', array(
    'title' => __('Icones Sociaux', 'theme_31w'),
    'priority' => 30,
  ));


  // Icone Social 1
  $wp_customize->add_setting('icone1', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'icone1', array(
    'label' => __('Img Icone 1', 'theme_31w'),
    'section' => 'social_section',
  )));

  $wp_customize->add_setting('link1', array(
    'default' => __('', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('link1', array(
    'label' => __('Lien Icone 1', 'theme_31w'),
    'section' => 'social_section',
    'type' => 'text_area',
  ));


  // Icone Social 2
  $wp_customize->add_setting('icone2', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'icone2', array(
    'label' => __('Img Icone 2', 'theme_31w'),
    'section' => 'social_section',
  )));

  $wp_customize->add_setting('link2', array(
    'default' => __('', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('link2', array(
    'label' => __('Lien Icone 2', 'theme_31w'),
    'section' => 'social_section',
    'type' => 'text_area',
  ));


  // Icone Social 3
  $wp_customize->add_setting('icone3', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'icone3', array(
    'label' => __('Img Icone 3', 'theme_31w'),
    'section' => 'social_section',
  )));

  $wp_customize->add_setting('link3', array(
    'default' => __('', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('link3', array(
    'label' => __('Lien Icone 3', 'theme_31w'),
    'section' => 'social_section',
    'type' => 'text_area',
  ));


  // Icone Social 4
  $wp_customize->add_setting('icone4', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'icone4', array(
    'label' => __('Img Icone 4', 'theme_31w'),
    'section' => 'social_section',
  )));

  $wp_customize->add_setting('link4', array(
    'default' => __('', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('link4', array(
    'label' => __('Lien Icone 4', 'theme_31w'),
    'section' => 'social_section',
    'type' => 'text_area',
  ));




  /*
  *** SECTION HERO ***
  */
  $wp_customize->add_section('hero_section', array(
    'title' => __('Infos Hero', 'theme_31w'),
    'priority' => 30,
  ));

  // background
  // $wp_customize->add_setting('hero_background', array(
  //   'default' => '',
  //   'sanitize_callback' => 'esc_url_raw',
  // ));

  // $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
  //   'label' => __('Hero Background Image', 'theme_31w'),
  //   'section' => 'hero_section',
  // )));


 


    add_action('wp_enqueue_scripts', 'theme_tp_enqueue_styles');


  /*
  *** SECTION FOOTER ***
  */
  $wp_customize->add_section('footer_section', array(
    'title' => __('Infos Footer', 'theme_31w'),
    'priority' => 30,
  ));

  // mission footer
  $wp_customize->add_setting('footer_mission', array(
    'default' => __('', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('footer_mission', array(
    'label' => __('Mission', 'theme_31w'),
    'section' => 'footer_section',
    'type' => 'text_area',
  ));

  $wp_customize->add_setting('footer_img', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_img', array(
    'label' => __('Image Footer', 'theme_31w'),
    'section' => 'footer_section',
  )));

  // texte image footer
  $wp_customize->add_setting('footer_img_texte', array(
    'default' => __('', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('footer_img_texte', array(
    'label' => __('IMG Texte', 'theme_31w'),
    'section' => 'footer_section',
    'type' => 'text_area',
  ));

  // lien image footer
  $wp_customize->add_setting('footer_img_lien', array(
    'default' => __('', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('footer_img_lien', array(
    'label' => __('IMG Lien', 'theme_31w'),
    'section' => 'footer_section',
    'type' => 'text_area',
  ));






  // Section principale 404
  $wp_customize->add_section('erreur_section', array(
      'title'    => __('Page 404', 'theme_31w'),
      'priority' => 30,
  ));

  // Titre et message d'erreur
  $wp_customize->add_setting('erreur_titre', array(
      'default'           => __('Oops! Page introuvable', 'theme_31w'),
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('erreur_titre', array(
      'label'   => __('Titre d’erreur', 'theme_31w'),
      'section' => 'erreur_section',
      'type'    => 'text',
  ));

  $wp_customize->add_setting('erreur_message', array(
      'default'           => __('Désolé, la page que vous recherchez est introuvable.', 'theme_31w'),
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('erreur_message', array(
      'label'   => __('Message d’erreur', 'theme_31w'),
      'section' => 'erreur_section',
      'type'    => 'textarea',
  ));

  // Lien vers l'accueil
  $wp_customize->add_setting('erreur_lien_accueil', array(
      'default'           => home_url(),
      'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control('erreur_lien_accueil', array(
      'label'   => __('Lien vers l’accueil', 'theme_31w'),
      'section' => 'erreur_section',
      'type'    => 'url',
  ));

  // Image de fond
  $wp_customize->add_setting('erreur_image_fond', array(
      'default'           => '',
      'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'erreur_image_fond', array(
      'label'   => __('Image de fond', 'theme_31w'),
      'section' => 'erreur_section',
  )));

  // Couleur de fond
  $wp_customize->add_setting('erreur_couleur_fond', array(
      'default'           => '#ffffff',
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'erreur_couleur_fond', array(
      'label'   => __('Couleur de fond', 'theme_31w'),
      'section' => 'erreur_section',
  )));

 /////////// info pour le carousel
  for ($k = 0; $k<3 ; $k++) {
    $wp_customize->add_setting('hero_background_' . $k, array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    ///////////////////////////////// ajout du contrôle de la donnée
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_' . $k, array(
      'label' => __('Image en arrière plan ' . ($k+1) , 'theme_tp'),
      'section' => 'hero_section',
    )));
    }

    $wp_customize->add_setting('nombre_img_bg', array(
      'default' => __('', 'theme_31w'),
      'sanitize_callback' => 'sanitize_text_field'
    ));
  
    $wp_customize->add_control('nombre_img_bg', array(
      'label' => __('Nombre d\'images de background', 'theme_31w'),
      'section' => 'hero_section',
      'type' => 'number',
    ));


} 



add_action('customize_register', 'theme_31w_customize_register');?>