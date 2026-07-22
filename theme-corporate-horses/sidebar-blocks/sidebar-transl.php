	<section class="sidebar-vidget sidebar-transl">
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
				'terms'    => 'sajdbar-translyaczii', // слаг термина
			),
		),
	);

	$reklama_query = new WP_Query($args);

	if ($reklama_query->have_posts()) :
		while ($reklama_query->have_posts()) : $reklama_query->the_post();
			?>
			<h3 class="title-vidget">Трансляції на YouTube</h3>
			<div class="reklama-block">
				<div class="reklama-img">
					<div class="sidebar-video-wrapper">
					<?php
					$youtube = get_field('youtube_link');
					if ($youtube) {
						echo '<div class="responsive-video">';
						echo wp_oembed_get($youtube);
						echo '</div>';
					}
					?>
					</div>
					<h4 class="rekl-title"><?php the_field('opisanie_ili_zagolovok'); ?></h4>
				</div>   
			</div>

			<?php
		endwhile;
		wp_reset_postdata();
	endif;
	?>
	</div>
	</section>