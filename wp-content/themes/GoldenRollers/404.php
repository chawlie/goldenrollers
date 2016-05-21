<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div id="page" class="error-404">
	<header class="subpage-hero">
	    <div class="row">
	        <div class="logo">
	            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_bloginfo('template_directory');?>/assets/images/golden_rollers_logo.png" alt="Golden Rollers" title="Golden Rollers"></a>
	        </div>
	    </div>
	</header>

	<div class="row">
		<div class="small-12 columns text-center" role="main">
			<article>
				<header>
					<h1>Page Not Found</h1>
				</header>
				<div class="entry-content">
					<div class="error">
						<p>The page you are looking for might have been removed, had its name changed, or is temporarily unavailable. Try using the navigation above or visit our home page.</p>
						<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="button">Golden Rollers Home Page</a></p>
					</div>
				</div>
			</article>
		</div>
	</div>
</div>
<?php get_footer(); ?>
