<?php
// Custom Post Support
function zboom_custom_post(){
		register_post_type( 'slider',
			array(
				'labels' => array(
					'name' => __( 'Slider' ),
					'singular_name' => __( 'Slider' ),
					'add_new' => __( 'Add New' ),
					'add_new_item' => __( 'Add New Slider' ),
					'edit_item' => __( 'Edit Slider' ),
					'new_item' => __( 'New Slider' ),
					'view_item' => __( 'View Slider' ),
					'not_found' => __( 'Sorry, we couldn\'t find the Slider you are looking for.' )
				),
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => true,
			'menu_position' => 5,
			'menu_icon' => get_template_directory_uri().'/images/slider.png',
			'has_archive' => true,
			'hierarchical' => false, 
			'capability_type' => 'page',
			'rewrite' => array( 'slug' => 'Slider' ),
			'supports' => array( 'title', 'editor', 'thumbnail' )
			)
		);
		register_post_type( 'Service',
			array(
				'labels' => array(
					'name' => __( 'Service' ),
					'singular_name' => __( 'Service' ),
					'add_new' => __( 'Add New' ),
					'add_new_item' => __( 'Add New Service' ),
					'edit_item' => __( 'Edit Service' ),
					'new_item' => __( 'New Service' ),
					'view_item' => __( 'View Service' ),
					'not_found' => __( 'Sorry, we couldn\'t find the Service you are looking for.' )
				),
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => true,
			'menu_position' => 6,
			'menu_icon'=> 'http://localhost/alorchokh/wp-content/themes/zBoomMusic/images/settings.png',
			'has_archive' => true,
			'hierarchical' => false, 
			'capability_type' => 'page',
			'rewrite' => array( 'slug' => 'Service' ),
			'supports' => array( 'title', 'editor' )
			)
		);	
		
		register_post_type( 'gallery',
			array(
				'labels' => array(
					'name' => __( 'Gallery' ),
					'singular_name' => __( 'Gallery' ),
					'add_new' => __( 'Add New' ),
					'add_new_item' => __( 'Add New Gallery' ),
					'edit_item' => __( 'Edit Gallery' ),
					'new_item' => __( 'New Gallery' ),
					'view_item' => __( 'View Gallery' ),
					'not_found' => __( 'Sorry, we couldn\'t find the Gallery you are looking for.' )
				),
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => true,
			'menu_position' => 7,
			'menu_icon' => 'dashicons-admin-multisite',
			'has_archive' => true,
			'hierarchical' => false, 
			'capability_type' => 'page',
			'rewrite' => array( 'slug' => 'Gallery' ),
			'supports' => array( 'title', 'editor', 'thumbnail' )
			)
		);
}
add_action('after_setup_theme','zboom_custom_post');


?>