<?php 
$opt = get_option('muffle');

$shop_page_title  = isset( $opt['shop_page_title']) ? $opt['shop_page_title'] : '';
$shop_banner_toggle  = isset( $opt['shop_banner_toggle']) ? $opt['shop_banner_toggle'] : '';
$shop_banner_img_upload  = isset( $opt['shop_banner_img_upload']['url']) ? $opt['shop_banner_img_upload']['url'] : MUFFLE_IMAGES.'/blog/banner/banner.png';
$shop_banner_breadcrumb  = isset( $opt['shop_banner_breadcrumb']) ? $opt['shop_banner_breadcrumb'] : '';

?>
<?php if($shop_banner_toggle == 'show'): ?>
<div class="blog_breadcrumbs_area_two parallaxie woo_banner" <?php if(!empty($shop_banner_img_upload)): ?> data-bg-img="<?php echo esc_url($shop_banner_img_upload); ?>" <?php endif; ?>>
<div class="overlay_bg"></div>
        <div class="container">
            <div class="breadcrumb_content text-center">
                <?php if(is_singular()): ?>
                    <h1 class="page-title page_title">
                        <?php
                            single_post_title();
                        ?>
                    </h1>
                <?php endif; ?>

                <h1 class="page-title page_title"> 
                <?php 
                if( is_product_category() ) { 
                    the_archive_title();
                }elseif(is_shop()){ ?>
                    <?php echo $shop_page_title; ?>
                <?php
                    }else{
                   if($shop_banner_breadcrumb =='show'):  muffle_breadcrumbs();  endif;
                }
                ?>
                <h1> 
            </div>
        </div>
</div>
<?php endif; ?>

