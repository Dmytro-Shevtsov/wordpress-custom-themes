	<section class="sidebar-vidget vesti-regions">
		<?php
		$args = array(
			'cat' => 24,
			'posts_per_page' => 4,
			'post_status' => 'publish',
		);

		$query = new WP_Query($args);

		if ($query->have_posts()) {
			echo '<h3 class="title-vidget">' . get_cat_name(24) . '</h3>';

			// Открываем контейнер для всех постов (вынесли из цикла)
			echo '<div class="vidget">';

			while ($query->have_posts()) {
				$query->the_post();
				?>
				<article class="vidget-cat-post">
					<div class="vidget-post">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</div>
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
	</section>