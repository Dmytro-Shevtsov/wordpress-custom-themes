<?php get_header(); ?>
	<section class="services">
		<div class="container">
			<div class="services-wr">
				<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
			
				<div class="services-in">
					<div class="services-img">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					</div>
					<div class="services-main">
						<div class="services-title"><?php the_title(); ?></div>
						<div class="services-desc"><?php the_excerpt(); ?></div>
					</div>
					<div class="services-btn">
						<a href="<?php the_permalink(); ?>">
						<?php if(get_locale() == 'ru_RU') { ?>подробней<?php } ?>
						<?php if(get_locale() == 'uk') { ?>подробиці<?php } ?>
						</a>
					</div>
				</div>
				
				<?php endwhile; ?>
				<?php endif; ?> 
			</div>
		</div>
	</section>
<?php get_footer(); ?>