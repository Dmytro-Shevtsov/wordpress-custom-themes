<section class="player-security">
	<div class="container">
		<div class="player-security-wr">
		<?php
		$safety_and_pizza = get_field('safety_and_pizza');
		if( $safety_and_pizza ): ?>
			<div class="player-security-in">
				<div class="player-security-img">
					<img src="<?php echo esc_url( $safety_and_pizza['picture_1']['url'] ); ?>" alt="" />
				</div>
				<div class="player-security-text">
					<div class="player-security-title title-h4"><?php echo esc_attr( $safety_and_pizza['heading_1'] ); ?></div>
					<div class="player-security-descr body-medium"><?php echo wp_kses_post( $safety_and_pizza['text_1'] ); ?></div>
				</div>
				
			</div>
			<div class="player-security-in right-img">
				<div class="player-security-img">
					<img src="<?php echo esc_url( $safety_and_pizza['picture_2']['url'] ); ?>" alt="פיצרים מיוחדים" />
				</div>
				<div class="player-security-text">
					<div class="player-security-title title-h4"><?php echo esc_attr( $safety_and_pizza['heading_2'] ); ?></div>
					<div class="player-security-descr body-medium"><?php echo wp_kses_post( $safety_and_pizza['text_2'] ); ?></div>
				</div>
				
			</div>
		<?php endif; ?>
		</div>
	</div>
</section>