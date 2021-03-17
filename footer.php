<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Initial_Theme
 */

?>

	<footer class="custom-footer">

		<div class="footer_info">
			<h2 class="footer_title">Welcome to D'SIGN<i>fly</i></h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.  </p>
			<a href="#">Read More</a>
		</div>

		<div>
			<h2 class="footer_title">Contact Us</h2>
			<p>Street 21 Planet, A-11, dapibus tristique 123511<br>
			Tel:123 456 7890 Fax:123 456789<br>
			Email: <a href="mailto:contactus@dsignfly.com">contactus@dsignfly.com</a></p>
		</div>

	</footer><!-- #colophon -->
	<hr class="image_gallery-break">
	<div class="site-info" style="width: 60%; margin: auto; text-align: center;">
			<?php
			/* translators: 1: Theme name, 2: Theme author. */
			printf( esc_html__( 'Theme: %1$s by %2$s.', 'initial-theme' ), 'initial-theme', '<a href="http://vibhavsalelkar.netlify.app">Vibhav</a>' );
			?>
	</div><!-- .site-info -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
