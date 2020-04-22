<?php

/*
Template Name: Insurance Main
Template Post Type: insurance
*/
?>

<?php get_header();?>


<!--- Insurance Header --->
<?php $image = get_field('banner_image'); ?>
<div id="insurance-header" class="container-fluid" style="background-image:url('<?php echo $image['url']; ?>')">
	<div class="container-fluid">
		<div class="container">
			<h1><?php the_field('banner_title'); ?></h1>
			<p><?php the_field('banner_text'); ?></p>
			<button type="button" class="btn btn-outline btn-lg">Get A Quote</button>
		</div>
	</div>
</div>

<!--- Personal Insurance Carosel --->
<div class="container-fluid">
	<?php
	$slider = get_field('slider');
	if ( !empty( $slider ) && has_category('personal')) {
		echo do_shortcode($slider);
	}
	?>
</div>



<!--- Main Content --->
<div id="insurance-content-container"class="container">
	<section class="page-wrap">
		<div class="row">
			<div class="col-md-3">
				<div class="wrapper">
				    <!-- Insurance Menu -->
					<?php
					if(has_category('personal')) {
  							wp_nav_menu( array(
  							'theme_location' 	=> 'personal-insurance-menu',
  							'depth'           	=> 2,
  							'container'     	=> 'div',
  							'container_class' 	=> 'tree',
  							 //'walker'			=> new Nfr_Menu_Walker,
  							) );

					} else(has_category('commercial')) {
						  wp_nav_menu( array(
						  'theme_location' 	=> 'commercial-insurance-menu',
						  'depth'           	=> 2,
						  'container'     	=> 'div',
						  'container_class' 	=> 'tree',
						   //'walker'			=> new Nfr_Menu_Walker,
					   ) )

				   } ?>
				</div>
			</div>
			<div class="col-md-9 insurance-content-right">
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


<!--- Insurance Footer --->
<?php $image = get_field('footer_image'); ?>
<div id="insurance-footer" class="container-fluid" style="background-image:url('<?php echo $image['url']; ?>')">
	<div class="container-fluid">
		<div class="row w-100">
			<div class="col-md-12">
				<h2>Ready To Get Started?</h2>
				<button type="button" class="btn btn-md">Get A Quote</button>
			</div>
			<div class="col-md-6">
				<p>Visit Our Contact Us Page...</p>
				<button type="button" class="btn btn-md">Contact Us</button>
			</div>
			<div class="col-md-6">
				<p>Or Talk To A Specialist</p>
				<button type="button" class="btn btn-md">Call Now</button>
			</div>
		</div>
		</div>
	</div>
</div>

<?php get_footer();?>
