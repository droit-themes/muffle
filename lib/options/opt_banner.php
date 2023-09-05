<?php

Redux::set_section('muffle', array(
    'title'            => esc_html__( 'Banner Setting', 'muffle' ),
    'id'               => 'headers_banner_settings_opt',
    'icon'             => 'el el-picture',
));

// Page Banner 
Redux::set_section('muffle', array(
    'title'            => esc_html__( 'Page Banner', 'muffle' ),
    'id'               => 'Banner',
    'icon'             => '',
    'subsection' => true,
    'fields'           => array(
        array(
            'id'       => 'muffle_page_banner_toggle',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Page Banner', 'muffle'),
            'subtitle' => esc_html__('Show Hide Page Banner Globally ', 'muffle'),
            'options' => array(
                'show' => esc_html__('Show Banner', 'muffle'), 
                'hide' => esc_html__('Hide Banner', 'muffle'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'muffle_page_banner_breadcrumb',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Page Breadcrumb', 'muffle'),
            'options' => array(
                'show' => esc_html__('Show', 'muffle'), 
                'hide' => esc_html__('Hide', 'muffle'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'muffle_page_banner_title',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Page Title', 'muffle'),
            'options' => array(
                'show' => esc_html__('Show', 'muffle'), 
                'hide' => esc_html__('Hide', 'muffle'), 
            ), 
            'default' => 'show'
        ),

        array(
			'title'         => esc_html__( 'Page Title', 'muffle' ),
			'id'            => 'page_typo',
			'type'          => 'typography',
			'google'        => true,
			'text-align'    => true,
			'output'        => array( '.page-banner .breadcrumb_content .page_title.banne-blog' ),
		),

        array(
			'title'         => esc_html__( 'Breadcrumb Text', 'muffle' ),
			'id'            => 'breadcrumb_page_typo',
			'type'          => 'typography',
			'google'        => true,
			'text-align'    => true,
			'output'        => array( '.page-banner .breadcrumbs span a, .page-banner .breadcrumbs span' ),
		),

        array(
            'id'       => 'muffle_page_banner_upload',
            'type'     => 'media', 
            'url'      => true,
            'title'    => __('Upload Banner', 'muffle'),
            'default'  => array(
                'url'=> MUFFLE_IMAGES.'/blog/banner/banner.png',
            ),
            'url'      => false

        ),
        array(
            'id'        => 'muffle_page_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog-breadcrumbs-area-two.page-banner .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => .5
            ),                        
        ),
      )
));

// Blog Banner 

Redux::set_section('muffle', array(
    'title'            => esc_html__( 'Blog Banner', 'muffle' ),
    'id'               => 'blog_banner',
    'icon'             => '',
    'subsection' => true,
    'fields'           => array(
        array(
            'id'       => 'muffle_blog_banner_toggle',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Blog Banner', 'muffle'),
            'subtitle' => esc_html__('Show Hide Blog Banner Globally ', 'muffle'),
            'options' => array(
                'show' => esc_html__('Show Banner', 'muffle'), 
                'hide' => esc_html__('Hide Banner', 'muffle'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'muffle_blog_banner_breadcrumb',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Blog Breadcrumb', 'muffle'),
            'options' => array(
                'show' => esc_html__('Show', 'muffle'), 
                'hide' => esc_html__('Hide', 'muffle'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'muffle_blog_banner_title',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Blog Title', 'muffle'),
            'options' => array(
                'show' => esc_html__('Show', 'muffle'), 
                'hide' => esc_html__('Hide', 'muffle'), 
            ), 
            'default' => 'show'
        ),
        //
        array(
			'title'     => esc_html__( 'Blog Title', 'muffle' ),
			'id'        => 'blog_title',
			'type'      => 'text',
			'default'   => esc_html__( 'Blog List', 'muffle' ),
		),

		array(
			'title'         => esc_html__( 'Blog Title', 'muffle' ),
			'id'            => 'blog_typo',
			'type'          => 'typography',
			'google'        => true,
			'text-align'    => true,
			'output'        => array( '.breadcrumb_content .page_title.banne-blog' ),
		),

        //
        array( 
        'title'    => esc_html__('Blog title', 'muffle'),
        'id' => 'muffle_blog_title',
        'type' => 'text',
         'required' => array('muffle_blog_banner_title', '=' , 'show')
        ),
        array(
            'id'       => 'muffle_blog_banner_upload',
            'type'     => 'media', 
            'url'      => true,
            'title'    => __('Upload Banner', 'muffle'),
            'default'  => array(
                'url'=> MUFFLE_IMAGES.'/blog/banner/banner.png',
            ),
            'url'      => false

        ),
        array(
            'id'        => 'muffle_blog_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog-breadcrumbs-area-two .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => .5
            ),                        
        ),
      )
));

// Shop Banner 

Redux::set_section('muffle', array(
    'title'            => esc_html__( 'Shop Banner', 'muffle' ),
    'desc'            => esc_html__( 'This banner show in shop page , shop single , Shop category', 'muffle' ),
    'id'               => 'shop_banner',
    'icon'             => '',
    'subsection' => true,
    'fields'           => array(

        array(
			'title'         => esc_html__( 'Shop Title', 'muffle' ),
			'id'            => 'shop_typo',
			'type'          => 'typography',
			'google'        => true,
			'text-align'    => true,
			'output'        => array( '.shop .breadcrumb_content .page-title.page_title.shop_title' ),
		),

        array(
			'title'         => esc_html__( 'Shop Single Breadcrumb', 'muffle' ),
			'id'            => 'shop_breadcrumb_typo',
			'type'          => 'typography',
			'google'        => true,
			'text-align'    => true,
			'output'        => array( '.shop .breadcrumb_content .breadcrumbs span, .shop .breadcrumb_content .breadcrumbs span a' ),
		),

        array(
            'id'       => 'muffle_shop_banner_upload',
            'type'     => 'media', 
            'url'      => true,
            'title'    => __('Upload Banner', 'muffle'),
            'default'  => array(
                'url'=> MUFFLE_IMAGES.'/blog/banner/banner.png',
            ),
            'url'      => false

        ),
      )
));


// Single page blog 

Redux::set_section('muffle', array(
    'title'            => esc_html__( 'Single Blog Banner', 'muffle' ),
    'id'               => 'single_blog_banner',
    'icon'             => '',
    'subsection' => true,
    'fields'           => array(
        array(
            'id'       => 'muffle_single_blog_banner_toggle',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Single Blog Banner', 'muffle'),
            'subtitle' => esc_html__('Show Hide Banner Globally ', 'muffle'),
            'options' => array(
                'show' => esc_html__('Show Banner', 'muffle'), 
                'hide' => esc_html__('Hide Banner', 'muffle'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'muffle_single_blog_banner_breadcrumb',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Breadcrumb', 'muffle'),
            'options' => array(
                'show' => esc_html__('Show', 'muffle'), 
                'hide' => esc_html__('Hide', 'muffle'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'muffle_single_blog_banner_title',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Title', 'muffle'),
            'options' => array(
                'show' => esc_html__('Show', 'muffle'), 
                'hide' => esc_html__('Hide', 'muffle'), 
            ), 
            'default' => 'show'
        ),

        array(
			'title'         => esc_html__( 'Single Title', 'muffle' ),
			'id'            => 'single_typo',
			'type'          => 'typography',
			'google'        => true,
			'text-align'    => true,
			'output'        => array( '.post_single .breadcrumb_content .page_title.banne-blog' ),
		),

        array(
			'title'         => esc_html__( 'Date and Author Text', 'muffle' ),
			'id'            => 'date_author_single_typo',
			'type'          => 'typography',
			'google'        => true,
			'text-align'    => true,
			'output'        => array( '.post_single .breadcrumb_content span a, .post_single .breadcrumb_content span' ),
		),

        array(
            'id'       => 'muffle_single_blog_banner_upload',
            'type'     => 'media', 
            'url'      => true,
            'title'    => __('Upload Banner', 'muffle'),
            'default'  => array(
                'url'=> MUFFLE_IMAGES.'/blog/banner/banner.png',
            ),
            'url'      => false

        ),
        array(
            'id'        => 'muffles_single_blog_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog-breadcrumbs-area-two.blog-single-page .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => .5
            ),                        
        ),
      )
));

//  Archive page 

Redux::set_section('muffle', array(
    'title'            => esc_html__( 'Archive Banner', 'muffle' ),
    'id'               => 'archive_blog_banner',
    'icon'             => '',
    'subsection' => true,
    'fields'           => array(
        array(
            'id'       => 'muffle_arcive_banner_toggle',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Archive  Banner', 'muffle'),
            'options' => array(
                'show' => esc_html__('Show Banner', 'muffle'), 
                'hide' => esc_html__('Hide Banner', 'muffle'), 
            ), 
            'default' => 'show'
        ),
        // array(
        //     'id'       => 'muffle_archive_banner_breadcrumb',
        //     'type'     => 'button_set',
        //     'title'    => esc_html__('Show Breadcrumb', 'muffle'),
        //     'options' => array(
        //         'show' => esc_html__('Show', 'muffle'), 
        //         'hide' => esc_html__('Hide', 'muffle'), 
        //     ), 
        //     'default' => 'show'
        // ),
        // array(
        //     'id'       => 'muffle_arcive_title',
        //     'type'     => 'button_set',
        //     'title'    => esc_html__('Show Archive Title', 'muffle'),
        //     'options' => array(
        //         'show' => esc_html__('Show', 'muffle'), 
        //         'hide' => esc_html__('Hide', 'muffle'), 
        //     ), 
        //     'default' => 'show'
        // ),

        array(
			'title'         => esc_html__( 'Archive Title', 'muffle' ),
			'id'            => 'archive_typo',
			'type'          => 'typography',
			'google'        => true,
			'text-align'    => true,
			'output'        => array( '.archive_page .breadcrumb_content .page-title.page_title' ),
		),

        array(
			'title'         => esc_html__( 'Archive Breadcrumb', 'muffle' ),
			'id'            => 'breadcrumbs_archive_typo',
			'type'          => 'typography',
			'google'        => true,
			'text-align'    => true,
			'output'        => array( '.archive .breadcrumb_content .breadcrumbs span' ),
		),

        // array(
        //     'id'       => 'muffle_arcive_description',
        //     'type'     => 'button_set',
        //     'title'    => esc_html__('Show Archive Description', 'muffle'),
        //     'options' => array(
        //         'show' => esc_html__('Show', 'muffle'), 
        //         'hide' => esc_html__('Hide', 'muffle'), 
        //     ), 
        //     'default' => 'show'
        // ),
        array(
            'id'       => 'muffle_archive_banner_upload',
            'type'     => 'media', 
            'url'      => true,
            'title'    => __('Upload Banner', 'muffle'),
            'default'  => array(
                'url'=> MUFFLE_IMAGES.'/blog/banner/banner.png',
            ),
            'url'      => false

        ),
        array(
            'id'        => 'muffles_archive_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog-breadcrumbs-area-two.search-banner .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => .5
            ),                        
        ),
      )
));

//  search page 

