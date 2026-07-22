<?php get_header(); ?>
	<div class="container-wite wite-content">
		<div class="container-content">
			<div class="content-news">
				<h1><?php single_cat_title(); ?></h1>
				<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
				<div class="post-news">
					<div class="post-img">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					</div>
					<div class="post-cit">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<p class="ot-cit"><?php echo get_post_meta($post->ID, 'opis', true); ?></p>
						<?php the_excerpt(); ?>
					</div>
				</div>
				<?php endwhile; ?>
				<?php endif; ?>
				<div class="navi"><?php wp_pagenavi(); ?></div>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>