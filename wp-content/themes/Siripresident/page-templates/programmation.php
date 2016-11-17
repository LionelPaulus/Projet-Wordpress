<?php //appel du template header.php


get_header();
get_template_part('page-templates/header');

?>
<body>

<section>
    <ul id="slide-out" class="side-nav already_visible">
        <?php
        $terms = get_terms('category', 'hide_empty=0');

        if (!empty($terms) && !is_wp_error($terms)) {

            foreach ($terms as $term) {
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
                N'hésitez pas à modifier l'emplacement des différents projets dans leurs ordre d'importance selon
                vous,(les plus importants en haut).</p>
            <div class="article_prog">

            </div>

        </div>
    </div>
</section>
<script src="https://maps.googleapis.com/maps/api/js" type="text/javascript"></script>
</body>
<?php

get_template_part('page-templates/footer');

get_footer();
?>
</html>