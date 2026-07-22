<footer class="footer">
	<div class="container">
		<div class="footer-wr">
			<div class="footer-in footer-left">
				<div class="footer-logo">
					<img src="<?php bloginfo('template_url'); ?>/images/LVC-logo.svg" alt="">
				</div>
				<?php if(get_theme_mod('footer_text') != ''):?>
				<div class="footer-text body-small">
				  <?php echo get_theme_mod('footer_text'); ?>
				</div>
				<?php endif; ?>
			</div>
			<div class="footer-in footer-right">
				<div class="footer-menu-title body-medium">תפריט</div>
				<div class=" body-small">
					<?php wp_nav_menu(array(
						'theme_location' => 'footer_menu',
						'container' => 'ul',
						'menu_class' => 'footer-menu-list',
					)); ?>
				</div>
				<div class="footer-soc-list body-small">
					<?php if(get_theme_mod('whats_namb') != ''):?>
					<li>
						<a target="_blank" href="<?php echo get_theme_mod('whats_namb'); ?>">WhatsApp</a>
						<img src="<?php bloginfo('template_url'); ?>/images/icon/whatsapp-clr.svg" alt="Instagram">
					</li>
					<?php endif; ?>	
										
					<?php if(get_theme_mod('insta_link') != ''):?>
					<li>
						<a target="_blank" href="<?php echo get_theme_mod('insta_link'); ?>">Instagram</a>
						<img src="<?php bloginfo('template_url'); ?>/images/icon/instagram-clr.svg" alt="Instagram">
					</li>
					<?php endif; ?>		
										
					<?php if(get_theme_mod('telegram_namb') != ''):?>
					<li>
						<a target="_blank" href="<?php echo get_theme_mod('telegram_namb'); ?>">Telegram</a>
						<img src="<?php bloginfo('template_url'); ?>/images/icon/telegram-clr.svg" alt="Instagram">
					</li>
					<?php endif; ?>	
				</div>
			</div>
		</div>
		<div class="footer-copyright body-small">
			<div class="footer-copyright-r"><?php echo get_theme_mod('footer_copyr_1'); ?></div>
			<div class="footer-copyright-l">
				<?php if(get_theme_mod('footer_copyr_2') != ''):?>
				<a href="<?php echo get_theme_mod('footer_copyr_2'); ?>">תקנון האתר</a>
				<?php endif; ?>	
			</div>
		</div>
	</div>
</footer>


<div class="bb-whatsapp">
	<?php if(get_theme_mod('whats_namb') != ''):?>
	<a target="_blank" href="<?php echo get_theme_mod('whats_namb'); ?>" class="buttons button-green-border"><span><img src="<?php bloginfo('template_url'); ?>/images/icon/whatsapp-b.svg" alt="hero-raiting">הירשם אצל סוכן</span></a>
	<?php endif; ?>
</div>
<div class="button-up">
	<a href="#top"><img src="<?php bloginfo('template_url'); ?>/images/icon/buttonup.png" alt=""></a>
</div>


<?php wp_footer(); ?>
</body>
</html>