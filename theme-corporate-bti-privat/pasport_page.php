<?php
/*   
Template Name: Pasport
*/
?>
<?php get_header(); ?>
	<div class="container-wite wite-content">
		<div class="container-content">		
			<div class="content">		
				<div class="post-page">
					<?php
					if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb('
					<p id="breadcrumbs">','</p>
					');
					}
					?>
					<h1><?php the_title(); ?></h1>
				</div>
				<div class="content-kat">
					<?php
					$id = 4; // номер категории
					$posts_about = new WP_Query(array('cat' => $id, 'posts_per_page' => 100, 'order' => 'DESC'));
					?>
					<?php if ( $posts_about->have_posts() ) : ?>
					<?php while ( $posts_about->have_posts() ) : $posts_about->the_post(); ?>
					<div class="post min-h300">
						<a class="bti-kvartira" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?><br>
						<?php the_title(); ?></a>
					</div>
					<?php endwhile; ?>
					<?php else: ?>
					<?php endif; ?>	
				</div>			
				<div class="post-page">
					<article>
					<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
						<section>
						<?php the_content(); ?>
						</section>
					<?php endwhile; ?>
					</article>
					<?php endif; ?>	
				</div>			
			</div>
			<?php get_sidebar(); ?>
		</div>	
	</div>
<?php get_footer(); ?>