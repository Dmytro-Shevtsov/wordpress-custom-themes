<div class="sidebar-reklama">

	<section class="sidebar-vidget"><!-- Рекламный блок -->
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

	<section class="sidebar-vidget sidebar-viveo"><!-- Рекламный видео блок -->
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
	</section><!-- //Рекламный видео блок -->

	<section class="sidebar-vidget sidebar-transl"><!-- Рекламный видео блок -->
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
	</section><!-- //Рекламный видео блок -->

</div>