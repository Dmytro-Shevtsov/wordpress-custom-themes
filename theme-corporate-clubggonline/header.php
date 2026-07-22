<!DOCTYPE html>
<html lang="he" dir="rtl">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="<?php echo esc_url(get_template_directory_uri()); ?>/images/og-image.jpg">
    <meta property="og:type" content="website">
    <title><?php echo esc_html(wp_get_document_title()); ?></title>
    <?php wp_head(); ?>
</head>


<body id="top" <?php body_class(); ?>>
<header class="header">
    <div class="container">
        <div class="header-wr">
            
            <div class="header-in logo">
				<a href="<?php echo esc_url(home_url()); ?>">
					<img src="<?php bloginfo('template_url'); ?>/images/LVC-logo.svg" alt="">
				</a>
            </div>
			<nav class="header-in header-nav" role="navigation">
				<?php wp_nav_menu(array(
					'theme_location' => 'header_menu',
					'container' => 'ul',
					'menu_class' => 'header-menu',
					'fallback_cb' => false, // Убираем стандартное меню, если меню не назначено
				)); ?>
			</nav>
			<?php if(get_theme_mod('whats_namb') != ''):?>
			<div class="header-in header-button">
				<a target="_blank" href="<?php echo get_theme_mod('whats_namb'); ?>" class="button-green">
					<img src="<?php bloginfo('template_url'); ?>/images/icon/whatsapp-b.svg" alt="hero-raiting">הירשם אצל סוכן
				</a>
			</div>
			<?php endif; ?>	
			<div class="m-munu-btn"><span></span></div>
        </div>
    </div>
</header>














