	<section class="sidebar-vidget fotos-videos">
		<?php
		$args = array(
			'cat' => 49,
			'posts_per_page' => 2,
			'post_status' => 'publish',
		);

		$query = new WP_Query($args);

		if ($query->have_posts()) {
			echo '<h3 class="title-vidget">' . get_cat_name(47) . '</h3>';
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
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	