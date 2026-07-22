<section class="sidebar-vidget ostann-vipusk">
	<?php
	$args = array(
		'cat' => 4,
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

	<section class="sidebar-vidget calendar">
		<div class="rekl-wr">
		<?php
		$args = array(
			'post_type' => 'reklama',
			'posts_per_page' => 2,
			'post_status' => 'publish',
			'tax_query' => array(
				array(
					'taxonomy' => 'mesta', // слаг таксономии
					'field'    => 'slug', // можно 'term_id', 'name', 'slug'
					'terms'    => 'kalendar-podij', // слаг термина
				),
			),
		);

		$reklama_query = new WP_Query($args);

		if ($reklama_query->have_posts()) :
			while ($reklama_query->have_posts()) : $reklama_query->the_post();
				?>
		 
				<?php if (get_field('ssylka_na_video')) : ?>
				<div class="reklama-block">
					<div class="reklama-img">
						<div class="sidebar-video-wrapper">
							<video autoplay muted loop playsinline>
								<source src="<?php the_field('ssylka_na_video'); ?>" type="video/mp4">
							</video>
						</div>
						<a href="<?php the_field('ssylka_na_reklamodatelya'); ?>" target="_blank">
							<?php the_field('opisanie_ili_zagolovok'); ?>
						</a>
					</div> 
				</div>
				<?php endif; ?> 

				<?php
			endwhile;
			wp_reset_postdata();
		endif;
		?>
		</div>
	</section>