<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package muffle
 */

get_header();
$opt = get_option('muffle');
$blog_sidebar = muffle_options('muffle_blog_setting');
$defult_blog_format  = isset( $opt['defult_blog_format']) ? $opt['defult_blog_format'] : '';
$post_title_length   = isset( $opt['post_title_length']) ? $opt['post_title_length'] : '';
$is_post_author      = isset( $opt['is_post_author']) ? $opt['is_post_author'] : '';
$is_post_date        = isset( $opt['is_post_date']) ? $opt['is_post_date'] : '';

?>

	<main id="primary" class="site-main">

	<?php  get_template_part('template-parts/banner/banner', 'blog'); 
	$defult_blog_format;
	muffle_wrapper_start($blog_sidebar);

		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;
			
			/* Start the Loop */
			if($defult_blog_format == '0'){
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/blog/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
				endwhile;
			}else{ ?>

			<div class="_skin_2 dl_row  page type-page status-publish hentry">
			<?php 
				while ( have_posts() ) :
				the_post();
			?>
			<div class="dl_col_lg_6 dl_col_sm_ blog_grid">
				<div class="droit-post__area blog_grid_masonory style_5 zoom_in_effect">
					<a href="#" class="post_thumb">
						<div class="droit-post__thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
					</a>
					<?php
						$category = get_the_category();
					?>
					<a href="<?php echo esc_url( get_category_link( $category[0]->term_id ) ); ?>" class="dl_tag droit-post__category"><?php echo  esc_html( $category[0]->cat_name ); ?></a>
					<div class="blog_grid_masonory_content">		
						<h3 class="dl_title droit-post__title"> 
						<a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), $post_title_length); ?></a> </h3>
						<div class="dl_post_meta">
							<?php if($is_post_author == '1'): ?>
							<p class="dl_post_author droit-post_author">
								<?php muffle_posted_by(); ?>
							</p>
							<?php endif; ?>
							<?php if($is_post_date == '1'): ?>
								<p class="dl_date droit-post__date"><?php echo get_the_date(); ?></p>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			<?php
			endwhile;
			?>
			</div>

			<?php 
			}
			muffle_pagination();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		muffle_wrapper_end( $blog_sidebar );
		 ?>
		 
	</main><!-- #main -->

<?php

get_footer();
