<?php 

$show_banner = muffle_options('muffle_arcive_banner_toggle', 'show');
  
$banner_url = muffle_options('muffle_archive_banner_upload');

$how_title = muffle_options('muffle_arcive_title', 'show');
$show_breadcrumbs = muffle_options('muffle_archive_banner_breadcrumb', 'show');
$banner_background_url = MUFFLE_IMAGES.'/blog/banner/banner.png';

if($banner_url && !empty($banner_url['url'])) {
    $banner_background_url = $banner_url['url'];
}

if(!class_exists('Redux')){
    $banner_background_url = '';
  }

?>

<?php if($banner_background_url != '') :  ?>
<div class="blog-breadcrumbs-area-two parallaxie archive_page" data-bg-img="<?php echo esc_url($banner_background_url); ?>">
<div class="overlay_bg"></div>
 <?php else: ?>
<div class="blog-breadcrumbs-area-two banner-with-color">
<?php endif; ?>
    <div class="container">
        <div class="breadcrumb_content text-white text-center">
            <?php if(have_posts() && $how_title == 'show') {
                        the_archive_title( '<h1 class="page-title page_title">', '</h1>' );
                    }
                if($show_breadcrumbs == 'show') {    
                muffle_breadcrumbs(); 
                } ?>
        </div>
    </div>
</div>