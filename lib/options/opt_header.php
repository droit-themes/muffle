<?php
// Header Section
Redux::set_section( 'muffle', array(
    'title'            => esc_html__( 'Header', 'muffle' ),
    'id'               => 'muffle_header_sec',
    'customizer_width' => '400px',
    'icon'             => 'el el-arrow-up',
));


Redux::set_section( 'muffle', array(
    'title'            => esc_html__( 'Header Settings', 'muffle' ),
    'id'               => 'muffle_header_opt',
    'subsection'       => true,
    'icon'             => '',
    'fields'           => array(

        array(
            'id'       => 'is_sticky',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Sticky', 'muffle'),
            'options' => array(
                'yes' => esc_html__('Yes', 'muffle'), 
                'no' => esc_html__('No', 'muffle'), 
             ), 
            'default' => 'yes'
        ),

        array(
            'id'       => 'muffle_header_layout',
            'type'     => 'image_select',
            'title'    => __('Header Layout', 'muffle'), 
            'subtitle' => __('Select your header layout', 'muffle'),
            'options'  => array(
                'container'      => array(
                    'alt'   => 'Container', 
                    'img'   => ReduxFramework::$_url.'assets/img/3cm.png'
                ),
                'container-fluid'      => array(
                    'alt'   => 'Container-Fluid', 
                    'img'   => ReduxFramework::$_url.'assets/img/1col.png'
                ),
            ),
            'default' => 'container'
        ),
    )
) );

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
                'url'   => MUFFLE_IMAGES.'/default_logo/logo_main.svg'
            )
        ),

        array(
            'title'     => esc_html__( 'Sticky header logo', 'muffle' ),
            'id'        => 'muffle_sticky_logo',
            'type'      => 'media',
            'default'   => array(
                'url'   => MUFFLE_IMAGES.'/default_logo/logo.svg'
            )
        ),

        array(
            'title'     => esc_html__( 'Retina Logo', 'muffle' ),
            'subtitle'  => esc_html__( 'The retina logo should be double (2x) of your original logo', 'muffle' ),
            'id'        => 'muffle_retina_logo',
            'type'      => 'media',
            'default'   => array(
                'url'   => MUFFLE_IMAGES.'/default_logo/retina_white_logo.png'
            )
            
        ),

        array(
            'title'     => esc_html__( 'Retina Sticky Logo', 'muffle' ),
            'subtitle'  => esc_html__( 'The retina logo should be double (2x) of your original logo', 'muffle' ),
            'id'        => 'muffle_retina_sticky_logo',
            'type'      => 'media',
            'default'   => array(
                'url'   => MUFFLE_IMAGES.'/default_logo/retina_dark_logo.png'
            )
        ),

        array(
            'title'     => esc_html__( 'Logo dimensions', 'muffle' ),
            'subtitle'  => esc_html__( 'Set a custom height width for your upload logo.', 'muffle' ),
            'id'        => 'logo_dimensions',
            'type'      => 'dimensions',
            'units'     => array( 'em','px','%' ),
            'output'    => 'img.site-logo'
        ),

        array(
            'title'     => esc_html__( 'Padding', 'muffle' ),
            'subtitle'  => esc_html__( 'Padding around the logo. Input the padding as clockwise (Top Right Bottom Left)', 'muffle' ),
            'id'        => 'logo_padding',
            'type'      => 'spacing',
            'output'    => array( 'img.site-logo' ),
            'mode'      => 'padding',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
        ),
    )
) );

/**
 * Menu Settings
 */
Redux::set_section( 'muffle', array(
    'title'            => esc_html__( 'Header Button', 'muffle' ),
    'id'               => 'header_styling_opt',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(
            array(
                'id'       => 'is_menu_btn',
                'type'     => 'button_set',
                'title'    => esc_html__('Show Button', 'muffle'),
                'options' => array(
                    'yes' => esc_html__('Yes', 'muffle'), 
                    'no' => esc_html__('No', 'muffle'), 
                 ), 
                'default' => 'no'
            ),

            array(
                'title'     => esc_html__( 'Button label', 'muffle' ),
                'subtitle'  => esc_html__( 'Leave the button label field empty to hide the menu action button.', 'muffle' ),
                'id'        => 'menu_btn_label',
                'type'      => 'text',
                'default'   => esc_html__( 'Get Started', 'muffle' ),
                'required'  => array( 'is_menu_btn', '=', 'yes' )
            ),
    
            array(
                'title'     => esc_html__( 'Button URL', 'muffle' ),
                'id'        => 'menu_btn_url',
                'type'      => 'text',
                'default'   => '#',
                'required'  => array( 'is_menu_btn', '=', 'yes' )
            ),
            array(
                'title'     => esc_html__( 'Button Target', 'muffle' ),
                'id'        => 'is_target_blank',
                'type'      => 'switch',
                'on'        => esc_html__( 'On', 'muffle' ),
                'off'       => esc_html__( 'Off', 'muffle' ),
                'required'  => array( 'is_menu_btn', '=', 'yes' )
            ),
            array(
                'id'          => 'header_action_btn_typo',
                'type'        => 'typography',
                'title'       => __('Typography', 'muffle'),
                'google'      => true,
                'font-backup' => true,
                'color'       => false,
                'output'      => array('.btn_get'),
                'units'       => 'px',
                'required'  => array( 'is_menu_btn', '=', 'yes' )
            ),
    
            /**
             * Button colors
             * Style will apply on the Non sticky mode and sticky mode of the header
             */
            array(
                'title'     => esc_html__( 'Button Colors', 'muffle' ),
                'subtitle'  => esc_html__( 'Button style attributes on normal (non sticky) mode.', 'muffle' ),
                'id'        => 'button_colors',
                'type'      => 'section',
                'indent'    => true,
                'required'  => array( 'is_menu_btn', '=', 'yes' ),
            ),
    
            array(
                'title'     => esc_html__( 'Font color', 'muffle' ),
                'id'        => 'menu_btn_font_color',
                'type'      => 'color',
                'output'    => array( '.nav_bar .btn_get' ),
            ),
            
            array(
                'title'     => esc_html__( 'Border Color', 'muffle' ),
                'id'        => 'menu_btn_border_color',
                'type'      => 'color',
                'mode'      => 'border-color',
                'output'    => array( '.btn_get' ),
            ),
            
            array(
                'title'     => esc_html__( 'Background Color', 'muffle' ),
                'id'        => 'menu_btn_bg_color',
                'type'      => 'color',
                'mode'      => 'background',
                'output'    => array( '.navbar .btn_get' ),
            ),
    
            // Button color on hover stats
            array(
                'title'     => esc_html__( 'Hover Font Color', 'muffle' ),
                'subtitle'  => esc_html__( 'Font color on hover stats.', 'muffle' ),
                'id'        => 'menu_btn_hover_font_color',
                'type'      => 'color',
                'output'    => array( '.navbar .nav_bar .btn_get:hover' ),
            ),
            array(
                'title'     => esc_html__( 'Hover Border Color', 'muffle' ),
                'id'        => 'menu_btn_hover_border_color',
                'type'      => 'color',
                'mode'      => 'border-color',
                'output'    => array( '.navbar .btn_get:hover' ),
            ),
            array(
                'title'     => esc_html__( 'Hover background color', 'muffle' ),
                'subtitle'  => esc_html__( 'Background color on hover stats.', 'muffle' ),
                'id'        => 'menu_btn_hover_bg_color',
                'type'      => 'color',
                'output'    => array(
                    'background' => '.navbar .btn_get:hover',
                    'border-color' => '.navbar_fixed .navbar .btn_get:hover'
                ),
            ),
            array(
                'id'     => 'button_colors-end',
                'type'   => 'section',
                'indent' => false,
            ),
    
            /*
             * Button colors on sticky mode
             */
            array(
                'title'     => esc_html__( 'Sticky Button Style', 'muffle' ),
                'subtitle'  => esc_html__( 'Button colors on sticky mode.', 'muffle' ),
                'id'        => 'button_colors_sticky',
                'type'      => 'section',
                'indent'    => true,
                'required'  => array( 'is_menu_btn', '=', 'yes' ),
            ),
            array(
                'title'     => esc_html__( 'Border color', 'muffle' ),
                'id'        => 'menu_btn_border_color_sticky',
                'type'      => 'color',
                'mode'      => 'border-color',
                'output'    => array( '.navbar_fixed .navbar .btn_get' ),
            ),
            array(
                'title'     => esc_html__( 'Font color', 'muffle' ),
                'id'        => 'menu_btn_font_color_sticky',
                'type'      => 'color',
                'output'    => array( '.navbar_fixed .navbar .btn_get' ),
            ),
            array(
                'title'     => esc_html__( 'Background color', 'muffle' ),
                'id'        => 'menu_btn_bg_color_sticky',
                'type'      => 'color',
                'mode'      => 'background',
                'output'    => array( '.navbar_fixed .navbar .btn_get' ),
            ),
    
            // Button color on hover stats
            array(
                'title'     => esc_html__( 'Hover font color', 'muffle' ),
                'subtitle'  => esc_html__( 'Font color on hover stats.', 'muffle' ),
                'id'        => 'menu_btn_hover_font_color_sticky',
                'type'      => 'color',
                'output'    => array( '.navbar_fixed .navbar .btn_get.btn-meta:hover' ),
            ),
            array(
                'title'     => esc_html__( 'Hover background color', 'muffle' ),
                'subtitle'  => esc_html__( 'Background color on hover stats.', 'muffle' ),
                'id'        => 'menu_btn_hover_bg_color_sticky',
                'type'      => 'color',
                'output'    => array(
                    'background' => '.navbar_fixed .navbar .btn_get.btn-meta:hover',
                ),
            ),
            array(
                'title'     => esc_html__( 'Hover border color', 'muffle' ),
                'subtitle'  => esc_html__( 'Background color on hover stats.', 'muffle' ),
                'id'        => 'menu_btn_hover_border_color_sticky',
                'type'      => 'color',
                'output'    => array(
                    'border-color' => '.navbar_fixed .navbar .btn_get.btn-meta:hover',
                ),
            ),
    
            array(
                'id'     => 'button_colors-sticky-end',
                'type'   => 'section',
                'indent' => false,
            ),
    
            array(
                'title'     => esc_html__( 'Button padding', 'muffle' ),
                'subtitle'  => esc_html__( 'Padding around the menu action button.', 'muffle' ),
                'id'        => 'menu_btn_padding',
                'type'      => 'spacing',
                'output'    => array( '.btn_get' ),
                'mode'      => 'padding',
                'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
                'units_extended' => 'true',
                'required'  => array( 'is_menu_btn', '=', 'yes' )
            ),

    )
));