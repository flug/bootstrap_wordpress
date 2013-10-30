<?php 


function portfolio() {

register_post_type('portfolio', array(
		'label' => 'Portfolio',
		'description' => 'This is were you can portfolio pieces',
		'public' => true,
		// 'taxonomies' => array('category', 'post_tag'), // this is IMPORTANT
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position'=> 5,
		'capability_type' => 'post',
		'hierarchical' => false,
				'rewrite' => array(
				'slug' => ''),
				'query_var' => true,
				'exclude_from_search' => false,
				'supports' => array('title',
									'editor',
									'custom-fields',
									'thumbnail',
									'author',
									'page-attributes',),

				'labels' => array (
	  				'add_new' => 'Add new item',
	  				'add_new_item' => 'Add New Notice',
	  				'edit' => 'Edit',
	  				'edit_item' => 'Edit Notice',
	  				'menu_name' => 'Portfolio',
	  				'name' => 'Portfolio notices',
	  				'new_item' => 'New Notice',
	  				'not_found' => 'No Notices Found',
	  				'not_found_in_trash' => 'No Notices Found in Trash',
	  				'parent' => 'Parent Notice',
	  				'search_items' => 'Search Notices',
	  				'singular_name' => 'Notice',
	  				'view' => 'View Notice',
	  				'view_item' => 'View Notice',
	  				'thumbnail' => 'add thumb', ),
					
				)

	);

}

add_action('init','portfolio', 0);




?>