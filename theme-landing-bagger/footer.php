	<footer class="footer">
		<div class="container">
			<div class="footer-top-wr">
				<div class="footer-top-in footer-slog">
				<?php if(get_locale() == 'ru_RU') { ?>
				<span>Аренда экскаватора в Днепре</span>
				<?php } ?>
				<?php if(get_locale() == 'uk') { ?>
				<span>Оренда екскаватора в Дніпрі</span>
				<?php } ?>
				</div>
				<div class="footer-top-in footer-tel">
					<ul class="footer-ul">	
						<li class="footer-li-cont">
						<?php if(get_theme_mod('header_namb1') != ''):?>
						<a class="footer-a" href="tel:<?php echo str_replace(array(" ", ")", "(", "-", "<span>", "</span>", ","), "", get_theme_mod( 'header_namb1' ))?>">
						<?php echo str_replace(array("+38 ", ","), "", get_theme_mod( 'header_namb1' ))?>
						</a>
						<?php endif; ?>
						<?php if(get_theme_mod('header_viber') != ''):?>
						<a class="vib vib-desc" href="<?php echo get_theme_mod('header_viber'); ?>">
						<img src="<?php bloginfo('template_url'); ?>/images/icon/viber.svg">
						</a>
						<a class="vib vib-mob" href="<?php echo get_theme_mod('header_viber'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/icon/viber.svg"></a>
						<?php endif; ?>	
						
						<?php if(get_theme_mod('header_tel') != ''):?>
						<a class="telegr" href="<?php echo get_theme_mod('header_tel'); ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/icon/telegram.svg">
						</a>
						<?php endif; ?>
						</li>
						
						<li class="footer-li-graf">
						<?php if(get_theme_mod('grafik') != ''):?>
						<img src="<?php bloginfo('template_url'); ?>/images/icon/clock.svg">
						<?php if(get_locale() == 'ru_RU') { ?>
						<span>Рабочие часы: </span>
						<?php } ?>
						<?php if(get_locale() == 'uk') { ?>
						<span>Робочі години: </span>
						<?php } ?>
						
						<?php echo get_theme_mod('grafik'); ?>
						<?php endif; ?>
						</li>
					</ul>
				</div>
			</div>
			<div class="footer-bott-wr">
				<div class="footer-bott-in footer-cop">© 2011 - <?php echo date("Y"); ?>
				<?php if(get_locale() == 'ru_RU') { ?>
				<span> Услуги экскаватора</span>
				<?php } ?>
				<?php if(get_locale() == 'uk') { ?>
				<span> Послуги екскаватора</span>
				<?php } ?>
				</div>
				<div class="footer-bott-in footer-web">
					<a href="https://t.me/webpro_ua" target="_blank">
					<?php if(get_locale() == 'ru_RU') { ?>
					разработка: webpro_ua
					<?php } ?>
					<?php if(get_locale() == 'uk') { ?>
					розробка: webpro_ua
					<?php } ?>
					</a>
				</div>
			</div>
		</div>
	</footer>	

<?php wp_footer(); ?>
</body>
</html>