<?php




/* ----------------------------------------------------- */
/* Register Custom Post */
/* ----------------------------------------------------- */
	add_action( 'init', 'register_webdgallery_portfolio' );

	function register_webdgallery_portfolio() {
		$labels = array(
			'name' => __( 'Portfolio','webdgallery'),
			'singular_name' => __( 'Portfolio','webdgallery'),
			'add_new' => __( 'Add New','webdgallery' ),
			'add_new_item' => __( 'Add New Work','webdgallery' ),
			'edit_item' => __( 'Edit Work','webdgallery'),
			'new_item' => __( 'New Work','webdgallery'),
			'view_item' => __( 'View Work','webdgallery'),
			'search_items' => __( 'Search Portfolio','webdgallery'),
			'not_found' => __( 'No portfolio found','webdgallery'),
			'not_found_in_trash' => __( 'No works found in Trash','webdgallery'),
			'parent_item_colon' => __( 'Parent work:','webdgallery'),
			'menu_name' => __( 'Portfolio','webdgallery'),
		);

		$args = array(
			'labels' => $labels,
			'hierarchical' => false,
			'description' => 'Display your works by filters',
			'supports' => array( 'title', 'custom-fields', 'thumbnail' ),

			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'show_in_nav_menus' => false,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'has_archive' => true,
			'query_var' => true,
			'can_export' => true,
			'rewrite' => true,
			'capability_type' => 'post'
		);

		register_post_type( 'portfolio', $args );
	}
	
	
	
	
	
	
	
/* ----------------------------------------------------- */
/* Filter Taxonomy */
/* ----------------------------------------------------- */

	add_action( 'init', 'register_taxonomy_filters' );

	function register_taxonomy_filters() {
		$labels = array(
			'name' => __( 'Filters', 'webdgallery' ),
			'singular_name' => __( 'Filter', 'webdgallery' ),
			'search_items' => __( 'Search Filters', 'webdgallery' ),
			'popular_items' => __( 'Popular Filters', 'webdgallery' ),
			'all_items' => __( 'All Filters', 'webdgallery' ),
			'parent_item' => __( 'Parent Filter', 'webdgallery' ),
			'parent_item_colon' => __( 'Parent Filter:', 'webdgallery' ),
			'edit_item' => __( 'Edit Filter', 'webdgallery' ),
			'update_item' => __( 'Update Filter', 'webdgallery' ),
			'add_new_item' => __( 'Add New Filter', 'webdgallery' ),
			'new_item_name' => __( 'New Filter', 'webdgallery' ),
			'separate_items_with_commas' => __( 'Separate Filters with commas', 'webdgallery' ),
			'add_or_remove_items' => __( 'Add or remove Filters', 'webdgallery' ),
			'choose_from_most_used' => __( 'Choose from the most used Filters', 'webdgallery' ),
			'menu_name' => __( 'Filters', 'webdgallery' ),
		);

		$args = array(
			'labels' => $labels,
			'public' => true,
			'show_in_nav_menus' => false,
			'show_ui' => true,
			'show_tagcloud' => false,
			'hierarchical' => true,

			'rewrite' => true,
			'query_var' => true
		);

		register_taxonomy( 'filters', array('portfolio'), $args );
}



/*
* Adds terms from a custom taxonomy to post_class
*/
	add_filter( 'post_class', 'theme_t_wp_taxonomy_post_class', 10, 3 );
			function theme_t_wp_taxonomy_post_class( $classes, $class, $ID ) {
			$taxonomy = 'filters';
			$terms = get_the_terms( (int) $ID, $taxonomy );
			if( !empty( $terms ) ) {
				foreach( (array) $terms as $order => $term ) {
					if( !in_array( $term->slug, $classes ) ) {
					$classes[] = $term->slug;
					}
				}
			}
			return $classes;
		}
		
		






?>