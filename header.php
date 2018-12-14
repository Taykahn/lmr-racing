<?php
/**
* Template Name: Header
*/
?>

<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico">

	<title>

	<?php wp_title( '|', true, 'right' ); ?>

	<?php bloginfo('name'); ?>

	</title>

	<!-- Google Fonts -->

	<link href="https://fonts.googleapis.com/css?family=Oswald|Arsenal" rel="stylesheet">

	<?php wp_head() ?>

	<?php 
		global $post;
		global $mbc_img_path;
		$post_slug = isset( $post->post_name ) ? $post->post_name : null;
		$page_slug = 'page-'.$post_slug;
		$fouc      = 'fouc';
		$classes   = array( $page_slug );
	?>

	</head>

<body <?php body_class( $classes ) ?>>

	<nav class="navbar navbar-default navbar-fixed-top navbar-lg">

		<div class="col-md-3">

			<div class="site-logo">

				<img src="<?php the_field( 'logo_img', 'option' ) ?>">

			</div><!-- .site-logo -->

		</div>

		<div class="col-md-9 custom-nav">

			<div class="social-icons">

				<?php the_field( 'social_icons', 'option' ); ?>

			</div><!-- .social-icons -->

			<div id="navbar">

				<?php 
					$args = array(
					'menu'          => 'menu-1',
					'menu_class'    => 'nav navbar-nav',
					'container'     => 'false'
				);
					wp_nav_menu( $args );
				?>

			</div><!-- #navbar -->

		</div>

	</nav><!-- end navbar navbar-inverse navbar-fixed-top -->

<div id="navbar-sm">

	<?php include( 'partials/navbar-sm.php' ); ?> 

</div><!-- #navbar-sm -->

<header>

		<wrapper id="nav-change"></wrapper>

	<?php if ( is_front_page() ) { ?>

		<div class="hero-img" style="background-image: url('<?php the_field( 'hero_image', 'option' ) ?>')">

		<div class="hero-content">

			<?php the_field( 'hero_content', 'option' ); ?>

		</div><!-- .hero-content -->

	<?php } else { ?>

	<?php } ?>

</header>