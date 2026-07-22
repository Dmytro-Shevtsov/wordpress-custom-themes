<?php /* Template Name: Контакты */ ?>
<?php get_header(); ?>
  <main>
	<section class="kompany">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="h1-page"><?php the_title(); ?></h1>
					</div>
					<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
					<div class="col-sm-6 col-contact">
						<?php the_content(); ?>
					</div>
					<?php endwhile; ?>
					<?php endif; ?>
					<div class="col-sm-6">
						<?php echo do_shortcode('[contact-form-7 id="87d20bc"]'); ?> 
					</div>
				</div>
			</div>
		</section>
  </main> 
<?php get_footer(); ?>