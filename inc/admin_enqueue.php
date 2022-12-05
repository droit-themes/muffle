<?php 
/**
 * muffle admin Enqueue 
 */

add_action( 'admin_enqueue_scripts', 'muffle_admin_enqueues');

function muffle_admin_enqueues() {
  
    if(function_exists('get_current_screen')){
    
        $screen = get_current_screen(); 
        
        if($screen->base == 'toplevel_page_muffle_options') {
            wp_enqueue_style( 'muffle-redux-style', MUFFLE_CSS.'/redux-style.css' );
        }
    }
    
}
