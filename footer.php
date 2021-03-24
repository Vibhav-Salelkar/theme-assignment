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
			<?php
				$args = array( 
					'post_type'      => 'it-portfolio',
					'posts_per_page' => 1 
				);

				$the_query = new WP_Query( $args );

				if ( $the_query->have_posts() ) :
					while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<h2 class="footer_title"><?php the_title();?></h2>
						<div style="margin-bottom: 0.6rem;"><?php the_excerpt(); ?></div>
						<a href="<?php echo get_post_permalink(); ?>">Read More</a>
				<?php
					endwhile;
				else:
					_e( 'Sorry, no posts matched your criteria.', 'wb_domain' );
				endif;
				wp_reset_postdata();
			?>
		</div>

		<div class="custom-footer-contact">
			<h2 class="footer_title"><?php echo get_theme_mod('it_footer_text_contact_title'); ?></h2>
			<p><?php echo get_theme_mod('it_footer_text_contact_desc'); ?></p>
			<p style="margin-top:0;">Email: <a style="color: #ef3313; text-decoration:none;" href="<?php echo get_theme_mod('it_footer_text_email_link');?>"><?php echo get_theme_mod('it_footer_text_email');?></a></p><br>
			
			<ul class="social_icons">
				<?php 
					$icon_links = get_theme_mod( 'it_social_icons' );
					$icon_links = explode( ',', $icon_links );
					
					foreach ( $icon_links as $icon_link ) :
						$icon_link = trim( $icon_link );
						if ( strpos( $icon_link, 'facebook.com' ) !== false ) { ?>
							<li>
								<a href="<?php echo $icon_link; ?>"><img src=" <?php  echo  get_theme_file_uri(); ?>/assets/images/fb.png" /></a>
							</li> <?php
						} elseif ( strpos( $icon_link, 'pinterest.com' ) !== false ) { ?>
							<li>
								<a href="<?php echo $icon_link; ?>"><img src=" <?php  echo  get_theme_file_uri(); ?>/assets/images/pi.png " /></a>
							</li> <?php
						} elseif ( strpos( $icon_link, 'linkedin.com' ) !== false ) { ?>
							<li>
								<a href="<?php echo $icon_link; ?>"><img src=" <?php  echo  get_theme_file_uri(); ?>/assets/images/li.png " /></a>
							</li> <?php
						} elseif ( strpos( $icon_link, 'twitter.com' ) !== false ) { ?>
							<li>
								<a href="<?php echo $icon_link; ?>"><img src=" <?php  echo  get_theme_file_uri(); ?>/assets/images/tt.png " /></a>
							</li> <?php
						} elseif ( strpos( $icon_link, 'google' ) !== false ) { ?>
							<li>
								<a href="<?php echo $icon_link; ?>"><img src=" <?php  echo  get_theme_file_uri(); ?>/assets/images/gp.png " /></a>
							</li> <?php
						}
					endforeach;
				?>
			</ul>
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
