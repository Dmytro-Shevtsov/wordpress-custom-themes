<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php bloginfo('template_url'); ?>/images/favicon.ico" rel="icon" type="image/x-icon" />
    <title><?php bloginfo('name'); wp_title(); ?></title>
	<?php wp_head(); ?>	
</head>

<body>
	<header class="header">
		<div class="container">
			<div class="header-wr">
				<div class="logo">
					<img src="<?php bloginfo('template_url'); ?>/images/logo.png">
				</div>
				<div class="lang">
					<?php if(!dynamic_sidebar( 'lang' )): ?>
					<?php endif; ?>	
				</div>
				<div class="contact">
					<?php if(get_theme_mod('header_namb1') != ''):?>
					<a class="cont-n" href="tel:<?php echo str_replace(array(" ", ")", "(", "-", "<span>", "</span>", ","), "", get_theme_mod( 'header_namb1' ))?>">
						<?php echo str_replace(array("+38 "), "", get_theme_mod( 'header_namb1' ))?>
					</a>
					<?php endif; ?>					

					<?php if(get_theme_mod('header_viber') != ''):?>
					<a class="vib vib-desc" href="<?php echo get_theme_mod('header_viber'); ?>">
					<img src="<?php bloginfo('template_url'); ?>/images/icon/viber.svg">
					</a>
					<a class="vib vib-mob" href="<?php echo get_theme_mod('header_viber'); ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/icon/viber.svg"></a>
					<?php endif; ?>	
					
					<?php if(get_theme_mod('header_tel') != ''):?>
					<a class="telegr" href="<?php echo get_theme_mod('header_tel'); ?>" target="_blank">
					<img src="<?php bloginfo('template_url'); ?>/images/icon/telegram.svg"></a>
					<?php endif; ?>	
				</div>
			</div>
		</div>
	</header>
	
	<section class="slider">
		<h1 class="slider-title"><?php the_title(); ?></h1>	
		<img class="sl-img" src="<?php bloginfo('template_url'); ?>/images/sl-img.png">

	</section>