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
    
	
	wp_style_add_data( 'muffle-style_rtl', 'rtl', 'replace' );
	wp_enqueue_style( 'mediaelementplayer', MUFFLE_CSS.'/mediaelementplayer.css', array( 'muffle-style' ), MUFFLE_VERSION );
	wp_enqueue_style( 'muffle_fontawesome', MUFFLE_CSS.'/all.min.css', array( 'muffle-style' ), MUFFLE_VERSION );
    wp_enqueue_style( 'themify_icon', MUFFLE_CSS.'/themify-icons.css', array( 'muffle-style' ), MUFFLE_VERSION );
	wp_enqueue_style( 'muffle_icon_moon', MUFFLE_CSS.'/icon-moon.css', array( 'muffle-style' ), MUFFLE_VERSION );

	wp_enqueue_style( 'mufflestylemain', get_theme_file_uri('/assets/css/style.css'), array(), MUFFLE_VERSION );
	wp_enqueue_style( 'stylemuffle', get_theme_file_uri('/assets/css/style-muffle.css'), array(), MUFFLE_VERSION );
    wp_enqueue_style( 'stylewoocommerce', get_theme_file_uri('/assets/css/woocommerce.css'), array(), MUFFLE_VERSION );

    wp_enqueue_style( 'muffle-style', get_stylesheet_uri(), array(), MUFFLE_VERSION );

   //  Enqueue script   
	wp_enqueue_script( 'mediaelement-and-player', MUFFLE_JS. '/mediaelement-and-player.min.js', array('jquery'), MUFFLE_VERSION, true );
	wp_enqueue_script( 'parallaxie', MUFFLE_JS. '/parallaxie.js', array('jquery'), MUFFLE_VERSION, true );
	wp_enqueue_script( 'mufflemain', MUFFLE_JS . '/main.js', array('jquery'), MUFFLE_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}


    wp_deregister_style('extendify-utilities');


    $dynamic_css = '';
   
    
    $opt = get_option('muffle');

    if ( !empty($opt['mobile_menu_dropdown_bg']) ) {
        $dynamic_css .= "
            @media (max-width: 991px) {
                .navbar .navbar-collapse{
                    background: {$opt['mobile_menu_dropdown_bg']} !important;
                }
            }";
    }

    if ( !empty($opt['mobile_menu_font_color']) ) {
        $dynamic_css .= "
            @media (max-width: 991px) {
                .menu > .nav-item .nav-link, .menu > .nav-item.mega_menu{
                    color: {$opt['mobile_menu_font_color']} !important;
                }
            }";
    }

    if ( !empty($opt['mobile_menu_hover_color']) ) {
        $dynamic_css .= "
            @media (max-width: 991px) {
                .menu > .nav-item.active .nav-link{
                    color: {$opt['mobile_menu_hover_color']} !important;
                }
                .menu > .nav-item.hover .nav-link{
                    color: {$opt['mobile_menu_hover_color']} !important;
                }
            }";
    }


    if ( !empty($opt['mobile_menu_dropdown_color']) ) {
        $dynamic_css .= "
            @media (max-width: 991px) {
                .menu > .nav-item .mobile_dropdown_icon{
                    color: {$opt['mobile_menu_dropdown_color']} !important;
                }
            }";
    }

    if ( !empty($opt['hamburger_menu_icon_color']) ) {
        $dynamic_css .= "
            @media (max-width: 991px) {
                .navbar-toggler span{
                    background: {$opt['hamburger_menu_icon_color']} !important;
                }
            }";
    }


    wp_add_inline_style( 'muffle-style', $dynamic_css );
} 

add_action( 'wp_enqueue_scripts', 'muffle_scripts' );


?>
