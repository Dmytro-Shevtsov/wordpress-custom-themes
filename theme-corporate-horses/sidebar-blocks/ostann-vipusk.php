	<section class="sidebar-vidget ostann-vipusk">
		<?php
		$args = array(
			'cat' => 7,
			'posts_per_page' => 1,
			'post_status' => 'publish',
		);

		$query = new WP_Query($args);

		if ($query->have_posts()) {
			echo '<h3 class="title-vidget">' . 'Останній випуск' . '</h3>';
			// Открываем контейнер для всех постов (вынесли из цикла)
			echo '<article class="vidget">';

			while ($query->have_posts()) {
				$query->the_post();
				?>
				<a class="bl-hover" href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail(); ?>
				</a>
				<div class="block-link">
					<span><?php the_title(); ?> / <?php the_time('F Y'); ?></span>
					<a class="a-end" href="<?php the_permalink(); ?>">Читати</a>
				</div>
				<?php
			}
			// Закрываем контейнер
			echo '</article>';
		}
		wp_reset_postdata();
		?>
	</section>