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
					<h1><?php the_field('block_one_title'); ?></h1>
					<p><?php the_field('block_one_text'); ?></p>
				</div>
				<div class="featured-content-image right" style="background-image: url(<?php the_field('block_one_image'); ?>);">
				</div>
			</div>
		</div>
		<h2 class="floating-headline"><?php the_field('floating_title'); ?></h2>
		<div class="small-12 medium-12 columns">
			<div class="featured-content-container bg-yellow clearfix">
				<div class="featured-content right">
					<h1><?php the_field('block_two_title'); ?></h1>
					<p><?php the_field('block_two_text'); ?></p>
				</div>
				<div class="featured-content-image right" style="background-image: url(<?php the_field('block_two_image'); ?>);">
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
