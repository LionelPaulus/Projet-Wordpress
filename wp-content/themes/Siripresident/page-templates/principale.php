<?php
/*
Template Name: Page normale
*/

get_header(); //appel du template header.php  ?>

<? get_template_part('page-templates/header'); ?>
<section class="content">
<div class="container">
	<?php
		$image1 = get_field('image1');
		$image2 = get_field('image2');
		$image3 = get_field('image3');

	?>
	<h1 class="content__titleLeft">Des mesures économiques et sociales concrètes</h1>
	<div class="content__actuGalerie">
	<div class="content__actuGalerieLeft">
		<img class="content__lastImage" src="<?php echo $image1['url']; ?>" />
	</div>
	<div class="content__actuGalerieright">
		<img class="content__secondImage" src="<?php echo $image2['url']; ?>" />
		<img class="content__thirdImage" src="<?php echo $image3['url']; ?>" />
	</div>
	</div>
	</div>
	<div class="clear"></div>
	<?php
		$bccImage = get_field('backimage');
	?>
	<div class="content__withBack" style="background:url(<?php echo $bccImage['url']; ?>);">
		<a href="<?php the_field('buttonLink') ?>" class="content__buttonLinkLarge"><?php the_field('buttontext'); ?></a>
	</div>
</section>
	<div class="cb"></div>
<? get_template_part('page-templates/footer'); ?>
<?php get_footer(); ?>