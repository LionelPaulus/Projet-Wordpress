<?php
function siri_theme_setup() {

		add_theme_support( 'custom-header', apply_filters( 'thenotes_lite_custom_header_args', array(
		'default-image' => get_template_directory_uri() . '/images/header-image.jpg',
	) ) );
	
}

add_action('init', 'siri_theme_setup');
?>