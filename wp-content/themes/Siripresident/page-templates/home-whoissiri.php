<header class="header">
	<div class="header__background" style="background:url(<?php header_image(); ?>);">
	</div>
	<div class="header__welcome">
		<div class="container">
		<p class="header__welcomeMessage"><?php the_field('hello_text'); ?></p>
		</div>
	</div>
</header>
<section class="content">
<div class="container">
	<h1 class="content__title"><?php the_field('pagetitle'); ?></h1>
	<p class="content__text"><?php the_field('content'); ?></p>
<a href="<?php the_field('linkbutton'); ?>" class="content__buttonLink"><?php the_field('button'); ?></a>
</div>
</section>