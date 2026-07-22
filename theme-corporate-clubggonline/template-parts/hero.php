<section class="hero">
    <video class="videobg" autoplay muted loop playsinline>
        <source src="<?php bloginfo('template_url'); ?>/images/video_bg.mp4" type="video/mp4">
    </video>
	<div class="hero-content">
		<div class="container hero-container">
			<div class="hero-wrap">
				<div class="hero-title">
					<div class="hero-title-sm-logo">
						<img src="<?php bloginfo('template_url'); ?>/images/sm-logo-hero.svg" alt="Logo Las Vegas Club">
					</div>
					<div class="title-hero title-hero-img">
					<img src="<?php bloginfo('template_url'); ?>/images/Club.webp" alt="Las Vegas Club">
					<img src="<?php bloginfo('template_url'); ?>/images/Las-Vegas.webp" alt="Las Vegas Club">
					</div>
					<div class="separate-block">
						<img src="<?php bloginfo('template_url'); ?>/images/icon/kard.webp" alt="hero-separate">
					</div>
				</div>
				<div class="hero-descr title-h3 fc-yellow"><?php the_field('text_in_video_block'); ?></div>
				<div class="hero-buttons">
					<?php if(get_theme_mod('site_phone') != ''):?>
					<a target="_blank" href="<?php echo get_theme_mod('site_phone'); ?>" class="buttons buttons-transparent"><img src="<?php bloginfo('template_url'); ?>/images/icon/Mobile-phone.svg" alt="hero-raiting">הורדת אפליקציית ClubGG</a>
					<?php endif; ?>
					<?php if(get_theme_mod('whats_namb') != ''):?>
					<a target="_blank" href="<?php echo get_theme_mod('whats_namb'); ?>" class="buttons button-green-border"><span><img src="<?php bloginfo('template_url'); ?>/images/icon/whatsapp-b.svg" alt="hero-raiting">הירשם אצל סוכן</span></a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>