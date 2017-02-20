<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CodeCode
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="profile" href="http://gmpg.org/xfn/11">

<!-- Nicholas: inserted from CodeCode head below updated file paths for WP -->
<link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-touch-icon-57x57.png"/>
<link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-touch-icon-60x60.png"/>
<link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-touch-icon-72x72.png"/>
<link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-touch-icon-76x76.png"/>
<link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-touch-icon-114x114.png"/>
<link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-touch-icon-120x120.png"/>
<link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-touch-icon-144x144.png"/>
<link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-touch-icon-152x152.png"/>
<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon-180x180.png"/>
<link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" sizes="32x32"/>
<link rel="icon" type="image/png" href="images/favicon/android-chrome-192x192.png" sizes="192x192"/>
<link rel="icon" type="image/png" href="images/favicon/favicon-16x16.png" sizes="16x16"/>
<link rel="manifest" href="images/favicon/manifest.json"/>
<link rel="mask-icon" href="images/favicon/safari-pinned-tab.svg" color="#5bbad5"/>
<link rel="shortcut icon" href="images/favicon/favicon.ico"/>
<meta name="msapplication-TileColor" content="#da532c"/>
<meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png"/>
<meta name="msapplication-config" content="images/favicon/browserconfig.xml"/>
<meta name="theme-color" content="#ffffff"/>
<!-- end CodeCode insert -->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="container">

		<header class="header">

<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>

		</header>

		<div id="content">
