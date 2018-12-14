<?php
/**
 * Template Name: Results Page
 */

get_header();

	$args = array(
		'post_type'      => 'race-results',
		'orderby'        => 'date'
		);

	$race_results = new WP_Query( $args );
?>


<div class="container results-pg">

	<div class="race-results-heading">

		<h1>Race Results</h1><hr>

		<div class="col-xs-4">

			<h2>Event</h2>

		</div><!-- .col-xs-4 -->

		<div class="col-xs-4">

			<h2>Finished</h2>

		</div><!-- .col-xs-4 -->

		<div class="col-xs-4">

			<h2>Fast Lap</h2>

		</div><!-- .col-xs-4 -->

	</div><!-- .race-results-heading -->

	<?php while ( $race_results->have_posts() ) : $race_results->the_post(); ?>

		<div id="raceResults">

			<div class="row">

				<div class="col-xs-4">

					<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

					<p><?php the_field( 'race_and_where' ); ?></p>

				</div><!-- .col-xs-4 -->

				<div class="col-xs-4">

					<p><?php the_field( 'finished' ); ?></p>

				</div><!-- .col-xs-4 -->

				<div class="col-xs-4">

					<p><?php the_field( 'fast_lap' ); ?></p>

				</div><!-- .col-xs-4 -->

			</div><!-- .row -->

		</div><!-- #raceResults --><br>

	<?php endwhile; ?>

	<?php wp_reset_postdata(); ?>

</div><!-- .container -->

<?php get_footer(); ?>