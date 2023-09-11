<?php
/**
 * Show the excerpt.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage muffle
 * @since muffle 1.0
 */

$opt = get_option( 'muffle' );
$blog_excerpt = isset($opt['blog_excerpt']) ? $opt['blog_excerpt'] : '';
?>
  <div class='blog_excerpt'> <?php echo wp_trim_words(get_the_content(), $blog_excerpt);?> </div>

