<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package davidparsonstheme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php printf( esc_html__( 'You can also find me on %1$s, %2$s and %3$s.', 'davidparsonstheme' ), '<a href="https://twitter.com/dpjustice" target="_blank">Twitter</a>', '<a href="https://github.com/dpjustice" rel="designer" target="_blank">Github</a>', '<a href="https://www.linkedin.com/in/david-parsons-391a6a71/" target="_blank">LinkedIn</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
