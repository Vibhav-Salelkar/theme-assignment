<?php
/**
* Widget class for Custom widget
*
* @link https://developer.wordpress.org/themes/functionality/custom-headers/
*
* @package Initial_Theme
*/

class it_portfolio_widget extends WP_Widget {

    // setup the widget name, description, etc...
    public function __construct() {

        $widget_ops = array(
            'classname'   => 'sidebar_portfolio',
            'description' => esc_html__( 'Displays thumbnails of the posts', 'it_domain' )
        );

        parent::__construct( 'it_portfolio', 'Portfolio', $widget_ops );
    }

    // handles the back-end of the widget(rendering)
    public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        } else {
            $title = 'Portfolio';
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title' ); ?>:</label> 
            <input class="widget_portfolio_title" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <?php
    }

    public function update($new_instance, $old_instance){
        $instance = $old_instance;
        $instance['title'] = $new_instance['title'];
        return $instance;
    }

    // handles the front-end of the widget
    public function widget( $args, $instance ) {
        echo $args[ 'before_widget' ];

		$query_images_args = array(
			'post_type'      => 'it-portfolio',
			'posts_per_page' => 8,
			);
		  
			$query = new WP_Query( $query_images_args );
			
			?>
			<div class="sidebar_portfolio">
				<h3 class="sidebar_portfolio-text">
				<?php
                    if ( isset( $instance[ 'title' ] ) ) {
                        $title = $instance[ 'title' ];
                    } else {
                        $title = 'Portfolio';
                    }
                    echo $title;
                ?>
				</h1>
				<hr class='sidebar-break'>
				<div class="sidebar_portfolio-grid">
			<?php
			if ( $query -> have_posts() ):
				while ( $query -> have_posts() ):
				  $query -> the_post();
				  ?>
				<div class="sidebar_portfolio-gitem">
                <a href="<?php echo get_post_permalink(); ?>"> <?php the_post_thumbnail();?></a>
                </div>			
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
        echo $args[ 'after_widget' ];
    }
}

add_action( 'widgets_init', function() {
    register_widget( 'it_portfolio_widget' );
} );