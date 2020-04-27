<?php

/*
Template Name: Payroll Main
Template Post Type: payroll
*/
?>

<?php get_header();?>


<!--- Payroll Header --->
<?php $image = get_field('banner_image'); ?>
<div id="payroll-header" class="container-fluid" style="background-image:url('<?php echo $image['url']; ?>')">
	<div class="container-fluid">
		<div class="container">
			<h1><?php the_field('banner_title'); ?></h1>
			<p><?php the_field('banner_text'); ?></p>
			<button type="button" class="btn btn-outline-success btn-lg">Request Demo</button>
		</div>
	</div>
</div>




<!--- Main Content --->
		<div id="payroll-content-container"class="container">
			<section class="page-wrap">
				<div class="row">
				<div class="col-3">
					<div class="wrapper">
					    <!-- Payroll Menu -->
							<div class="">
						<div class="col-md-4">
							<!-- Prinf Sidebar Menu Payroll -->
			<?php dynamic_sidebar( 'sidebar-payroll' ); ?>
			</div>
							</div>
					</div>
				</div>
				<div class="col-9 payroll-content-right">
					<?php the_field('content_right'); ?>
				</div>
			</div>
		</section>
		<section class="content-main">
			<div class="row">
				<div class="col-sm-12">
					<?php
					// Start the loop.
					while ( have_posts() ) : the_post();

						// Include the page content template.
						get_template_part( 'loop-templates/content', 'single' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					// End the loop.
					endwhile;
					?>

				</div>

			</div>
		</section>
	</div>
</div>

<!--- Payroll Footer --->
<?php $image = get_field('footer_image'); ?>
<div id="payroll-footer" class="container-fluid" style="background-image:url('<?php echo $image['url']; ?>')">
	<div class="container-fluid">
		<div class="container">
			<h1><?php the_field('footer_title'); ?></h1>
			<p><?php the_field('footer_text'); ?></p>
			<button type="button" class="btn btn-success btn-lg">Schedule Live Demo</button>
		</div>
	</div>
</div>

<?php get_footer();?>
