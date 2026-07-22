<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112744057-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-112744057-1');
	</script>
</head>

<body id="top" <?php body_class(); ?>>
<header class="header-category">
    <div class="container">
        <div class="header-category-wr">
			<div class="category-title-block">
				<div class="category-title-block-bg" style="background-image: url('<?php echo esc_url(get_term_meta(get_queried_object_id(), 'category_image', true)); ?>');">
					<div class="title-block-top">
						<div class="header-soc-category soc-icons">
							<?php get_template_part('template-parts/soc-icons'); ?>
						</div>
						<div class="header-logo-category">
							<a href="<?php echo esc_url(home_url()); ?>">
								<img src="<?php bloginfo('template_url'); ?>/images/logo.svg" alt="Логотип сайту">
							</a>
						</div>
					</div>
					<div class="title-block-bottom">
						<h1 class="title-category"><?php single_cat_title(); ?></h1>
						<div class="brcr-category">
							<?php custom_breadcrumbs(); ?>
						</div>
					</div>
				</div>
			</div>
			
			<section class="header-category-rekl"><!-- Рекламный блок -->
				<div class="rekl-wr">
				<?php
				$args = array(
					'post_type' => 'reklama',
					'posts_per_page' => 1,
					'post_status' => 'publish',
					'tax_query' => array(
						array(
							'taxonomy' => 'mesta', // слаг таксономии
							'field'    => 'slug', // можно 'term_id', 'name', 'slug'
							'terms'    => 'shapka-sajta', // слаг термина
						),
					),
				);

				$reklama_query = new WP_Query($args);

				if ($reklama_query->have_posts()) :
					while ($reklama_query->have_posts()) : $reklama_query->the_post();
						?>
						
						<div class="reklama-block">
							<div class="reklama-img">
							<?php 
							$image = get_field('izobrazhenie');
							if ($image) : ?>
								<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
							<?php endif; ?>
							
							<?php
							$video_url = get_field('ssylka_na_video'); 
							if ( ! empty( $video_url ) ) { 
								?>
								<div class="sidebar-video-wrapper">
									<video autoplay muted loop playsinline>
										<source src="<?php echo esc_url( $video_url ); ?>" type="video/mp4">
									</video>
								</div>
								<?php
							}
							?>
							
							<a href="<?php the_field('ssylka_na_reklamodatelya'); ?>" target="_blank"></a>
							</div>         
						</div>
						
						<?php
					endwhile;
					wp_reset_postdata();
				endif;
				?>
				</div>
			</section><!-- //Рекламный блок -->			
        </div>
    </div>
</header>

<?php get_template_part('template-parts/header-menu'); ?>