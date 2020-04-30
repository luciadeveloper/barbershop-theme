<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package barbershop
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="Description" content="Barber shop. CUT & SHAVE for GENTELMEN">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'barbershop' ); ?></a>

	<header id="masthead" class="site-header">
		
		<!--<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$barbershop_description = get_bloginfo( 'description', 'display' );
			if ( $barbershop_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $barbershop_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div>
		<!-- .site-branding -->
		<?php 
			if(	wp_is_mobile()) {
				?>
				 <img src="/wp-content/uploads/logo.svg" alt="logo">
				<?php
			}
			
		?>
		<nav id="site-navigation" class="main-navigation container">
			<!--<button class="menu-toggle hamburger" aria-controls="primary-menu" aria-expanded="false">
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
			</button>-->
		
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
