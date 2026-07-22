<div class="sidebar-bott">
	
	<section class="sidebar-vidget kolegiya-sudey"><!-- коллегия судей -->
		<?php
		$args = array(
			'cat' => 15,
			'posts_per_page' => 4,
			'post_status' => 'publish',
		);

		$query = new WP_Query($args);

		if ($query->have_posts()) {
			echo '<h3 class="title-vidget">' . get_cat_name(15) . '</h3>';

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
	</section><!-- //7тех. результаты -->

	<section class="sidebar-vidget">
		<h3 class="title-vidget">Спонсори та партнери</h3>
		<div class="vidget vidget-partners">
		<?php
		$args = array(
			'post_type'      => 'reklama',
			'posts_per_page' => -1,
			'post_status'    => 'publish',
			'orderby'        => 'date',      // сортировка по дате
			'order'          => 'DESC',      // сначала новые
			'tax_query'      => array(
				array(
					'taxonomy' => 'mesta', // слаг таксономии
					'field'    => 'slug',
					'terms'    => 'partnery',
				),
			),
		);

		$reklama_query = new WP_Query($args);

		if ($reklama_query->have_posts()) :
			while ($reklama_query->have_posts()) : $reklama_query->the_post();
				?>
				<div class="reklama-block">
					<div class="reklama-img">
					<?php 
					$image = get_field('izobrazhenie');
					if ($image) : ?>
						<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">

						<a href="<?php the_field('ssylka_na_reklamodatelya'); ?>" target="_blank"></a>
					<?php endif; ?>
					</div>        
				</div>
				<?php
			endwhile;
			wp_reset_postdata();
		endif;
		?>
		</div>
	</section>

	<section class="sidebar-vidget personalies"><!-- персоналии -->
		<?php
		$args = array(
			'cat' => 23,
			'posts_per_page' => 4,
			'post_status' => 'publish',
		);

		$query = new WP_Query($args);

		if ($query->have_posts()) {
			echo '<h3 class="title-vidget">' . get_cat_name(23) . '</h3>';

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
	</section><!-- //персоналии -->
	
	<section class="sidebar-vidget fotos-videos">
		<h3 class="title-vidget">Фото/Відео дня</h3>
		<?php
		$args = array(
			'cat' => 19,
			'posts_per_page' => 1,
			'post_status' => 'publish',
		);

		$query = new WP_Query($args);

		if ($query->have_posts()) {
			// Открываем контейнер для всех постов (вынесли из цикла)
			echo '<article class="vidget">';

			while ($query->have_posts()) {
				$query->the_post();
				?>
				<a class="bl-hover" href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail(); ?>
				</a>
				<?php
			}
			// Закрываем контейнер
			echo '</article>';
		}
		wp_reset_postdata();
		?>
	</section>

	<section class="sidebar-vidget">
		<?php
		$args = array(
			'cat' => 9,
			'posts_per_page' => 1,
			'post_status' => 'publish',
		);

		$query = new WP_Query($args);

		if ($query->have_posts()) {
			// Открываем контейнер для всех постов (вынесли из цикла)
			echo '<article class="vidget">';

			while ($query->have_posts()) {
				$query->the_post();
				?>
				<a class="bl-hover" href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail(); ?>
				</a>
				<?php
			}
			// Закрываем контейнер
			echo '</article>';
		}
		wp_reset_postdata();
		?>
	</section>





















	


</div>