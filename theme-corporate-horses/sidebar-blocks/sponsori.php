	<section class="sidebar-vidget sponsors">
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