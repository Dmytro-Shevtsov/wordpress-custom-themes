<?php /* Template Name: Contacts */ ?>
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
		<div class="content-wr content-wr-contact">
			<section class="page-content-container">
				<h1 class="page-title"><?php the_title(); ?></h1>
				<div class="page-content page-content-wr">
					<div class="page-content-in"><?php the_content(); ?></div>
					<div class="page-content-in">
						<?php echo do_shortcode('[contact-form-7 id="c95fc72"]'); ?>
					</div>
					
				</div>
				<div class="page-content-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2644.5787610483003!2d35.06360291600815!3d48.48379297925263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dbe299e8b11019%3A0x47ddb423008d453c!2z0L_RgNC-0LLRg9C70L7QuiDQm9GO0LHQsNGA0YHRjNC60L7Qs9C-LCAxMiwg0JTQvdGW0L_RgNC-zIEsINCU0L3RltC_0YDQvtC_0LXRgtGA0L7QstGB0YzQutCwINC-0LHQu9Cw0YHRgtGMLCA0OTAwMA!5e0!3m2!1sru!2sua!4v1516442053754" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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