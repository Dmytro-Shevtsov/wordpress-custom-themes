<section class="crazy-bonuses">
	<div class="container">
		<div class="crazy-bonuses-wr">
		<?php
		$block_bonuses_about = get_field('block_bonuses_about');

		if( $block_bonuses_about ): ?>
			<div class="crazy-bonuses-logo">
				<img src="<?php bloginfo('template_url'); ?>/images/logo-club-gg.webp" alt="Club GG">
			</div>
			<div class="crazy-bonuses-flag">
				<img src="<?php bloginfo('template_url'); ?>/images/crazy-bonuses.svg" alt="Crazy bonuses">
			</div>
			<div class="crazy-bonuses-descr body-large"><?php echo esc_attr( $block_bonuses_about['text'] ); ?></div>
			<div class="crazy-bonuses-cards">
				<div class="bonus-card-100">
					<a href="<?php echo esc_attr( $block_bonuses_about['bonus_100'] ); ?>">
					<picture>
					<source srcset="<?php echo esc_url($block_bonuses_about['bonus_1_m']['url']); ?>" media="(max-width: 768px)">
					<img src="<?php echo esc_url($block_bonuses_about['bonus_1']['url']); ?>" alt="">
					</picture>
					</a>
				</div>			
				<div class="bonus-card-50"><picture>
					<source srcset="<?php echo esc_url($block_bonuses_about['bonus_2_m']['url']); ?>" media="(max-width: 768px)">
					<img src="<?php echo esc_url($block_bonuses_about['bonus_2']['url']); ?>" alt="">
				</picture></div>					
				<div class="bonus-card-20"><picture>
					<source srcset="<?php echo esc_url($block_bonuses_about['bonus_3_m']['url']); ?>" media="(max-width: 768px)">
					<img src="<?php echo esc_url($block_bonuses_about['bonus_3']['url']); ?>" alt="">
				</picture></div>				
			</div>
		<?php endif; ?>
		</div>
	</div>
</section>