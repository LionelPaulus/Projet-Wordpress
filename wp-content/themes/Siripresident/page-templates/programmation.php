<?php  //appel du template header.php


get_header();
$args=array(
'post_type' => 'post',
'posts_per_page' => 50,
'paged' => $paged,
'tax_query' => array(
array(
'taxonomy' => 'category',
'field'    => 'term_id',
'terms'    => $term_id,
),
)
);

// The Query
//$wp_query->max_num_pages
$the_query = new WP_Query( $args );

?>
<body>

<section>





    <ul id="slide-out" class="side-nav already_visible">
        <?php
        $terms = get_terms( 'category', 'hide_empty=0' );

        if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){

            foreach ( $terms as $term )
            {
                echo '<li><a href="#" title="' . $term->name . '" data-id="' . $term->term_id . '">
                ' . $term->name . '</a>
                </li>';
            }

        }
        ?>

    </ul>
    <div class="programmation_container">
    <div class="card-panel white accent-1 description_programmation">
        <h4>Notre Programme</h4>
        <p>Retrouvez tous les projets de campagnes que Siri mettra en place une fois élu.
            N'hésitez pas à modifier l'emplacement des différents projets dans leurs ordre d'importance selon vous,(les plus importants en haut).</p>
        <?php

        // boucle WordPress
        if ($the_query->have_posts()){
            while ($the_query->have_posts()){
                $the_query->the_post();
                ?>
                <div class="card-panel white accent-1">
                <h4><?php the_title()?></h4>
                    <h3><?php the_terms( get_the_ID(), 'economie', 'Catégories: ', ' / ' ); ?></h3>
                <?php the_excerpt(); ?><span class="read_more"></div>
                <?php
            }}else {
            ?>
            Nous n'avons pas trouvé d'article répondant à votre recherche

            <?php
        }
        ?>

    </div>
    </div>





</section>


<script src="https://maps.googleapis.com/maps/api/js" type="text/javascript"></script>

</body>
</html>