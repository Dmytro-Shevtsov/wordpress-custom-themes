<?php /* Template Name: About Us */ ?>
<?php get_header(); ?>

<section class="hero-page hero-about" >
	<div class="container">
    <div class="hero-page-wr">
		<div class="hero-page-in hero-page-title">
			<h1 class="title-h2"><?php the_title(); ?></h1>
		</div> 
		<div class="hero-page-in hero-page-img">
			<?php the_post_thumbnail(); ?>
		</div> 
    </div>  
	</div>
</section>

<section class="crazy-bonuses crazy-bonuses-about">
	<div class="container">
		<div class="about-cont-wr">
			<div class="about-cont-in about-cont-img">
				<img src="<?php bloginfo('template_url'); ?>/images/LSV_kolo.svg" alt="hero-raiting">
			</div>
			<div class="about-cont-in about-cont-trxt">
				<?php
				while ( have_posts() ) :
				the_post();
				the_content();
				endwhile;
				?>
			</div>
		</div>
	</div>
</section>
<?php reset_rows(); ?>

<?php get_template_part('template-parts/about-poker-club'); ?>

<section class="about-block-3">
	<div class="container">
	<?php
	$about_block_gift = get_field('about_block_gift');
	if( $about_block_gift ): ?>
    <div class="about-block-3-wr">
		<div class="about-page-in title-h2 block-3-left">
		<?php echo esc_attr( $about_block_gift['block_gift_1'] ); ?>
		</div> 
		<div class="about-page-in block-3-img"><img src="<?php bloginfo('template_url'); ?>/images/gg-korona.webp" alt=""></div> 
		<div class="about-page-in title-h2 block-3-right">
		<?php echo esc_attr( $about_block_gift['block_gift_2'] ); ?>
		</div> 
    </div>  
	<div class="about-block-3-title"><?php echo esc_attr( $about_block_gift['block_gift_3'] ); ?></div> 

	<?php endif; ?>
	</div>
</section>


	<?php get_template_part('template-parts/about-crazy-bonuses'); ?>
	<?php get_template_part('template-parts/pre-footer'); ?>
<?php get_footer(); ?>