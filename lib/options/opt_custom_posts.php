<?php
/**
 * Custom Post Types
 */
Redux::set_section( 'muffle', array(
    'title'     => esc_html__( 'Custom Post Types', 'saasland' ),
    'id'        => 'cpt_opt',
    'icon'      => 'dashicons dashicons-admin-post',
));

/**
 * Post Types
 */
Redux::set_section( 'muffle', array(
    'title'     => esc_html__( 'Post Types', 'saasland' ),
    'id'        => 'cpt',
    'icon'      => '',
    'subsection'=> true,
    'fields'    => array(
        array(
            'id'        => 'cpt_note',
            'type'      => 'info',
            'style'     => 'success',
            'title'     => esc_html__( 'Enable Disable Custom Post Types', 'saasland' ),
            'icon'      => 'dashicons dashicons-info',
            'desc'      => esc_html__( 'If you want, you can disable any custom post type of Saasland from here.', 'saasland' )
        ),

        array(
            'id'       => 'is_service_cpt',
            'type'     => 'switch',
            'title'    => esc_html__('Services', 'saasland' ),
            'on'       => esc_html__( 'Enabled', 'saasland' ),
            'off'      => esc_html__( 'Disabled', 'saasland' ),
            'default'  => true,
        ),
        array(
            'id'       => 'is_project_cpt',
            'type'     => 'switch',
            'title'    => esc_html__('Project', 'saasland' ),
            'on'       => esc_html__( 'Enabled', 'saasland' ),
            'off'      => esc_html__( 'Disabled', 'saasland' ),
            'default'  => true,
        ),
        array(
            'id'       => 'is_team_cpt',
            'type'     => 'switch',
            'title'    => esc_html__('Team', 'saasland' ),
            'on'       => esc_html__( 'Enabled', 'saasland' ),
            'off'      => esc_html__( 'Disabled', 'saasland' ),
            'default'  => true,
        ),
    )
));

/**
 * Slug Re-write
 */
// Redux::set_section( 'muffle', array(
//     'title'     => esc_html__( 'Post Type Slugs', 'saasland' ),
//     'id'        => 'saasland_cp_slugs',
//     'icon'      => '',
//     'subsection'=> true,
//     'fields'    => array(
//         array(
//             'id'        => 'cp_slug_note',
//             'type'      => 'info',
//             'style'     => 'warning',
//             'title'     => esc_html__( 'Slug Re-write:', 'saasland' ),
//             'icon'      => 'dashicons dashicons-info',
//             'desc'      => sprintf (
//                 '%1$s <a href="%2$s"> %3$s</a> %4$s',
//                 esc_html__( "These are the custom post's slugs offered by Saasland. You can customize the permalink structure (site_domain/post_type_slug/post_slug) by changing the post type slug (post_type_slug) from here. Don't forget to save the permalinks settings from", 'saasland' ),
//                 get_admin_url( null, 'options-permalink.php' ),
//                 esc_html__( 'Settings > Permalinks', 'saasland' ),
//                 esc_html__( 'after changing the slug value.', 'saasland' )
//             )
//         ),
        
//         array(
//             'title'     => esc_html__( 'Service Slug', 'saasland' ),
//             'id'        => 'service_slug',
//             'type'      => 'text',
//             'required'  => array( 'is_service_cpt', '=', '1' ),
//             'default'   => 'service'
//         ),
        
//         array(
//             'title'     => esc_html__( 'Project Slug', 'saasland' ),
//             'id'        => 'project_slug',
//             'type'      => 'text',
//             'required'  => array( 'is_project_cpt', '=', '1' ),
//             'default'   => 'project'
//         ),
        
//         array(
//             'title'     => esc_html__( 'Team Slug', 'saasland' ),
//             'id'        => 'team_slug',
//             'type'      => 'text',
//             'required'  => array( 'is_team_cpt', '=', '1' ),
//             'default'   => 'team'
//         ),
//     )
// ));