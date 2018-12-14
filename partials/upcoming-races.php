<div class="container-fluid">

	<div class="generic-bkgd-img" style="background: url( '<?php the_field( 'upcoming_races_background_image') ?>' ) 50%/cover no-repeat; ">

	<div class="upcoming-races" id="upcomingRaces">

		<h1>Upcoming Races</h1>

		<div class="col-xs-3">

				<h2>Event</h2>

		</div><!-- .col-xs-3 -->

		<div class="col-xs-3">

				<h2>Date</h2>

		</div><!-- .col-xs-3 -->

		<div class="col-xs-3">

				<h2>Location</h2>

		</div><!-- .col-xs-3 -->

		<div class="col-xs-3">

				<h2>Track</h2>

		</div><!-- .col-xs-3 -->

		<?php if( get_field('upcoming_races_layout') ): ?>

			<?php while ( has_sub_field('upcoming_races_layout') ) : ?>

				<?php if( get_row_layout() == 'upcoming_races' ): ?>

					<div class="race-dtl">

						<div class="row">

						<div class="col-xs-3">

							<div class="race-name">

								<p><?php the_sub_field( "race_name" ); ?></p>

							</div><!-- .race-name -->

						</div><!-- .col-xs-3 -->

						<div class="col-xs-3">

							<div class="dates">

								<p><?php the_sub_field( "race_dates" ); ?></p>

							</div><!-- .dates -->

						</div><!-- .col-xs-3 -->

						<div class="col-xs-3">

							<div class="location">

								<p><?php the_sub_field( "race_location" ); ?></p>

							</div><!-- .location -->

						</div><!-- .col-xs-3 -->

						<div class="col-xs-3">

							<div class="track">

								<p><?php the_sub_field( "race_track" ); ?></p>

							</div><!-- .venue -->

						</div><!-- .col-xs-3 -->

					</div>

					</div><!--.race-dtl-->

				<?php endif; ?>

			<?php endwhile; ?>

			<?php else : ?>

				<!-- no layouts found -->

		<?php endif; ?>

	</div><!-- .upcoming-races -->

</div><!-- .container-fluid -->