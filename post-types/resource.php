<?php

function post_type_resource(){

	register_post_type('resource',
		array(
			'labels' => array(
				'name'               => "Resource",
				'singular_name'      => "Resource",
				'menu_name'          => "Resources",
				'all_items'          => "Resources",
				'add_new'            => "Add New",
				'add_new_item'       => "Add New Resource",
				'edit_item'          => "Edit Resource",
			    'new_item'           => "New Resource",
			    'view_item'          => "View",
			    'search_items'       => "Search Resources",
			    'not_found'          => "No Resources found",
			    'not_found_in_trash' => "No Resources found in Trash",
			    'parent_item_colon'  => ""
			),
			'description'         => "Resource",
			'menu_icon'           => "dashicons-clipboard",
			'public'              => true,
			'publicly_queryable'  => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'menu_position'       => 55,//<-- Set back to 35 after testing
			'has_archive'         => false,
			'exclude_from_search' => false,
			'capability_type'     => 'post',
			'rewrite'             => array('slug'=>'resources','with_front'=>false),
			'hierarchical'        => false,
			'supports'            => array('title','editor','thumbnail')
		)
	);

} add_action( 'init', 'post_type_resource' );
