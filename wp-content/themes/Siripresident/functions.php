<?php
include_once 'inc/stylesadd.php';
include_once 'inc/removeversion.php';
include_once 'inc/menu.php';
include_once 'inc/sirisetup.php';
include_once 'inc/ajax.php';


add_action('init','create_custom_post_type_annonces');

function create_custom_post_type_annonces(){
    $labels = array(
        'name'               => 'programmation',
        'singular_name'      => 'programmation',
        'all_items'          => 'toute la programmation',
        'add_new'            => 'ajouter un projet',
        'add_new_item'       => 'ajouter un nouveau projet',
        'edit_item'          => "modifier un projet",
        'new_item'           => 'nouveau projet',
        'view_item'          => "voir le projet",
        'search_items'       => 'trouver un projet',
        'not_found'          => 'No result',
        'not_found_in_trash' => 'No result',
        'parent_item_colon'  => 'announce model:',
        'menu_name'          => 'programmation',
    );
    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor', 'comments'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 1,
        'menu_icon'           => 'dashicons-pressthis',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => 'programmation' ),

    );

    register_post_type('programmations', $args );
}

add_action('init','create_custom_taxonomy');

function create_custom_taxonomy() {
    $args = array(
        'label' => ( 'Categorie programmation' ),
        'rewrite' => array( 'slug' => 'categorie-programmation' ),
        'hierarchical' => true,
    );
    register_taxonomy( 'categorie-programmation','programmations', $args );
};
?>