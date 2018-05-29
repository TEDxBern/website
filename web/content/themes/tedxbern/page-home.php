<?php
/**
 * Template Name: Home
 *
 * This template is for the start page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tedxbern
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'home' );

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
