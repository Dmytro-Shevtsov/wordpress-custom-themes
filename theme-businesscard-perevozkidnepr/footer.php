	<section class="sect-form">
		<div class="container">
			<div class="form-wrap">
				<div class="form-img">
					<img src="<?php bloginfo('template_url'); ?>/images/form-img.png">
				</div>
				<div class="form-form">
					<div class="form-title">
						<?php if(get_locale() == 'ru_RU') { ?>
						Оставляйте заявку
						<?php } ?>
						<?php if(get_locale() == 'uk') { ?>
						Залишайте заявку
						<?php } ?>
					</div>
					<div class="form-desc">
						<?php if(get_locale() == 'ru_RU') { ?>
						Свяжемся в течении 15 минут, подробно все расскажем, предложим лучшие условия
						<?php } ?>
						<?php if(get_locale() == 'uk') { ?>
						Зв'яжемося протягом 15 хвилин, детально все розповімо, запропонуємо найвигідніші умови
						<?php } ?>
					</div>
					<div class="form-content">
						<?php echo do_shortcode('[contact-form-7 id="6892728" title="Заявка звонка"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>	

	<footer class="footer">
		<div class="container">
			<div class="footer-wrap">
				<div class="footer-logo">
					<span class="footer-s"></span>perevozki-dnepr.dp.ua
				</div>
				<div class="footer-cont">
					<span class="ft-time">8:00 - 20:00</span>
					<div class="d-bl d-bl-a">
						<?php if(get_theme_mod('namb1') != ''):?>
							<a href="tel:+38<?php echo str_replace(array(" ", ")", "(", "-"), "", get_theme_mod( 'namb1' ))?>">
								<?php echo get_theme_mod('namb1'); ?>
							</a>
						<?php endif; ?>	
						<span class="ft-gl">&middot;</span>
						<?php if(get_theme_mod('namb2') != ''):?>
							<a href="tel:+38<?php echo str_replace(array(" ", ")", "(", "-"), "", get_theme_mod( 'namb2' ))?>">
								<?php echo get_theme_mod('namb2'); ?>
							</a>
						<?php endif; ?>	
					</div>
					<div class="d-bl">
					<?php if(get_theme_mod('insta') != ''):?>
						<a class="inst" href="<?php echo get_theme_mod('insta'); ?>" target="_blank">
							<img src="<?php bloginfo('template_url'); ?>/images/insta.svg">
						</a>
					<?php endif; ?>	

					<?php if(get_theme_mod('viber') != ''):?>
						<a class="vib" href="viber://add?number=38<?php echo get_theme_mod('viber'); ?>">
							<img src="<?php bloginfo('template_url'); ?>/images/viber.svg">
						</a>
					<?php endif; ?>

					<?php if(get_theme_mod('telegram') != ''):?>
						<a class="tg" href="<?php echo get_theme_mod('telegram'); ?>" target="_blank">
							<img src="<?php bloginfo('template_url'); ?>/images/telegram.svg">
						</a>
					<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="wp-link">
				Розробка: <a href="https://t.me/webpro_ua" target="_blank">webpro_ua</a>
			</div>
		</div>
	</footer>
		
<!-- форма заказать звонок -->
<div id="call-form" class="mfp-hide white-popup">
	<div class="form-phone">
		<p class="form-time"><span class="ft-time">8:00 - 20:00</span></p>
		<?php if(get_theme_mod('namb1') != ''):?>
			<a href="tel:+38<?php echo str_replace(array(" ", ")", "(", "-"), "", get_theme_mod( 'namb1' ))?>">
				<?php echo get_theme_mod('namb1'); ?>
			</a>
		<?php endif; ?>	
		<span class="ft-gl">&middot;</span>
		<?php if(get_theme_mod('namb2') != ''):?>
			<a href="tel:+38<?php echo str_replace(array(" ", ")", "(", "-"), "", get_theme_mod( 'namb2' ))?>">
				<?php echo get_theme_mod('namb2'); ?>
			</a>
		<?php endif; ?>	
	</div>
	<?php echo do_shortcode('[contact-form-7 id="6892728" title="Заявка звонка"]'); ?>
</div>
<!-- форма с авто -->
<div id="auto-form" class="mfp-hide white-popup">
	<div class="form-phone">
		<p class="form-time"><span class="ft-time">8:00 - 20:00</span></p>
		<?php if(get_theme_mod('namb1') != ''):?>
			<a href="tel:+38<?php echo str_replace(array(" ", ")", "(", "-"), "", get_theme_mod( 'namb1' ))?>">
				<?php echo get_theme_mod('namb1'); ?>
			</a>
		<?php endif; ?>	
		<span class="ft-gl">&middot;</span>
		<?php if(get_theme_mod('namb2') != ''):?>
			<a href="tel:+38<?php echo str_replace(array(" ", ")", "(", "-"), "", get_theme_mod( 'namb2' ))?>">
				<?php echo get_theme_mod('namb2'); ?>
			</a>
		<?php endif; ?>	
	</div>
	<?php echo do_shortcode('[contact-form-7 id="a52c7a3" title="Заявка Авто"]'); ?>
</div>	
<!-- форма с контакты -->
<div id="ft-form" class="mfp-hide white-popup">
	<div class="form-phone">
		<p class="form-time"><span class="ft-time">8:00 - 20:00</span></p>
		<?php if(get_theme_mod('namb1') != ''):?>
			<a href="tel:+38<?php echo str_replace(array(" ", ")", "(", "-"), "", get_theme_mod( 'namb1' ))?>">
				<?php echo get_theme_mod('namb1'); ?>
			</a>
		<?php endif; ?>	
		<span class="ft-gl">&middot;</span>
		<?php if(get_theme_mod('namb2') != ''):?>
			<a href="tel:+38<?php echo str_replace(array(" ", ")", "(", "-"), "", get_theme_mod( 'namb2' ))?>">
				<?php echo get_theme_mod('namb2'); ?>
			</a>
		<?php endif; ?>	
	</div>
	<div class="d-bl">
		<?php if(get_theme_mod('insta') != ''):?>
			<a class="inst" href="<?php echo get_theme_mod('insta'); ?>" target="_blank">
				<img src="<?php bloginfo('template_url'); ?>/images/insta.svg">
			</a>
		<?php endif; ?>	

		<?php if(get_theme_mod('viber') != ''):?>
			<a class="vib" href="viber://add?number=38<?php echo get_theme_mod('viber'); ?>">
				<img src="<?php bloginfo('template_url'); ?>/images/viber.svg">
			</a>
		<?php endif; ?>

		<?php if(get_theme_mod('telegram') != ''):?>
			<a class="tg" href="<?php echo get_theme_mod('telegram'); ?>" target="_blank">
				<img src="<?php bloginfo('template_url'); ?>/images/telegram.svg">
			</a>
		<?php endif; ?>
	</div>
</div>	

	
<?php wp_footer(); ?>
</body>
</html>