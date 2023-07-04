<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package muffle
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */

function muffle_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}else{
		$classes[] = 'has-active-sidebar';	
	}

	return $classes;
}
add_filter( 'body_class', 'muffle_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */

function muffle_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'muffle_pingback_header' );

function muffle_continue_reading_text() {
	$continue_reading = sprintf(
		/* translators: %s: Name of current post. */
		esc_html__( 'Continue reading %s', 'muffle' ),
		the_title( '<span class="screen-reader-text">', '</span>', false )
	);

	return $continue_reading;
}

function muffle_continue_reading_link_excerpt() {
	global $post;
	return ' ...';
}

// Filter the excerpt more link.
add_filter( 'excerpt_more', 'muffle_continue_reading_link_excerpt' );

if(!function_exists('')) :

/**
 * Print the first instance of a block in the content, and then break away.
 *
 * @since muffle 1.0
 *
 * @param string      $block_name The full block type name, or a partial match.
 *                                Example: `core/image`, `core-embed/*`.
 * @param string|null $content    The content to search in. Use null for get_the_content().
 * @param int         $instances  How many instances of the block will be printed (max). Defaults to 1.
 *
 * @return bool Returns true if a block was located & printed, otherwise false.
 */

function muffle_print_first_instance_of_block( $block_name, $content = null, $instances = 1 ) {
	$instances_count = 0;
	$blocks_content  = '';

	if ( ! $content ) {
		$content = get_the_content();
	}

	// Parse blocks in the content.
	$blocks = parse_blocks( $content );

	// Loop blocks.
	foreach ( $blocks as $block ) {

		// Sanity check.
		if ( ! isset( $block['blockName'] ) ) {
			continue;
		}

		// Check if this the block matches the $block_name.
		$is_matching_block = false;

		// If the block ends with *, try to match the first portion.
		if ( '*' === $block_name[-1] ) {
			$is_matching_block = 0 === strpos( $block['blockName'], rtrim( $block_name, '*' ) );
		} else {
			$is_matching_block = $block_name === $block['blockName'];
		}

		if ( $is_matching_block ) {
			// Increment count.
			$instances_count++;

			// Add the block HTML.
			$blocks_content .= render_block( $block );

			// Break the loop if the $instances count was reached.
			if ( $instances_count >= $instances ) {
				break;
			}
		}
	}

	if ( $blocks_content ) {
		echo apply_filters( 'the_content', $blocks_content ); // phpcs:ignore WordPress.Security.EscapeOutput
		return true;
	}

	return false;
}

endif;


if(!function_exists('muffle_can_show_post_thumbnail')) : 
/**
 * Determines if post thumbnail can be displayed.
 *
 * @since muffle 1.0
 *
 * @return bool
 */
function muffle_can_show_post_thumbnail() {
	return apply_filters(
		'muffle_can_show_post_thumbnail',
		! post_password_required() && ! is_attachment() && has_post_thumbnail()
	);
}

endif;

/**
 * Change custom logo class  
 *  
 **/
add_filter( 'get_custom_logo', 'muffle_custom_logo_class' );


function muffle_custom_logo_class( $html ) {

    $html = str_replace( 'custom-logo-link', 'custom-logo-link navbar-brand', $html );

    return $html;
}

//Comment Field Order
add_filter( 'comment_form_fields', 'muffle_comment_fields_custom_order' );
function muffle_comment_fields_custom_order( $fields ) {
    $comment_field = $fields['comment'];
    $author_field = $fields['author'];
    $email_field = $fields['email'];
    $url_field = $fields['url'];
    $cookies_field = $fields['cookies'];
    unset( $fields['comment'] );
    unset( $fields['author'] );
    unset( $fields['email'] );
    unset( $fields['url'] );
    unset( $fields['cookies'] );
    // the order of fields is the order below, change it as needed:
    $fields['author'] = $author_field;
    $fields['email'] = $email_field;
    $fields['url'] = $url_field;
    $fields['comment'] = $comment_field;
    $fields['cookies'] = $cookies_field;
    // done ordering, now return the fields:
    return $fields;
}


if(!function_exists('muffle_wrapper_start')) {

	function muffle_wrapper_start( $sidebar = 'right', $col = 8 ) {

		$row_class = 'row';
	
		if($sidebar == 'left' && is_active_sidebar('sidebar-1')) {
			$row_class = 'row flex-row-reverse';
		}

		if($sidebar == 'full' || !is_active_sidebar('sidebar-1') ) {
			$row_class = 'row justify-content-center';
			$col = 10;
		}

		?>
		 <div class="container sec_padding">
			<div class="<?php echo esc_attr($row_class); ?>">
				<div class="col-lg-<?php echo esc_attr($col) ?>">
		<?php
     
	}

}
if(!function_exists('muffle_wrapper_end')) {

	function muffle_wrapper_end( $sidebar = 'right' ) {
		?>
		  </div>
		 <?php
			if($sidebar != 'full' && is_active_sidebar( 'sidebar-1' )){
				get_sidebar();
			}
	     ?>
			
		 </div>
	   </div>
		<?php 
	}

}
if(!function_exists('muffle_pagination')){

	function muffle_pagination(){

		the_posts_pagination( array(
			'mid_size'  => 2,
			'prev_text' => '<i class="fas fa-angle-left"></i>',
			'next_text' => '<i class="fas fa-angle-right"></i>',
		) );
	}

}


if(!function_exists('muffle_extention_wp_kses')) {
 
    function muffle_extention_wp_kses ( $data ) {
 
        $allow_html = array(
            'a' => array(
                'href' => array(),
                'title' => array()
            ),
            'p' => array(
                'cite' => array(),
                'title' => array(),
            ),
            'br' => array(),
            'em' => array(),
            'strong' => array(),
            'h1' => array(),
            'h2' => array(),
            'h3' => array(),
            'h4' => array(),
            'h5' => array(),
            'h6' => array(),
            'i' => array(),
            'strong' => array(),
            'code' => array(),
            'li' => array(
                'class' => array(),
            ),
            'ol' => array(
                'class' => array(),
            ),
            'ul' => array(
                'class' => array(),
            ),
            'img' => array(
                'alt'    => array(),
                'class'  => array(),
                'height' => array(),
                'src'    => array(),
                'width'  => array(),
            ),
            'span'   => array()
        );
 
      return  wp_kses($data, $allow_html);
    }
}


