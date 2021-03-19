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
	<div class="sidebar_portfolio">
		<h3 class="sidebar_portfolio-text">Portfolio</h1>
		<hr class='sidebar-break'>
		<div class="sidebar_portfolio-grid">
			<img class="sidebar_portfolio-gitem" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-1.png">
			<img class="sidebar_portfolio-gitem" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-2.png">
			<img class="sidebar_portfolio-gitem" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-3.png">
			<img class="sidebar_portfolio-gitem" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-4.png">
			<img class="sidebar_portfolio-gitem" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-5.png">
			<img class="sidebar_portfolio-gitem" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-6.png">
			<img class="sidebar_portfolio-gitem" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-1.png">
			<img class="sidebar_portfolio-gitem" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-2.png">
		</div>
	</div>

	<?php
	if('post'=== get_post_type()){
		?>
		<div class="sidebar_portfolio">
			<h3 class="sidebar_portfolio-text">Related Posts</h1>
			<hr class='sidebar-break'>
			<div class="sidebar_portfolio-g1">
				<div class="popular-flex">
					<img class="sidebar_portfolio-gitem" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-1.png">
					<div class="post-flex">
						<p>Achieve your grandest dreams!!</p>
						<p class="post-flex-meta">by <span>Roben Sen</span> on 21 Dec 2021 </p>
					</div>
				</div>
				<div class="popular-flex">
					<img class="sidebar_portfolio-gitem" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-2.png">
					<div class="post-flex">
						<p>Achieve your grandest dreams!!</p>
						<p class="post-flex-meta">by <span>Roben Sen</span> on 21 Dec 2021 </p>
					</div>
				</div>
				<div class="popular-flex">
					<img class="sidebar_portfolio-gitem" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-3.png">
					<div class="post-flex">
						<p>Achieve your grandest dreams!!</p>
						<p class="post-flex-meta">by <span>Roben Sen</span> on 21 Dec 2021 </p>
					</div>
				</div>
				<div class="popular-flex">
					<img class="sidebar_portfolio-gitem" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-4.png">
					<div class="post-flex">
						<p>Achieve your grandest dreams!!</p>
						<p class="post-flex-meta">by <span>Roben Sen</span> on 21 Dec 2021 </p>
					</div>
				</div>
				<div class="popular-flex">
					<img class="sidebar_portfolio-gitem" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-5.png">
					<div class="post-flex">
						<p>Achieve your grandest dreams!!</p>
						<p class="post-flex-meta">by <span>Roben Sen</span> on 21 Dec 2021 </p>
					</div>
				</div>
			</div>
		</div>
		<div class="sidebar_portfolio">
			<h3 class="sidebar_portfolio-text">Recent Posts</h1>
			<hr class='sidebar-break'>
			<div class="sidebar_portfolio-g1">
				<div class="popular-flex">
					<img class="sidebar_portfolio-gitem" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-1.png">
					<div class="post-flex">
						<p>Achieve your grandest dreams!!</p>
						<p class="post-flex-meta">by <span>Roben Sen</span> on 21 Dec 2021 </p>
					</div>
				</div>
				<div class="popular-flex">
					<img class="sidebar_portfolio-gitem" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-2.png">
					<div class="post-flex">
						<p>Achieve your grandest dreams!!</p>
						<p class="post-flex-meta">by <span>Roben Sen</span> on 21 Dec 2021 </p>
					</div>
				</div>
				<div class="popular-flex">
					<img class="sidebar_portfolio-gitem" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-3.png">
					<div class="post-flex">
						<p>Achieve your grandest dreams!!</p>
						<p class="post-flex-meta">by <span>Roben Sen</span> on 21 Dec 2021 </p>
					</div>
				</div>
				<div class="popular-flex">
					<img class="sidebar_portfolio-gitem" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-4.png">
					<div class="post-flex">
						<p>Achieve your grandest dreams!!</p>
						<p class="post-flex-meta">by <span>Roben Sen</span> on 21 Dec 2021 </p>
					</div>
				</div>
				<div class="popular-flex">
					<img class="sidebar_portfolio-gitem" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-5.png">
					<div class="post-flex">
						<p>Achieve your grandest dreams!!</p>
						<p class="post-flex-meta">by <span>Roben Sen</span> on 21 Dec 2021 </p>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
	?>

		<div class="sidebar_portfolio">
			<h3 class="sidebar_portfolio-text">Popular Posts</h1>
			<hr class='sidebar-break'>
			<div class="sidebar_portfolio-g1">
				<div class="popular-flex">
					<img class="sidebar_portfolio-gitem" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-1.png">
					<div class="post-flex">
						<p>Achieve your grandest dreams!!</p>
						<p class="post-flex-meta">by <span>Roben Sen</span> on 21 Dec 2021 </p>
					</div>
				</div>
				<div class="popular-flex">
					<img class="sidebar_portfolio-gitem" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-2.png">
					<div class="post-flex">
						<p>Achieve your grandest dreams!!</p>
						<p class="post-flex-meta">by <span>Roben Sen</span> on 21 Dec 2021 </p>
					</div>
				</div>
				<div class="popular-flex">
					<img class="sidebar_portfolio-gitem" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-3.png">
					<div class="post-flex">
						<p>Achieve your grandest dreams!!</p>
						<p class="post-flex-meta">by <span>Roben Sen</span> on 21 Dec 2021 </p>
					</div>
				</div>
				<div class="popular-flex">
					<img class="sidebar_portfolio-gitem" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-4.png">
					<div class="post-flex">
						<p>Achieve your grandest dreams!!</p>
						<p class="post-flex-meta">by <span>Roben Sen</span> on 21 Dec 2021 </p>
					</div>
				</div>
				<div class="popular-flex">
					<img class="sidebar_portfolio-gitem" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-5.png">
					<div class="post-flex">
						<p>Achieve your grandest dreams!!</p>
						<p class="post-flex-meta">by <span>Roben Sen</span> on 21 Dec 2021 </p>
					</div>
				</div>
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
