<?php
/**
* Image Gallery 
*/
?>

<?php $images = get_field('image_gallery'); ?>

<?php if( $images ): ?>

	<ul>

		<?php foreach( $images as $image ): ?>

		<div class="col-sm-4 ig-rr">

			<li>

				<a href="<?php echo esc_url( $image['url'] ); ?>">

				<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_html( $image['alt'] ); ?>" /></a>

				<p><?php echo esc_html( $image['caption'] ); ?></p>

				<p><?php echo esc_html( $image['description'] ); ?></p>

			</li>

		</div><!-- end col-md-4 -->

		<?php endforeach; ?>

	</ul>

<?php endif; ?>