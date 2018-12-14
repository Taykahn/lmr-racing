<?php 
/**
 * Footer
 */ 
?>

</main>

	<footer class="footer">

		<section class="container-fluid">

				<div class="col-md-8">

						<div class="bottomMenu">

							<?php 
								$args = array(
								'theme_location' => 'footer-menu',
								'container'      => 'false'
							);
								wp_nav_menu( $args );
							?>

						</div><!-- .bottomMenu -->

					<div class="copyright">

						<p>&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?></p>

					</div><!-- .copyright -->

				</div><!-- .col-md-8 -->

				<div class="col-md-4">

					<div class="footer-social-icons">

						<?php the_field( 'social_icons', 'option' ); ?>

					</div><!-- .footer-social-icons -->

				</div><!-- .col-md-4 -->

		</section><!-- .container -->

	</footer><!-- .footer -->

	<?php wp_footer(); ?>

</body>

</html>