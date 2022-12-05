<?php 

Redux::set_section('muffle', array(
    'title'            => esc_html__( 'Search Banner', 'muffle' ),
    'id'               => 'muffle_search_blog_banner',
    'icon'             => 'el el-cog',
    'subsection' => true,
    'fields'           => array(

        array(
            'id'       => 'muffle_search_banner_upload',
            'type'     => 'media', 
            'url'      => true,
            'title'    => __('Upload Banner', 'muffle'),
            'default'  => array(
                'url'=> MUFFLE_IMAGES.'/blog/banner/blog_details_img.jpg',
            ),
            'url'      => false

        ),
        array(
            'id'        => 'muffles_search_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog-breadcrumbs-area-two.archive-banner .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => .5
            ),                        
        ),
      )
));

