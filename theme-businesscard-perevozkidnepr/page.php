<?php get_header(); ?>
    <section class="section-page">
		<div class="container">
			<h1 class="page-title"><?php the_title(); ?></h1>
			<div class="page-container">
				<?php
				while ( have_posts() ) :
					the_post();
					the_content();
				endwhile;
				?>
			</div>
		</div>
	</section>
<?php get_footer(); ?>