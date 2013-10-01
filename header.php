<!DOCTYPE html>
<html lang="en">

<head profile="http://gmpg.org/xfn/11">

	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
	
	<!-- Sass Bootstrap 3.0 -->
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/sass-bootstrap.css" type="text/css" media="screen" />

	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!-- Load Jquery into Wordpress -->
	<?php wp_enqueue_script('jquery'); ?>

	<?php wp_head(); ?>


</head>
<body>

<header>
	<h1><?php bloginfo('name'); ?></h1>	
</header>
