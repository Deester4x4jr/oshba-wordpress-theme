<?php

function post_type_form(){

	register_post_type('form',
		array(
			'labels' => array(
				'name'               => "Form",
				'singular_name'      => "Form",
				'menu_name'          => "Forms",
				'all_items'          => "Forms",
				'add_new'            => "Add New",
				'add_new_item'       => "Add New Form",
				'edit_item'          => "Edit Form",
			    'new_item'           => "New Form",
			    'view_item'          => "View",
			    'search_items'       => "Search Forms",
			    'not_found'          => "No Forms found",
			    'not_found_in_trash' => "No Forms found in Trash",
			    'parent_item_colon'  => ""
			),
			'description'         => "Form",
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
			'rewrite'             => array('slug'=>'forms','with_front'=>false),
			'hierarchical'        => false,
			'supports'            => array('title','editor','thumbnail')
		)
	);

} // add_action( 'init', 'post_type_form' );
