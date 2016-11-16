<?php
// NEWS VOTE
add_action('wp_ajax_news_vote', 'wp_ajax_news');
add_action('wp_ajax_nopriv_news_vote', 'wp_ajax_news');

function wp_ajax_news()
{
  global $wpdb, $_POST;

  $term_id = $_POST['term_id'];
  $paged = $_POST['paged'];
  include  get_template_directory().'/page-templates/ajax-annonces.php';

  die();
}

// PROGRAMMATION
add_action('wp_ajax_filtre-category','filtre_category_function');
add_action('wp_ajax_nopriv_filtre-category','filtre_category_function');

function filtre_category_function()
{
    global $wpdb, $_POST;
    $term_id = $_POST['term_id'];
    $paged = $_POST['paged'];
    include  get_template_directory().'/page-templates/ajax-programmation.php';

    die();
}


