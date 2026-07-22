<?php get_header(); ?>
		<section class="slider">
			<?php echo do_shortcode('[metaslider id="15"]'); ?> 
		</section>
		<section class="services">
			<div class="container">
				<div class="row">
					<?php
					$id = 3; // номер категории
					$posts_about = new WP_Query(array('cat' => $id, 'posts_per_page' => 6, 'order' => 'DESC'));
					?>
					<?php if ( $posts_about->have_posts() ) : ?>
					<?php while ( $posts_about->have_posts() ) : $posts_about->the_post(); ?>
					<div class="col-lg-4 col-sm-6 col-post">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						<a class="col-post-zag" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<p class="col-post-cit"><?php the_excerpt(); ?></p>
						
						<?php if(get_locale() == 'ru_RU') { ?>
						<a class="col-post-btn" href="<?php the_permalink(); ?>">подробнее<span></span></a>		
						<?php } ?>
						<?php if(get_locale() == 'uk') { ?>
						<a class="col-post-btn" href="<?php the_permalink(); ?>">Детальніше<span></span></a>
						<?php } ?>
					</div>
					<?php endwhile; ?>
					<?php else: ?>
					<?php endif; ?>
				</div>
			</div>
		</section>	
		<section class="kompany">
			<div class="container">
				<div class="row">
					<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
					<div class="col-lg-12">
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div>
					<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</section>
<?php get_footer(); ?>