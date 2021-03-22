<div class="image_gallery">
  <div class="image_gallery-text">
    <p class="image_gallery-texthead">D'SIGN IS THE SOUL</p>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>/portfolio"><button class="image_gallery-btn">view all</button></a>
  </div>
  <hr class="line-break">
  <div class="grid_container grid_container-columns-3">
    <?php
    $query_images_args = array(
  'post_type'      => 'attachment',
  'post_mime_type' => 'image',
  'post_status'    => 'inherit',
  'posts_per_page' => 6,
  );

  $query_images = new WP_Query( $query_images_args );

  $images = array();
  foreach ( $query_images->posts as $image ) {
      $images[] = wp_get_attachment_url( $image->ID );
  }
  foreach($images as $image){
    ?>
    <img class="grid_container-item grid_container-img" src="<?php echo $image?>">
    <?php
    }
    ?>
  </div>
  <hr class="line-break">
</div>
