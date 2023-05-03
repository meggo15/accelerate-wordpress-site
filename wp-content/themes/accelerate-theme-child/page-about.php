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
		
		<?php while ( have_posts() ) : the_post();	
			$graphic = get_field('graphic');
			$size = "full"; 
			$description = get_field ('service_description');
			$title = get_field ('service_title'); 
			?>

		<article class="about-services">
		<h1>Accelerate is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</h1>
		<h2>OUR SERVICES</h2>
		<?php the_content(); ?>	
		<h2><?php echo $title; ?></h2>
			<P><?php echo $description; ?></p>
			<?php the_content(); ?>	
		
			<div class="about-services-images">
		<?php if($graphic) {
			echo wp_get_attachment_image( $graphic, $size);
		} ?>
			</div>
		</article>
			<?php endwhile; // end of the loop. ?>
	</div><!-- .main-content -->
</div><!-- #primary -->

<?php get_footer(); ?>