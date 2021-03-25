<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Initial_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->



<?php
/*

<aside id="secondary" class="widget-area">
	<div class="sidebar_portfolio">
		<h3 class="sidebar_portfolio-text">Portfolio</h1>
		<hr class='sidebar-break'>
		<div class="sidebar_portfolio-grid">
			<?php
			$query_images_args = array(
			'post_type'      => 'it-portfolio',
			'posts_per_page' => 8,
			);
		  
			$query = new WP_Query( $query_images_args );
			
			if ( $query -> have_posts() ):
				while ( $query -> have_posts() ):
				  $query -> the_post();
				  ?>
			<img class="sidebar_portfolio-gitem" src="<?php
            $image=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
            echo $image[0];?>">
			<?php
				endwhile;
				?>
			<?php
			else:
			?>
			<div class="container">
			<p>
				<?php esc_html_e( 'Sorry, no portfolio items found. Add posts in portfolio posts in admin.')?>
			</p>
			</div>
			<?php
			endif;
			?>
		</div>
	</div>

	<?php
	if('post'=== get_post_type()){
		?>
		<div class="sidebar_portfolio">
			<h3 class="sidebar_portfolio-text">Related Posts</h1>
			<hr class='sidebar-break'>
			<div class="sidebar_portfolio-g1">
				<?php
				$exclude = get_the_ID();

				global $wp_query;
				$exclude = $wp_query->post->ID;

				$args = array( 'posts_per_page' => 5 );

				$the_query = new WP_Query( $args );

				if ( $the_query->have_posts() ) :
						while ( $the_query->have_posts() ) : $the_query->the_post();
						if( $exclude != get_the_ID() ) {
								?>
								<div class="popular-flex">
									<img class="sidebar_portfolio-gitem" src="<?php
									 $image=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
									 echo $image[0];?>" alt="<?php the_title();?>">
									<div class="post-flex">
										<p><?php the_title(); ?></p>
										<p class="post-flex-meta">by <span><?php the_author(); ?></span> on <?php the_time('j F, Y'); ?> </p>
									</div>
								</div>
								<?php
						}
					endwhile;
				else:
					_e( 'Sorry, no posts matched your criteria.', 'wb_domain' );
				endif;
				wp_reset_postdata();
				?>
			</div>
		</div>

		<div class="sidebar_portfolio">
			<h3 class="sidebar_portfolio-text">Recent Posts</h1>
			<hr class='sidebar-break'>
			<div class="sidebar_portfolio-g1">
						<?php
						$args = array( 'posts_per_page' => 3 );

						$the_query = new WP_Query( $args );

						if ( $the_query->have_posts() ) :
						    while ( $the_query->have_posts() ) : $the_query->the_post();
						      ?>
									<div class="popular-flex">
										<img class="sidebar_portfolio-gitem" src="<?php
										 $image=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
										 echo $image[0];?>" alt="<?php the_title();?>">
										<div class="post-flex">
											<p><?php the_title(); ?></p>
											<p class="post-flex-meta">by <span><?php the_author(); ?></span> on <?php the_time('j F, Y'); ?> </p>
										</div>
									</div>
						      <?php
						    endwhile;
						else:
						    _e( 'Sorry, no posts matched your criteria.', 'wb_domain' );
						endif;
						wp_reset_postdata();
						?>
			</div>
		</div>
		<?php
	}
	?>

		<div class="sidebar_portfolio">
			<h3 class="sidebar_portfolio-text">Popular Posts</h1>
			<hr class='sidebar-break'>
			<div class="sidebar_portfolio-g1">

					<!-- fileters posts based on view count: function written in function.php file -->
					<?php
					$popularpost = new WP_Query( array('post_type'=> 'it-portfolio', 'posts_per_page' => 5, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
					while ( $popularpost->have_posts() ) : $popularpost->the_post();

					?>
					<div class="popular-flex">
						<img class="sidebar_portfolio-gitem" src="<?php
						 $image=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
						 echo $image[0];?>" alt="<?php the_title();?>">
						<div class="post-flex">
							<p><?php the_title();?></p>
							<p class="post-flex-meta">by <span><?php the_author(); ?></span> <?php the_time('j F, Y'); ?> </p>
						</div>
					</div>
					<?php

					endwhile;
					?>

			</div>
		</div>
		<div class="sidebar_portfolio">
			<h3 class="sidebar_portfolio-text">Archive</h1>
			<hr class='sidebar-break'>
			<div class="archive-s">
				<p>> January 2021</p>
				<p>> February 2021</p>
			</div>
		</div>
		<div>
			<img src="<?php echo  get_theme_file_uri(); ?>/assets/images/media.jpg" alt="">
		</div>
	</div>
</aside><!-- #secondary -->


*/

?>