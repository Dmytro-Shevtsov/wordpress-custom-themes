<?php /* Template Name: Friends */ ?>
<?php get_header(); ?>

<section class="friends-page hero-friends" >
	<div class="container">
    <div class="friends-page-wr">
		<div class="hero-friends-in hero-friends-title">
			<h1 class="title-h2"><?php the_title(); ?></h1>
		</div> 
    </div>  
	</div>
</section>

<section class="friends-page-content">
	<div class="container">
    <div class="friends-content-wr">
		<?php if (get_field('text_block_2')): ?>
		<div class="friends-content-in">
			<div class="friends-content-img"><img src="<?php echo esc_url(get_field('icon_block_2')['url']); ?>" alt=""></div>
			<div class="friends-content-title"><?php the_field('text_block_2'); ?></div>
		</div> 
		<?php endif; ?>
		

		<?php if (get_field('text_block_1')): ?>
		<div class="friends-content-in">
			<div class="friends-content-img"><img src="<?php echo esc_url(get_field('icon_block_1')['url']); ?>" alt=""></div>
			<div class="friends-content-title"><?php the_field('text_block_1'); ?></div>
		</div> 
		<?php endif; ?>
    </div>  
	</div>
</section>

<section class="official-agent official-friend-agent">
	<div class="container">
		<div class="official-agent-container">
			<div class="official-agent-img">
				<img src="<?php bloginfo('template_url'); ?>/images/agent-blur.webp" alt="Official Agent">
			</div>
			<div class="official-agent-wr agent-frands">
				<?php if (get_field('text_before_link')): ?>
				<div class="official-agent-in"><h2>
					<?php the_field('text_before_link'); ?>
				</h2></div>
				<?php endif; ?>
				<div class="official-agent-in">
					<?php if(get_theme_mod('whats_namb') != ''):?>
					<a target="_blank" href="<?php echo get_theme_mod('whats_namb'); ?>" class="buttons button-green-border"><span><img src="<?php bloginfo('template_url'); ?>/images/icon/whatsapp-b.svg" alt="hero-raiting">הירשם אצל סוכן</span></a>
					<?php endif; ?>	
				</div>
			</div>
		</div>
	</div>
</section>

<section class="pre-footer">
	<div class="container">
		<div class="pre-footer-container">
			<div class="separate-block separate-block-prefut"></div>
			<div class="pre-footer-wr">
				<?php if(get_theme_mod('site_mail') != ''):?>			
				<div class="pre-footer-in">
					<div class="pre-footer-img">
						<img src="<?php bloginfo('template_url'); ?>/images/icon/mail.webp" alt="hero-separate">
					</div>
					<div class="pre-footer-cont">
						<span class="body-medium">אימייל תמיכה ראשית</span>
						<a class="title-h3" href="mailto:<?php echo get_theme_mod('site_mail'); ?>"><?php echo get_theme_mod('site_mail'); ?></a>
					</div>				
				</div>					
				<?php endif; ?>	
									
				<div class="pre-footer-in friend-buttons">
					<?php if(get_theme_mod('telegram_namb') != ''):?>
					<a target="_blank" href="<?php echo get_theme_mod('telegram_namb'); ?>" class="buttons button-blue-border"><span><img src="<?php bloginfo('template_url'); ?>/images/icon/Telegram.svg" alt="hero-raiting">לשיחה עם נציג/ה ב - Telegram</span></a>
					<?php endif; ?>
					
					<?php if(get_theme_mod('whats_namb') != ''):?>
					<a target="_blank" href="<?php echo get_theme_mod('whats_namb'); ?>" class="buttons button-green-border"><span><img src="<?php bloginfo('template_url'); ?>/images/icon/whatsapp-b.svg" alt="hero-raiting">הצטרף למועדון עכשיו</span></a>
					<?php endif; ?>
				</div>					
			</div>
			<div class="separate-block separate-block-prefut"></div>
		</div>
	</div>
</section>
<?php get_footer(); ?>