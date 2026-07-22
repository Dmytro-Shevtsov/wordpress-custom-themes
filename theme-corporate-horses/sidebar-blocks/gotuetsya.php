	<section class="sidebar-vidget gotuetsya">
		<?php
		$args = array(
			'cat' => 3,
			'posts_per_page' => 1,
			'post_status' => 'publish',
		);

		$query = new WP_Query($args);

		if ($query->have_posts()) {
			echo '<h3 class="title-vidget">' . 'Готується до виходу' . '</h3>';
			// Открываем контейнер для всех постов (вынесли из цикла)
			echo '<article class="vidget">';

			while ($query->have_posts()) {
				$query->the_post();
				?>
				<div class="bl-hover">
					<?php the_post_thumbnail(); ?>
				</div>
				<div class="block-link">
					<span><?php the_title(); ?> / <?php the_time('F Y'); ?></span>
				</div>
				<?php
			}
			// Закрываем контейнер
			echo '</article>';
		}
		wp_reset_postdata();
		?>
	</section>