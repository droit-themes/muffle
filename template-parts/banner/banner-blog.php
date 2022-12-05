<?php 

/**
  * Display page banner 
  */
  $show_banner = muffle_options('muffle_blog_banner_toggle', 'show');
  
  $banner_url = muffle_options('muffle_blog_banner_upload');
  
  $how_title = muffle_options('muffle_blog_banner_title', 'show');
  $title = muffle_options('muffle_blog_title', get_bloginfo('name'));
  $show_breadcrumbs = muffle_options('muffle_blog_banner_breadcrumb', 'show');
  $banner_background_url = MUFFLE_IMAGES.'/blog/banner/blog_details_img.jpg';
 
  
 if($banner_url && !empty($banner_url['url'])) {
      $banner_background_url = $banner_url['url'];
  }

  if(!class_exists('Redux')){
    $banner_background_url = '';
  }
?>

<?php if($banner_background_url != '') :  ?>
    <div class="blog-breadcrumbs-area-two parallaxie" data-bg-img="<?php echo esc_url($banner_background_url); ?>">
    <div class="overlay_bg"></div>
<?php else: ?>
<div class="blog-breadcrumbs-area-two banner-with-color">
<?php endif; ?>
        <div class="container">
            <div class="breadcrumb_content text-white text-center">
                <?php if($how_title == 'show') : ?>
                    <h1 class="page_title banne-blog"><?php echo esc_html( $title ); ?></h1>
                <?php endif;
                if($show_breadcrumbs  == 'show') : 
                    muffle_breadcrumbs();
                endif; ?> 
            </div>
        </div>
</div>