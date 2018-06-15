<?php
/**
 * tedxbern Theme Customizer
 *
 * @package tedxbern
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function tedxbern_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'tedxbern_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'tedxbern_customize_partial_blogdescription',
		) );
    }
    
    // Social Media ------------------------------------------- //
 	$wp_customize->add_section( 'tedx_social_section' , array(
        'title'       => __( 'Social Media', 'tedx' ),
        'priority'    => 100,
    ) );

    // Twitter
   $wp_customize->add_setting( 'social_twitter');

   $wp_customize->add_control( 'social_twitter', array(
       'label'        => __( 'Twitter', 'tedx' ),
       'section'    => 'tedx_social_section',
       'settings'   => 'social_twitter',
       'type'     => 'text',
   ) );

   // Facebook
   $wp_customize->add_setting( 'social_facebook');

    $wp_customize->add_control( 'social_facebook', array(
        'label'        => __( 'Facebook', 'tedx' ),
        'section'    => 'tedx_social_section',
        'settings'   => 'social_facebook',
        'type'     => 'text',
    ) );

   // instagram
   $wp_customize->add_setting( 'social_instagram');

    $wp_customize->add_control( 'social_instagram', array(
        'label'        => __( 'Instagram', 'tedx' ),
        'section'    => 'tedx_social_section',
        'settings'   => 'social_instagram',
        'type'     => 'text',
    ) );
}
add_action( 'customize_register', 'tedxbern_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function tedxbern_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function tedxbern_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function tedxbern_customize_preview_js() {
	wp_enqueue_script( 'tedxbern-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'tedxbern_customize_preview_js' );

