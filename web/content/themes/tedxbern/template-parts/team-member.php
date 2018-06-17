<div class="member-container">

    <?php

    $loop = new WP_Query( array( 'post_type' => 'team_members', 'orderby'   => 'menu_order', 'order' => 'ASC', 'numberposts'	=> -1, ) );

    while ( $loop->have_posts() ) : $loop->the_post();

        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'team' );
        $member_contact = get_field('member_contact');
        $job_position = get_field('job_position');
        $orientation;

        list($width, $height) = getimagesize($image[0]);
            if ($width === $height || $width > $height) {
                // Landscape
                $orientation = 'landscape';
            } else {
                // Portrait or Square
                $orientation = 'portrait';
            }

    ?>

    <div class="member">
        <div class="image-container">
            <img class="<?php echo $orientation; ?>" src="<?php echo $image[0]; ?>" alt="">
        </div>
        <div class="member-content">
            <h3>
                <?php the_title(); ?>
                <a href="mailto:<?php echo $member_contact; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path class="envelope" d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" fill="#e62b1e"/>
                        <path d="M0 0h24v24H0z" fill="none"/>
                    </svg>
                </a>
            </h3>
            <span><?php echo $job_position; ?></span>
            <p><?php the_content(); ?></p>
        </div>
    </div>

    <?php

    endwhile; wp_reset_query();

    ?>

</div>
