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
  <h1 class="text-center"><?php the_title(); ?></h1>
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

<?php

  get_template_part('page-templates/footer');

  get_footer();
?>