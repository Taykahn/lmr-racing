<?php 
/**
 * Template Name: Frontpage
 */

get_header(); ?>

<section id="sec1">

	<?php get_template_part('partials/upcoming-races'); ?>

</section><!-- #sec1 -->

<section id="sec2">

	<?php get_template_part('partials/cars'); ?>

</section><!-- #sec2 -->

<section id="sec3">

	<?php get_template_part('partials/drivers'); ?>

</section><!-- #sec3 -->

<section id="sec4">

	<?php get_template_part('partials/our-sponsors'); ?>

</section><!-- #sec4 -->

<section id="sec5">

	<?php get_template_part('partials/race-results'); ?>

</section><!-- #sec5 -->

<?php get_footer() ?>