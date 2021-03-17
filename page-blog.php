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
      <div class="">

      </div>
    </div>
    <div class="blog-sidebar">
      <?php get_sidebar(); ?>
    </div>
  </div>

<?php

get_footer();
