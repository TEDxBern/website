<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tedxbern
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header><!-- .entry-header -->

    <?php tedxbern_post_thumbnail(); ?>

    <div class="entry-content partner-content">
        <?php the_content(); ?>

        <?php
        get_template_part( 'template-parts/partner' );
        ?>

        <?php
        $additional_content = get_field('additional_content');

        echo $additional_content;
        ?>
    </div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->
