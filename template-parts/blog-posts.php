
<?php
$args = array(   'post_type' => 'it-portfolio',
'posts_per_page' => 5 );

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) :
    while ( $the_query->have_posts() ) : $the_query->the_post();
      ?>
     <div class="single_post">
       <div class="single_post-header">
         <div class="single_post-date">
           <p class="date"><?php echo the_time('d'); ?></p>
           <p class="month"><?php echo the_time('M'); ?></p>
         </div>
         <div class="header-text">
           <span class="vl"></span> <?php the_title(); ?>
         </div>
       </div>
       <div class="post-content">
         <div class="post_img_container">
           <img class="post-img" src="<?php
            $image=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
            echo $image[0];?>" alt="<?php the_title();?>">
         </div>
         <div class="post_details_container">
           <div class="single_post-meta">
             <div class="single_post-meta-author">
               <h4 style="margin:0px; font-weight:normal;">by <span><?php the_author(); ?></span></h4>
               <p style="margin:0px 0.3rem;">on <?php the_time('j F, Y'); ?></p>
             </div>
             <p class="post-comments"><a style="text-decoration: none;" href="<?php echo comments_link(); ?>"><?php echo get_comments_number();?> comments</a></p>
           </div>
           <hr class="post-divider">
           <div class="single_post-content">
             <div><?php the_excerpt(); ?></div>
             <a href="<?php echo get_post_permalink(); ?>">Read more</a>
           </div>
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
