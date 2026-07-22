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
		<div class="content-wr">
			<section class="page-content-container">
				<h1 class="page-title"><?php the_title(); ?></h1>
				<div class="page-content"><?php the_content(); ?></div>
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