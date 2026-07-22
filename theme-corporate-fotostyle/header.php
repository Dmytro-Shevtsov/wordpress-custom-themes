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
						<a href="<?php echo home_url(); ?>" class="logo">
						<img src="<?php bloginfo('template_url'); ?>/images/logo-fs.png" />
						</a>
						<?php } ?>
						<?php if(get_locale() == 'uk') { ?>
						<a href="<?php echo home_url(); ?>" class="logo">
						<img src="<?php bloginfo('template_url'); ?>/images/logo-fs.png" />
						</a>
						<?php } ?>
					</div>
					<div class="menu-lang">
						<?php wp_nav_menu(array(
							'theme_location' => 'top-menu',
							'container' => 'ul',
							'menu_class' => 'menu'
						)); ?>
						<div class="lang-bl">
							<?php if(!dynamic_sidebar( 'lang' )): ?>
							<?php endif; ?>
						</div>
					</div>
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
					</ul>
					<?php wp_reset_postdata(); ?>
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
					<?php wp_reset_postdata(); ?>
				</div>
			</div>
			
			<div class="slider-wr">
				<div class="slider-in">
					<?php if(get_locale() == 'ru_RU') { ?>
					<div class="zakaz-desc">
						<h2><span style="color: #ffdf00; font-size: 24pt;">Сделать онлайн заказ</span></h2>
						<p><span style="color: #ffdf00;">Вы можете добавить файлы до 25 мб, или прикрепить архив ZIP/RAR.</span></p>
						<p><span style="color: #ffdf00;"><strong>Принимаем в печать файлы ЛЮБЫХ форматов! </strong></span></p>
						<p><span style="color: #ffdf00;">Также можете задать все опции печати, такие как: формат, бумага, параметры обрезки, цветокоррекции и т.п. и в результате - получить самые высококачественные фотографии, выполненные нашими специалистами на самом современном оборудовании и бумаге!</span></p>
					</div>
					<?php } ?>
					<?php if(get_locale() == 'uk') { ?>
					<div class="zakaz-desc">
						<h2><span style="color: #ffdf00; font-size: 24pt;">Зробити онлайн замовлення</span></h2>
						<p><span style="color: #ffdf00;">Ви можете додати файли до 25 Мб, або прикріпити архів ZIP/RAR.</span></p>
						<p><span style="color: #ffdf00;"><strong>Приймаємо до друку файли БУДЬ-ЯКИХ форматів! </strong></span></p>
						<p><span style="color: #ffdf00;">Також можна встановити всі опції друку, такі як: формат, папір, параметри обрізки, корекції кольору і т.п. і в результаті – отримати найякісніші фотографії, виконані нашими фахівцями на найсучаснішому обладнанні та папері!</span></p>			
					</div>
					<?php } ?>
					
					<div class="zakaz-btn">
						<!-- кнопка заявка -->
						<a class="popap-form" href="#zak-form" onclick="return false;">
						<?php if(get_locale() == 'ru_RU') { ?>
						Заказать услугу
						<?php } ?>
						<?php if(get_locale() == 'uk') { ?>
						Замовити послугу
						<?php } ?>
						</a>
						<!-- форма с заявкой  -->
						<div id="zak-form" class="mfp-hide white-popup">
						<?php echo do_shortcode('[contact-form-7 id="76007c1"]'); ?>
						</div>
					</div>
				</div>
				<div class="slider-in">
					<?php echo do_shortcode('[metaslider id="459"]'); ?>
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