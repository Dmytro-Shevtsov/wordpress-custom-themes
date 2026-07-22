<?php get_header(); ?>
    <section class="section-category">
		<h1 class="category-title"><?php single_cat_title(); ?></h1>
		<div class="page-container">
			<?php echo category_description(); ?>
		</div>
		<ul class="category-container">
			<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
			<li>
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail(); ?>
					<span class="category-span"><?php the_title(); ?></span>
				</a>    
			</li>
			<?php endwhile; ?>
			<?php endif; ?>
		</ul>
	</section>
<?php get_footer(); ?>
