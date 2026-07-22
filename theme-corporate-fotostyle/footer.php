	<footer>
		<div class="container">
			<div class="footer-wr">
				<div class="footer-cop">
					© 2016 - <?php echo date("Y"); ?> 
					<?php if(get_locale() == 'ru_RU') { ?>
					Магазин фотоуслуг "FotoStyle"
					<?php } ?>
					<?php if(get_locale() == 'uk') { ?>
					Магазин фотопослуг "FotoStyle"
					<?php } ?>
				</div>
				<div class="footer-web">
					<?php if(get_locale() == 'ru_RU') { ?>
					Разработка: <a href="https://t.me/webpro_ua" target="_blank">webpro_ua</a>
					<?php } ?>
					<?php if(get_locale() == 'uk') { ?>
					Розробка: <a href="https://t.me/webpro_ua" target="_blank">webpro_ua</a>
					<?php } ?>
				</div>
			</div>
		</div>
	</footer>
	
<!-- кнопка контакты -->
<a class="f-tel popap-form" href="#ct-form" onclick="return false;">
<div class="circlephone" style="transform-origin: center;"></div>
<div class="circle-fill" style="transform-origin: center;"></div>
<div class="img-circle" style="transform-origin: center;">
<div class="img-circleblock" style="transform-origin: center;">
<img src="<?php bloginfo('template_url'); ?>/images/icon/tel.svg">
</div>
</div>
</a>

<!-- форма с контакты -->
<div id="ct-form" class="mfp-hide white-popup">
	<div class="form-phone">
		<p class="form-time"><span class="ft-time"><img src="<?php bloginfo('template_url'); ?>/images/icon/clock.svg">9:00 - 19:00</span></p>
		<p class="form-time">
		<?php if(get_locale() == 'ru_RU') { ?>
		Приходите к нам в магазин:
		<?php } ?>
		<?php if(get_locale() == 'uk') { ?>
		Приходьте до нас у магазин:
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
	</div>
	<div class="form-phone">
		<p class="form-time">
		<?php if(get_locale() == 'ru_RU') { ?>
		Звоните нам по телефонам:
		<?php } ?>
		<?php if(get_locale() == 'uk') { ?>
		Телефонуйте нам за телефонами:
		<?php } ?>
		</p>
		<ul class="pop-ul-tel">		
			<?php if(get_theme_mod('namb1') != ''):?>
			<li><a href="tel:+38<?php echo str_replace(array(" ", ")", "(", "-"), "", get_theme_mod( 'namb1' ))?>"><?php echo get_theme_mod('namb1'); ?></a></li>
			<?php endif; ?>						
									
			<?php if(get_theme_mod('namb2') != ''):?>
			<li><a href="tel:+38<?php echo str_replace(array(" ", ")", "(", "-"), "", get_theme_mod( 'namb2' ))?>"><?php echo get_theme_mod('namb2'); ?></a></li>
			<?php endif; ?>
		</ul>
	</div>
	<div class="form-phone">
		<p class="form-time">
		<?php if(get_locale() == 'ru_RU') { ?>
		Или пишите в мессенджеры:
		<?php } ?>
		<?php if(get_locale() == 'uk') { ?>
		Або пишіть у месенджери:
		<?php } ?>
		</p>
		<ul class="pop-cont-soc">
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

<?php wp_footer(); ?>	
</body>
</html>