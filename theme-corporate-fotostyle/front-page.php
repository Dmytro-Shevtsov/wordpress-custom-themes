<?php get_header(); ?>
	<div class="container">
		<div class="kat-wr">
			<?php
			$id = 5; // номер категории
			$posts_about = new WP_Query(array('cat' => $id, 'posts_per_page' => 100, 'order' => 'DESC'));
			?>
			<?php if ( $posts_about->have_posts() ) : ?>
			<?php while ( $posts_about->have_posts() ) : $posts_about->the_post(); ?>
				<a class="kat-in" href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail(); ?>
					<?php the_title(); ?>
				</a>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>		
	</div>
<?php get_footer(); ?>