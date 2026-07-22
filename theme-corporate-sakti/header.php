<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?php bloginfo('template_url'); ?>/images/favicon.ico" rel="icon" type="image/x-icon" />
    <title><?php bloginfo('name'); wp_title(); ?></title>
	<?php wp_head(); ?>
</head>
	<body>
		<header class="header">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-4 col-logo">
						<?php if(get_locale() == 'ru_RU') { ?>
						<a href="/"><img src="<?php bloginfo('template_url'); ?>/images/logo.png"></a>		
						<?php } ?>
						<?php if(get_locale() == 'uk') { ?>
						<a href="/"><img src="<?php bloginfo('template_url'); ?>/images/logo-ua.png"></a>
						<?php } ?>
					</div>
					<div class="col-lg-9 col-sm-8 col-hcont"><!-- проверка -->
						<ul class="tel-head">
							<li><a href="tel:+380676334148"><i class="fa fa-phone"></i> +38 (067) 633-41-48</a></li>
							<li><a href="tel:+380500879394"><i class="fa fa-phone"></i> +38 (050) 087-93-94</a></li>
						</ul>
						<?php if(get_locale() == 'ru_RU') { ?>
						<p class="h-al">Алюминиевые</p>
						<p class="h-ob">окна / двери / фасады <span>Гарантия, ремонт и обслуживание</span></p>										
						<?php } ?>
						<?php if(get_locale() == 'uk') { ?>
						<p class="h-al">Алюмінієві</p>
						<p class="h-ob">вікна / двері / фасади <span>Гарантія, ремонт і обслуговування</span></p>
						<?php } ?>
						
						<img class="h-prof visible-lg" src="<?php bloginfo('template_url'); ?>/images/prof.png">
					</div>
				</div>
			</div>
		</header>					
		<nav class="hidden-sm hidden-xs">
			<div class="container cont-menu">
				<?php wp_nav_menu(array(
					'theme_location' => 'header_menu',
					'container' => 'ul',
					'menu_class' => 'row menu'
				)); ?>
				<div class="lang-menu">
					<?php if(!dynamic_sidebar( 'lang' )): ?>
					<?php endif; ?>
				</div>
			</div>	
		</nav>

<div class="menu-mob">
<span class="menu-mob-span">Меню</span>
<button class="btn-mob"></button>
</div>		
<!-- POPAP MENU -->
<div class="pop-menu">
	<div class="content-menu-wrap">
		<div class="btn-cloused-wrap"><button class="btn-cloused"></button></div>
		<div class="content-menu">
			<?php wp_nav_menu(array(
				'theme_location' => 'header_menu',
				'container' => 'ul',
				'menu_class' => 'mobile-menu'
			)); ?>
		</div>
	</div>
</div>	