<?php get_header(); ?>
    <section class="section-page">
		<div class="container">
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