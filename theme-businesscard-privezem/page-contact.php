<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
    <section class="section-page">
		<div class="container">
			<div class="page-container page-wr">
				<div class="page-in">
					<?php
					while ( have_posts() ) :
						the_post();
						the_content();
					endwhile;
					?>
				</div>
				<div class="page-in">
					<?php echo do_shortcode('[contact-form-7 id="f385eb6"]'); ?>
				</div>
			</div>	
		</div>
	</section>
<?php get_footer(); ?>