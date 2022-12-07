<?php 
/**
 * Enqueue scripts and styles.
 */
 
function muffle_fonts_url() {
    $fonts_url = '';
    $fonts     = array();
    $subsets   = '';

    /* Body font */
    if ( 'off' !== 'on' ) {
        $fonts[] = "Outfit:200,300,400,500,600,700,800,900";
    }

    $is_ssl = is_ssl() ? 'https' : 'http';

    if ( $fonts ) {
        $fonts_url = add_query_arg( array(
            'family' => urlencode( implode( '|', $fonts ) ),
            'subset' => urlencode( $subsets ),
        ), "$is_ssl://fonts.googleapis.com/css" );
    }

    return $fonts_url;
}


function muffle_scripts() {
    wp_enqueue_style('mufflefonts', muffle_fonts_url(), array(), null);
    
	wp_enqueue_style( 'muffle-style', get_stylesheet_uri(), array(), MUFFLE_VERSION );
	wp_style_add_data( 'muffle-style', 'rtl', 'replace' );
	wp_enqueue_style( 'mediaelementplayer', MUFFLE_CSS.'/mediaelementplayer.css', array( 'muffle-style' ), MUFFLE_VERSION );
	wp_enqueue_style( 'muffle_fontawesome', MUFFLE_CSS.'/all.min.css', array( 'muffle-style' ), MUFFLE_VERSION );
    wp_enqueue_style( 'themify_icon', MUFFLE_CSS.'/themify-icons.css', array( 'muffle-style' ), MUFFLE_VERSION );
	wp_enqueue_style( 'muffle_icon_moon', MUFFLE_CSS.'/icon-moon.css', array( 'muffle-style' ), MUFFLE_VERSION );

	wp_enqueue_style( 'mufflestylemain', get_theme_file_uri('/assets/css/style.css'), array(), MUFFLE_VERSION );
	wp_enqueue_style( 'stylemuffle', get_theme_file_uri('/assets/css/style-muffle.css'), array(), MUFFLE_VERSION );
    wp_enqueue_style( 'muffle_woocommerce', get_theme_file_uri('/assets/css/woocommerce.css'), array(), MUFFLE_VERSION );

   //  Enqueue script   
	wp_enqueue_script( 'mediaelement-and-player', MUFFLE_JS. '/mediaelement-and-player.min.js', array('jquery'), MUFFLE_VERSION, true );
	wp_enqueue_script( 'parallaxie', MUFFLE_JS. '/parallaxie.js', array('jquery'), MUFFLE_VERSION, true );
	wp_enqueue_script( 'mufflemain', MUFFLE_JS . '/main.js', array('jquery'), MUFFLE_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}


    wp_deregister_style('extendify-utilities');

}
add_action( 'wp_enqueue_scripts', 'muffle_scripts' );