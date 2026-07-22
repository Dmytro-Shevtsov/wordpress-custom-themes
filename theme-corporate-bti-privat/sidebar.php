<div class="sidebar">
	<div class="vidget">
		
		<?php if(get_locale() == 'ru_RU') { ?><p>наши услуги</p><?php } ?>
		<?php if(get_locale() == 'uk') { ?><p>наші послуги</p><?php } ?>
		<ul>
		<?php
			$id = 4; // номер категории
			$posts_about = new WP_Query(array('cat' => $id, 'posts_per_page' => 100, 'order' => 'DESC'));
			?>
			<?php if ( $posts_about->have_posts() ) : ?>				
			<?php while ( $posts_about->have_posts() ) : $posts_about->the_post(); ?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endwhile; ?>			
			<?php else: ?>
			<?php endif; ?>	
		</ul>
	</div>
	<div class="vidget">
		<?php echo do_shortcode('[metaslider id="25"]'); ?> 
	</div>
	<div class="vidget">
		
		<?php if(get_locale() == 'ru_RU') { ?><p>последние новости</p><?php } ?>
		<?php if(get_locale() == 'uk') { ?><p>останні новини</p><?php } ?>
		<ul class="vidget-news">
			<?php
			$id = 3; // номер категории
			$posts_about = new WP_Query(array('cat' => $id, 'posts_per_page' => 3, 'order' => 'DESC'));
			?>
			<?php if ( $posts_about->have_posts() ) : ?>				
			<?php while ( $posts_about->have_posts() ) : $posts_about->the_post(); ?>
				<li><?php the_time('d F Y'); ?>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endwhile; ?>			
			<?php else: ?>
			<?php endif; ?>	
		</ul>
	</div>
</div>