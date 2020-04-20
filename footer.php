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


<div class="wrapper" id="wrapper-footer">

	<div class="container-fluid">

		<div class="row">

			<div class="col-md-3">
				<?php dynamic_sidebar( 'footer_area_one' ); ?>
			</div><!--col end -->
			<div class="col-md-3">
				<?php dynamic_sidebar( 'footer_area_two' ); ?>
			</div><!--col end -->
			<div class="col-md-6">
				<?php dynamic_sidebar( 'footer_area_three' ); ?>
			</div><!--col end -->

		</div><!-- row end -->

		<div class="row" id="site-footer">

			<div class="col-md-12">
				<footer>

					<div class="site-info">
						<p>COPYRIGHT &copy; 2020 – <?php echo date('Y'); ?></p>
						<p>CA License #:OH31766 </p><!-- widget text area for license info -->
						<div class="container"><!-- widget area for social icons -->
							<?php dynamic_sidebar( 'site_info_social' ); ?>
						</div>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->
			</div><!--col end -->
		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
