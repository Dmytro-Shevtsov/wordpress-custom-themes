	<footer class="footer">
		<div class="container">
			<div class="footer-top-wr">
				<div class="footer-top-in footer-slog">Найвигідніші ціни на оренду спецтехніки</div>
				<div class="footer-top-in footer-tel">
					<ul class="ul">
						<li class="ul-tel">дзвони прямо зараз</li>		
						<?php if(get_theme_mod('header_namb1') != ''):?>
						<li><a href="tel:<?php echo str_replace(array(" ", ")", "(", "-", "<span>", "</span>", ","), "", get_theme_mod( 'header_namb1' ))?>">
						<?php echo str_replace(array("+38 ", ","), "", get_theme_mod( 'header_namb1' ))?>
						</a></li>
						<?php endif; ?>						
												
						<?php if(get_theme_mod('header_namb2') != ''):?>
						<li><a href="tel:<?php echo str_replace(array(" ", ")", "(", "-", "<span>", "</span>"), "", get_theme_mod( 'header_namb2' ))?>">
						<?php echo str_replace(array("+38 "), "", get_theme_mod( 'header_namb2' ))?>
						</a></li>
						<?php endif; ?>
					</ul>
				</div>
			</div>
			<div class="footer-bott-wr">
				<div class="footer-bott-in footer-cop">© 2011 - <?php echo date("Y"); ?> «Спецтехніка Дніпро»</div>
				<div class="footer-bott-in footer-web">
					Розробка: <a href="https://t.me/webpro_ua" target="_blank">webpro_ua</a>
				</div>
			</div>
		</div>
	</footer>

<!-- форма с контакты -->
<div id="ft-form" class="mfp-hide white-popup">
	<div class="form-phone">
		<p class="form-time"><span class="ft-time"><img src="<?php bloginfo('template_url'); ?>/images/icon/clock.svg">7:00 - 21:00</span></p>
		<p class="form-time">Телефонуйте нам за телефонами:</p>

		<?php if(get_theme_mod('header_namb1') != ''):?>
		<a class="form-phone-a" href="tel:<?php echo str_replace(array(" ", ")", "(", "-", "<span>", "</span>", ","), "", get_theme_mod( 'header_namb1' ))?>">
		<?php echo str_replace(array("+38 ", ","), "", get_theme_mod( 'header_namb1' ))?>
		</a>
		<?php endif; ?>		
				
		<?php if(get_theme_mod('header_namb2') != ''):?>
		<a href="tel:<?php echo str_replace(array(" ", ")", "(", "-", "<span>", "</span>"), "", get_theme_mod( 'header_namb2' ))?>">
		<?php echo str_replace(array("+38 "), "", get_theme_mod( 'header_namb2' ))?>
		</a>
		<?php endif; ?>		

	</div>
</div>	

<?php wp_footer(); ?>
</body>
</html>