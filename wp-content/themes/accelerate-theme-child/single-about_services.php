<?php

/**
* Template Name: Single About Service
* 
* The template for displaying a single about service. 
*
* @package WordPress
* @subpackage Accelerate Marketing
* @since Accelerate Marketing 2.0
*/



get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">

            
<?php while ( have_posts() ) : the_post();	
	$title = get_field('service_title');
	$graphic = get_field('graphic');
	$size = "thumbnail"; ?>
	

	<article class="about-services">
		<aside class="about-services-sidebar">
			<h5><?php echo $title; ?></h5>
			<h6><?php the_content(); ?></h6>
		</aside>

		<div class="about-services-images">
		<?php if($graphic) {
			echo wp_get_attachment_image( $graphic, $size);
		} ?>
		</div>

	</article>
<?php endwhile; ?>
		</div>
		<!-- .main-content -->


	</div><!-- #primary -->

<?php get_footer(); ?>

