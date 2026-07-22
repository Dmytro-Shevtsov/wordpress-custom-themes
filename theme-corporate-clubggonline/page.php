<?php get_header(); ?>
<main class="main-page">
	<section class="section-page-title">
		<div class="container">
		<div class="title-wr">
			<h1 class="title-h2"><?php the_title(); ?></h1>
		</div>  
		</div>
	</section>

	<section class="section-page-content">
		<div class="container">
			<div class="page-content-wr">
				<div class="page-in page-content">
				<?php
				while ( have_posts() ) :
				the_post();
				the_content();
				endwhile;
				?>
				</div>
				<div class="page-in dop-page-content">
					<?php the_field('additional_text_field'); ?>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>