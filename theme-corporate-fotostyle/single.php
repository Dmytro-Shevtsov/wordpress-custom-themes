<?php get_header(); ?>
	<div class="container">
		<div class="post-wr">
		<?php get_sidebar(); ?>
			<div class="post-in post">
				<article>
				<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
					<section>
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
					</section>
				<?php endwhile; ?>
				</article>
				<?php endif; ?>	
			</div>
		</div>		
	</div>
<?php get_footer(); ?>