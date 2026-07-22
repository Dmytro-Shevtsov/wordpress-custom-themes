<?php get_header(); ?>
<main class="post-page">
	<section class="section-post-title">
		<div class="container">
			<div class="post-title-wr">
				<h1 class="post-title"><?php single_cat_title(); ?></h1>
			</div>  
		</div>
	</section>

	<section class="section-latest-posts">
		<div class="container">
				<?php if (have_posts()) : ?>
				<div class="latest-posts-list category-posts-list">
					<?php while (have_posts()) : the_post(); ?>
						<article class="latest-post">
							<a href="<?php the_permalink(); ?>">
								<?php if (has_post_thumbnail()) : ?>
									<div class="latest-post-img">
										<?php the_post_thumbnail('medium'); ?>
									</div>
								<?php endif; ?>
							</a>
							<div class="latest-post-content">
								<h3 class="latest-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<p class="latest-post-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 20, '  ...'); ?></p>
								<div class="latest-post-content-btm">
									<a href="<?php the_permalink(); ?>" class="latest-post-btn">
										<img src="<?php bloginfo('template_url'); ?>/images/icon/arrow-post.svg" alt="">
									</a>
									<span class="latest-post-date">
									<?php
									setlocale(LC_TIME, 'he_IL.UTF-8');
									echo strftime('%d %B %Y', get_the_time('U'));
									?>
									</span>
								</div>
							</div>
						</article>
					<?php endwhile; ?>
				</div>
				<?php else : ?>
				<?php endif; ?>
				
				<div class="cac-pagination">
					<?php
					echo paginate_links(array(
						'prev_text' => '‹',
						'next_text' => '›',
					));
					?>
				</div>

		</div>
	</section>
</main>

<?php get_template_part('template-parts/pre-footer'); ?>
<?php get_footer(); ?>


















