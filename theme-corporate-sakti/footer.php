		<footer class="footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-3 hidden-sm hidden-xs">
							
							<?php if(get_locale() == 'ru_RU') { ?>
							<p class="menu-foot-p">Продукция</p>	
							<?php } ?>
							<?php if(get_locale() == 'uk') { ?>
							<p class="menu-foot-p">Продукція</p>
							<?php } ?>
							<?php wp_nav_menu(array(
								'theme_location' => 'footer_menu',
								'container' => 'ul',
								'menu_class' => 'menu-foot'
							)); ?>
						</div>
						<div class="col-lg-4 col-md-3 col-sm-5 hidden-xs">
							
							<?php if(get_locale() == 'ru_RU') { ?>
							<img class="logo-foot" src="<?php bloginfo('template_url'); ?>/images/logo-foot.png">	
							<?php } ?>
							<?php if(get_locale() == 'uk') { ?>
							<img class="logo-foot" src="<?php bloginfo('template_url'); ?>/images/logo-foot-ua.png">
							<?php } ?>
						</div>
						<div class="col-lg-4 cont-foot col-md-6 col-sm-7 col-xs-12">
							
							<?php if(get_locale() == 'ru_RU') { ?>
							<p class="menu-foot-p">Контакты</p>	
							<?php } ?>
							<?php if(get_locale() == 'uk') { ?>
							<p class="menu-foot-p">Контакти</p>
							<?php } ?>
							<ul class="tel-foot">
								<li><i class="fa fa-phone"></i><a href="tel:+380676334148"> +38 (067) 633-41-48</a></li>
								<li><i class="fa fa-phone"></i><a href="tel:+380500879394"> +38 (050) 087-93-94</a></li>
								<li><i class="fa fa-envelope"></i><a href="mailto:info@sakti.dp.ua"> info@sakti.dp.ua</a></li>
								<li><i class="fa fa-envelope"></i><a href="mailto:sakti.ua@gmail.com"> sakti.ua@gmail.com</a></li>
							</ul>
						</div>
						<div class="copyr-wp-wr">
							<div class="copyr-wp">
								<?php if(get_locale() == 'ru_RU') { ?>
								<p class="copyr">САКТИ © 2017. Все права защищены.</p>	
								<?php } ?>
								<?php if(get_locale() == 'uk') { ?>
								<p class="copyr">САКТІ © 2017. Усі права захищені.</p>
								<?php } ?>

								<?php if(get_locale() == 'ru_RU') { ?>
								<p class="webpr">Разработка: <a href="https://t.me/webpro_ua" target="_blank">webpro_ua</a></p>	
								<?php } ?>
								<?php if(get_locale() == 'uk') { ?>
								<p class="webpr">Розробка: <a href="https://t.me/webpro_ua" target="_blank">webpro_ua</a></p>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
		</footer>

	<?php wp_footer(); ?>
  </body>
</html>