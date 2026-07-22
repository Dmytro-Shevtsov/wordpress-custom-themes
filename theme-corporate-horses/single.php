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
		<section class="post-title-container">
			<div class="post-title-img post-title-in">
				<?php the_post_thumbnail(); ?>
			</div>
			<div class="post-title-content post-title-in">
				<div class="post-title-cat">
					<?php custom_breadcrumbs(); ?>
				</div>
				<h1 class="post-title"><?php the_title(); ?></h1>
				<div class="post-title-expert">
					<?php 
					if (has_excerpt()) {
						the_excerpt();
					} else {
						echo wp_trim_words(get_the_content(), 20, '...');
					}
					?>
				</div>
				<div class="post-title-data">
					<span><?php the_time('d F Y'); ?></span>
				</div>
				<div class="post-title-share">
					<span>поделитись:</span>
					<?php get_template_part('template-parts/soc-share'); ?>
				</div>
			</div>
		</section>
		<div class="content-wr">
			<section class="post-content">
				<?php the_content(); ?>
				<div class="post-video-wrapper">
				<?php
				$youtube = get_field('youtube_link');
				if ($youtube) {
					echo '<div class="responsive-video">';
					echo wp_oembed_get($youtube);
					echo '</div>';
				}
				?>
				</div>			
			</section>
			<?php get_template_part('template-parts/sidebar'); ?>
		</div>
		<?php endwhile; endif; ?>
		<!-- Блок с рекламой и подпиской на соцсети -->
		<section class="subscribe-section">
			<?php get_template_part('template-parts/reklama'); ?>
		</section>
	</main>
</div>

<?php get_template_part('template-parts/prefooter-post'); ?>

<?php get_footer(); ?>