<section class="poker-games">
	<div class="container">
	<?php
	$block_poker_games = get_field('block_poker_games');
	if( $block_poker_games ): ?>
		<div class="poker-games-container">
			<div class="poker-games-title"><h2 class="title-h2"><?php echo esc_attr( $block_poker_games['first_heading'] ); ?></h2></div>
			<div class="poker-games-descr body-large"><?php echo esc_attr( $block_poker_games['second_heading'] ); ?></div>
		</div>
		
		
		<div class="poker-games-wr poker-games-descwr"><!-- Start -->
			<div class="poker-games-in">
				<div class="games-title title-h3"><?php echo esc_attr( $block_poker_games['headline_1'] ); ?></div>
				<div class="games-descr body-medium"><?php echo esc_attr( $block_poker_games['text_1'] ); ?></div>
				<div class="games-img">
					<img src="<?php echo esc_url( $block_poker_games['icon_1']['url'] ); ?>" alt="" />
				</div>
			</div>
			<div class="poker-games-in">
				<div class="games-title title-h3"><?php echo esc_attr( $block_poker_games['headline_2'] ); ?></div>
				<div class="games-descr body-medium"><?php echo esc_attr( $block_poker_games['text_2'] ); ?></div>
				<div class="games-img">
					<img src="<?php echo esc_url( $block_poker_games['icon_2']['url'] ); ?>" alt="" />
				</div>
			</div>
			<div class="poker-games-in">
				<div class="games-title title-h3"><?php echo esc_attr( $block_poker_games['headline_3'] ); ?></div>
				<div class="games-descr body-medium"><?php echo esc_attr( $block_poker_games['text_3'] ); ?></div>
				<div class="games-img">
					<img src="<?php echo esc_url( $block_poker_games['icon_3']['url'] ); ?>" alt="" />
				</div>
			</div>
		</div><!-- End -->

		<div class="slider-poker">
			<div class="swiper slider-poker-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="games-title title-h3"><?php echo esc_attr( $block_poker_games['headline_1'] ); ?></div>
						<div class="games-descr body-medium"><?php echo esc_attr( $block_poker_games['text_1'] ); ?></div>
						<div class="games-img">
							<img src="<?php echo esc_url( $block_poker_games['icon_1']['url'] ); ?>" alt="" />
						</div>
					</div>
					<div class="swiper-slide">
						<div class="games-title title-h3"><?php echo esc_attr( $block_poker_games['headline_2'] ); ?></div>
						<div class="games-descr body-medium"><?php echo esc_attr( $block_poker_games['text_2'] ); ?></div>
						<div class="games-img">
							<img src="<?php echo esc_url( $block_poker_games['icon_2']['url'] ); ?>" alt="" />
						</div>
					</div>
					<div class="swiper-slide">
						<div class="games-title title-h3"><?php echo esc_attr( $block_poker_games['headline_3'] ); ?></div>
						<div class="games-descr body-medium"><?php echo esc_attr( $block_poker_games['text_3'] ); ?></div>
						<div class="games-img">
							<img src="<?php echo esc_url( $block_poker_games['icon_3']['url'] ); ?>" alt="" />
						</div>
					</div>
				</div>
				<!-- Кнопки навигации -->
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
				<!-- Пагинация -->
				<div class="swiper-pagination"></div>
			</div>
		</div>

	<?php endif; ?>
	</div>
</section>