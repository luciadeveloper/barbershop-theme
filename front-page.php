<?php
/**
 * Front page template
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package barbershop
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		
			<section id="hero-section" style="background-image:url( <?php echo get_the_post_thumbnail_url()?>)">
				<?php $hero = get_field('hero');	
				if( $hero ): ?>

				<div class="hero-text">
					<h1><?php echo $hero['title']; ?></h1>
					<p><?php echo $hero['subtitle']; ?></p>
					<a class="button anchor" href="<?php echo $hero['button']['url']; ?>"><?php echo $hero['button']['title']; ?></a>
				</div>
				<?php endif; ?>
			</section>
			
			<section id="intro-section" class="container wrapper has-hr">
				<?php $intro = get_field('intro');	
				if( $intro ): ?>
			
					<div class="span4">
						<?php $column1 = $intro['column1'];?>
						<img src="<?php echo $column1['icon']['url']; ?>" alt="<?php echo $column2['icon']['alt']; ?>" />
						<h3><?php echo $column1['title']; ?></h3>
						<p><?php echo $column1['text']; ?></p>
					</div>
					
					<div class="span4">
						<?php $column2 = $intro['column2'];?>
						<img src="<?php echo $column2['icon']['url']; ?>" alt="<?php echo $column2['icon']['alt']; ?>" />
						<h3><?php echo $column2['title']; ?></h3>
						<p><?php echo $column2['text']; ?></p>
					</div>
					
					<div class="span4">
						<?php $column3 = $intro['column3'];?>
						<img src="<?php echo $column3['icon']['url']; ?>" alt="<?php echo $column2['icon']['alt']; ?>" />
						<h3><?php echo $column3['title']; ?></h3>
						<p><?php echo $column3['text']; ?></p>
					</div>
			
				<?php endif; ?>
			</section>
		
			<section id="slider-section" class="has-hr">
				<?php $slider = get_field('slider');	
				if( $slider ): ?>
					
					<h2><?php echo $slider['title']; ?></h2>
					
					<?php $images = $slider['images'];
					$size = 'slider'; 
					
					if( $images ): ?>
					    <div class="owl-carousel owl-theme">
					        <?php foreach( $images as $image ): ?>
					        	<div class="item">
					            	<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
					            </div>
					        <?php endforeach; ?>
					    </div>
					<?php endif; ?>
				<?php endif; ?>
			</section>
		
			<section id="barbers-section" class="container has-hr">
				<?php $barbers = get_field('barbers');?>
				<h2><?php echo $barbers['title'] ?></h2>
				<div class=" wrapper">
				<?php $post_objects = $barbers['barbers'];
				if( $post_objects ): 
					foreach( $post_objects as $post):
						setup_postdata($post); ?>
						<div class="span4 barber">
							<?php the_post_thumbnail('');?>
							<h4><?php the_title();?></h4>
							<p class="small"><?php echo get_field('description');?></p>
							<span class="cross"></span>
							<p><span><?php _e( 'Years of experience', 'hr' ) ?></span> <?php echo get_field('years');?></p>
							<p><span><?php _e( 'Contact:', 'hr' ) ?></span><a class="mail" href="mailto:<?php echo get_field('email');?>"><?php echo get_field('email');?></a></p>
						</div>
						<?php wp_reset_postdata(); 
					endforeach;
			    endif; ?>
				</div>
			</section>
			
			<section id="products-section" class="container has-hr">
				<?php $products = get_field('products');?>
				<h2><?php echo $products['title'] ?></h2>

				<?php $ids = $products['products'];
				foreach ($ids as $id) {
					$idslist = $idslist.','.$id;
				}
				
				$shortcode = "[products orderby='date' ids='$idslist"."']";
				echo do_shortcode($shortcode); ?>
			</section>
			
			
			<?php if (get_field('show_newsletter_section')) {?>
				<section id="newsletter-section" class="container aligncenter">
					<h2><?php the_field('nl_section_title') ?></h2>
					<?php $shortcode = "[contact-form-7 id='185' title='newsletter']";
						echo do_shortcode($shortcode);?>
				</section>
			<?php } ?>
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
