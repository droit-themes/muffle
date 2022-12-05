<?php
// Header Section
Redux::set_section( 'muffle', array(
    'title'            => esc_html__( 'Header', 'muffle' ),
    'id'               => 'muffle_header_sec',
    'customizer_width' => '400px',
    'icon'             => 'el el-arrow-up',
));


// Logo
Redux::set_section( 'muffle', array(
    'title'            => esc_html__( 'Logo', 'muffle' ),
    'id'               => 'muffle_logo_opt',
    'subsection'       => true,
    'icon'             => '',
    'fields'           => array(
        array(
            'title'     => esc_html__( 'Upload logo', 'muffle' ),
            'subtitle'  => esc_html__( 'Upload here a image file for your logo', 'muffle' ),
            'id'        => 'muffle_logo',
            'type'      => 'media',
            'default'   => array(
                'url'   => MUFFLE_IMAGES.'/default_logo/logo.svg'
            )
        ),

        array(
            'title'     => esc_html__( 'Sticky header logo', 'muffle' ),
            'id'        => 'muffle_sticky_logo',
            'type'      => 'media',
            'default'   => array(
                'url'   => MUFFLE_IMAGES.'/default_logo/logo_sticky.svg'
            )
        ),

        array(
            'title'     => esc_html__( 'Retina Logo', 'muffle' ),
            'subtitle'  => esc_html__( 'The retina logo should be double (2x) of your original logo', 'muffle' ),
            'id'        => 'muffle_retina_logo',
            'type'      => 'media',
        ),

        array(
            'title'     => esc_html__( 'Retina Sticky Logo', 'muffle' ),
            'subtitle'  => esc_html__( 'The retina logo should be double (2x) of your original logo', 'muffle' ),
            'id'        => 'muffle_retina_sticky_logo',
            'type'      => 'media',
        ),

        array(
            'title'     => esc_html__( 'Logo dimensions', 'muffle' ),
            'subtitle'  => esc_html__( 'Set a custom height width for your upload logo.', 'muffle' ),
            'id'        => 'logo_dimensions',
            'type'      => 'dimensions',
            'units'     => array( 'em','px','%' ),
            'output'    => '.logo_info .navbar-brand img'
        ),

        array(
            'title'     => esc_html__( 'Padding', 'muffle' ),
            'subtitle'  => esc_html__( 'Padding around the logo. Input the padding as clockwise (Top Right Bottom Left)', 'muffle' ),
            'id'        => 'logo_padding',
            'type'      => 'spacing',
            'output'    => array( '.logo_info .navbar-brand img' ),
            'mode'      => 'padding',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
        ),
    )
) );

Redux::set_section( 'muffle', array(
    'title'            => esc_html__( 'Menu Setting', 'muffle' ),
    'id'               => 'muffle_menu_setting',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(
         array(
            'id'       => 'muffle_searchicon_toggle',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Search Icon', 'muffle'),
            'options' => array(
                'yes' => esc_html__('Yes', 'muffle'), 
                'no' => esc_html__('No', 'muffle'), 
             ), 
            'default' => 'yes'
        )

    )
));