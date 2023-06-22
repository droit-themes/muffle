<?php 
/**
 * template to display single page content 
 */
$show_social_share = muffle_options('muffle_display_blog_share', 'no');

?>
<div class="blog_single_info">
    <div class="media_blog_content">
      <?php  if(has_post_thumbnail( )) {  ?>
        <div class="single-page-media">
           <?php the_post_thumbnail(); ?>
        </div>
        <?php } ?>
       
        <?php the_content();
        
            wp_link_pages(
                array(
                    'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'muffle' ) . '">',
                    'after'    => '</nav>',
                    /* translators: %: page number. */
                    'pagelink' => esc_html__( 'Page %', 'muffle' ),
                )
            );
        
        ?>
       
          <?php   if($show_social_share  == 'yes' && function_exists('muffle_core_social_share') || has_tag()){ ?>
            <div class="post_bottom">
             <?php 
              muffle_single_page_tag();
              if($show_social_share  == 'yes' && function_exists('muffle_core_social_share')){
                muffle_core_social_share();
            }
             ?>
            </div>
           <?php }  ?>
       
    </div>
</div>
                      
    <!-- End blog list area -->

 