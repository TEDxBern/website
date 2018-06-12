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

    <div class="entry-content">


        <div class="card-container">

            <?php
                //   the_content();

            $loop = new WP_Query( array( 'post_type' => 'post', 'orderby'   => 'menu_order', 'order' => 'ASC', 'numberposts' => -1, ) );

            while ( $loop->have_posts() ) : $loop->the_post();

                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
                $link = get_field('external_link');
                $button_text = get_field('button_text');

                $card_width = get_field('card_width');
                $card_height = get_field('card_height');


            ?>


            <div class="card width-<?php echo $card_width; ?> height-<?php echo $card_height; ?>" data-title="<?php the_title(); ?>" style="background-image: url(<?php echo $image[0]; ?>);">
                    <div class="card-content">
                        <?php if($link){ ?>
                            <a class="page-link" href="<?php echo $link;?>"></a>
                        <?php } ?>
                        <h3><?php the_title(); ?></h3>
                        <?php if(get_the_content()){ echo '<p>'.substr(get_the_content(), 0, 100) . '</p>'; } ?>
                        <?php
                        if($button_text){
                            echo '<a class="btn" href="'.$link.'">'.$button_text.'</a>';
                        }
                        ?>
                    </div>
            </div>

            <?php

            endwhile; wp_reset_query();

            ?>
        </div>
        <div class="newsletter">
            <div class="container">
                <h2>Newsletter</h2>
                <div id="mc_embed_signup">
                <form action="https://tedxbern.us12.list-manage.com/subscribe/post?u=3767b7b3d94984a193ba0eee3&amp;id=1db27caa42" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <div id="mc_embed_signup_scroll">
                        <div class="mc-field-group">
                            <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="<?php echo pll_e('E-Mail Adresse'); ?>">
                            <input type="submit" value="<?php echo pll_e('Abonnieren'); ?>" name="subscribe" id="mc-embedded-subscribe">
                        </div>
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_3767b7b3d94984a193ba0eee3_1db27caa42" tabindex="-1" value=""></div>
                    </div>
                </form>
                </div>
                <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
            </div>
        </div>
    </div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->
