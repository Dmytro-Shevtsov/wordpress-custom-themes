<?php get_header(); ?>
  <main>
	<section class="kompany page-kompany">
			<div class="container">
				<div class="row">
					<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
					<div class="col-lg-12">
						<h1 class="h1-page"><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div>
					<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</section>
  </main> 
<?php get_footer(); ?>