<section class="poker-slider">
	<div class="container">
	<?php
	$block_how = get_field('block_how');
	if( $block_how ): ?>
		<div class="poker-slider-container">
			<div class="poker-slider-title"><h2 class="title-h2"><?php echo esc_attr( $block_how['first_heading'] ); ?></h2></div>
			<div class="poker-slider-descr body-large"><?php echo esc_attr( $block_how['second_heading'] ); ?></div>
		</div>
		<div class="slider-container">
			<!-- Первый слайдер -->
			<div class="swiper swiper-1">
				<div class="swiper-wrapper horizontal-no-slider">
					<div class="swiper-slide"><!-- 3 -->
						<div class="slider-wr">				
							<div class="slider-in slider-text">
								<div class="slider-title title-h4" data-swiper-parallax="-60"><?php echo esc_attr( $block_how['title_slide_3'] ); ?></div>
								<div class="slider-descr body-medium">
								<?php echo wp_kses_post( $block_how['text_slide_3'] ); ?>
								</div>
								<div class="slider-icons" data-swiper-parallax="-20">
									<?php if ( !empty($block_how['app_store']) ): ?>
									<a target="_blank" href="<?php echo esc_attr( $block_how['app_store'] ); ?>"><img src="<?php bloginfo('template_url'); ?>/images/app-store.webp" alt="App Store"></a>
									<?php endif; ?>
									<?php if ( !empty($block_how['google_play']) ): ?>
									<a target="_blank" href="<?php echo esc_attr( $block_how['google_play'] ); ?>"><img src="<?php bloginfo('template_url'); ?>/images/google-play.webp" alt="Google Play"></a>
									<?php endif; ?>
<?php if ( !empty($block_how['link_windows']) ): ?>
<a target="_blank" href="<?php echo esc_attr( $block_how['link_windows'] ); ?>"><img src="<?php bloginfo('template_url'); ?>/images/windows-10.webp" alt="Windows 10"></a>
<?php endif; ?>
								</div>
							</div>
							
							<div class="slider-in slider-img" data-swiper-parallax="-10">
								<img src="<?php echo esc_url( $block_how['picture_of_slide_3']['url'] ); ?>" alt="" />
							</div>
						</div>				
					</div><!-- / 3 -->
					<div class="swiper-slide"><!-- 1 -->
						<div class="slider-wr">				
							<div class="slider-in slider-text">
								<div class="slider-title title-h4" data-swiper-parallax="-60"><?php echo esc_attr( $block_how['title_slide_1'] ); ?></div>
								
								<div class="slider-descr body-medium">
								<?php echo wp_kses_post( $block_how['text_slide_1'] ); ?>
								</div>

								<div class="slider-icons" data-swiper-parallax="-20">
									<?php if ( !empty($block_how['whatsapp-link']) ): ?>
									<a target="_blank" href="<?php echo esc_attr( $block_how['whatsapp-link'] ); ?>" class="buttons button-green-border"><span><img src="<?php bloginfo('template_url'); ?>/images/icon/whatsapp-b.svg" alt="">צור קשר עם סוכן</span></a>
									<?php endif; ?>
								</div>

							</div>
							
							<div class="slider-in slider-img" data-swiper-parallax="-10">
								<img src="<?php echo esc_url( $block_how['picture_of_slide_1']['url'] ); ?>" alt="" />
							</div>
						</div>				
					</div><!-- / 1 -->					
					<div class="swiper-slide"><!-- 2 -->
						<div class="slider-wr">				
							<div class="slider-in slider-text">
								<div class="slider-title title-h4" data-swiper-parallax="-60"><?php echo esc_attr( $block_how['title_slide_2'] ); ?></div>
								<div class="slider-descr body-medium">
								<?php echo wp_kses_post( $block_how['text_slide_2'] ); ?>
								</div>
							</div>
							
							<div class="slider-in slider-img" data-swiper-parallax="-10">
								<img src="<?php echo esc_url( $block_how['picture_of_slide_2']['url'] ); ?>" alt="" />
							</div>
						</div>				
					</div><!-- / 2 -->	
					
				</div>
				<!-- Пагинация и кнопки -->
				<div class="swiper-pagination swiper-pagination-1"></div>
			</div>
		</div>
	<?php endif; ?>
	</div>
</section>