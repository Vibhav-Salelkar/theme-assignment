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
			<h2 class="footer_title"><?php echo get_theme_mod('it_footer_text_headline');?></h2>
			<p style="margin-bottom: 0.7rem;"><?php echo get_theme_mod('it_footer_text_desc'); ?></p>
			<a href="#">Read More</a>
		</div>

		<div class="custom-footer-contact">
			<h2 class="footer_title"><?php echo get_theme_mod('it_footer_text_contact_title'); ?></h2>
			<p><?php echo get_theme_mod('it_footer_text_contact_desc'); ?></p>
			<p style="margin-top:0;">Email: <a style="color: #ef3313; text-decoration:none;" href="<?php echo get_theme_mod('it_footer_text_email_link');?>"><?php echo get_theme_mod('it_footer_text_email');?></a></p><br>
			<img src="<?php echo  get_theme_file_uri(); ?>/assets/images/social.png" alt="social media icons">
		</div>

	</footer><!-- #colophon -->
	<hr class="line-break">
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
