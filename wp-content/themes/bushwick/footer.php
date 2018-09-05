<?php
/**
 * The template for displaying the footer.
 *
 * @package Bushwick
 */
?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'bushwick_credits' ); ?>
			<p>
				<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'bushwick' ); ?>" rel="generator"><?php printf( __( '%s', 'bushwick' ), '' ); ?></a>
				<?php printf( __( 'Theme: %1$s %2$s', 'bushwick' ), 'Bushwick', '<a href="#" rel="designer"></a>' ); ?>
			</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

	<?php wp_footer(); ?>

</body>
</html>