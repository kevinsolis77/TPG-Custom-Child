<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>



	<div id="main-footer" class="container-fluid">

		<div id="footer-before" class="row">

			<div class="col-md-2">
				<?php dynamic_sidebar( 'footer_area_one' ); ?>
			</div><!--col end -->
			<div class="col-md-2">
				<?php dynamic_sidebar( 'footer_area_two' ); ?>
			</div><!--col end -->

			<div id="footer-locations" class="col">
				<?php dynamic_sidebar( 'footer_area_three' ); ?>
			</div><!--col end -->

		</div><!-- row end -->

		<div class="row" id="footer-after">

			<div class="col-sm">
						<p class="text-center">COPYRIGHT &copy; 2020 – <?php echo date('Y'); ?> All Rights Reserved</p>
			</div>
			<div class="col-sm">
						<p class="text-center">CA License #: OH31766 </p><!-- widget text area for license info -->
			</div>
			<div class="col-sm">
						<div class="container"><!-- widget area for social icons -->
							<?php dynamic_sidebar( 'site_info_social' ); ?>
						</div>
			</div>
		</div><!-- row end -->

	</div><!-- container end -->



</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
