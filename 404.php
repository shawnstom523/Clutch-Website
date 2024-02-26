<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>
<style>
div#content {
	background-image: url(/wp-content/themes/clutch/img/home-shape-2-bg.png);
    background-position: center;
    padding: 5%;
}
.navbar {
	background: #2f1d57;
}
#site-navigation {
	display: none;
}

section {
	display: flex;
	margin-top: 5em;
}

section div {
	flex: 0 1 50%;
}

.content img {
	width: 55%;
    top: 50%;
    left: 50%;
    position: relative;
    transform: translate(-50%, -50%);
    box-shadow: 0 0 25px grey;
}
</style>

<section class="content">
	<div>
		<h1 style="font-size: 120px">404</h1>
		<h2>The page you are looking for could not be found. You can use the button below to go to the homepage.</h2>
		<a class="btn" href="/">Go Home</a>
	</div>
	<div>
		<img src="https://clutch.health/wp-content/uploads/2020/09/Icon.png"/>
	</div>
</section>

<?php get_footer(); ?>
