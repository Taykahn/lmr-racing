<?php
/**
 * Template Name: Drivers Page
 */

	$args = array(
		'post_type' => 'drivers'
	);

	$drivers = new WP_Query( $args );

get_header();

?>

<div class="drivers-pg" id="teamDriversPg">

<div class="container">

		<div class="col-sm-12">

			<h1>Drivers</h1><hr>

		</div><!-- .col-sm-12 -->

		<?php while ( $drivers->have_posts() ) : $drivers->the_post(); ?>

			<div class="row driver-row">

					<div class="col-sm-6 driver-content">

						<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

						<p><?php the_content(); ?></p>

					</div><!-- .col-sm-6 -->

					<div class="col-sm-6">

						<?php the_post_thumbnail(); ?><br>

					</div><!-- .col-sm-6 -->

				</div>

			<?php endwhile; ?>

	</div><!-- .drivers -->

</div><!-- .container-fluid -->

<?php get_footer(); ?>