<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage mytheme
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="wrapper">
		<div class="wrapper-1">
			<header class="header">
				<div class="container">
					<div class="logo">
						<a href="index.php"><img src="<?php echo get_template_directory_uri().'/assets/images/logo.png'; ?>" alt="Logo"></a>
					</div>
					<div class="navigationbar">
						<nav>
							<?php wp_nav_menu(array('theme_location'=>'primary')); ?>
						</nav>
					</div>
				</div>
			</header>
			<main class="main">
				
