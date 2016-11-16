<?php
function ajout_scripts() {

  wp_register_script('main_script', get_template_directory_uri() . '/js/app.js', array('jquery'),'1.1', true);
  wp_enqueue_script('main_script');
  wp_localize_script('main_script', 'ajaxurl', admin_url( 'admin-ajax.php' ) );
  wp_register_script('materialize_script', get_template_directory_uri() . '/js/materialize.min.js', array('jquery'),'1.1', true);
  wp_enqueue_script('materialize_script');
  wp_register_style( 'main_style', get_template_directory_uri() . '/css/app.css');
  wp_enqueue_style( 'main_style' );

}
add_action( 'wp_enqueue_scripts', 'ajout_scripts' );

?>