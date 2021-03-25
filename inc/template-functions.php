<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Initial_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function initial_theme_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'initial_theme_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function initial_theme_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'initial_theme_pingback_header' );


//customized pagination
function it_pagination_bar( $custom_query ) {

	$total_pages = $custom_query->max_num_pages;
	$big         = 999999999; // need an unlikely integer

	if ( $total_pages > 1 ) {
		$current_page = max( 1, get_query_var( 'paged' ) );

		$pages = paginate_links(
			array(
				'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format'    => '?paged=%#%',
				'current'   => $current_page,
				'total'     => $total_pages,
				'type'      => 'array',
				'prev_text' => '<span class="dashicons dashicons-controls-play paginate-arrow-left"></span>',
				'next_text' => '<span class="dashicons dashicons-controls-play"></span>',
			)
		);

		/* for echoing out with custom html tags */
		if ( is_array( $pages ) ) {
			$paged = ( get_query_var( 'paged' ) == 0 ) ? 1 : get_query_var( 'paged' );
			echo '<div class="paginate">';
			foreach ( $pages as $page ) {
					echo $page;
			}
			echo '</div>';
		}
	}
}