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
  *** SECTION HERO ***
  */
  $wp_customize->add_section('hero_section', array(
    'title' => __('Infos Hero', 'theme_31w'),
    'priority' => 30,
  ));

  // background
  $wp_customize->add_setting('hero_background', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
    'label' => __('Hero Background Image', 'theme_31w'),
    'section' => 'hero_section',
  )));



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
}
add_action('customize_register', 'theme_31w_customize_register');

?>