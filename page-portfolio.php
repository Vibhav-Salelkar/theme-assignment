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
<div class="image_gallery-text">
  <p class="image_gallery-texthead">DESIGN IS THE SOUL</p>
  <div>
    <a href="#"><button class="portfolio-tabs">Advertising</button></a>
    <a href="#"><button class="portfolio-tabs">Multimedia</button></a>
    <a href="#"><button class="portfolio-tabs">Photography</button></a>
  </div>
</div>
<hr class="line-break" style="margin-top: -0.2rem;">
<div class="grid_container grid_container-columns-3">
  <img class="grid_container-item grid_container-img" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-1.png">
  <img class="grid_container-item grid_container-img" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-2.png">
  <img class="grid_container-item grid_container-img" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-3.png">
  <img class="grid_container-item grid_container-img" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-4.png">
  <img class="grid_container-item grid_container-img" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-5.png">
  <img class="grid_container-item grid_container-img" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-6.png">
</div>
<div class="grid_container grid_container-columns-3" style="margin: 1.5rem auto;">
  <img class="grid_container-item grid_container-img" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-1.png">
  <img class="grid_container-item grid_container-img" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-2.png">
  <img class="grid_container-item grid_container-img" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-3.png">
  <img class="grid_container-item grid_container-img" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-4.png">
  <img class="grid_container-item grid_container-img" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-5.png">
  <img class="grid_container-item grid_container-img" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-6.png">
  <img class="grid_container-item grid_container-img" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-4.png">
  <img class="grid_container-item grid_container-img" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-5.png">
  <img class="grid_container-item grid_container-img" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-6.png">
</div>
<div class="paginate">
  <span>1</span>
  <span>2</span>
  <span>3</span>
  <span class="dashicons dashicons-controls-play"></span>
</div>
<hr class="line-break">
<?php

get_footer();
