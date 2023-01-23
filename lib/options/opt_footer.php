<?php

Redux::set_section('muffle', array(
	'title'     => esc_html__( 'Footer', 'muffle' ),
	'id'        => 'muffle_page',
	'icon'      => 'dashicons dashicons-admin-post',
));

// page Title Bar
Redux::set_section('muffle', array(
	'title'     => esc_html__( 'Content', 'muffle' ),
	'id'        => 'muffle_footer',
	'icon'      => '',
    'subsection' => true,
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
	)
));

