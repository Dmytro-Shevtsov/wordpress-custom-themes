<?php /*
Template Name: Magazine
Template Post Type: post
*/ ?>
<?php
if (is_front_page()) {
    get_template_part('template-parts/header', 'home');
} elseif (is_category()) {
    get_template_part('template-parts/header', 'category');
} else {
    get_template_part('template-parts/header');
}
?>

<div class="container">
	<main class="main-content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section class="magazine-title-container">
			<div class="magazine-title-img">
				<?php the_post_thumbnail('magazine-thumb'); ?>
			</div>
			<div class="magazine-title-content">
				<div class="magazine-title-cat">
					<div class="post-title-cat">
						<?php custom_breadcrumbs(); ?>
					</div>
				</div>
				<div class="magazine-title"><?php the_title(); ?></div>
				<div class="magazine-title-expert">
					<?php the_excerpt(); ?>
				</div>
				<div class="magazine-title-data">
					<span><?php the_time('d F Y'); ?></span>
				</div>
				<div class="magazine-title-share">
					<span>поделитись:</span>
					<div class="post-share">
						<?php get_template_part('template-parts/soc-share'); ?>
					</div>
				</div>
			</div>
		</section>
		<section class="magazine-plagin">
			<?php the_content(); ?>
		</section>
		<?php endwhile; endif; ?>
		<!-- Блок с рекламой и подпиской на соцсети -->
		<section class="subscribe-section">
			<?php get_template_part('template-parts/reklama'); ?>
		</section>
	</main>
</div>

<?php get_template_part('template-parts/prefooter-magazine'); ?>

<?php get_footer(); ?>