<section class="pre-footer">
	<div class="container">
		<div class="pre-footer-container">
			<div class="separate-block separate-block-prefut"></div>
			<div class="pre-footer-wr">
				<?php if(get_theme_mod('site_mail') != ''):?>			
				<div class="pre-footer-in pre-footer-in-mail">
					<div class="pre-footer-img">
						<img src="<?php bloginfo('template_url'); ?>/images/icon/mail.webp" alt="hero-separate">
					</div>
					<div class="pre-footer-cont">
						<span class="body-medium">אימייל תמיכה ראשית</span>
						<a class="title-h3" href="mailto:<?php echo get_theme_mod('site_mail'); ?>"><?php echo get_theme_mod('site_mail'); ?></a>
					</div>				
				</div>					
				<?php endif; ?>	
									
				<?php if(get_theme_mod('site_phone') != ''):?>				
				<div class="pre-footer-in pre-footer-in-buttons">
					<?php if(get_theme_mod('telegram_namb') != ''):?>
					<a target="_blank" href="<?php echo get_theme_mod('telegram_namb'); ?>" class="buttons button-blue-border"><span><img src="<?php bloginfo('template_url'); ?>/images/icon/Telegram.svg" alt="hero-raiting">לשיחה עם נציג/ה ב - Telegram</span></a>
					<?php endif; ?>
					
					<?php if(get_theme_mod('whats_namb') != ''):?>
					<a target="_blank" href="<?php echo get_theme_mod('whats_namb'); ?>" class="buttons button-green-border"><span><img src="<?php bloginfo('template_url'); ?>/images/icon/whatsapp-b.svg" alt="hero-raiting">הצטרף למועדון עכשיו</span></a>
					<?php endif; ?>
				</div>					
				<?php endif; ?>						
			</div>
			<div class="separate-block separate-block-prefut"></div>
		</div>
	</div>
</section>