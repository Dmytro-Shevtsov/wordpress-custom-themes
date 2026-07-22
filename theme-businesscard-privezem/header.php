<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php bloginfo('template_url'); ?>/images/favicon.ico" rel="icon" type="image/x-icon" />
    <title><?php wp_title(); ?> - <?php bloginfo('name');?></title>

<meta name="description" content="<?php bloginfo('description'); ?>" />

	<?php wp_head(); ?>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '740862756757145');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=740862756757145&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
	
	
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-4NMR50XW6R"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-4NMR50XW6R');
</script>	


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-587256860"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-587256860');
</script>

	
</head>

<body>
	<header class="header">
		<div class="container">
			<div class="header-wr">
				<div class="logo">
					<?php if (is_front_page() || is_home()){ ?>
						privezem<span>.dp.ua</span>
					<?php } else {?>
						<a href="<?php echo home_url(); ?>">privezem<span>.dp.ua</span></a>
					<?php } ?>
				</div>
				<nav>
					<?php wp_nav_menu(array(
						'theme_location' => 'header_menu',
						'container' => 'ul',
						'menu_class' => 'menu'
					)); ?>
				</nav>
				<div class="lang">
					<?php if(!dynamic_sidebar( 'lang' )): ?>
					<?php endif; ?>	
				</div>
			</div>
		</div>
	</header>
	
	<?php if (is_front_page() || is_home()){ ?>
	<section class="slider">
		<div class="container">
			<h1><span><?php the_title(); ?></span></h1>
			<div class="slider-fon">
				<?php if(get_locale() == 'ru_RU') { ?>
				Для связи с нами
				<?php } ?>
				<?php if(get_locale() == 'uk') { ?>
				Для зв’язку з нами
				<?php } ?>
				<ul class="slider-ul">
					<?php if(get_theme_mod('header_namb1') != ''):?>
					<li><a href="tel:+38<?php echo str_replace(array(" ", ")", "(", "-", ","), "", get_theme_mod( 'header_namb1' ))?>">
						<?php echo str_replace(array("+38 ", ","), "", get_theme_mod( 'header_namb1' ))?>
					</a></li>
					<?php endif; ?>

					<?php if(get_theme_mod('header_namb2') != ''):?>
					<li><a href="tel:+38<?php echo str_replace(array(" ", ")", "(", "-", ","), "", get_theme_mod( 'header_namb2' ))?>">
						<?php echo str_replace(array("+38 ", ","), "", get_theme_mod( 'header_namb2' ))?>
					</a></li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</section>
	<?php } else {?>
	<section class="title-container">
		<div class="container">
			<?php if (is_category()){ ?>
			<h1><span><?php single_cat_title(); ?></span></h1>
			<?php } else {?>
			<h1><span><?php the_title(); ?></span></h1>
			<?php } ?>
		</div>
	</section>
	<?php } ?>
	
	<h1 class="category-title" style="display: none;">
		<?php if($katimg=get_field("katimg",get_category($cat))){?>
		<div class="title-img" class="category-title-img" 
		style="background: url('<?php echo $katimg;?>')"></div>
		<?php }?>
		<span><?php single_cat_title(); ?></span>
	</h1>