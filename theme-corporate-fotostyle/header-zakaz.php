<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php bloginfo('template_url'); ?>/images/favicon.ico" rel="icon" type="image/x-icon" />
    <title><?php bloginfo('name'); wp_title(); ?></title>
	<?php wp_head(); ?>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-88773590-1', 'auto');
	  ga('send', 'pageview');

	</script>
</head>

<body>
	<header>
		<nav>
			<div class="container">
				<div class="nav-wr">
					<div class="logo-bl">
						<?php if(get_locale() == 'ru_RU') { ?>
						<a href="<?php echo home_url(); ?>" class="logo">Ф<span>ото</span>С<span>тиль</span></a>
						<?php } ?>
						<?php if(get_locale() == 'uk') { ?>
						<a href="<?php echo home_url(); ?>" class="logo">Ф<span>ото</span>С<span>тиль</span></a>
						<?php } ?>
						<img src="<?php bloginfo('template_url'); ?>/images/cmile.png" />
					</div>
					<?php wp_nav_menu(array(
						'theme_location' => 'top-menu',
						'container' => 'ul',
						'menu_class' => 'menu'
					)); ?>
				</div>
				<button class="btn-mob"></button>
			</div>
		</nav>
		
		<div class="container">
			<div class="cont-wr">
				<div class="cont-in">
					<p class="cont-title">
					<?php if(get_locale() == 'ru_RU') { ?>
					Наши адреса:
					<?php } ?>
					<?php if(get_locale() == 'uk') { ?>
					Наші адреси:
					<?php } ?>
					</p>
					<ul class="cont-adr">
					<?php if(get_locale() == 'ru_RU') { ?>
						<?php if(get_theme_mod('adres1') != ''):?>							
						<li><?php echo get_theme_mod('adres1'); ?></li>
						<?php endif; ?>	
						<?php if(get_theme_mod('adres2') != ''):?>							
						<li><?php echo get_theme_mod('adres2'); ?></li>
						<?php endif; ?>
					<?php } ?>
					<?php if(get_locale() == 'uk') { ?>
						<?php if(get_theme_mod('adres1ua') != ''):?>							
						<li><?php echo get_theme_mod('adres1ua'); ?></li>
						<?php endif; ?>	
						<?php if(get_theme_mod('adres2ua') != ''):?>							
						<li><?php echo get_theme_mod('adres2ua'); ?></li>
						<?php endif; ?>
					<?php } ?>
					</ul>?php } ?>
					</ul>
				</div>
				<div class="cont-in">
					<p class="cont-title">
					<?php if(get_locale() == 'ru_RU') { ?>
					Наши контакты:
					<?php } ?>
					<?php if(get_locale() == 'uk') { ?>
					Наші контакти:
					<?php } ?>
					</p>
					<ul class="cont-tel">		
						<?php if(get_theme_mod('namb1') != ''):?>
						<li><a href="tel:+38<?php echo str_replace(array(" ", ")", "(", "-"), "", get_theme_mod( 'namb1' ))?>" style="margin-right: 5px;"><?php echo get_theme_mod('namb1'); ?>,</a></li>
						<?php endif; ?>						
												
						<?php if(get_theme_mod('namb2') != ''):?>
						<li><a href="tel:+38<?php echo str_replace(array(" ", ")", "(", "-"), "", get_theme_mod( 'namb2' ))?>"><?php echo get_theme_mod('namb2'); ?></a></li>
						<?php endif; ?>
					</ul>
					<?php if(get_theme_mod('pochta') != ''):?>						
					<a class="cont-mail" href="mailto:<?php echo get_theme_mod('pochta'); ?>">
						<?php echo get_theme_mod('pochta'); ?>
					</a>
					<?php endif; ?>
					<ul class="cont-soc">
						<?php if(get_theme_mod('viber') != ''):?>						
						<li><a href="viber://chat?number=<?php echo get_theme_mod('viber'); ?>">
						<img src="<?php bloginfo('template_url'); ?>/images/icon/viber.svg">
						</a></li>
						<?php endif; ?>

						<?php if(get_theme_mod('telegram') != ''):?>						
						<li><a href="https://telegram.im/<?php echo get_theme_mod('telegram'); ?>" target="_blank">
						<img src="<?php bloginfo('template_url'); ?>/images/icon/telegram.svg">
						</a></li>
						<?php endif; ?>	
						<?php if(get_theme_mod('faceb') != ''):?>							
						<li><a href="<?php echo get_theme_mod('faceb'); ?>" target="_blank">
							<img src="<?php bloginfo('template_url'); ?>/images/icon/facebook.svg">
						</a></li>
						<?php endif; ?>
						
						<?php if(get_theme_mod('insta') != ''):?>							
						<li><a href="<?php echo get_theme_mod('insta'); ?>" target="_blank">
							<img src="<?php bloginfo('template_url'); ?>/images/icon/insta.svg">
						</a></li>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</header>	
	
<!-- POPAP MENU -->
<div class="pop-menu">
	<div class="content-menu-wrap">
		<div class="btn-cloused-wrap"><button class="btn-cloused"></button></div>
		<div class="content-menu">
			<?php wp_nav_menu(array(
				'theme_location' => 'mobile-menu',
				'container' => 'ul',
				'menu_class' => 'mobile-menu'
			)); ?>
		</div>
	</div>
</div>	