<?php
  get_header();
  get_template_part('page-templates/header');
?>

<div class="new" style="background:url(<?php the_field('image'); ?>);background-size:cover;-webkit-background-size:cover">
	<div class="row container">
		<div class="col s12 m11">

		<?php
            // boucle WordPress
            if (have_posts()){
                while (have_posts()){
                    the_post();
        ?>

        <div class="col s12 m8">
            <h2 class="header"><?php the_title(); ?></h2>
            <div class="card horizontal">
    
                <div class="card-stacked col s12 m8">
                    <div class="card-content">
                        <p><?php the_content(); ?></p>
                    </div>
                
                    <div class="card-action">
                        <a href="<?php echo get_home_url(); ?>">retour à l'accueil</a>
                    </div>
                </div>
            </div>
        </div>

        <?php
                }
            }
            else {
        ?>
        Nous n'avons pas trouvé d'article répondant à votre recherche
        <?php
            }
        ?>
        
        </div>
    </div>
</div>


<?php
  get_footer();
  get_template_part('page-templates/footer');
?>
