<?php get_header(); ?>
	<div class="container-wite wite-content">
		<div class="container-content">
			<div class="post-page">
				<article>
					<?php
					if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb('
					<p id="breadcrumbs">','</p>
					');
					}
					?>
				<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
					<section>
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
					</section>
				<?php endwhile; ?>
				</article>
				<?php endif; ?>	
			</div>
			<?php get_sidebar(); ?>
		</div>	
	</div>
<?php get_footer(); ?>