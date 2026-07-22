<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); wp_title(); ?></title>
	<?php wp_head(); ?>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-40013818-1', 'perevozki-dnepr.dp.ua');
	  ga('send', 'pageview');

	</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-143626134-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-143626134-1');
	</script>
</head>

<body>   
	<header class="header">
		<div class="container">
			<div class="header-wrap">
				<div class="header-logo">
					<?php if (is_front_page()){ ?>
						<div><span class="logo-i"></span>perevozki-dnepr<span class="logo-z">.dp.ua</span></div>
					<?php } else {?>
						<a href="<?php echo home_url(); ?>"><span class="logo-i"></span>perevozki-dnepr<span class="logo-z">.dp.ua</span></a>
					<?php } ?>
					<div class="htop-lang">
					<?php if(!dynamic_sidebar( 'lang' )): ?>
					<?php endif; ?>
					</div>
				</div>
				<div class="header-cont">
					<?php if(get_theme_mod('namb1') != ''):?>
						<a href="tel:+38<?php echo str_replace(array(" ", ")", "(", "-"), "", get_theme_mod( 'namb1' ))?>" class="h-tel">
							<?php echo get_theme_mod('namb1'); ?>
						</a>
					<?php endif; ?>	
					<?php if(get_theme_mod('namb2') != ''):?>
						<a href="tel:+38<?php echo str_replace(array(" ", ")", "(", "-"), "", get_theme_mod( 'namb2' ))?>" class="h-tel h-tel-t">
							<?php echo get_theme_mod('namb2'); ?>
						</a>		
					<?php endif; ?>	


					<?php if(get_theme_mod('insta') != ''):?>
						<a class="inst" href="<?php echo get_theme_mod('insta'); ?>" target="_blank">
							<img src="<?php bloginfo('template_url'); ?>/images/insta.svg">
						</a>	
					<?php endif; ?>	
					<?php if(get_theme_mod('viber') != ''):?>
						<a class="vib" href="viber://add?number=38<?php echo get_theme_mod('viber'); ?>">
							<img src="<?php bloginfo('template_url'); ?>/images/viber.svg">
						</a>
					<?php endif; ?>
					
					<?php if(get_theme_mod('telegram') != ''):?>
						<a class="tg" href="<?php echo get_theme_mod('telegram'); ?>" target="_blank">
							<img src="<?php bloginfo('template_url'); ?>/images/telegram.svg">
						</a>
					<?php endif; ?>
					
				</div>
				<a class="tel popup-tel-form" href="#ft-form"><img src="<?php bloginfo('template_url'); ?>/images/tel.svg"></a>
			</div>
		</div>
	</header>
	
	<nav class="nav">
		<span class="mob-sp">МЕНЮ</span>
		<div class="container">
			<?php wp_nav_menu(array(
					'theme_location' => 'header_menu',
					'container' => 'ul',
					'menu_class' => 'menu'
				)); ?>
		</div>
	</nav>