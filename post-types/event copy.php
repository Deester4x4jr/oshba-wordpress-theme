<?php

function post_type_event(){

	register_post_type('event',
		array(
			'labels' => array(
				'name'               => "Event",
				'singular_name'      => "Event",
				'menu_name'          => "Events",
				'all_items'          => "Events",
				'add_new'            => "Add New",
				'add_new_item'       => "Add New Event",
				'edit_item'          => "Edit Event",
			    'new_item'           => "New Event",
			    'view_item'          => "View",
			    'search_items'       => "Search Events",
			    'not_found'          => "No Events found",
			    'not_found_in_trash' => "No Events found in Trash",
			    'parent_item_colon'  => ""
			),
			'description'         => "Event",
			'menu_icon'           => "dashicons-tickets",
			'public'              => true,
			'publicly_queryable'  => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'menu_position'       => 55,//<-- Set back to 35 after testing
			'has_archive'         => false,
			'exclude_from_search' => false,
			'capability_type'     => 'post',
			'rewrite'             => array('slug'=>'events','with_front'=>false),
			'hierarchical'        => false,
			'supports'            => array('title','editor','thumbnail')
		)
	);

} add_action( 'init', 'post_type_event' );
