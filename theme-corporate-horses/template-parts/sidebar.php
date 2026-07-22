<aside class="sidebar">
	<div class="mobile-header-reclama">
		<div class="rekl-wr">
		<?php
		$args = array(
			'post_type' => 'reklama',
			'posts_per_page' => 1,
			'post_status' => 'publish',
			'tax_query' => array(
				array(
					'taxonomy' => 'mesta', // слаг таксономии
					'field'    => 'slug', // можно 'term_id', 'name', 'slug'
					'terms'    => 'shapka-sajta', // слаг термина
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
					<?php endif; ?>
					
					<?php
					$video_url = get_field('ssylka_na_video'); 
					if ( ! empty( $video_url ) ) { 
						?>
						<div class="sidebar-video-wrapper">
							<video autoplay muted loop playsinline>
								<source src="<?php echo esc_url( $video_url ); ?>" type="video/mp4">
							</video>
						</div>
						<?php
					}
					?>
					
					<a href="<?php the_field('ssylka_na_reklamodatelya'); ?>" target="_blank"></a>
					</div>         
				</div>
				
				<?php
			endwhile;
			wp_reset_postdata();
		endif;
		?>
		</div>
	</div>
	<?php
	// Пытаемся получить поле "vybor_sajdbara" у записи
	$sidebars = get_field('vybor_sajdbara');

	// Если на архиве категории или таксономии — берем поле у термина
	if (is_category() || is_tax()) {
		$term = get_queried_object();
		if ($term) {
			$sidebars = get_field('vybor_sajdbara', $term);
		}
	}

	// Теперь выводим выбранные сайдбары
	if ($sidebars) {
		foreach ($sidebars as $sidebar) {
			if ($sidebar == 'ostanniy') {
				get_template_part('sidebar-blocks/ostann-vipusk');
			}
			if ($sidebar == 'gotuetsya') {
				get_template_part('sidebar-blocks/gotuetsya');
			}
			if ($sidebar == 'calendar') {
				get_template_part('sidebar-blocks/calendar');
			}						
			if ($sidebar == 'sidimg') {
				get_template_part('sidebar-blocks/sidebar-img');
			}
			if ($sidebar == 'sidvideo') {
				get_template_part('sidebar-blocks/sidebar-video');
			}
			if ($sidebar == 'sidtransl') {
				get_template_part('sidebar-blocks/sidebar-transl');
			}						
			if ($sidebar == 'sponsori') {
				get_template_part('sidebar-blocks/sponsori');
			}
			if ($sidebar == 'vestiregions') {
				get_template_part('sidebar-blocks/vesti-regions');
			}
			if ($sidebar == 'tehrezultati') {
				get_template_part('sidebar-blocks/tehrezultati');
			}
			if ($sidebar == 'fotovideodnya') {
				get_template_part('sidebar-blocks/foto-video-dnya');
			}
			if ($sidebar == 'vitannya') {
				get_template_part('sidebar-blocks/vitannya');
			}
			if ($sidebar == 'kolegiyasudey') {
				get_template_part('sidebar-blocks/kolegiya-sudey');
			}
			if ($sidebar == 'personalii') {
				get_template_part('sidebar-blocks/personalii');
			}
	 }
	} else {
		// Если ничего не выбрано — по умолчанию подключаем sidebar-top
		get_template_part('sidebar-blocks/default-sidebar');
	}
	?>
</aside>