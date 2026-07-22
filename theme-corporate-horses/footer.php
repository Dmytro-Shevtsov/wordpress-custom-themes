<footer class="footer">
	<div class="container">
		<div class="footer-wr">
			<div class="footer-top">
				<div class="footer-top-menu">
					<?php wp_nav_menu(array(
						'theme_location' => 'footer_menu',
						'container' => 'ul',
						'menu_class' => 'footer-menu-list',
					)); ?>
				</div>
				<div class="footer-soc soc-icons">
					<?php get_template_part('template-parts/soc-icons'); ?>
				</div>
			</div>
			<div class="footer-content">
				<div class="footer-content-text">
					<?php echo get_theme_mod('footer_text'); ?>
				</div>
				<div class="footer-content-menu">
					<?php wp_nav_menu(array(
						'theme_location' => 'footer_dop',
						'container' => 'ul',
					)); ?>
				</div>
				<div class="footer-cont">
					<ul class="footer-cont-ul">
					<?php if(get_theme_mod('site_phone_1') != ''):?>
						<li><a class="s-insta" href="tel:<?php echo str_replace(array(" ", ")", "(", "-", ","), "", get_theme_mod( 'site_phone_1' ))?>"><?php echo get_theme_mod('site_phone_1'); ?></a></li>
					<?php endif; ?>
					<?php if(get_theme_mod('site_phone_2') != ''):?>
						<li><a class="s-insta" href="tel:<?php echo str_replace(array(" ", ")", "(", "-", ","), "", get_theme_mod( 'site_phone_2' ))?>"><?php echo get_theme_mod('site_phone_2'); ?></a></li>
					<?php endif; ?>
					<?php if(get_theme_mod('site_mail_1') != ''):?>
						<li><a class="s-insta" href="mailto:<?php echo get_theme_mod('site_mail_1'); ?>"><?php echo get_theme_mod('site_mail_1'); ?></a></li>
					<?php endif; ?>
					<?php if(get_theme_mod('site_mail_2') != ''):?>
						<li><a class="s-insta" href="mailto:<?php echo get_theme_mod('site_mail_2'); ?>"><?php echo get_theme_mod('site_mail_2'); ?></a></li>
					<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			©2014 - <?php echo date_i18n('Y'); ?> Все права защищены
		</div>
	</div>
</footer>

<div class="button-up">
	<a href="#top"></a>
</div>

<?php wp_footer(); ?>
</body>
</html>