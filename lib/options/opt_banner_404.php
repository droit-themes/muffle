<?php 
Redux::set_section('muffle', array(
    'title'            => esc_html__( '404 Banner', 'muffle' ),
    'id'               => 'muffle_404_banner',
    'icon'             => 'el el-cog',
    'subsection' => true,
    'fields'           => array(
        array(
            'id'       => 'muffle_404_banner_toggle',
            'type'     => 'button_set',
            'title'    => esc_html__('Show 404  Banner', 'muffle'),
            'options' => array(
                'show' => esc_html__('Show Banner', 'muffle'), 
                'hide' => esc_html__('Hide Banner', 'muffle'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'muffle_404_title',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Title', 'muffle'),
            'options' => array(
                'show' => esc_html__('Show', 'muffle'), 
                'hide' => esc_html__('Hide', 'muffle'), 
            ), 
            'default' => 'show'
        ),
        array(
            'title'    => esc_html__('404 Banner Titile', 'muffle'),
            'type' => 'text',
            'id'       => 'muffle_404_banner_title',
            'placeholder' => esc_html__( '404 Banner Titile', 'muffle'),
            'required'    => array('muffle_404_title', '=', 'show')
        ),
        array(
            'id'       => 'muffle_404_banner_breadcrumb',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Breadcrumb', 'muffle'),
            'options' => array(
                'show' => esc_html__('Show', 'muffle'), 
                'hide' => esc_html__('Hide', 'muffle'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'muffle_404_banner_upload',
            'type'     => 'media', 
            'url'      => true,
            'title'    => __('Upload Banner', 'muffle'),
            'default'  => array(
                'url'=> MUFFLE_IMAGES.'/blog/banner/banner.png',
            ),
            'url'      => false

        ),
        array(
            'id'        => 'muffles_404_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog-breadcrumbs-area-two.banner-404 .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => .5
            ),                        
        ),
      )
));