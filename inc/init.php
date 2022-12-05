<?php 

require MUFFLE_THEMEROOT_DIR . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require MUFFLE_THEMEROOT_DIR . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require MUFFLE_THEMEROOT_DIR . '/inc/template-functions.php';
/**
 * muffle helper 
 */
require MUFFLE_THEMEROOT_DIR . '/inc/helper.php';

/**
 * muffle comment area
*/
require MUFFLE_THEMEROOT_DIR.'/inc/classes/comment_walker.php';
/**
 * muffle nav walker
*/
require MUFFLE_THEMEROOT_DIR.'/inc/classes/main-nav-walker.php';
/**
 * Customizer additions.
 */
require MUFFLE_THEMEROOT_DIR . '/inc/customizer.php';

/**
 * muffle Enqueue 
 */

require MUFFLE_THEMEROOT_DIR . '/inc/static_enqueue.php';

/**
 * muffle Admin Enqueue 
 */

require MUFFLE_THEMEROOT_DIR . '/inc/admin_enqueue.php';


/**
 * muffle breadcrumbs
 */

require MUFFLE_THEMEROOT_DIR . '/inc/breadcrumbs.php';

/**
 * muffle Tgm
 */
require MUFFLE_THEMEROOT_DIR . '/inc/plugin_activation.php';


/**
 * One Click Demo Import
 */
require MUFFLE_THEMEROOT_DIR . '/inc/one_click_demo_config.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require MUFFLE_THEMEROOT_DIR . '/inc/jetpack.php';
}
