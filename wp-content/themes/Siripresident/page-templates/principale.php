<?php
/*
Template Name: Page normale
*/

get_header(); //appel du template header.php  ?>
<header class="header">
	<div class="header__message">
		<?php the_field('title'); ?>
	</div>
	<div class="header__welcomePage2">
		<div class="container">
		<nav class="header__menu">
			<a class="header__menuItem" href="#">Actualités</a>
			<a class="header__menuItem" href="#">Programme</a>
			<a class="header__menuItem" href="#">Voter</a>
			<a class="header__menuItem" href="#">Devenez militant</a>
			<a class="header__menuItem" href="#">Donner</a>
		</nav>
		</div>
	</div>
</header>
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
<footer class="footer">
	<div class="footer__upPart">
		<div class="container">
			<div class="footer__upPartLeft">
				<p class="footerupPartLeftTitle">Devenez militant</p>
				<form>
					<label for="email" class="label">Mail</label><br/>
					<input type="email" name="email" class="footer__input" placeholder="Adresse E-mail"></input><br/>
					<label for="postal" class="label">Code Postal</label><br/>
					<input type="text" name="postal" class="footer__input" placeholder="Code Postal"></input>
				</form>
			</div>
			<div class="footer__upPartCenter">
			<p class="footerupPartCenterTitle">Recevez la newsletter</p>
			</div>
			<div class="footer__upPartRight">
			<p class="footerupPartRightTitle">Suivez Siri</p>
			<ul class="footerupPartRightSocial">
				<li class="footerupPartSocialItem"><a href="#">Facebook</a></li>
				<li class="footerupPartSocialItem"><a href="#">Twitter</a></li>
				<li class="footerupPartSocialItem"><a href="#">Instagram</a></li>
				<li class="footerupPartSocialItem"><a href="#">Soundcloud</a></li>
				<li class="footerupPartSocialItem"><a href="#">Linkedin</a></li>

			</ul>
			</div>
		</div>
	</div>

	<div class="footer_downPart">
		<div class="container">
			<div class="footer__downPartLeft">
				<a href="#">@SIRI_2017</a>
			</div>
			<div class="footer__downPartCenter">
				<a href="#">Mentions légales</a>
			</div>
			<div class="footer__downPartRight">
				<a href="#">Qui est Siri ?</a>
			</div>
		</div>
	</div>
</footer>
<?php get_footer(); ?>