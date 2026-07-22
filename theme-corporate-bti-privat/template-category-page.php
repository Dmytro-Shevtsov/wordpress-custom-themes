<?php
/*
Template Name: Шаблон для категорий
Template Post Type: page
*/

get_header(); ?>
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
				<!-- Выводим тело категории -->
				<?php
				$category_object = get_field('category_for_page');

				if ( $category_object ) {

					$args = array(
						'post_type'      => 'post',
						'post_status'    => 'publish',
						'category_name'  => $category_object->slug,
						'posts_per_page' => -1,
					);

					$category_query = new WP_Query( $args );

					if ( $category_query->have_posts() ) : ?>

						<div class="content-kat">
						<div class="content-kat-wr">
							<?php while ( $category_query->have_posts() ) : $category_query->the_post(); ?>
								<div class="post min-h300">
									<a class="bti-kvartira" href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail(); ?>
										<br>
										<?php the_title(); ?>
									</a>
								</div>
							<?php endwhile; ?>
						</div>
						</div>

						<?php
						wp_reset_postdata();

					endif;
				}
				?>	
				<!-- /Выводим тело категории -->
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