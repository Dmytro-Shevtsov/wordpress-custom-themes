<?php
if (is_front_page()) {
    get_template_part('template-parts/header', 'home');
} elseif (is_category()) {
    get_template_part('template-parts/header', 'category');
} else {
    get_template_part('template-parts/header');
}
?>

<div class="container">
	<main class="main-content">
		<div class="content-wr">
			<section class="posts-list-blocks-noviny">
				<?php if (have_posts()) : ?>
				<div class="posts-list-title">
					<h2><?php single_cat_title(); ?></h2>
				</div>
				<div class="posts-list-magazine">
					<?php while (have_posts()) : the_post(); ?>
					<article class="post">
						<a class="post-tmb-magazine" href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail(); ?>
						</a>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<div class="block-link">
							<span><?php the_time('d F Y'); ?></span>
							<a class="a-end" href="<?php the_permalink(); ?>">Читати</a>
						</div>
					</article>
					<?php endwhile; ?>
				</div>
				<!-- Постраничная навигация -->
				<div class="cat-pagination">
					<?php
					the_posts_pagination(array(
						'mid_size'  => 3,
						'prev_text' => '«',
						'next_text' => '»',
					));
					?>
				</div>

				<?php endif; ?>
			</section>
			<?php get_template_part('template-parts/sidebar'); ?>
		</div>


	</main>
</div>

<?php get_template_part('template-parts/prefooter-magazine'); ?>

<?php get_footer(); ?>