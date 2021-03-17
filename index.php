<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Initial_Theme
 */

//modified header.php: added search form, wrappers for flexbox and logo. custom styling in style.css
get_header();
?>

	<main id="primary" class="site-main">

		<!-- render head slider -->
		<?php get_template_part( 'template-parts/head-slider', get_post_type() ); ?>

		<!-- render features section -->
		<?php get_template_part( 'template-parts/features-section', get_post_type() ); ?>

		<!-- render image gallery -->
		<?php get_template_part( 'template-parts/image-gallery', get_post_type() ); ?>

	</main>

<?php

get_footer();
