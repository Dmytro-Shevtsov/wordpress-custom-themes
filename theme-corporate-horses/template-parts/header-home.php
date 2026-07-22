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
<header class="hero">
	<video class="videobg" autoplay muted loop playsinline>
		<?php if(get_theme_mod('hero_video') != ''):?>
			<source src="<?php echo get_theme_mod('hero_video'); ?>" type="video/mp4">
		<?php endif; ?>
    </video>
    <div class="hero-content">
        <div class="container">
			<div class="hero-wrap">
				<div class="header-soc-home soc-icons">
					<?php get_template_part('template-parts/soc-icons'); ?>
				</div>
				<div class="header-logo-home">
					<img src="<?php bloginfo('template_url'); ?>/images/logo.svg" alt="Логотип сайту">
				</div>
			</div>
        </div>
    </div>
</header>

<?php get_template_part('template-parts/header-menu'); ?>