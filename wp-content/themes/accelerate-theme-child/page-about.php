<?php
/**
 * The template for displaying about pages
 *
 * This is the template that displays about pages
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-intro">
		<div class="about-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<p>Accelerate is a strategy and marketing agency located in the heart of NYC. Our
					goal is to build businesses by making our clients visible and making their
					customers smile.</p>
					<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
</div>
		<div class="our-services">
			<h3>Our services</h3>
			<p>We take pride in our clients and the content we create for them.<br>
			Here's a brief overview of our offered services.</p>
		</div>
		<div class="services-container">
			<img src="http://localhost/accelerate/wp-content/uploads/2023/03/bullseye.png" alt="bullseye">
				<div class="text-right">
					<h3>Content Strategy</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.</p>
				</div>
		</div>
		<div class="services-container">
			<img src="http://localhost/accelerate/wp-content/uploads/2023/03/atom.png" alt="atom">
				<div class="text-left">
					<h3>Influencer Mapping</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				</div>
		</div>
		<div class="services-container">
			<img src="http://localhost/accelerate/wp-content/uploads/2023/03/like.png" alt="like">
				<div class="text-right">
					<h3>Social Media Strategy</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
		</div>
		<div class="services-container">
			<div class="text-left">
				<h3>Design and Development</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
			</div>
			<img src="http://localhost/accelerate/wp-content/uploads/2023/03/design.png" alt="design">
		</div>
		<div class="button-container">
			<h3 id="button-text">Interested in working with us?</h3>
				<a class="button" href="http://localhost/accelerate/contact-us/">Contact us</a>
		</div>





<?php get_footer(); ?>
