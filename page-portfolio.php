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
  <img class="myImg grid_container-item grid_container-img" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-1.png">
  <img class="myImg grid_container-item grid_container-img" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-2.png">
  <img class="myImg grid_container-item grid_container-img" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-3.png">
  <img class="myImg grid_container-item grid_container-img" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-4.png">
  <img class="myImg grid_container-item grid_container-img" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-5.png">
  <img class="myImg grid_container-item grid_container-img" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-6.png">
</div>
<div class="grid_container grid_container-columns-3" style="margin: 1.5rem auto;">
  <img class="myImg grid_container-item grid_container-img" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-1.png">
  <img class="myImg grid_container-item grid_container-img" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-2.png">
  <img class="myImg grid_container-item grid_container-img" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-3.png">
  <img class="myImg grid_container-item grid_container-img" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-4.png">
  <img class="myImg grid_container-item grid_container-img" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-5.png">
  <img class="myImg grid_container-item grid_container-img" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-6.png">
  <img class="myImg grid_container-item grid_container-img" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-4.png">
  <img class="myImg grid_container-item grid_container-img" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-5.png">
  <img class="myImg grid_container-item grid_container-img" src="<?php echo  get_theme_file_uri(); ?>/assets/images/image-6.png">
</div>
<div class="paginate">
  <span class="paginate--current">1</span>
  <span>2</span>
  <span>3</span>
  <span class="dashicons dashicons-controls-play"></span>
</div>
<hr class="line-break">

<div id="myModal" class="modal">

  <span class="close">&times;</span>
  <div class="custom-modal">
    <img class="modal-content" id="img01">
    <div style="display:flex; justify-content: space-between; align-items:center; margin-top: 1.5rem;">
      <span class="dashicons dashicons-arrow-left-alt"></span>
      <p class="modal-cap">Lorem ipsum anion jarsa lorem</p>
      <span class="dashicons dashicons-arrow-right-alt"></span>
    </div>
    <div id="caption"></div>
  </div>

</div>


<script type="text/javascript">

var modal = document.getElementById("myModal");

var images = document.querySelectorAll('.myImg');
var img_array = [...images];
img_array.forEach(img => {
  img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
  }

});
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");

var span = document.getElementsByClassName("close")[0];

span.onclick = function() {
modal.style.display = "none";
}
</script>
<?php

get_footer();
