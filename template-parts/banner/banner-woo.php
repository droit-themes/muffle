
<?php 
    $opt = get_option('muffle');
    $shop_title     = isset( $opt['muffle_shop_title']) ? $opt['muffle_shop_title'] : 'Shop Pages';
    $banner_shop_background_url  = isset( $opt['muffle_shop_banner_upload']['url'] ) ? $opt['muffle_shop_banner_upload']['url'] : MUFFLE_IMAGES.'/blog/banner/blog_details_img.jpg';

?>
<div class="blog_breadcrumbs_area_two shop" data-bg-img="<?php echo esc_url($banner_shop_background_url); ?>">
<div class="overlay_bg"></div>
        <div class="container">
            <div class="breadcrumb_content text-center">
                <h1 class="page-title page_title shop_title">
                    <?php
                        if( is_product_category() ) { 
                           the_archive_title();
                        }elseif(!empty(is_shop())){
                            echo esc_html($shop_title);
                        }else { single_post_title(); } ?>
                </h1>
               <?php 
                 if(!is_product_category() & !is_shop() ) {  muffle_breadcrumbs(); }
                ?> 
            </div>
        </div>
</div>