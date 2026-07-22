<!doctype html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap&subset=cyrillic" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); wp_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body>

<header class="header">
    <div class="container">
		<div class="phone">	
			<a href="tel:<?php echo str_replace(array(" ", ")", "(", "-"), "", get_theme_mod( 'tel_namb' ))?>">
			<?php echo str_replace(array("+38 "), "", get_theme_mod( 'tel_namb' ))?>
			</a>		
		</div>		

	</div>
	<div class="slider">
		<img src="https://excavatordnepr.dp.ua/wp-content/uploads/2024/05/slider.jpg">
	</div>
</header>
<!-- Uslugi -->
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>	
<section class="sect uslugi">
    <div class="container">
		<h2><?php the_title(); ?></h2>
		<h3><?php echo get_theme_mod('zagolov'); ?></h3>
		<div class="uslugi-content">
			<?php the_content(); ?>
		</div>
    </div>
</section>

<!-- Skidka -->
<section class="sect skidka">
    <div class="container">
		<h2>гарантія захисту від переплат</h2>
		<h3>Знайшли дешевше? Зменшимо ціну! <span>- Це 100% Вигоди!</span></h3>
		<div class="phone-white">
			<span>Телефонуйте просто зараз</span><br>
			<a class="skidka-a" href="tel:<?php echo str_replace(array(" ", ")", "(", "-"), "", get_theme_mod( 'tel_namb' ))?>">
			<?php echo str_replace(array("+38 "), "", get_theme_mod( 'tel_namb' ))?>
			</a>
		</div>
    </div>
</section>

<!-- Gallery -->
<section class="sect gallery">
    <div class="container">
		<h2>допоможемо вирішити будь-які завдання</h2>
		<h3>Підберемо спецтехніку конкретно під Ваші потреби!</h3>
		<div class="gallery-content">
			<div class="gallery-content-left">
				<p>За 12 років на ринку, ми встигли взяти участь в різних проектах!</p>
				<p><span>Власний автопарк спецтехніки</span> і багаторічний досвід, дозволяє здійснити <span>професійний підбір</span> спецтехніки конкретно під Ваші завдання!</p>
				<hr>
				<p>ЯКІСНИЙ ПІДБІР<br>
				економія до <span>50% БЮДЖЕТУ!</span></p>
				<h4><span class="proc">70%</span> <span>ПОВТОРНИХ</span> ЗВЕРНЕНЬ</h4>
			</div>
			<div class="gallery-content-right">
				<?php echo do_shortcode('[ngg src="galleries" ids="1" display="basic_thumbnail"]'); ?>
			</div>
		</div>
    </div>
</section>

<footer class="sect footer">
    <div class="container">
		<h2><span>ЗАЛИШИЛИСЯ</span> ПИТАННЯ</h2>
		<h3>Оренда спецтехніки в <span>“Екскаватор Дніпро”</span> - правильне і вигідне рішення.</h3>
		<div class="footer-content">
			<div class="footer-content-left">
				<ul class="footer-ul">
					<li class="li-time">
						<strong>Техніка вчасно!</strong>
						Ми працюємо без вихідних і не допускаємо затримок із відправленням спецтехніки на об'єкт клієнта
					</li>
					<li class="li-spec">
						<strong>Досвідчені фахівці!</strong>
						Вся наша техніка надається з досвідченим водієм, машиністом екскаватора, зі стажем роботи мініму 3 роки.
					</li>
					<li class="li-pay">
						<strong>Платіть тільки за оренду!</strong>
						Замовляючи техніку у нас, ви платите тільки за оренду, паливо залишається за наш рахунок!
					</li>
					<li class="li-tex">
						<strong>Справна техніка</strong>
						Будь-яка техніка здається в справному технічному стані, в разі відмови техніки, ми оперативно зробимо заміну на аналогічну!
					</li>
				</ul>
			</div>
			<div class="footer-content-right">
				<div class="phone-footer">
					<span>Телефонуйте просто зараз</span>
					<a href="tel:<?php echo str_replace(array(" ", ")", "(", "-"), "", get_theme_mod( 'tel_namb' ))?>">
						<?php echo str_replace(array("+38 "), "", get_theme_mod( 'tel_namb' ))?>
					</a>
				</div>
			</div>
		</div>
		
    </div>
</footer>
<div class="copyright">
	<div class="container">
		<div class="copyr-wr">
			<p><?php echo date("Y"); ?> Оренда екскаваторів Дніпро - www.excavatordnepr.dp.ua</p>
			<p>Розробка: <a href="https://t.me/webpro_ua" target="_blank">webpro_ua</a></p>
		</div>
	</div>
</div>
<?php endwhile; ?>
<?php endif; ?>	
<?php wp_footer(); ?>
</body>
</html>