<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
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

?>
			<?php astra_content_bottom(); ?>

			</div> <!-- ast-container -->

		</div><!-- #content -->

		<?php astra_content_after(); ?>

		<?php astra_footer_before(); ?>

		<?php astra_footer(); ?>
		<div id="footer">
			<div class="container">
				<div class="row footer-row-1">
					<div class="social-wrapper">
						<div class="social-icon"><a href="https://www.linkedin.com/company/clutchhealth" target="_blank"><i class="fa fa-linkedin-square"></i></a></div>
						<div class="social-icon"><a href="https://www.facebook.com/ClutchHealthInc/" target="_blank"><i class="fa fa-facebook"></i></a></div>
						<div class="social-icon"><a href="https://twitter.com/clutch_health" target="_blank"><i class="fa fa-twitter"></i></a></div>
						<div class="social-icon"><a href="https://www.instagram.com/clutch.health/" target="_blank"><i class="fa fa-instagram"></i></a></div>
					</div>
				</div>
				<div class="row footer-row-2">
					<div class="quick-link-wrapper">
						<div class="quick-link">Copyright © 2020 Clutch Health</div>
						<!-- <div class="quick-link"><a href="">COVID-19 Testing For Employers</a></div> -->
						<div class="quick-link"><a href="/terms-of-use/">Terms of Service</a></div>
						<div class="quick-link"><a href="/privacy-policy">Privacy Policy</a></div>
						<div class="quick-link"><a href="/wp-content/themes/clutch/img/Clutch Health HIPPA Notice.pdf" target="_blank">HIPAA Notice</a></div>
						<div class="quick-link"><a href="tel:844-429-4279" target="_blank">844-429-4279</a></div>
						<!-- <div class="quick-link"><a href="">News/Blog</a></div> -->
					</div>
					<div class="all-rights">
						<div class="quick-link mr-0">All Rights Reserved</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Modal -->
		<div class="modal fade" id="nav-menu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
				<div class="nav-grid-wrapper">
					<div class="nav-grid mobile-only mt-3 mb-5 text-center">
						<a href="tel:844-429-4279" style="font-size: 1.25em; color: white;" >844-429-4279</a>
					</div>
					<div class="nav-divider mobile-only"></div>
					<div class="nav-grid mobile-only my-3">
						<div class="shop-icons">
							<a href="/cart">
								<div class="notification"><span><?php echo $woocommerce->cart->cart_contents_count; ?></span></div>
								<?php echo file_get_contents("wp-content/themes/clutch/dist/img/cart.svg"); ?>
							</a>
							<a href="/my-account">
								<?php echo file_get_contents("wp-content/themes/clutch/dist/img/account-01.svg"); ?>
							</a>
						</div>
					</div>
					<div class="nav-divider mobile-only"></div>
					<div class="nav-grid">
						<a href="/clutch-difference" class="menu-item"><h2>About Clutch</h1></a>
						<div class="menu-items">
							<ul class="list-unstyled">
								<li><a href="/clutch-difference" class="menu-item">The Clutch Difference</a></li>
								<li><a href="/clutch-difference/#clutch_team" class="menu-item">Our Team</a></li>
							</ul>
						</div>
					</div>
					<div class="nav-divider"></div>
					<div class="nav-grid">
						<a href="/employers" class="menu-item"><h2>For Employers </h1></a>
						<div class="menu-items">
							<ul class="list-unstyled">
								<li><a href="/employers/#pharmacy-benefits" class="menu-item">Pharmacy Benefit Manager</a></li>
								<li><a href="/employers/#clutch-diagnostics" class="menu-item">Clutch Diagnostics</a></li>
								<li><a href="/employers/#clutch-digital" class="menu-item">Clutch Digital</a></li>
								<li><a href="/covid-19-testing" class="menu-item">covid-19 testing</a></li>
							</ul>
						</div>
					</div>
					<div class="nav-divider"></div>
					<div class="nav-grid pb-5">
						<a href="/members" class="menu-item"><h2>For Members</h1></a>
						<div class="menu-items">
							<ul class="list-unstyled">
								<li><a href="/members/#benefits" class="menu-item">clutch benefits</a></li>
								<li><a href="/members/#app" class="menu-item">the clutch app</a></li>
								<li><a href="#" class="menu-item">download rx card</a></li>
								<li><a href="/covid-19-testing" class="menu-item">covid-19 testing</a></li>

							</ul>
						</div>
						<div class="menu-btn-wrapper text-center"><a href="/contact" class="btn">contact us</a></div>
					</div>
				</div>
		    </div>
		  </div>
		</div>

		<?php astra_footer_after(); ?>

	</div><!-- #page -->

	<?php astra_body_bottom(); ?>

	<?php wp_footer(); ?>

	<script>

