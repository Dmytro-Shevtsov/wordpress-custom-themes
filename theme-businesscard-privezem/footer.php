	<footer class="footer">
		<div class="container">
			<div class="footer-top-wr">
				<div class="footer-top-in footer-logo">Privezem.dp.ua</div>
				<div class="footer-top-in footer-tel">
					<ul class="ul">			
						<?php if(get_theme_mod('header_namb1') != ''):?>
						<li><a href="tel:+38<?php echo str_replace(array(" ", ")", "(", "-", ","), "", get_theme_mod( 'header_namb1' ))?>">
							<?php echo str_replace(array("+38 ", ","), "", get_theme_mod( 'header_namb1' ))?>
						</a></li>
						<?php endif; ?>

						<?php if(get_theme_mod('header_namb2') != ''):?>
						<li><a href="tel:+38<?php echo str_replace(array(" ", ")", "(", "-", ","), "", get_theme_mod( 'header_namb2' ))?>">
							<?php echo str_replace(array("+38 ", ","), "", get_theme_mod( 'header_namb2' ))?>
						</a></li>
						<?php endif; ?>
					</ul>
				</div>
			</div>
			<div class="footer-bott-wr">
				<div class="footer-bott-in footer-cop">© 2016 - <?php echo date("Y"); ?> 
				<?php if(get_locale() == 'ru_RU') { ?>
				Компания "Привезем" - Грузовые услуги г. Днепр
				<?php } ?>
				<?php if(get_locale() == 'uk') { ?>
				Компанія "Привезем"- Вантажні послуги м. Дніпро
				<?php } ?></div>
				<div class="footer-bott-in footer-soc">
					<?php if(get_theme_mod('header_viber') != ''):?>
					<a class="vib" target="_blank" href="<?php echo get_theme_mod('header_viber'); ?>">
						<img src="<?php bloginfo('template_url'); ?>/images/icon/viber.svg">
					</a>
					<?php endif; ?>										
					<?php if(get_theme_mod('header_tel') != ''):?>
					<a class="tg" target="_blank" href="<?php echo get_theme_mod('header_tel'); ?>">
						<img src="<?php bloginfo('template_url'); ?>/images/icon/telegram.svg">
					</a>
					<?php endif; ?>	
				</div>
			</div>
			<div class="wp-link">
				<a href="https://t.me/webpro_ua" target="_blank">
				<?php if(get_locale() == 'ru_RU') { ?>разработка: webpro_ua<?php } ?>
				<?php if(get_locale() == 'uk') { ?>розробка: webpro_ua<?php } ?>
				</a>	
			</div>
		</div>
	</footer>
	
	
	
	
	
	
	
	
	
<!-- кнопка контакты -->
<a class="f-tel popup-tel-form" href="#ft-form" onclick="return false;">
<div class="circlephone" style="transform-origin: center;"></div>
<div class="circle-fill" style="transform-origin: center;"></div>
<div class="img-circle" style="transform-origin: center;">
<div class="img-circleblock" style="transform-origin: center;">
<img src="<?php bloginfo('template_url'); ?>/images/icon/tel.svg">
</div>
</div>
</a>

<!-- форма с контакты -->
<div id="ft-form" class="mfp-hide white-popup">
	<div class="form-phone">
		<?php if(get_theme_mod('grafik') != ''):?>
		<p class="form-time"><span class="ft-time"><img src="<?php bloginfo('template_url'); ?>/images/icon/clock.svg"><?php echo get_theme_mod('grafik'); ?></span></p>
		<?php endif; ?>
		<?php if(get_locale() == 'ru_RU') { ?>
		<p class="form-time">Звоните нам по телефонам:</p>
		<?php } ?>
		<?php if(get_locale() == 'uk') { ?>
		<p class="form-time">Телефонуйте нам за телефонами:</p>
		<?php } ?>
		<?php if(get_theme_mod('header_namb1') != ''):?>
			<a href="tel:+38<?php echo str_replace(array(" ", ")", "(", "-", ","), "", get_theme_mod( 'header_namb1' ))?>">
				<?php echo str_replace(array("+38 ", ","), "", get_theme_mod( 'header_namb1' ))?>
			</a>
		<?php endif; ?>
		
		<span class="ft-gl"> - </span>
		
		<?php if(get_theme_mod('header_namb2') != ''):?>
			<a href="tel:+38<?php echo str_replace(array(" ", ")", "(", "-", ","), "", get_theme_mod( 'header_namb2' ))?>">
				<?php echo str_replace(array("+38 ", ","), "", get_theme_mod( 'header_namb2' ))?>
			</a>
		<?php endif; ?>
	</div>
	<?php if(get_locale() == 'ru_RU') { ?>
		<p class="form-time">Или пишите в мессенджеры:</p>
		<?php } ?>
		<?php if(get_locale() == 'uk') { ?>
		<p class="form-time">Або звертайтесь через мессенджери:</p>
		<?php } ?>
	<div class="d-bl">
		<?php if(get_theme_mod('header_viber') != ''):?>
		<a class="vib" target="_blank" href="<?php echo get_theme_mod('header_viber'); ?>">
			<img src="<?php bloginfo('template_url'); ?>/images/icon/viber.svg">
		</a>
		<?php endif; ?>											
		<?php if(get_theme_mod('header_tel') != ''):?>
		<a class="tg" target="_blank" href="<?php echo get_theme_mod('header_tel'); ?>">
			<img src="<?php bloginfo('template_url'); ?>/images/icon/telegram.svg">
		</a>
		<?php endif; ?>		
	</div>
</div>	


<!-- кнопка с формой -->
<a class="f-tel-f popup-tel-form" href="#ft-form-form" onclick="return false;">
<div class="circlephone" style="transform-origin: center;"></div>
<div class="circle-fill" style="transform-origin: center;"></div>
<div class="img-circle" style="transform-origin: center;">
<div class="img-circleblock" style="transform-origin: center;">
<img src="<?php bloginfo('template_url'); ?>/images/icon/chat.svg">
</div>
</div>
</a>
<!-- форма с формой -->
<div id="ft-form-form" class="mfp-hide white-popup white-big-popup">
	<?php if(get_locale() == 'ru_RU') { ?>
	<p class="ff-title">ПОЛУЧИТЕ БЕСПЛАТНУЮ КОНСУЛЬТАЦИЮ</p>
	<p class="ff-desc">Пишите нам в viber, telegram или на почту. Присылайте фото объекта.
Все обращения обрабатываются в рабочее время.</strong></p>
	<?php } ?>
	<?php if(get_locale() == 'uk') { ?>
	<p class="ff-title">ОТРИМАЙТЕ БЕЗКОШТОВНУ КОНСУЛЬТАЦІЮ</p>
	<p class="ff-desc">Пишіть нам в viber, telegram або ел.пошту.
Надсилайте фото об'єкта.
Всі звернення опрацьовуємо впродовж робочого часу.</strong></p>
	<?php } ?>
	<div class="ff-mess">
		<div class="ff-mess-wr">
			<div class="ff-mess-in in-vib">
				<img src="<?php bloginfo('template_url'); ?>/images/icon/viber-w.svg">
				<?php if(get_locale() == 'ru_RU') { ?><span>Напишите нам в Viber</span><?php } ?>
				<?php if(get_locale() == 'uk') { ?><span>Напишіть нам у Viber</span><?php } ?>
				<?php if(get_theme_mod('header_viber') != ''):?>
					<a class="vib" target="_blank" href="<?php echo get_theme_mod('header_viber'); ?>">
						<?php if(get_locale() == 'ru_RU') { ?>Написать<?php } ?>
						<?php if(get_locale() == 'uk') { ?>Написати<?php } ?>
					</a>
				<?php endif; ?>
			</div>
			<div class="ff-mess-in in-tel">
				<img src="<?php bloginfo('template_url'); ?>/images/icon/telegram-w.svg">
				<?php if(get_locale() == 'ru_RU') { ?><span>Напишите нам в Telegram</span><?php } ?>
				<?php if(get_locale() == 'uk') { ?><span>Напишіть нам у Telegram</span><?php } ?>
				<?php if(get_theme_mod('header_tel') != ''):?>
					<a class="tg" target="_blank" href="<?php echo get_theme_mod('header_tel'); ?>">
						<?php if(get_locale() == 'ru_RU') { ?>Написать<?php } ?>
						<?php if(get_locale() == 'uk') { ?>Написати<?php } ?>
					</a>
				<?php endif; ?>		
			</div>
		</div>
	</div>
	
	<div class="ff-form">
		<?php echo do_shortcode('[contact-form-7 id="f385eb6"]'); ?>
	</div>
</div>
<?php wp_footer(); ?>
</body>
</html>