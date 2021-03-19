<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Initial_Theme
 */

get_header();
?>

<!-- render features section -->
<?php get_template_part( 'template-parts/features-section', get_post_type() ); ?>


<div class="blog-custom">
     <div class="blog-posts">
          <h2 class="blog-custom-title">LET'S BLOG</h2>
          <hr>
          <div class="all-posts">
            <?php get_template_part( 'template-parts/blog-posts', get_post_type() ); ?>
          </div>
     </div>
     <div class="blog-sidebar">
       <?php get_sidebar(); ?>
     </div>
</div>
<div class="paginate">
  <span class="paginate--current">1</span>
  <span>2</span>
  <span>3</span>
  <span class="dashicons dashicons-controls-play"></span>
</div>
<hr class="line-break">
<?php

get_footer();



/*
<div class="">
  <img class="grid_container-item grid_container-img" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-2.png">
</div>
**/

/*
<?php
$args = array( 'posts_per_page' => 3 );

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) :
    while ( $the_query->have_posts() ) : $the_query->the_post();
      ?>
      <div class="single_post" style="margin-bottom: 1.2rem;">
        <h3><?php the_title(); ?></h3>
        <div class="">
          <div class="single_post-meta">
            <div class="single_post-meta-author">
              <h4>by <span><?php the_author(); ?></span></h4>
              <p style="margin:0px 0.8rem;"><?php the_time(); ?></p>
            </div>
            <p class="post-comments"><a style="text-decoration: none;" href="<?php echo comments_link(); ?>"><?php echo get_comments_number();?> comments</a></p>
          </div>
          <div class="single_post-content">
            <p><?php the_excerpt(); ?></p>
            <a href=" <?php echo get_post_permalink(); ?>">Read more</a>
          </div>
       </div>
     </div>
      <?php
    endwhile;
else:
    _e( 'Sorry, no posts matched your criteria.', 'wb_domain' );
endif;
wp_reset_postdata();
?>



*/
