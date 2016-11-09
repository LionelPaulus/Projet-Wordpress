<?php
function ajout_scripts() {

  wp_register_script('main_script', get_template_directory_uri() . '/js/app.js', array('jquery'),'1.1', true);
  wp_enqueue_script('main_script');
  wp_register_style( 'main_style', "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."/css/app.css");
  wp_enqueue_style( 'main_style' );

}
add_action( 'after_setup_theme', 'ajout_scripts' );

?>