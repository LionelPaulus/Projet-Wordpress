
<div class="beforenews">
    
</div>

<div class="section news" style="background:url(<?php header_image(); ?>);background-size:cover;-webkit-background-size:cover">
	<div class="row container">
		<div class="col s12 l12">

			<?php
				$the_query = new WP_Query( array ('post_type' => 'post',
    			'orderby' => 'rand',
    			'posts_per_page' => 6,
    			) );
			?>

			<?php if ($the_query->have_posts()) : ?>
		<!-- 		<p class="title">Hey ! Il y a des Posts !</p>
		 -->
			<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

        	<div class="card col s12 m5">
            	<div class="card-image">
            		<img src="<?php the_field('image'); ?>" />

            		<span class="card-title"><?php the_title(); ?></span>
            	</div>
            	
            	<div class="card-content">
              		<p><?php the_excerpt(); ?></p>
            	</div>
            	
            	<div class="card-action">
              		<a href="<?php the_permalink(); ?>">Lire la suite</a>

            	</div>
          	</div>

          	<?php endwhile; ?>
			
			<?php else : ?>
				<p class="nothing">Il n'y a pas de Post à afficher !</p>
			<?php endif; ?>
        
        </div>
    </div>
</div>