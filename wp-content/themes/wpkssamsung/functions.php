<?php

if (function_exists('acf_add_options_page')) {

  $parent = acf_add_options_page(array(
    'page_title' => 'Configuraciones Generales',
    'menu_title' => 'General',
    'menu_slug' => 'general',
    'capability' => 'edit_posts',
    'position' => false,
    'icon_url' => false,
    'redirect' => false
  ));

}
// Llamados a las librerias
function nombretema_styles(){  
  wp_enqueue_script('jquery');
}

add_action( 'wp_enqueue_scripts', 'nombretema_styles');


// Llamando a la funcion de imagen destacada
function nombretema_setup(){
  add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'nombretema_setup');


?>
