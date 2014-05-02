<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UF CLAS Stories
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'ufclas-stories' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'ufclas-stories' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'ufclas-stories' ), 'UF CLAS Stories', '<a href="http://it.clas.ufl.edu/" rel="designer">Priscilla Chapman (CLAS IT)</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
