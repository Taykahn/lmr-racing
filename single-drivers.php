<?php
/**
 * Driver Single
 */

 get_header(); ?>

<div class="drivers-sgl">

	<div class="container">

		<div class="row">

				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<div class="page-header">

							<h2><?php the_title(); ?></h2>

						</div><!-- end page-header -->

						<div class="col-sm-6">

							<?php the_content(); ?>

						</div><!-- .com-sm-6 -->

						<div class="col-sm-6">

							<?php the_post_thumbnail(); ?>

						</div><!-- .com-sm-6 -->

					<?php endwhile; else: ?>

					<div class="page-header">

						<h1>Oh no!</h1>

					</div><!-- end page-header -->

					<p>No content is appearing for this page!</p>

				<?php endif; ?>

		</div><!-- .row -->

	</div><!-- .container -->

</div><!-- .drivers-sgl -->

<?php get_footer(); ?>