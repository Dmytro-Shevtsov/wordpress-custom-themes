	<section class="sidebar-vidget sidebar-img">
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
				'terms'    => 'sajdbar-kartinka', // слаг термина
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
				
				<?php if (get_field('ssylka_na_reklamodatelya')) : ?>
					<a href="<?php the_field('ssylka_na_reklamodatelya'); ?>" target="_blank"></a>
				<?php endif; ?>
				</div>
				<!-- Вывод заголовка -->
				<?php if (get_field('opisanie_ili_zagolovok')) : ?>
					<h4 class="rekl-title"><?php the_field('opisanie_ili_zagolovok'); ?></h4>
				<?php endif; ?>          
			</div>
			<?php
		endwhile;
		wp_reset_postdata();
	endif;
	?>
	</div>
	</section><!-- //Рекламный блок -->