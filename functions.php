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
	Add Featured Image Support
*********************************************/


	add_theme_support( 'post-thumbnails' );




/* ******************************************
	Add Post Format Support
*********************************************/

	add_theme_support( 'post-formats',array('image','quote','video','audio','chat','gallery','aside','link') );



?>