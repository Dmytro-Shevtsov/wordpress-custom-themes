<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php bloginfo('name'); wp_title(); ?></title>
<?php wp_head(); ?>
<meta name="google-site-verification" content="wrsFZpdJcBszKctvq80yHnZiWCDu2UHg7nU9zM-DyuI" />
</head>

  <body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-101736741-1', 'auto');
  ga('send', 'pageview');

</script>
	<header>
		<div class="head-wite">
			<div class="container-content">
				<div class="head-left">
					<?php if(get_locale() == 'ru_RU') { ?>
					<a href="/"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" /></a>
					<p>бти-приват
					<span>техническая инвентаризация объектов недвижимости<br>
					<strong>"ФЛП Чайка А.Н."</strong></span></p>
					<?php } ?>
					<?php if(get_locale() == 'uk') { ?>
					<a href="/uk/"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" /></a>
					<p>БТІ-приват
					<span>технічна інвентаризація об'єктів нерухомості<br>
					<strong>"ФЛП Чайка А.Н."</strong></span></p>
					<?php } ?>
				</div>
				<div class="head-right">
					<a class="callme_viewform callme btn" href="#">
					<?php if(get_locale() == 'ru_RU') { ?>заказать звонок<?php } ?>
					<?php if(get_locale() == 'uk') { ?>замовити дзвінок<?php } ?></a>
					<p class="number">+38 (050) <span>579-44-80</span></p>
					<p class="number">+38 (067) <span>493-71-03</span></p>
					<p class="adres">
					<?php if(get_locale() == 'ru_RU') { ?>
					ул. Князя Владимира Великого 18, оф. 510-В<br>
					(ул. Плеханова, 18) г. Днепр, 49000.<br>
					<?php } ?>
					<?php if(get_locale() == 'uk') { ?>
					вул. Князя Володимира Великого 18, оф. 510-В<br>
					(вул. Плеханова, 18) м Дніпро, 49000.<br>
					<?php } ?>
					<a href="mailto:a.chayka1971@gmail.com">a.chayka1971@gmail.com</a></p>
					
				</div>
			</div>
		</div>
		<nav class="head-blak">
			<div class="container-content-menu">
				<?php wp_nav_menu( array( 'theme_location' => 'top_menu' ) ); ?>
				<div class="lang-menu">
					<?php if(!dynamic_sidebar( 'lang' )): ?>
					<?php endif; ?>
				</div>
			</div>
		</nav>
	</header>
	<div class="container-gray slider-cont">
		<div class="container-content">
			<?php if(get_locale() == 'ru_RU') { ?>
			<div class="slider">
				<?php echo do_shortcode('[metaslider id="33"]'); ?>
			</div>
			<div class="forms">
				<p>Заказать техпаспорт</p>
				<?php echo do_shortcode('[contact-form-7 id="62ec7a7"]'); ?>
			</div>
			<?php } ?>

			<?php if(get_locale() == 'uk') { ?>
			<div class="slider">
				<?php echo do_shortcode('[metaslider id="40"]'); ?>
			</div>
			<div class="forms">
				<p>Заказать техпаспорт</p>
				<?php echo do_shortcode('[contact-form-7 id="62ec7a7"]'); ?>
			</div>
			<?php } ?>
		</div>
	</div>