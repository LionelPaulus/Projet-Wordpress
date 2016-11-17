<?php
/*
Template Name: Page de donation
*/
?><?php 


?>
<?php
  get_header();
  get_template_part('page-templates/header');
?>

  <div class="container">
  <h2 class="center"><?php the_title(); ?></h2>
  <div class="row">
      <?php
    if (have_posts()){
        while (have_posts()){
            the_post();
    ?>
            <p><?php the_content(); ?></p>
    <?php
    }
    }
    ?>
  </div>
  </div>

<?php

  get_template_part('page-templates/footer');

  get_footer();
?>