<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<footer class="page-footer" id="footer">
			<div class="footer-container">
				<div class="row">
					<div class="medium-5 columns">
						<div class="site-by">
							<div class="ghisallo-logo">
								<a href="http://ghisallo.org/"><img src="<?php echo get_bloginfo('template_directory');?>/assets/images/ghisallo_cycling_initiative.png" alt="Ghisallo Cycling Initiative" title="Ghisallo Cycling Initiative"></a>
							</div>
							<div class="copyright">
								All rights reserved Copyright© 2016
							</div>
						</div>
					</div>
					<div class="medium-7 columns text-right">
						<div class="footer-links">
							<a href=""><span class="footer-btn button">Volunteer</span></a>
							<a href=""><span class="footer-btn button">Donate</span></a>
							<a href="https://www.facebook.com/GoldenRollers/"><span class="button social-btn facebook"></span></a>
							<a href="https://www.instagram.com/goldenrollers/"><span class="button social-btn instagram"></span></a>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
