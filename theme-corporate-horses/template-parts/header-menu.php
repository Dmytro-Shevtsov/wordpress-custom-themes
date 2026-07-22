<nav class="header-nav" role="navigation">
    <div class="container">
		<div class="nav-wr">
			<?php wp_nav_menu(array(
				'theme_location' => 'header_menu',
				'container' => 'nav',
				'menu_class' => 'header-menu',
				'fallback_cb' => false,
			)); ?>
			<div class="header-data">
			<?php echo date_i18n('j F Y'); ?>
			<?php echo do_shortcode('[google-translator]'); ?>
			
			</div>
		</div>
    </div>
</nav>