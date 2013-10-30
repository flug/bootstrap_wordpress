<?php 

/* A file for the functions */


/* ******************************************
	Include all of the custom functionality
*********************************************/


	include('includes/post_format_meta_boxes.php');
	include('includes/custom_post_types.php');
	include('includes/recent_portfolio_widget.php');
	include('includes/shortcodes.php');



/* ******************************************
	Load all javascipt files
*********************************************/

function themetacular_load_js() {

	// Load jQuery
	wp_enqueue_script('jquery');
}




/* ******************************************
	Define Header/Main menu area
*********************************************/

	register_nav_menu('header_menu','The menu for the header/main menu of the website.');

/* ******************************************
	Register the apperaence menus
*********************************************/

	// add_theme_support('menu');




/* ******************************************
	Add Featured Image Support
*********************************************/


	add_theme_support( 'post-thumbnails' );




/* ******************************************
	Add Post Format Support
*********************************************/

	add_theme_support( 'post-formats',array('image','quote','video','audio','chat','gallery','aside','link') );



/* ******************************************
	Silly 404 Excuse
*********************************************/

function exclamation() {

	$excuse_array = ['By the hammer of Thor!','Well bake my potatoes!','By Jango!','Twist my nipple nuts and send me to Alaska'];
	$array_size = count($excuse_array) -1;
	$random_number = rand(0,$array_size);

	echo $excuse_array[$random_number];
}

function exclamation_descrtiption() {

	$excuse_array = ['By the hammer of Thor!','Well bake my potatoes!','By Jango!','Twist my nipple nuts and send me to Alaska'];
	$array_size = count($excuse_array) -1;
	$random_number = rand(0,$array_size);

	echo $excuse_array[$random_number];
}








?>