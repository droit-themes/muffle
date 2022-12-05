<?php
/**
 * template Name: muffle Fluid
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package muffle
 */

get_header();

?>

	<main id="primary" class="site-main">

		<?php get_template_part('template-parts/banner/banner', 'page');

	    muffle_wrapper_start( 'full', 10);

		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		muffle_wrapper_end( 'full' );
		?>
	</main><!-- #main -->

<?php
get_footer();
