<?php
/**
 * Created by PhpStorm.
 * User: Hizary
 * Date: 16/11/2016
 * Time: 18:07
 */
$args=array(
    'post_type' => 'programmations',
    'posts_per_page' => 50,
    'paged' => $paged,
    'tax_query' => array(
        array(
            'taxonomy' => 'categorie-programmation',
            'field'    => 'term_id',
            'terms'    => $term_id,
        ),
    )
);


// The Query
//$wp_query->max_num_pages
$the_query = new WP_Query( $args );

// boucle WordPress
if ($the_query->have_posts()){
    while ($the_query->have_posts()){
        $the_query->the_post();
        ?>
        <div class="card-panel white accent-1 text_prog" draggable="true">
            <h4><?php the_title()?></h4>
            <?php
            if(has_post_thumbnail())
            {
                echo '<div class="backgroundProject">';
                the_post_thumbnail("thumbnail_prog");
                echo '</div>';
            }
            ?>

            <?php the_excerpt(); ?><span class="read_more"></div>
        <?php
    }}else {
    ?>
    Nous n'avons pas trouvé d'article répondant à votre recherche

    <?php
}
?>

