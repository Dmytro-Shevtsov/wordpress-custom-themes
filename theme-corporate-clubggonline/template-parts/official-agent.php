<section class="official-agent">
	<div class="container">
		<div class="official-agent-container">
		<?php
		$official_agent = get_field('official_agent');
		if( $official_agent ): ?>
			<div class="official-agent-title"><h2 class="title-h2"><?php echo esc_attr( $official_agent['title'] ); ?></h2></div>
			<div class="official-agent-img">
				<img src="<?php bloginfo('template_url'); ?>/images/agent-blur.webp" alt="סוכן קלאבג">
			</div>
			<div class="official-agent-wr body-medium">
				<div class="official-agent-in"><?php echo wp_kses_post( $official_agent['text_1'] ); ?></div>
				<div class="official-agent-in"><?php echo wp_kses_post( $official_agent['text_2'] ); ?></div>
			</div>
		<?php endif; ?>
		</div>
	</div>
</section>