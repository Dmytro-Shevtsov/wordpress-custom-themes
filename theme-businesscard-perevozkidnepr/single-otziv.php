<?php /*
Template Name: Otziv
Template Post Type: post
*/ ?>
<?php get_header(); ?>
    <section class="single-page">
		<div class="container">
			<h1 class="page-title"><?php the_title(); ?></h1>
			<div class="single-container">
				<?php
				while ( have_posts() ) :
					the_post();
					the_content();
				endwhile;
				?>
				<?php comments_template(); ?>
			</div>
		</div>
	</section>
<?php get_footer(); ?>