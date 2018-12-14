<?php
/**
 * Template Name: Sponsors Page
 */

get_header();

?>

<div class="sponsors-pg">

	<div class="container">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<h1><?php the_title(); ?></h1><hr>

			<?php endwhile; ?>

		<?php endif; ?>

	</div><!-- .container -->

	<div class="container">

		<?php if( have_rows('sponsors_repeater') ): ?>

		<?php $i = 0; ?>

			<?php while ( have_rows('sponsors_repeater') ) : the_row(); ?>

			<?php if($i % 3 == 0) { ?> 

				<div class="row">

			<?php } ?>

					<div class="col-sm-4">

						<div class="sponsor-img">

							<img src="<?php the_sub_field('image'); ?>">

						</div><!-- .sponsor-img -->

						<div class="sponsor-content">

							<h2><?php the_sub_field('title'); ?></h2>

							<p><?php the_sub_field('content'); ?></p>

						</div><!-- .sponsor-content -->

						</div><!-- .col-sm-4 -->

			<?php $i++; ?>

			<?php if($i != 0 && $i % 3 == 0) { ?>

				</div><!-- .row-->

			<?php } ?>

			<?php endwhile; ?>

		<?php endif; ?>

	</div><!-- .container -->

</div><!-- .sponsors-pg -->

<?php get_footer(); ?>