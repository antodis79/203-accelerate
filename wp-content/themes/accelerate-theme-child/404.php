<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		<div class="error-page">
			<img src="http://localhost/accelerate/wp-content/uploads/2023/04/labrador-404-6477052.jpeg">
			<div class="error-message">
					<h3>Whoops, something went wrong while I was sleeping....</h3>
					<p>Sorry, this page no longer exists, never existed or has been moved.</p>
					<p>Feel free to take a look at our <a href="http://localhost/accelerate/blog/"><span class="error-link">blog</span></a> or some of our featured <a href="http://localhost/accelerate/case-studies/"><span class="error-link">work</span></a>.</p>
				</div>
		
		</div>
		</div><!-- .main-content -->

	</div><!-- #primary -->

	<?php get_footer(); ?>