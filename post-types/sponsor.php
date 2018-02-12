<?php

function post_type_sponsor(){

	register_post_type('sponsor',
		array(
			'labels' => array(
				'name'               => "Sponsor",
				'singular_name'      => "Sponsor",
				'menu_name'          => "Sponsors",
				'all_items'          => "Sponsors",
				'add_new'            => "Add New",
				'add_new_item'       => "Add New Sponsor",
				'edit_item'          => "Edit Sponsor",
			    'new_item'           => "New Sponsor",
			    'view_item'          => "View",
			    'search_items'       => "Search Sponsors",
			    'not_found'          => "No Sponsors found",
			    'not_found_in_trash' => "No Sponsors found in Trash",
			    'parent_item_colon'  => ""
			),
			'description'         => "Sponsor",
			'menu_icon'           => "dashicons-universal-access-alt",
			'public'              => true,
			'publicly_queryable'  => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'menu_position'       => 55,//<-- Set back to 35 after testing
			'has_archive'         => false,
			'exclude_from_search' => false,
			'capability_type'     => 'post',
			'rewrite'             => array('slug'=>'sponsors','with_front'=>false),
			'hierarchical'        => false,
			'supports'            => array('title','editor','thumbnail')
		)
	);

} add_action( 'init', 'post_type_sponsor' );
