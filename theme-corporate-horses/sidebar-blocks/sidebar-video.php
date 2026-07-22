	<section class="sidebar-vidget sidebar-viveo">
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
				'terms'    => 'sajdbar-video', // слаг термина
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
					<a href="<?php the_field('ssylka_na_reklamodatelya'); ?>" target="_blank"></a>
				</div>
				<h4 class="rekl-title"><?php the_field('opisanie_ili_zagolovok'); ?></h4>    
			</div>
			<?php endif; ?> 

			<?php
		endwhile;
		wp_reset_postdata();
	endif;
	?>
	</div>
	</section>