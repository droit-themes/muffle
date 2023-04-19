<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    $opt_name = 'muffle';

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'display_name'         => $theme->get( 'Name' ),
        'display_version'      => $theme->get( 'Version' ),
        'menu_title'           => esc_html__( 'Muffle Options', 'muffle' ),
        'customizer'           => true,
		'dev_mode'             => false
    );

    Redux::setArgs( $opt_name, $args );

	require MUFFLE_THEMEROOT_DIR . '/lib/options/opt_header.php';
    require MUFFLE_THEMEROOT_DIR . '/lib/options/opt_menu.php';
	require MUFFLE_THEMEROOT_DIR . '/lib/options/opt_banner.php';
	require MUFFLE_THEMEROOT_DIR . '/lib/options/opt_banner_search.php';
	require MUFFLE_THEMEROOT_DIR . '/lib/options/opt_banner_404.php';
	require MUFFLE_THEMEROOT_DIR . '/lib/options/opt_blog.php';
	require MUFFLE_THEMEROOT_DIR . '/lib/options/opt_page.php';
	require MUFFLE_THEMEROOT_DIR . '/lib/options/opt_style.php';
	require MUFFLE_THEMEROOT_DIR . '/lib/options/opt_footer.php';
    require MUFFLE_THEMEROOT_DIR . '/lib/options/opt_custom_posts.php';
    require MUFFLE_THEMEROOT_DIR . '/lib/options/opt_typo.php';
