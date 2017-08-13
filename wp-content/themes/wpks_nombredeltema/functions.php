<?php

//Configuracion del tema
add_action( 'after_setup_theme', 'wpksnombredeltema');

function wpksnombredeltema(){
  add_theme_support( 'post-thumbnails' );
}


function my_function_admin_bar(){
  return false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

function wpksnombredeltema_styles(){
  wp_enqueue_script('jquery');
}
add_action( 'wp_enqueue_scripts', 'wpksnombredeltema_styles');

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



// add_filter('acf/settings/show_admin', '__return_false');

?>
