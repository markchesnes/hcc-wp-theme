<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div class="row">
 *
 * @package 
 * @subpackage 
 * @since 
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<title>Hot Coffee Code</title>
	<meta http-equiv="content-type" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">	

	<link rel="profile" href="http://gmpg.org/xfn/11">
	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<?php wp_head(); ?>

</head>

<body>
	<div class="container">
		<div class="page">
			<div id="nameplate" class="row">
				<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<div class="col-md-3 logo">
					</div>
				</a>
				<div class="col-md-9">
					<div class="sitename">
						<h1><?php bloginfo( 'name' ); ?></h1>
						<h2><?php bloginfo( 'description' ); ?></h2>
					</div>
				</div>
			</div>