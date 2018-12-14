<?php
/**
 * Race Results Single
 */

get_header(); ?>

<div class="container results-sgl">

	<div class="row">

		<div class="col-sm-12">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<div class="page-header">

						<h1><?php the_title(); ?></h1>

					</div><!-- end page-header -->

					<div class="col-sm-6">

						<div class="about-race">

							<?php the_content(); ?>

						</div><!-- .about-race -->

						<div class="col-xs-4">

							<h3>Event</h3>

							<p><?php the_field( 'race_and_where' ); ?></p>

						</div><!-- .col-xs-4 -->

						<div class="col-xs-4">

							<h3>Finished</h3>

							<p><?php the_field( 'finished' ); ?></p>

						</div><!-- .col-xs-4 -->

						<div class="col-xs-4">

							<h3>Fast Lap</h3>

							<p><?php the_field( 'fast_lap' ); ?></p>

						</div><!-- .col-xs-4 -->

					</div><!-- .col-sm-6 -->

				<div class="col-sm-6 rr-img">

					<?php the_post_thumbnail(); ?>

				</div><!-- .col-sm-6 -->

				<div class="image-section col-sm-6">

					<div class="image-gallery">

						<?php get_template_part( 'partials/image-gallery' ); ?>

					</div><!-- .image-gallery -->

				</div><!-- .image-section .col-md-12 -->

				<?php endwhile; else: ?>

				<div class="page-header">

					<h1>Oh no!</h1>

				</div><!-- end page-header -->

				<p>No content is appearing for this page!</p>

			<?php endif; ?>

		</div><!-- .col-md-9 -->

	</div><!-- .row -->

</div><!-- .container -->

<?php get_footer(); ?>