<div class="block-rekl-soc">
	<div class="block-rekl">
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
					'terms'    => 'bolshoj-banner', // слаг термина
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
	</div>
	<div class="block-faceb" style="width: 290px;">
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v22.0"></script>
<div class="fb-page" data-href="https://www.facebook.com/horses.ukraine" data-tabs="timeline" data-width="" data-height="344" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/horses.ukraine" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/horses.ukraine">Horses Ukraine</a></blockquote></div>


		
	</div>
	<div class="block-insta">
		<a href="<?php echo get_theme_mod('insta_link'); ?>" target="_blank">
			<img src="<?php bloginfo('template_url'); ?>/images/insta.jpg">
		</a>
	</div>
</div>