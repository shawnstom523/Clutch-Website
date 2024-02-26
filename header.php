<?php
/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $woocommerce;

?><!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
<?php astra_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.typekit.net/zru5ihm.css">
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
<link rel="stylesheet" href="/wp-content/themes/clutch/dist/animate.css">
<script src="/wp-content/themes/clutch/js/wow.min.js"></script>



<?php wp_head(); ?>
<?php astra_head_bottom(); ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5TVB4RN');</script>
<!-- End Google Tag Manager -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-99299269-22"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-99299269-22');
</script>

</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5TVB4RN"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
<?php astra_body_top(); ?>
<?php wp_body_open(); ?>
<div
	<?php
	echo astra_attr(
		'site',
		array(
			'id'    => 'page',
			'class' => 'hfeed site',
		)
	);
	?>
>
	<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?></a>

	<?php astra_header_before(); ?>

	<?php astra_header(); ?>

	<nav class="navbar">
		  <a class="navbar-brand" href="/">
		   	 <img src="/wp-content/themes/clutch/img/clutch-logo.svg" alt="">
		  </a>
		  <div class="nav-right">
		  	<div class="shop-icons">
				<a href="/cart">
					<div class="notification"><span><?php echo $woocommerce->cart->cart_contents_count; ?></span></div>
					<?php echo file_get_contents("wp-content/themes/clutch/dist/img/cart.svg"); ?>
				</a>
				<a href="/my-account">
					<?php echo file_get_contents("wp-content/themes/clutch/dist/img/account-01.svg"); ?>
				</a>
			</div>
		  	<div class="contact-title mx-3"><a href="/contact">CONTACT US</a></div>
			<div class="contact-title mx-3"><a href="tel:844-429-4279">844-429-4279</a></div>
			<div class="nav-btn-wrapper"><a href="/card/" style="text-transform: none;" class="btn">GET FREE Rx CARD</a></div>
			<div class="nav-divider"></div>
			<div class="hamburger-menu " data-toggle="modal" data-target="#nav-menu">
				<span class="line-1"></span>
				<span class="line-2"></span>
				<span class="line-3"></span>
			</div>
		  </div>
	</nav>

	<?php astra_header_after(); ?>

	<?php astra_content_before(); ?>

	<div id="content" class="site-content">

		<div class="ast-container">

		<?php astra_content_top(); ?>
