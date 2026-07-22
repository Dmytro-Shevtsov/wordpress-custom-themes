<?php get_header(); ?>
	<section class="services">
		<div class="container">
			<div class="article-wr">
				<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
				<div class="article-bl">
					<div class="article-title">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</div>
					<div class="article-desc"><?php the_excerpt(); ?></div>
					<div class="article-btn">
						<a href="<?php the_permalink(); ?>">
						<?php if(get_locale() == 'ru_RU') { ?>читать полностью...<?php } ?>
						<?php if(get_locale() == 'uk') { ?>читати повністю...<?php } ?>
						</a>
					</div>
				</div>
				<?php endwhile; ?>
				<?php endif; ?> 
			</div>
		</div>
	</section>
<?php get_footer(); ?>