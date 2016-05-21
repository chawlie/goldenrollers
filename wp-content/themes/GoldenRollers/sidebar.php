<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<div class="medium-4 columns">
    <aside class="page-sidebar">
    	<?php do_action( 'foundationpress_before_sidebar' ); ?>
    	<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
    	<?php do_action( 'foundationpress_after_sidebar' ); ?>
    </aside>
</div>
