<section class="poker-app">
	<div class="container">
		<div class="poker-app-container">
		<?php
			$block_poker_app = get_field('block_poker_app');
			if( $block_poker_app ): ?>		
			<div class="poker-app-title"><h2 class="title-h2"><?php echo wp_kses_post( $block_poker_app['block_header'] ); ?></h2></div>
			<div class="poker-app-wr">
				<div class="poker-app-in item-in-1">
					<div class="poker-app-in-blure">
						<div class="poker-app-img">
							<img src="<?php echo esc_url( $block_poker_app['icon_3']['url'] ); ?>" alt="" />
						</div>
						<div class="poker-app-descr body-medium"><?php echo esc_attr( $block_poker_app['text_3'] ); ?></div>
					</div>
				</div>
				<div class="poker-app-in item-in-2">
					<div class="poker-app-in-blure">
						<div class="poker-app-img">
							<img src="<?php echo esc_url( $block_poker_app['icon_2']['url'] ); ?>" alt="" />
						</div>
						<div class="poker-app-descr body-medium"><?php echo esc_attr( $block_poker_app['text_2'] ); ?></div>
					</div>
				</div>
				<div class="poker-app-in item-in-3">
					<div class="poker-app-in-blure">
						<div class="poker-app-img">
							<img src="<?php echo esc_url( $block_poker_app['icon_1']['url'] ); ?>" alt="" />
						</div>
						<div class="poker-app-descr body-medium"><?php echo esc_attr( $block_poker_app['text_1'] ); ?></div>
					</div>
				</div>
				<div class="poker-app-in item-in-4">
					<div class="poker-app-in-blure">
						<div class="poker-app-img">
							<img src="<?php echo esc_url( $block_poker_app['icon_6']['url'] ); ?>" alt="" />
						</div>
						<div class="poker-app-descr body-medium"><?php echo esc_attr( $block_poker_app['text_6'] ); ?></div>
					</div>
				</div>
				<div class="poker-app-in item-in-5">
					<div class="poker-app-in-blure">
						<div class="poker-app-img">
							<img src="<?php echo esc_url( $block_poker_app['icon_5']['url'] ); ?>" alt="" />
						</div>
						<div class="poker-app-descr body-medium"><?php echo esc_attr( $block_poker_app['text_5'] ); ?></div>
					</div>
				</div>
				<div class="poker-app-in item-in-6">
					<div class="poker-app-in-blure">
						<div class="poker-app-img">
							<img src="<?php echo esc_url( $block_poker_app['icon_4']['url'] ); ?>" alt="" />
						</div>
						<div class="poker-app-descr body-medium"><?php echo esc_attr( $block_poker_app['text_4'] ); ?></div>
					</div>
				</div>
			</div>
		<?php endif; ?>
		</div>
	</div>
</section>