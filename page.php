<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package muffle
 */

get_header();
$page_sidebar = muffle_options('muffle_page_setting');
?>
<main id="primary" class="site-main innerpage">
		<?php get_template_part('template-parts/banner/banner', 'page'); ?>
	   <div class="container">
			<div class="row justify-content-center">
				<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					// sparch_wrapper_end( $page_sidebar );
				?>
			</div>
		</div>
	</main><!-- #main -->
<?php
get_footer();
