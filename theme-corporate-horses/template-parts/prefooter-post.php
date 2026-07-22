<section class="prefooter">
	<div class="container">
		<?php
		$args = array(
			'cat' => 2,
			'posts_per_page' => 3,
			'post_status' => 'publish',
		);

		$query = new WP_Query($args);

		if ($query->have_posts()) {
			echo '<div class="posts-list-title">';
			echo '<h2>' . 'Читайте також' . '</h2>';
			echo '<a class="a-end" href="' . esc_url(get_category_link(2)) . '">Дивитись все</a>';
			echo '</div>';

			// Открываем контейнер для всех постов (вынесли из цикла)
			echo '<div class="prefooter-list-blocks">';

			while ($query->have_posts()) {
				$query->the_post();
				?>
				<article class="prefooter-post">
					<a class="post-tmb post-tmb-prefooter" href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail(); ?>
					</a>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<div class="block-link">
						<span><?php the_time('d F Y'); ?></span>
						<a class="a-end" href="<?php the_permalink(); ?>">Читати</a>
					</div>
				</article>
				<?php
			}

			// Закрываем контейнер
			echo '</div>';
		}
		wp_reset_postdata();
		?>
	</div>
</section>





