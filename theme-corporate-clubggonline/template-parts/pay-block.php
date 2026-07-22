<section class="pay-block">
	<div class="container">
		<div class="pay-container">
		<?php
		$block_methods = get_field('block_methods');
		if( $block_methods ): ?>
			<div class="pay-title"><h2 class="title-h2"><?php echo esc_attr( $block_methods['block_title'] ); ?></h2></div>
			<div class="pay-wrap">
				<div class="pay-in pay-in-1">
					<div class="pay-in-title title-h4"><?php echo esc_attr( $block_methods['heading_big_1'] ); ?></div>
					<div class="pay-in-sub-title body-large"><?php echo esc_attr( $block_methods['heading_small_1'] ); ?></div>
					<div class="pay-bit"><img src="<?php echo esc_url( $block_methods['picture_1']['url'] ); ?>" alt="" /></div>
				</div>
				<div class="pay-in pay-in-2">
					<div class="pay-in-title title-h4"><?php echo esc_attr( $block_methods['heading_big_2'] ); ?></div>
					<div class="pay-in-sub-title body-large"><?php echo esc_attr( $block_methods['heading_small_3'] ); ?></div>
					<div class="pay-bit pay-wisa"><img src="<?php echo esc_url( $block_methods['picture_2']['url'] ); ?>" alt="" /></div>
				</div>
				<div class="pay-in pay-in-3">
					<div class="pay-in-title title-h4"><?php echo esc_attr( $block_methods['heading_big_3'] ); ?></div>
					<div class="pay-in-sub-title body-large"><?php echo esc_attr( $block_methods['heading_small_3'] ); ?></div>
					<div class="pay-bit pay-bit-block">
					<img src="<?php bloginfo('template_url'); ?>/images/icon/Bit_logo.svg" alt="">
					<img src="<?php bloginfo('template_url'); ?>/images/icon/PayBox_logo.svg" alt="">
					</div>
				</div>
				<div class="pay-in pay-in-4">
					<div class="pay-in-title title-h4"><?php echo esc_attr( $block_methods['heading_big_4'] ); ?></div>
					<div class="pay-in-sub-title body-large"><?php echo esc_attr( $block_methods['heading_small_4'] ); ?></div>
					<div class="pay-bit"><img src="<?php echo esc_url( $block_methods['picture_4']['url'] ); ?>" alt="" /></div>
				</div>
				<div class="pay-in pay-in-5">
					<div class="pay-in-title title-h4"><?php echo esc_attr( $block_methods['heading_big_5'] ); ?></div>
					<div class="pay-bit pay-king"><img src="<?php echo esc_url( $block_methods['picture_5']['url'] ); ?>" alt="" /></div>
					<?php if(get_theme_mod('whats_namb') != ''):?>
					<div class="pay-in-btn">
						<a target="_blank" href="<?php echo get_theme_mod('whats_namb'); ?>" class="buttons button-green-border"><span><img src="<?php bloginfo('template_url'); ?>/images/icon/whatsapp-b.svg" alt="hero-raiting">הירשם אצל סוכן</span></a>
					</div>
				<?php endif; ?>	
				</div>
				<div class="pay-in pay-in-6">
					<div class="pay-in-title title-h4"><?php echo esc_attr( $block_methods['heading_big_6'] ); ?></div>
					<div class="pay-in-sub-title body-large"><?php echo esc_attr( $block_methods['heading_small_6'] ); ?></div>
					<div class="pay-bit"><img src="<?php echo esc_url( $block_methods['picture_6']['url'] ); ?>" alt="" /></div>
				</div>
			</div>
		<?php endif; ?>
		</div>
	</div>
</section>