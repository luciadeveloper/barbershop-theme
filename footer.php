<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package barbershop
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer ">
		<div class="wrapper container">
			<div class="span2 aligncenter logo-footer">			
				
				 <img src="/wp-content/uploads/logo-footer.svg"  alt="logo">
			</div>
			<div class="span3">			
				
				<?php if ( is_active_sidebar( 'footer-column-2' ) ) : ?>
				
				<?php dynamic_sidebar( 'footer-column-2' ); ?>
				
				<?php endif; ?>
			</div>
			<div class="span2">			
				
				<?php if ( is_active_sidebar( 'footer-column-3' ) ) : ?>
				
				<?php dynamic_sidebar( 'footer-column-3' ); ?>
				
				<?php endif; ?>
			</div>
			<div class="span2">			
				
				<?php if ( is_active_sidebar( 'footer-column-4' ) ) : ?>
				
				<?php dynamic_sidebar( 'footer-column-4' ); ?>
				
				<?php endif; ?>
			</div>
	
			<div class="span2">			
				
				<?php if ( is_active_sidebar( 'footer-column-5' ) ) : ?>
				
				<?php dynamic_sidebar( 'footer-column-5' ); ?>
				
				<?php endif; ?>
			</div>

		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
