<?php

// Navbar styling
Redux::setSection('muffle', array(
    'title'            => esc_html__( 'Menu Settings', 'muffle' ),
    'id'               => 'menu_opt',
    'icon'             => 'el el-lines',
    'fields'           => array(
        array(
            'title'     => esc_html__('Menu Bar Backgound Color', 'muffle'),
            'subtitle'  => esc_html__('Menu item font color', 'muffle'),
            'id'        => 'menu_bar_bg_color',
            'output'    => array(
                'background' => '.site-header .navbar',
            ),
            'type'      => 'color',
        ),
        array(
            'title'     => esc_html__('Menu Item Color', 'muffle'),
            'subtitle'  => esc_html__('Menu item font color', 'muffle'),
            'id'        => 'menu_font_color',
            'output'    => array(
                'color' => '.menu > .nav-item > .nav-link',
            ),
            'type'      => 'color',
        ),

        array(
            'title'     => esc_html__('Menu Hover Color', 'muffle'),
            'subtitle'  => esc_html__('Menu item Hover font color on header sticky mode', 'muffle'),
            'id'        => 'menu_hover_active_font_color',
            'output'    => array(
                'color'     => '.menu > .nav-item.active .nav-link, .menu > .nav-item:hover .nav-link',
            ),
            'type'      => 'color',
        ),
        

        // Sticky menu settings section
        array(
            'id' => 'sticky_menu_start',
            'type' => 'section',
            'title' => esc_html__('Sticky menu settings', 'muffle'),
            'subtitle' => esc_html__('The following settings will only apply on the sticky header mode..', 'muffle'),
            'indent' => false
        ),
        array(
            'title'     => esc_html__('Menu Bar Backgound Color', 'muffle'),
            'subtitle'  => esc_html__('Menu item font color', 'muffle'),
            'id'        => 'stick_menu_bar_bg_color',
            'output'    => array(
                'background' => '.site-header.sticky_nav.navbar_fixed .navbar',
            ),
            'type'      => 'color',
        ),
        array(
            'title'     => esc_html__('Menu Color', 'muffle'),
            'subtitle'  => esc_html__('Menu item font color on sticky menu mode.', 'muffle'),
            'id'        => 'sticky_menu_font_color',
            'output'    => array(
                'color' => '.navbar_fixed .menu > .nav-item > .nav-link',
            ),
            'type'      => 'color',
        ),
        
        array(
            'title'     => esc_html__('Menu Hover Color', 'muffle'),
            'subtitle'  => esc_html__('Menu item Hover font color on header sticky mode', 'muffle'),
            'id'        => 'menu_sticky_active_font_color',
            'output'    => array(
                'color'     => '.navbar_fixed .menu > .nav-item.active .nav-link, .navbar_fixed .menu > .nav-item:hover .nav-link',
            ),
            'type'      => 'color',
        ),
        array(
            'id'     => 'submenu_end',
            'type'   => 'section',
            'indent' => false,
        ),

        array(
            'title'     => esc_html__('Menu item margin', 'muffle'),
            'subtitle'  => esc_html__('Margin around menu item.', 'muffle'),
            'id'        => 'menu_item_margin',
            'type'      => 'spacing',
            'output'    => array( '.menu > .nav-item' ),
            'mode'      => 'margin',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
        ),


        // Sub menu settings section
        array(
            'id' => 'sub_menu_start',
            'type' => 'section',
            'title' => esc_html__('Sub menu settings', 'muffle'),
            'subtitle' => esc_html__('The following settings will only apply on the Sub Menu header mode..', 'muffle'),
            'indent' => false
        ),
        array(
            'title'     => esc_html__('Menu Backgound Color', 'muffle'),
            'subtitle'  => esc_html__('Sub Menu item font color', 'muffle'),
            'id'        => 'sub_menu_bar_bg_color',
            'output'    => array(
                'background' => '.menu > .nav-item.submenu .dropdown-menu',
            ),
            'type'      => 'color',
        ),
        array(
            'title'     => esc_html__('Menu Color', 'muffle'),
            'subtitle'  => esc_html__('Menu item font color on sticky menu mode.', 'muffle'),
            'id'        => 'sub_menu_font_color',
            'output'    => array(
                'color' => '.menu > .nav-item.submenu .dropdown-menu .nav-item .nav-link',
            ),
            'type'      => 'color',
        ),

        array(
            'title'     => esc_html__('Active Menu Color', 'muffle'),
            'subtitle'  => esc_html__('Menu item font color on sticky Active menu mode.', 'muffle'),
            'id'        => 'sub_menu_active_font_color',
            'output'    => array(
                'color' => '.menu > .nav-item.submenu .dropdown-menu .nav-item.active > .nav-link',
            ),
            'type'      => 'color',
        ),

    
    )
));