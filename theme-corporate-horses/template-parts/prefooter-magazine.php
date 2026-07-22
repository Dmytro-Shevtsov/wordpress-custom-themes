<section class="prefooter">
	<div class="container">
	<?php
	$args = array(
		'cat' => 7,
		'posts_per_page' => 4,
		'post_status' => 'publish',
	);

	$query = new WP_Query($args);

	if ($query->have_posts()) {
		echo '<div class="posts-list-title">';
		echo '<h2>' . get_cat_name(7) . '</h2>';
		echo '<a class="a-end" href="' . esc_url(get_category_link(7)) . '">Дивитись все</a>';
		echo '</div>';

		// Открываем контейнер для всех постов (вынесли из цикла)
		echo '<div class="prefooter-list-magaz">';

		while ($query->have_posts()) {
			$query->the_post();
			?>
			<a href="<?php the_permalink(); ?>" class="prefooter-magaz">
				<div class="bl-hover"><?php the_post_thumbnail(); ?></div>
				<h3><?php the_title(); ?> / <?php the_time('m-Y'); ?></h3>
			</a>
			<?php
		}
		// Закрываем контейнер
		echo '</div>';
	}
	wp_reset_postdata();
	?>
	</div>
</section>