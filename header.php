<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	
	<link rel="icon" href="/wp-content/themes/ccjdev_at/assets/img/elements/favicon.png" type="image/png" sizes="16x16">
	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" 	 content="width=device-width, initial-scale=1">
	<meta name="description" content="Dallas Jamison and RaeJ Johnson are 
																		your Co-hosts and Executive Producers of 
																		Around Town; a TV talk show that highlights people, 
																		places and events Around Town but not limited to the 
																		St. Louis and surrounding metropolitan area.">
	<meta name="keywords" 	 content="Around Town, KDNL ABC30, St. Louis, Missouri, TV, late night,
																 		Dallas Jamison, RaeJ Johnson, business, entrepreneurs, Wednesdays, 
																 		small business, human interest stories, EntMedia3 Productions, 
																		Copyright 2016" />
	
	<script src="https://use.typekit.net/rfl0pna.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
	<?php wp_head(); ?>
</head>

<body>
	<a name="welcome"></a>
 	<div id="header">
		<img src="/wp-content/themes/ccjdev_at/assets/img/elements/logo.png" width="143" height="75" alt="Around Town with Dallas & RaeJ" />
		<div></div>
		<div id="header-showtimes">
			<h2 class="header-main">Showtimes</h2>
			<p>Wednesdays from 1:36 am - 2:07 am on KDNL ABC 30</p>
			<p>&quot;Around Town&quot; is a subsidiary of EntMedia3</p>
		</div>
		<div></div>
		<input type="button" value="Support Around Town" id="bttn-support_at" />
	</div>
<?php 
	wp_nav_menu( 
		array( 
			'menu' 					 	=> 'primary', 
			'menu_id' 			 	=> 'menu', 
			'menu_class'		 	=> '',
			'container_class' => 'menu-nav'
		)	
	);
?>
<div id="header-shadow">
	<div>&nbsp;</div>
	<div>&nbsp;</div>
	<div>&nbsp;</div>
</div>
<div id="container">