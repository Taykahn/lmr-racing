<?php 

	$args = array(
		'post_type'      => 'race-results',
		'posts_per_page' => '3',
		'orderby'        => 'date'
		);

	$race_results = new WP_Query( $args );
?>

<div class="container" id="raceResults">

	<div class="col-sm-7">

		<div class="race-results-heading">

			<h1>Latest Results</h1><hr>

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

			<div id="race-results-content">

				<div class="row">

					<div class="col-xs-4">

						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

						<p><?php the_field( 'race_and_where' ); ?></p>

					</div><!-- .col-xs-4 -->

					<div class="col-xs-4">

						<p><?php the_field( 'finished' ); ?></p>

					</div><!-- .col-xs-4 -->

					<div class="col-xs-4">

						<p><?php the_field( 'fast_lap' ); ?></p>

					</div><!-- .col-xs-4 -->

				</div><!-- .row -->

			</div><!-- .race-results-content --><br>

		<?php endwhile; ?>

		<?php wp_reset_postdata(); ?>

	</div><!-- .col-sm-7 -->

	<div class="col-sm-5">

		<div class="news">

			<h1>News</h1><hr>

			<div class="fb-page" data-href="https://www.facebook.com/TeamLastMinuteRacing/"data-tabs="timeline"data-width="380" data-hide-cover="false"data-show-facepile="false"></div>

		</div><!-- .news -->

	</div><!-- col-sm-5 -->

</div><!-- .container -->