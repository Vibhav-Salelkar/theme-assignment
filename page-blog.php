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
        <div class="single_post">
          <h3>This is a post title</h3>
          <div class="">
            <div class="single_post-meta">
              <div class="single_post-meta-author">
                <h4>by <span>Vibhav</span></h4>
                <p style="margin:0px 0.8rem;">time</p>
              </div>
              <p class="post-comments">12 comments</p>
            </div>
            <div class="single_post-content">
              <p>This is post content ltskrnr rrnrjnsj snrjsrnjsrn srjsrnjsnrj srjnsrjnr sjrnsjrnsjr nsjnn rssjnrjsrnj srsrnsrjsnrjs rsnjsnrjsnr srnsrjsjnrjsnr jsrn.</p>
              <a href="#">Read more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="blog-sidebar">
      <?php get_sidebar(); ?>
    </div>
  </div>

<?php

get_footer();
