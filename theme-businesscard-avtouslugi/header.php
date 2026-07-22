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
						Послуги спецтехніки<span> Дніпро</span>
				</div>
				<div class="contact">
					<?php if(get_theme_mod('header_namb1') != ''):?>
					<a class="cont-n" href="tel:<?php echo str_replace(array(" ", ")", "(", "-", "<span>", "</span>", ","), "", get_theme_mod( 'header_namb1' ))?>">
						<?php echo str_replace(array("+38 "), "", get_theme_mod( 'header_namb1' ))?>
					</a>
					<?php endif; ?>						
											
					<?php if(get_theme_mod('header_namb2') != ''):?>
					<a class="cont-n" href="tel:<?php echo str_replace(array(" ", ")", "(", "-", "<span>", "</span>"), "", get_theme_mod( 'header_namb2' ))?>">
						<?php echo str_replace(array("+38 "), "", get_theme_mod( 'header_namb2' ))?>
					</a>
					<?php endif; ?>				

					<?php if(get_theme_mod('header_viber') != ''):?>							
					<a class="vib vib-desc" href="viber://chat?number=<?php echo get_theme_mod('header_viber'); ?>">
					<img src="<?php bloginfo('template_url'); ?>/images/icon/viber.svg">
					</a>

					<a class="vib vib-mob" href="viber://add?number=<?php echo get_theme_mod('header_viber'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/icon/viber.svg"></a>
					<?php endif; ?>	
					<a class="con-tel popup-tel-form" href="#ft-form">
						<img src="<?php bloginfo('template_url'); ?>/images/icon/tel.svg">
					</a>
				</div>
			</div>
		</div>
	</header>
	
	<section class="slider">
		<div class="container">
			<div class="hd-bt">
				<div class="hd-bt-l">Найкраща техніка та досвідчені машиністи</div>
				<div class="hd-bt-r">Телефонуйте працюємо щодня з 7:00 до 21:00</div>
			</div>
			<ul class="slider-ul">
				<li>Вивіз сміття</li>
				<li>Послуги екскаватора</li>
				<li>Доставка сипких будівельних матеріалів</li>
			</ul>
			<div class="slider-wr">
				<div class="slider-in">
					<?php 
					$image = get_field('foto_ekskavatora');
					if( !empty($image) ): ?>
					<img class="slider-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>	
					<?php if( get_field('ceny-ex') ): ?>
						<div class="slider-pr"><?php the_field('ceny-ex'); ?></div>
					<?php endif; ?>
					
					<?php if( get_field('time-ex') ): ?>
						<div class="slider-tim"><?php the_field('time-ex'); ?></div>
					<?php endif; ?>
				</div>
				<div class="slider-in">
					<?php 
					$image = get_field('foto_samosvala');
					if( !empty($image) ): ?>
					<img class="slider-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>					
					<?php if( get_field('ceny-sm') ): ?>
						<div class="slider-pr"><?php the_field('ceny-sm'); ?></div>
					<?php endif; ?>
					
					<?php if( get_field('time-sm') ): ?>
						<div class="slider-tim"><?php the_field('time-sm'); ?></div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>