<div class="cars container-fluid" id="racingSleds">

	<?php if( get_field('the_cars_layout') ): ?>

		<?php while ( has_sub_field('the_cars_layout') ) : ?>

			<?php if( get_row_layout() == 'car_1' ): ?>

				<div class="col-sm-12">

					<div class="sleds" style="background: url( '<?php the_sub_field( 'image') ?>' ) 50%/cover no-repeat; ">

					<div class="col-sm-6 cars-content">

						<h2><?php the_sub_field('title'); ?></h2>

						<p><?php the_sub_field('content'); ?></p>

					</div><!-- .col-md-6 -->

				</div><!-- .col-md-12 -->

			<?php endif; ?>

			<?php if( get_row_layout() == 'car_2' ): ?>

				<div class="col-sm-12">

					<div class="sleds" style="background: url( '<?php the_sub_field( 'image') ?>' ) 50%/cover no-repeat; ">

					<div class="col-sm-6 cars-content-2">

						<h2><?php the_sub_field('title'); ?></h2>

						<p><?php the_sub_field('content'); ?></p>

					</div><!-- .col-md-6 -->

				</div><!-- .col-md-12 -->

			<?php endif; ?>

		<?php endwhile; ?>

		<?php else : ?>

			<!-- no layouts found -->

	<?php endif; ?>

</div><!-- .cars -->