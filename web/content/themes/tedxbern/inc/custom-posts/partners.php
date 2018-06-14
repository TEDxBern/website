<?php
// Register Custom Post Type
function custom_post_partner() {

	$labels = array(
		'name'                  => _x( 'Partners', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Partner', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Partners', 'text_domain' ),
		'name_admin_bar'        => __( 'Partner', 'text_domain' ),
		'archives'              => __( 'Partner Archives', 'text_domain' ),
		'attributes'            => __( 'Partner Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Partner:', 'text_domain' ),
		'all_items'             => __( 'All Partners', 'text_domain' ),
		'add_new_item'          => __( 'Add New Partner', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Partner', 'text_domain' ),
		'edit_item'             => __( 'Edit Partner', 'text_domain' ),
		'update_item'           => __( 'Update Partner', 'text_domain' ),
		'view_item'             => __( 'View Partner', 'text_domain' ),
		'view_items'            => __( 'View Partners', 'text_domain' ),
		'search_items'          => __( 'Search Partner', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into partner', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this partner', 'text_domain' ),
		'items_list'            => __( 'Partners list', 'text_domain' ),
		'items_list_navigation' => __( 'Partners list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter partners list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Partner', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-awards',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'partners', $args );

}
add_action( 'init', 'custom_post_partner', 0 );

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_partner-link',
		'title' => 'Partner Link',
		'fields' => array (
			array (
				'key' => 'field_5af48f1e95ab6',
				'label' => 'Link',
				'name' => 'partner_link',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'partners',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
    ));
    register_field_group(array (
		'id' => 'acf_partner-types',
		'title' => 'Partner Types',
		'fields' => array (
			array (
				'key' => 'field_5af499d25e015',
				'label' => 'Type',
				'name' => 'partner_type',
				'type' => 'radio',
				'choices' => array (
					'presenting' => 'Presenting Partner',
					'main' => 'Main Partner',
                    'partner' => 'Partner',
                    'friends' => 'Friends',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => '',
				'layout' => 'vertical',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'partners',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'side',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}



?>