<header class="header">
	<div class="header__message">
		<?php the_field('title'); ?>
	</div>
	<div class="navbar-fixed">
		<nav>
    		<div class="nav-wrapper">
    		<div class="container">
     			<a href="<?php echo get_home_url(); ?>" class="brand-logo">Siri</a>
      			<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
     			<ul class="right hide-on-med-and-down">
                    <?php wp_nav_menu(array('theme_location' => 'principal')); ?>
      			</ul>
      			<ul class="side-nav" id="mobile-demo">
                    <?php wp_nav_menu(array('theme_location' => 'principal')); ?>
      			</ul>
    		</div>
    		</div>
  		</nav>
  	</div>
</header>