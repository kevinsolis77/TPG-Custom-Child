<?php

function create_tpg_cpt() {

	// Insurance CPT

	$labels = array (
		'name' 						=> __('Insurance', 'Post Type General Name', 'insurance'),
		'singular_name' 			=> __('Insurance', 'Post Type General Name', 'insurance' ),
		'menu_name' 				=> __( 'Insurance', 'insurance' ),
		'name_admin_bar' 			=> __('Insurance', 'insurance' ),
		'archives' 					=> __('Insurance Archives', 'insurance' ),
		'attributes'				=> __('Insurance Attributes', 'insurance'),
		'parent_item_colon' 		=> __( 'Parent Insurance', 'insurance' ),
		'all_items' 				=> __('All Insurance', 'insurance' ),
		'add_new_item' 				=> __( 'Add New Insurance', 'insurance' ),
		'add_new' 					=> __( 'Add New', 'insurance' ),
		'new_item' 					=> __( 'New Insurance Page', 'insurance' ),
		'edit_item'             	=> __( 'Edit Item', 'insurance' ),
		'update_item'           	=> __( 'Update Item', 'insurance' ),
		'view_item'             	=> __( 'View Item', 'insurance' ),
		'view_items'            	=> __( 'View Items', 'insurance' ),
		'search_items'          	=> __( 'Search Item', 'insurance' ),
		'not_found'             	=> __( 'Not found', 'insurance' ),
		'not_found_in_trash'    	=> __( 'Not found in Trash', 'insurance' ),
		'featured_image'        	=> __( 'Featured Image', 'insurance' ),
		'set_featured_image'    	=> __( 'Set featured image', 'insurance' ),
		'remove_featured_image' 	=> __( 'Remove featured image', 'insurance' ),
		'use_featured_image'    	=> __( 'Use as featured image', 'insurance' ),
		'insert_into_item'      	=> __( 'Insert into item', 'insurance' ),
		'uploaded_to_this_item' 	=> __( 'Uploaded to this item', 'insurance' ),
		'items_list'            	=> __( 'Insurance list', 'insurance' ),
		'items_list_navigation' 	=> __( 'Insurance list navigation', 'insurance' ),
		'filter_items_list'     	=> __( 'Filter Insurance list', 'insurance' ),
	);
	$args = array(
		'label'                 => __( 'insurance', 'insurance' ),
		'description'           => __( 'For creating pages related to insurance', 'insurance' ),
		'labels'                => $labels,
		'menu_icon'				=> ( 'dashicons-shield' ),
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'author', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'rewrite'				=> array( 'slug' => 'insurance' )
	);
	register_post_type( 'insurance', $args );

	// Risk Management CPT

	$labels = array (
		'name' 						=> __('Risk', 'Post Type General Name', 'risk'),
		'singular_name' 			=> __('Risk', 'Post Type General Name', 'risk' ),
		'menu_name' 				=> __( 'Risk', 'risk' ),
		'name_admin_bar' 			=> __('Risk', 'risk' ),
		'archives' 					=> __('Risk Archives', 'risk' ),
		'attributes'				=> __('Risk Attributes', 'risk'),
		'parent_item_colon' 		=> __( 'Parent Risk', 'risk' ),
		'all_items' 				=> __('All Risk', 'risk' ),
		'add_new_item' 				=> __( 'Add New Risk', 'risk' ),
		'add_new' 					=> __( 'Add New', 'risk' ),
		'new_item' 					=> __( 'New Risk Page', 'risk' ),
		'edit_item'             	=> __( 'Edit Item', 'risk' ),
		'update_item'           	=> __( 'Update Item', 'risk' ),
		'view_item'             	=> __( 'View Item', 'risk' ),
		'view_items'            	=> __( 'View Items', 'risk' ),
		'search_items'          	=> __( 'Search Item', 'risk' ),
		'not_found'             	=> __( 'Not found', 'risk' ),
		'not_found_in_trash'    	=> __( 'Not found in Trash', 'risk' ),
		'featured_image'        	=> __( 'Featured Image', 'risk' ),
		'set_featured_image'    	=> __( 'Set featured image', 'risk' ),
		'remove_featured_image' 	=> __( 'Remove featured image', 'risk' ),
		'use_featured_image'    	=> __( 'Use as featured image', 'risk' ),
		'insert_into_item'      	=> __( 'Insert into item', 'risk' ),
		'uploaded_to_this_item' 	=> __( 'Uploaded to this item', 'risk' ),
		'items_list'            	=> __( 'Risk list', 'risk' ),
		'items_list_navigation'	 	=> __( 'Risk list navigation', 'risk' ),
		'filter_items_list'     	=> __( 'Filter Risk list', 'risk' ),
	);
	$args = array(
		'label'                 => __( 'risk', 'risk' ),
		'description'           => __( 'For creating pages related to risk management', 'risk' ),
		'labels'                => $labels,
		'menu_icon'				=> ( 'dashicons-hammer' ),
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'author', ),
		'taxonomies'            => array( 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'rewrite'				=> array( 'slug' => 'risk' )
	);
	register_post_type( 'risk', $args );

	// Payroll CPT

	$labels = array (
		'name' 									=> __('Payroll', 'Post Type General Name', 'payroll'),
		'singular_name' 				=> __('Payroll', 'Post Type General Name', 'payroll' ),
		'menu_name' 						=> __( 'Payroll', 'payroll' ),
		'name_admin_bar' 				=> __('Payroll', 'payroll' ),
		'archives' 							=> __('Payroll Archives', 'payroll' ),
		'attributes'						=> __('Payroll Attributes', 'payroll'),
		'parent_item_colon' 		=> __( 'Parent Payroll', 'payroll' ),
		'all_items' 						=> __('All Payroll', 'payroll' ),
		'add_new_item' 					=> __( 'Add New Payroll', 'payroll' ),
		'add_new' 							=> __( 'Add New', 'payroll' ),
		'new_item' 							=> __( 'New Payroll Page', 'payroll' ),
		'edit_item'             => __( 'Edit Item', 'payroll' ),
		'update_item'           => __( 'Update Item', 'payroll' ),
		'view_item'             => __( 'View Item', 'payroll' ),
		'view_items'            => __( 'View Items', 'payroll' ),
		'search_items'          => __( 'Search Item', 'payroll' ),
		'not_found'             => __( 'Not found', 'payroll' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'payroll' ),
		'featured_image'        => __( 'Featured Image', 'payroll' ),
		'set_featured_image'    => __( 'Set featured image', 'payroll' ),
		'remove_featured_image' => __( 'Remove featured image', 'payroll' ),
		'use_featured_image'    => __( 'Use as featured image', 'payroll' ),
		'insert_into_item'      => __( 'Insert into item', 'payroll' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'payroll' ),
		'items_list'            => __( 'Payroll list', 'payroll' ),
		'items_list_navigation' => __( 'Payroll list navigation', 'payroll' ),
		'filter_items_list'     => __( 'Filter Payroll list', 'payroll' ),
	);
	$args = array(
		'label'                 => __( 'payroll', 'payroll' ),
		'description'           => __( 'For creating pages related to payroll', 'payroll' ),
		'labels'                => $labels,
		'menu_icon'							=> ( 'dashicons-groups' ),
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'author', ),
		'taxonomies'            => array('post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'rewrite'								=> array( 'slug' => 'payroll' )
	);
	register_post_type( 'payroll', $args );

	// Human Resources CPT

	$labels = array (
		'name' 									=> __('Human Resources', 'Post Type General Name', 'human-resources'),
		'singular_name' 				=> __('Human Resources', 'Post Type General Name', 'human-resources' ),
		'menu_name' 						=> __( 'Human Resources', 'human-resources' ),
		'name_admin_bar' 				=> __('Human Resources', 'human-resources' ),
		'archives' 							=> __('Human Resources Archives', 'human-resources' ),
		'attributes'						=> __('Human Resources Attributes', 'human-resources'),
		'parent_item_colon' 		=> __( 'Parent Human Resources', 'human-resources' ),
		'all_items' 						=> __('All Human Resources', 'human-resources' ),
		'add_new_item' 					=> __( 'Add New Human Resources', 'human-resources' ),
		'add_new' 							=> __( 'Add New', 'human-resources' ),
		'new_item' 							=> __( 'New Human Resources Page', 'human-resources' ),
		'edit_item'             => __( 'Edit Item', 'human-resources' ),
		'update_item'           => __( 'Update Item', 'human-resources' ),
		'view_item'             => __( 'View Item', 'human-resources' ),
		'view_items'            => __( 'View Items', 'human-resources' ),
		'search_items'          => __( 'Search Item', 'human-resources' ),
		'not_found'             => __( 'Not found', 'human-resources' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'human-resources' ),
		'featured_image'        => __( 'Featured Image', 'human-resources' ),
		'set_featured_image'    => __( 'Set featured image', 'human-resources' ),
		'remove_featured_image' => __( 'Remove featured image', 'human-resources' ),
		'use_featured_image'    => __( 'Use as featured image', 'human-resources' ),
		'insert_into_item'      => __( 'Insert into item', 'human-resources' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'human-resources' ),
		'items_list'            => __( 'Human Resources list', 'human-resources' ),
		'items_list_navigation' => __( 'Human Resources list navigation', 'human-resources' ),
		'filter_items_list'     => __( 'Filter Human Resources', 'human-resources' ),
	);
	$args = array(
		'label'                 => __( 'human-resources', 'human-resources' ),
		'description'           => __( 'For creating pages related to human-resources', 'human-resources' ),
		'labels'                => $labels,
		'menu_icon'							=> ( 'dashicons-businesswoman' ),
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'author', ),
		'taxonomies'            => array( 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'rewrite'								=> array( 'slug' => 'human-resources' )
	);
	register_post_type( 'human-resources', $args );
}

add_action( 'init', 'create_tpg_cpt', 0);

//Rewrite rules for slug

function rewrite_tpg_cpt_flush() {
	create_tpg_cpt();
	flush_rewrite_rules();
}

register_activation_hook( __FILE__, 'rewrite_tpg_cpt_flush' );

// Add CPT's to taxonomy search

function namespace_add_custom_types( $query ) {
  if( (is_category() || is_tag()) && $query->is_archive() && empty( $query->query_vars['suppress_filters'] ) ) {
    $query->set( 'post_type', array(
     'post', 'insurance', 'risk', 'payroll', 'human-resources',
        ));
    }
    return $query;
}
add_filter( 'pre_get_posts', 'namespace_add_custom_types' );
