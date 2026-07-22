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
			<div class="posts-list-blocks-wr">		
			<?php
			$child_categories = array(32, 13); // ID дочерних категорий

			foreach ($child_categories as $cat_id) :
				$args = array(
					'cat' => $cat_id,
					'posts_per_page' => 6,
					'post_status' => 'publish',
				);

				$query = new WP_Query($args);

				if ($query->have_posts()) :
					echo '<section class="posts-list-blocks">';
					echo '<div class="posts-list-title">';
					echo '<h2>' . esc_html(get_cat_name($cat_id)) . '</h2>';
					echo '<a class="a-end" href="' . esc_url(get_category_link($cat_id)) . '">Дивитись все</a>';
					echo '</div>';

					echo '<div class="posts-list">';

					while ($query->have_posts()) :
						$query->the_post();
						?>
						<article class="post">
							<a class="post-tmb" href="<?php the_permalink(); ?>">
								<?php 
								if (has_post_thumbnail()) {
									the_post_thumbnail();
								} else {
									echo '<img src="' . esc_url(get_template_directory_uri() . '/images/default-thumb.webp') . '" alt="Зображення за замовчуванням">';
								}
								?>
							</a>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<div class="block-link">
								<span><?php the_time('d F Y'); ?></span>
								<a class="a-end" href="<?php the_permalink(); ?>">Читати</a>
							</div>
						</article>
						<?php
					endwhile;

					echo '</div>';
					echo '</section>';
				endif;

				wp_reset_postdata();
			endforeach;
			?>
			</div>
			<?php get_template_part('template-parts/sidebar'); ?>
		</div>
	</main>
</div>

<?php get_template_part('template-parts/prefooter-post'); ?>

<?php get_footer(); ?>