<?php
// Blog Title Bar
Redux::set_section('muffle', array(
	'title'     => esc_html__( 'Blog Layout', 'muffle' ),
	'id'        => 'blog_titlebar_settings',
	'icon'      => 'dashicons dashicons-admin-post',
	'fields'    => array(
    array(
        'id'       => 'muffle_blog_setting',
        'type'     => 'image_select',
        'title'    => __('Blog Layout', 'muffle'), 
        'subtitle' => __('Select your blog Layout', 'muffle'),
        'options'  => array(
            'full'      => array(
                'alt'   => '1 Column', 
                'img'   => ReduxFramework::$_url.'assets/img/1col.png'
            ),
            'left'      => array(
                'alt'   => '2 Column Left', 
                'img'   => ReduxFramework::$_url.'assets/img/2cl.png'
            ),
            'right'      => array(
                'alt'   => '2 Column Right', 
                'img'  => ReduxFramework::$_url.'assets/img/2cr.png'
            ),
        ),
        'default' => 'right'
    ),
    array( 
        'id' => 'muffle_read_more_text_button',
        'title'    => __('Read More Button Text', 'muffle'), 
        'type' => 'text',
        'default' => 'Read More'
    ),
    ///
    array(
        'title'     => esc_html__( 'Post title length', 'muffle' ),
        'subtitle'  => esc_html__( 'Blog post title length in character', 'muffle' ),
        'id'        => 'post_title_length',
        'type'      => 'slider',
        'default'   => 1,
        "min"       => 1,
        "step"      => 1,
        "max"       => 500,
        'display_value' => 'text',
    ),

    array(
        'title'     => esc_html__( 'Post word excerpt', 'muffle' ),
        'subtitle'  => esc_html__( 'If post excerpt is empty, the excerpt content will take from the post content. Define here how much word you want to show along with the each posts in the blog page.', 'muffle' ),
        'id'        => 'blog_excerpt',
        'type'      => 'slider',
        'default'   => 40,
        "min"       => 1,
        "step"      => 1,
        "max"       => 500,
        'display_value' => 'text'
    ),

    array(
        'title'     => esc_html__( 'Post author', 'muffle' ),
        'id'        => 'is_post_author',
        'type'      => 'switch',
        'on'        => esc_html__( 'Show', 'muffle' ),
        'off'       => esc_html__( 'Hide', 'muffle' ),
        'default'   => 'Show',
    ),

    array(
        'title'     => esc_html__( 'Post date', 'muffle' ),
        'id'        => 'is_post_date',
        'type'      => 'switch',
        'on'        => esc_html__( 'Show', 'muffle' ),
        'off'       => esc_html__( 'Hide', 'muffle' ),
        'default'   => 'Show',
    ),

    ///

	)
));



/*** Headers Typography ***/
Redux::set_section( 'muffle', array(
    'title'            => esc_html__( 'Blog Single', 'saasland' ),
    'id'               => 'blog_single_opt',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(
        array(
            'id'       => 'muffle_display_blog_share',
            'type'     => 'button_set',
            'title'    => esc_html__('Display Social Share?', 'muffle'),
            'options' => array(
                'yes' => 'Yes', 
                'no' => 'No', 
             ), 
            'default' => 'no'
        ),

  
    )
));

