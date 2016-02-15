<?php
/*
Template Name: Front
*/
get_header(); ?>

<header class="hero">
	<div class="row">
		<div class="logo">
			<img src="<?php echo get_bloginfo('template_directory');?>/assets/images/golden_rollers_logo.png" alt="Golden Rollers" title="Golden Rollers">
		</div>
	</div>
</header>
<section>
	<div class="row">
		<div class="small-12 medium-12 columns">
			<div class="featured-content-container bg-yellow clearfix neg-top-margin">
				<div class="featured-content left">
					<h1>The Golden Rollers Program</h1>
					<p>is a collaboration between the Ghisallo Cycling Initiative and the Conley-Guerrero Senior Activity Center in East Austin that provides an opportunity for adults aged 50 and older to engage in low-impact, bicycle-based recreation, exploration, and transportation. The program uses three-wheeled adult trikes to enable riders of all skill levels to cycle the Boggy Creek Trail system and the Pedernales protected bikeway, which connect to neighborhood amenities like the Rosewood and Metz Recreation Centers, the Butler Hike-and-Bike trail, and an HEB grocery store.</p>
				</div>
				<div class="featured-content-image right" style="background-image: url(<?php echo get_bloginfo('template_directory');?>/assets/images/home-featured-01.jpg);">
				</div>
			</div>
		</div>
		<h2 class="floating-headline">Never too old to roll</h2>
		<div class="small-12 medium-12 columns">
			<div class="featured-content-container bg-yellow clearfix">
				<div class="featured-content right">
					<h1>Seniors at Conley-Guerrero</h1>
					<p>attend an orientation class where they are tested for hand and leg strength and balance, provided classroom instruction, and given the opportunity to practice starting, stopping, turning, and obstacle avoidance. Participants can then attend trail rides led by instructors, center staff, and community members. Currently, there are eight trikes available, as well as an two traditional bicycles so a staff member or volunteer can ride along with the Rollers. Helmets, pumps, and basic tools are also available for general upkeep and maintenance of the trikes.</p>
				</div>
				<div class="featured-content-image right" style="background-image: url(<?php echo get_bloginfo('template_directory');?>/assets/images/home-featured-02.jpg);">
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
