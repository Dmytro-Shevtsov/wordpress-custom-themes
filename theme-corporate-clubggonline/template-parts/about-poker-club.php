<section class="poker-club">
	<div class="container">
		<div class="poker-club-wr">
		<?php
		$block_stars_about = get_field('block_stars_about');
		if( $block_stars_about ): ?>

			<div class="poker-club-title"><h2 class="title-h2"><?php echo wp_kses_post( $block_stars_about['heading'] ); ?></h2></div>
			<div class="poker-club-star body-large">
				<span><?php echo esc_attr( $block_stars_about['item_1'] ); ?></span>
				<img src="<?php bloginfo('template_url'); ?>/images/icon/Star.svg" alt="hero-raiting">
				<span><?php echo esc_attr( $block_stars_about['item_2'] ); ?></span>
				<img src="<?php bloginfo('template_url'); ?>/images/icon/Star.svg" alt="hero-raiting">
				<span><?php echo esc_attr( $block_stars_about['item_3'] ); ?></span>
				<img src="<?php bloginfo('template_url'); ?>/images/icon/Star.svg" alt="hero-raiting">
				<span><?php echo esc_attr( $block_stars_about['item_4'] ); ?></span>
			</div>
			<div class="poker-club-descr body-small"><?php echo wp_kses_post( $block_stars_about['small_text'] ); ?></div>
			<div class="poker-club-buttons">
				
				<?php if(get_theme_mod('telegram_namb') != ''):?>
				<a target="_blank" href="<?php echo get_theme_mod('telegram_namb'); ?>" class="buttons button-blue-border"><span><img src="<?php bloginfo('template_url'); ?>/images/icon/Telegram.svg" alt="hero-raiting">לשיחה עם נציג/ה ב - Telegram</span></a>
				<?php endif; ?>
				
				<?php if(get_theme_mod('whats_namb') != ''):?>
				<a target="_blank" href="<?php echo get_theme_mod('whats_namb'); ?>" class="buttons button-green-border"><span><img src="<?php bloginfo('template_url'); ?>/images/icon/whatsapp-b.svg" alt="hero-raiting">הצטרף למועדון עכשיו</span></a>
				<?php endif; ?>
			</div>
		<?php endif; ?>
		</div>
	</div>
</section>