<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package TDVids
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="row"><!-- Foundation .row start -->
			<div class="small-12 columns"><!-- Foundation .columns start -->

				<div class="site-info">
					<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'tdvids' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'tdvids' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<?php printf( __( 'Theme: %1$s by %2$s.', 'tdvids' ), 'TDVids', '<a href="http://lancekey.com" rel="designer">Gene Kobilansky</a>' ); ?>
				</div><!-- .site-info -->

				</div><!-- Foundation .columns end -->
		</div><!-- Foundation .row end -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<!-- close the off-canvas menu -->
	<a class="exit-off-canvas"></a>

		</div><!-- .inner-wrap -->
</div><!-- .off-canvas-wrap -->

<?php wp_footer(); ?>

</body>
</html>
