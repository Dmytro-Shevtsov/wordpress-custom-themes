<div class="sidebar-top">
	<section class="sidebar-vidget ostann-vipusk">
		<?php
		$args = array(
			'cat' => 2,
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


	<section class="sidebar-vidget gotuetsya">
		<?php
		$args = array(
			'cat' => 8,
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

	<section class="sidebar-vidget calendar">
		<div class="vidget">
			<img src="<?php bloginfo('template_url'); ?>/images/calend.png">
		</div>
	</section>
</div> 