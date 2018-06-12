<h2>Presenting Partner</h2>
<div class="partner-container">

    <?php

    // args
    $args = array(
        'numberposts'	=> -1,
        'post_type'		=> 'partners',
        'meta_key'		=> 'partner_type',
        'meta_value'	=> 'presenting',
        'orderby'   => 'menu_order',
        'order' => 'ASC'
    );
    // query
    $loop = new WP_Query( $args );

    while ( $loop->have_posts() ) : $loop->the_post();

        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'partner-big' );
        $partner_link = get_field('partner_link');

    ?>

    <div class="partner presenting-partner">
            <a href="http://<?php echo $partner_link; ?>"><img src="<?php echo $image[0]; ?>" alt=""></a>
            <p><?php the_content(); ?></p>
    </div>

    <?php

    endwhile; wp_reset_query();

    ?>

</div>


<h2>Main Partner</h2>
<div class="partner-container">

<?php

// args
$args2 = array(
    'numberposts'	=> -1,
    'post_type'		=> 'partners',
    'meta_key'		=> 'partner_type',
    'meta_value'	=> 'main',
    'orderby'   => 'menu_order',
    'order' => 'ASC'
);
// query
$loop = new WP_Query( $args2 );

while ( $loop->have_posts() ) : $loop->the_post();

    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'parner-small' );
    $partner_link = get_field('partner_link');

?>

<div class="partner main-partner">
        <a href="http://<?php echo $partner_link; ?>"><img src="<?php echo $image[0]; ?>" alt=""></a>

</div>

<?php

endwhile; wp_reset_query();

?>

</div>


<h2>Partner</h2>
<div class="partner-container">

<?php

// args
$args3 = array(
    'numberposts'	=> -1,
    'post_type'		=> 'partners',
    'meta_key'		=> 'partner_type',
    'meta_value'	=> 'partner',
    'orderby'   => 'menu_order',
    'order' => 'ASC'
);
// query
$loop = new WP_Query( $args3 );

while ( $loop->have_posts() ) : $loop->the_post();

    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'partner-small' );
    $partner_link = get_field('partner_link');

?>

<div class="partner">
        <a href="http://<?php echo $partner_link; ?>"><img src="<?php echo $image[0]; ?>" alt=""></a>
</div>

<?php

endwhile; wp_reset_query();

?>

</div>