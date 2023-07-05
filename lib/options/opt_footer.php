<?php
// page Title Bar
Redux::set_section('muffle', array(
	'title'     => esc_html__( 'Footer', 'muffle' ),
	'id'        => 'muffle_footer',
	'icon'      => 'dashicons dashicons-admin-post',
	'fields'    => array(
        array(
            'title'     => esc_html__('Copyright Text', 'muffle'),
            'id'        => 'muffle_copyright_txt',
            'type'      => 'editor',
            'default'   => 'Copyright &copy; 2023 <a href="#">DroitThemes</a> | All rights reserved',
            'args'    => array(
                'wpautop'       => true,
                'media_buttons' => false,
                'textarea_rows' => 10,
                'teeny'         => false,
            )
        ),
        array(
            'title'     => esc_html__( 'Background Color', 'muffle' ),
            'id'        => 'footer_bg_color',
            'type'      => 'color',
            'mode'      => 'background',
            'output'    => array( '.site-footer' ),
        ),
        array(
            'title'     => esc_html__( 'Footer Background', 'muffle' ),
            'id'        => 'muffle_footer_background',
            'type'      => 'media',
        ),
        array(
            'id'          => 'footer_typo',
            'type'        => 'typography',
            'title'       => __('Typography', 'muffle'),
            'google'      => true,
            'font-backup' => true,
            'color'       => false,
            'output'      => array('.site-footer .site-info'),
            'units'       => 'px',
        ),
        array(
            'title'     => esc_html__( 'Font color', 'muffle' ),
            'id'        => 'footer_font_color',
            'type'      => 'color',
            'output'    => array( '.site-footer .site-info' ),
        ),
        array(
            'title'     => esc_html__( 'Font Link color', 'muffle' ),
            'id'        => 'footer_link_font_color',
            'type'      => 'color',
            'output'    => array( '.site-footer .site-info a' ),
        ),
        array(
            'title'     => esc_html__( 'Footer padding', 'muffle' ),
            'subtitle'  => esc_html__( 'Padding around the menu action button.', 'muffle' ),
            'id'        => 'footer_padding',
            'type'      => 'spacing',
            'output'    => array( '.site-footer' ),
            'mode'      => 'padding',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
            'required'  => array( 'is_menu_btn', '=', 'yes' )
        ),
	)
));

