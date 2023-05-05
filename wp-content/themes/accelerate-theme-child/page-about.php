<?php

/**
* Template Name: About Page
* 
* The template for displaying the About page. 
*
* @package WordPress
* @subpackage Accelerate Marketing
* @since Accelerate Marketing 2.0
*/

get_header(); ?>

<div id="primary" class="site-content">
	<div class="main-content" role="main"> 
		

	<article class="about-content">
		<h1>Accelerate is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</h1>
		<h2>OUR SERVICES</h2>
		<p>We take pride in our clients and the content we create for them. Here is a brief overview of our offered services.</p>
		<?php query_posts ('post_type=about_services'); ?>
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
		<?php wp_reset_query(); ?>
	</article>
	<aside>
				<h2>Interested in Working with Us?</h2>
				<a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
	</aside>

			
	</div><!-- .main-content -->
</div><!-- #primary -->

<?php get_footer(); ?>