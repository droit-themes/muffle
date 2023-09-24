<?php

Redux::setSection('muffle', array(
    'title'     => esc_html__('Shop Settings', 'muffle'),
    'id'        => 'shop_0pt',
    'icon'      => 'el el-lines',
    'fields'    => array(

        array(
            'title'     => esc_html__('Shop Page Title Text', 'muffle'),
            'id'        => 'shop_page_title',
            'type'      => 'text',
            'default'   => 'Shop Page',
        ),

        array(
            'id'        => 'shop_title_color',
            'type'      => 'color',
            'title'     => 'Shop Title Color',
            'mode'      => 'color',
            'output'    => array( '.shop_page_title, h1.page-title.page_title' ),
        ),

        array(
            'id'        => 'shop_banner_toggle',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Shop Banner', 'muffle'),
            'options'   => array(
                'show'  => esc_html__('Show Banner', 'muffle'),
                'hide'  => esc_html__('Hide Banner', 'muffle'),
            ), 
            'default'   => 'show'
        ),

        array(
            'id'        => 'shop_banner_breadcrumb',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Breadcrumb', 'muffle'),
            'options'   => array(
                'show'  => esc_html__('Show', 'muffle'),
                'hide'  => esc_html__('Hide', 'muffle'),
            ), 
            'default'   => 'show',
        ),

        array(
            'id'        => 'shop_brea_color',
            'type'      => 'color',
            'title'     => 'Shop Breadcrumb Color',
            'mode'      => 'color',
            'output'    => array( '.breadcrumbs span' ),
        ),

        array(
            'id'        => 'shop_banner_img_upload',
            'type'      => 'media',
            'title'     => __('Upload Banner', 'muffle'),
            'default'   => array(
                'url'   => MUFFLE_IMAGES.'/blog/banner/banner.png',
            ),
        ),

        array(
            'id'        => 'shop_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Shop Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog_breadcrumbs_area_two.woo_banner .overlay_bg' ),
        ),

        array(
            'title'     => esc_html__( 'Padding', 'muffle' ),
            'subtitle'  => esc_html__( 'Padding around the Shop Page Banner. Input the padding as clockwise (Top Right Bottom Left)', 'muffle' ),
            'id'        => 'shop_banner_padding',
            'type'      => 'spacing',
            'output'    => array( '.blog_breadcrumbs_area_two.woo_banner' ),
            'mode'      => 'padding',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
        ),
    )
));
