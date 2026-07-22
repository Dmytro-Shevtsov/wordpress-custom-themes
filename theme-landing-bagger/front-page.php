<?php get_header(); ?>

	<section class="jobs">
		<div class="container">
		<div class="section-title">
		<?php if(get_locale() == 'ru_RU') { ?>
		Наши работы
		<?php } ?>
		<?php if(get_locale() == 'uk') { ?>
		Наші роботи
		<?php } ?>
		</div>
		<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
			<article class="post">
				<?php the_content(); ?>
			</article>
		<?php endwhile; ?>
		<?php endif; ?>	
		</div>
	</section>
	
	<section class="price">
		<div class="price-wr">
			<div class="price-in price-left"></div>
			<div class="price-in price-right">
			<div class="price-right-wr">
				<div class="section-title">
				<?php if(get_locale() == 'ru_RU') { ?>
				Наши цены
				<?php } ?>
				<?php if(get_locale() == 'uk') { ?>
				Наші ціни
				<?php } ?>
				</div>
				<div class="price-desr"><?php the_field('txt-price'); ?></div>
				<?php if(get_locale() == 'ru_RU') { ?>
				<div class="price-price">от <span><?php the_field('ceny-ex'); ?></span> грн/час<br>
					минимальный заказа <span><?php the_field('time-ex'); ?></span> часа</div>
				<?php } ?>
				<?php if(get_locale() == 'uk') { ?>
				<div class="price-price">від <span><?php the_field('ceny-ex'); ?></span> грн/год<br>
					мінімальне замовлення <span><?php the_field('time-ex'); ?></span> години</div>
				<?php } ?>
				<?php if(get_theme_mod('header_namb1') != ''):?>
					<a class="price-btn" href="tel:<?php echo str_replace(array(" ", ")", "(", "-", "<span>", "</span>", ","), "", get_theme_mod( 'header_namb1' ))?>">
					<?php if(get_locale() == 'ru_RU') { ?>
					заказать экскаватор
					<?php } ?>
					<?php if(get_locale() == 'uk') { ?>
					замовити екскаватор
					<?php } ?></a>
				<?php endif; ?>
			</div>
			</div>
		</div>
	</section>	

	<section class="services">
		<div class="container">
			<div class="section-title">
				<?php if(get_locale() == 'ru_RU') { ?>
				Наши услуги
				<?php } ?>
				<?php if(get_locale() == 'uk') { ?>
				Наші послуги
				<?php } ?>
			</div>
			<ul class="services-wr">
				<li>
					<img src="<?php bloginfo('template_url'); ?>/images/icon/usl-1.png">
					<?php if(get_locale() == 'ru_RU') { ?>
					<span>Демонтаж зданий и сооружений</span>
					<?php } ?>
					<?php if(get_locale() == 'uk') { ?>
					<span>Демонтаж будівель та споруд</span>
					<?php } ?>
				</li>
				<li>
					<img src="<?php bloginfo('template_url'); ?>/images/icon/usl-2.png">
					<?php if(get_locale() == 'ru_RU') { ?>
					<span>Разработка котлована</span>
					<?php } ?>
					<?php if(get_locale() == 'uk') { ?>
					<span>Розробка котловану</span>
					<?php } ?>
				</li>
				<li>
					<img src="<?php bloginfo('template_url'); ?>/images/icon/usl-3.png">
					<?php if(get_locale() == 'ru_RU') { ?>
					<span>Рытьё траншей, каналов</span>
					<?php } ?>
					<?php if(get_locale() == 'uk') { ?>
					<span>Риття траншей, каналів</span>
					<?php } ?>
				</li>
				<li>
					<img src="<?php bloginfo('template_url'); ?>/images/icon/usl-4.png">
					<?php if(get_locale() == 'ru_RU') { ?>
					<span>Планировка территории, срез грунта</span>
					<?php } ?>
					<?php if(get_locale() == 'uk') { ?>
					<span>Планування території, зріз ґрунту</span>
					<?php } ?>
				</li>
				<li>
					<img src="<?php bloginfo('template_url'); ?>/images/icon/usl-5.png">
					<?php if(get_locale() == 'ru_RU') { ?>
					<span>Погрузка, вывоз грунта и мусора</span>
					<?php } ?>
					<?php if(get_locale() == 'uk') { ?>
					<span>Навантаження, вивезення ґрунту та сміття</span>
					<?php } ?>
				</li>
				<li>
					<img src="<?php bloginfo('template_url'); ?>/images/icon/usl-6.png">
					<?php if(get_locale() == 'ru_RU') { ?>
					<span>Обратная засыпка песком и песчано-гравийной смесью</span>
					<?php } ?>
					<?php if(get_locale() == 'uk') { ?>
					<span>Зворотна засипка піском та піщано-гравійною сумішшю</span>
					<?php } ?>
				</li>
				<li>
					<img src="<?php bloginfo('template_url'); ?>/images/icon/usl-7.png">
					<?php if(get_locale() == 'ru_RU') { ?>
					<span>Уплотнение грунта при строительстве</span>
					<?php } ?>
					<?php if(get_locale() == 'uk') { ?>
					<span>Ущільнення ґрунту при будівництві</span>
					<?php } ?>
				</li>
				<li>
					<img src="<?php bloginfo('template_url'); ?>/images/icon/usl-8.png">
					<?php if(get_locale() == 'ru_RU') { ?>
					<span>Работы с гидромолотом на базе экскаватора</span>
					<?php } ?>
					<?php if(get_locale() == 'uk') { ?>
					<span>Роботи з гідромолотом на базі екскаватора</span>
					<?php } ?>
				</li>
			</ul>
		</div>
	</section>	

	<section class="zakaz">
		<div class="container">
		<div class="section-title">
		<?php if(get_locale() == 'ru_RU') { ?>
		Как заказать услуги экскаватора в Днепре?
		<?php } ?>
		<?php if(get_locale() == 'uk') { ?>
		Як замовити послуги екскаватора в Дніпрі?
		<?php } ?>
		</div>
		<div class="zakaz-desc"><?php the_field('txt-zakaz'); ?></div>
		</div>
	</section>

	<section class="vigoda">
		<div class="container">
		<div class="section-title">
		<?php if(get_locale() == 'ru_RU') { ?>
		С нами аренда экскаватора в Днепре выгодна и удобна по следующим причинам:
		<?php } ?>
		<?php if(get_locale() == 'uk') { ?>
		З нами оренда екскаватора в Дніпрі вигідна та зручна з наступних причин:
		<?php } ?>
		</div>
		<ul class="vigoda-wr">
			<li class="vigoda-in">
				<div class="vigoda-img"><img src="<?php bloginfo('template_url'); ?>/images/icon/avtopark.svg"></div>
				<?php if(get_locale() == 'ru_RU') { ?>
				<span>Большой автопарк экскаваторов</span>
				<?php } ?>
				<?php if(get_locale() == 'uk') { ?>
				<span>Великий автопарк екскаваторів</span>
				<?php } ?>
			</li>
			<li class="vigoda-in">
				<div class="vigoda-img"><img src="<?php bloginfo('template_url'); ?>/images/icon/speed.svg"></div>
				<?php if(get_locale() == 'ru_RU') { ?>
				<span>Быстрая подача техники на объект</span>
				<?php } ?>
				<?php if(get_locale() == 'uk') { ?>
				<span>Швидка подача техніки на об'єкт</span>
				<?php } ?>
			</li>
			<li class="vigoda-in">
				<div class="vigoda-img"><img src="<?php bloginfo('template_url'); ?>/images/icon/best-price.svg"></div>
				<?php if(get_locale() == 'ru_RU') { ?>
				<span>Фиксированная цена на аренду экскаватора</span>
				<?php } ?>
				<?php if(get_locale() == 'uk') { ?>
				<span>Фіксована ціна на оренду екскаватора</span>
				<?php } ?>
			</li>
			<li class="vigoda-in">
				<div class="vigoda-img"><img src="<?php bloginfo('template_url'); ?>/images/icon/ok.svg"></div>
				<?php if(get_locale() == 'ru_RU') { ?>
				<span>Вся техника новая, в идеальном техническом состоянии</span>
				<?php } ?>
				<?php if(get_locale() == 'uk') { ?>
				<span>Вся техніка нова, в ідеальному технічному стані</span>
				<?php } ?>
			</li>
			<li class="vigoda-in">
				<div class="vigoda-img"><img src="<?php bloginfo('template_url'); ?>/images/icon/chauffeur.svg"></div>
				<?php if(get_locale() == 'ru_RU') { ?>
				<span>Водители-операторы имеют большой опыт работы</span>
				<?php } ?>
				<?php if(get_locale() == 'uk') { ?>
				<span>Водії-оператори мають великий досвід роботи</span>
				<?php } ?>
			</li>
			<li class="vigoda-in">
				<div class="vigoda-img"><img src="<?php bloginfo('template_url'); ?>/images/icon/calendar.svg"></div>
				<?php if(get_locale() == 'ru_RU') { ?>
				<span>Заказа техники в будни и выходные</span>
				<?php } ?>
				<?php if(get_locale() == 'uk') { ?>
				<span>Замовлення техніки в будні та вихідні</span>
				<?php } ?>
			</li>
			<li class="vigoda-in">
				<div class="vigoda-img"><img src="<?php bloginfo('template_url'); ?>/images/icon/winner.svg"></div>
				<?php if(get_locale() == 'ru_RU') { ?>
				<span>Идеальное соотношение цены и качества услуги</span>
				<?php } ?>
				<?php if(get_locale() == 'uk') { ?>
				<span>Ідеальне співвідношення ціни та якості послуги</span>
				<?php } ?>
			</li>
		</ul>
		<div class="vigoda-zak">
			<?php if(get_locale() == 'ru_RU') { ?>
			<span>Закажите услуги экскаватора у нас!</span>
			<?php } ?>
			<?php if(get_locale() == 'uk') { ?>
			<span>Замовте послуги екскаватора у нас!</span>
			<?php } ?>
			<?php if(get_theme_mod('header_namb1') != ''):?>
				<a class="vigoda-btn" href="tel:<?php echo str_replace(array(" ", ")", "(", "-", "<span>", "</span>", ","), "", get_theme_mod( 'header_namb1' ))?>">(096) 939-90-39</a>
			<?php endif; ?>
		</div>
		</div>
	</section>
<?php get_footer(); ?>