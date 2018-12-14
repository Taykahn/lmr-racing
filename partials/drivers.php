<?php 

	$args = array(
		'post_type' => 'drivers'
		);

	$drivers = new WP_Query( $args );
?>

<div class="drivers" id="teamDrivers">

	<div class="container">

		<h1>Drivers</h1><hr>

		<?php while ( $drivers->have_posts() ) : $drivers->the_post(); ?>

					<div class="col-md-3">

						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

					</div><!-- .col-md-3 -->

			<?php endwhile; ?>

			<?php wp_reset_postdata(); ?>

	</div><!-- .container -->

</div><!-- .drivers #teamDrivers -->