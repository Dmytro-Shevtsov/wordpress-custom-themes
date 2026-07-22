<?php get_header(); ?>

	<section class="category">
		<div class="container">
			<div class="category-wr">
				<div class="category-in">
					<?php if(get_locale() == 'ru_RU') { ?>
					<a href="/category/uslugi-ekskavatora/">
						<?php 
						$image = get_field('foto_ekskavatora');
						if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
						<div class="category-gr">
							<div class="category-title">
								<span>Услуги Экскаватора</span>
							</div>
						</div>
					</a>
					<?php } ?>
					<?php if(get_locale() == 'uk') { ?>
					<a href="/uk/category/uslugi-ekskavatora/">
						<?php 
						$image = get_field('foto_ekskavatora');
						if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
						<div class="category-gr">
							<div class="category-title">
								<span>Послуги екскаватора</span>
							</div>
						</div>
					</a>
					<?php } ?>
				</div>
				<div class="category-in">
					<?php if(get_locale() == 'ru_RU') { ?>
					<a href="/category/uslugi-samosvala/">
						<?php 
						$image = get_field('foto_samosvala');
						if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
						<div class="category-gr">
							<div class="category-title">
								<span>Услуги самосвала</span>
							</div>
						</div>
					</a>
					<?php } ?>
					<?php if(get_locale() == 'uk') { ?>
					<a href="/uk/category/uslugi-samosvala/">
						<?php 
						$image = get_field('foto_samosvala');
						if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
						<div class="category-gr">
							<div class="category-title">
								<span>Послуги самоскида</span>
							</div>
						</div>
					</a>
					<?php } ?>
				</div>
			</div>
		
		</div>
	</section>

	<section class="services">
		<div class="container">
			<div class="section-title">
				<?php if(get_locale() == 'ru_RU') { ?>
				<span>Поможем вам с любой задачей</span>
				<?php } ?>
				<?php if(get_locale() == 'uk') { ?>
				<span>Допоможемо вам з будь-яким завданням</span>
				<?php } ?>
			</div>
			<div class="services-wr">
				<?php
				$id = 3;
				$posts_about = new WP_Query(array('cat' => $id, 'posts_per_page' => 100, 'order' => 'DESC'));
				?>
				<?php if ( $posts_about->have_posts() ) : ?>				
				<?php while ( $posts_about->have_posts() ) : $posts_about->the_post(); ?>
			
				<div class="services-in">
					<div class="services-img">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					</div>
					<div class="services-main">
						<div class="services-title"><?php the_title(); ?></div>
						<div class="services-desc"><?php the_excerpt(); ?></div>
					</div>
					<div class="services-btn">
						<a href="<?php the_permalink(); ?>">
						<?php if(get_locale() == 'ru_RU') { ?>подробней<?php } ?>
						<?php if(get_locale() == 'uk') { ?>подробиці<?php } ?>
						</a>
					</div>
				</div>
				
				<?php endwhile; ?>				
				<?php else: ?>	
				<?php endif; ?>	
			</div>
			<?php wp_reset_postdata(); ?>
		</div>
	</section>	
	
	<section class="target">
		<div class="container">
			<div class="target-title">
				<?php if(get_locale() == 'ru_RU') { ?>
				<span>наша цель</span>
				<?php } ?>
				<?php if(get_locale() == 'uk') { ?>
				<span>Наша мета</span>
				<?php } ?>
			</div>
			<div class="target-desc">
				<?php if(get_locale() == 'ru_RU') { ?>
				Заказав <span>наши услуги</span>,<br> Вы <span>остались довольны</span> результатом
				<?php } ?>
				<?php if(get_locale() == 'uk') { ?>
				Замовивши <span>наші послуги</span>,<br> Ви <span>залишились задоволені</span> результатом
				<?php } ?>
			</div>
		</div>
	</section>	
	
	<section class="price">
		<div class="container">
			<div class="section-title">
				<?php if(get_locale() == 'ru_RU') { ?>
				<span>наши цены</span>
				<?php } ?>
				<?php if(get_locale() == 'uk') { ?>
				<span>наші ціни</span>
				<?php } ?>
			</div>
			<div class="price-wr">
				<div class="price-in">
					<div class="price-img">
						<?php 
						$image = get_field('ceny-foto-ex');
						if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
					</div>
					<div class="price-pr">
						<?php if(get_locale() == 'ru_RU') { ?>
						<span>от <?php the_field('ceny-cena-ex'); ?> грн/час</span>
						<?php } ?>
						<?php if(get_locale() == 'uk') { ?>
						<span>від <?php the_field('ceny-cena-ex'); ?> грн/год.</span>
						<?php } ?>
					</div>
					<div class="price-title">
						<?php the_field('ceny-zagolovok-ex'); ?>
					</div>
				</div>
				<div class="price-in">
					<div class="price-img">
						<?php 
						$image = get_field('ceny-foto-sm');
						if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
					</div>
					<div class="price-pr">
						<?php if(get_locale() == 'ru_RU') { ?>
						<span>от <?php the_field('ceny-cena-sm'); ?> грн/час</span>
						<?php } ?>
						<?php if(get_locale() == 'uk') { ?>
						<span>від <?php the_field('ceny-cena-sm'); ?> грн/год.</span>
						<?php } ?>
					</div>
					<div class="price-title">
						<?php the_field('ceny-zagolovok-sm'); ?>
					</div>
				</div>
				<div class="price-in">
					<div class="price-img">
						<?php 
						$image = get_field('ceny-foto-gm');
						if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
					</div>
					<div class="price-pr">
						<?php if(get_locale() == 'ru_RU') { ?>
						<span>от <?php the_field('ceny-cena-gm'); ?> грн/час</span>
						<?php } ?>
						<?php if(get_locale() == 'uk') { ?>
						<span>від <?php the_field('ceny-cena-gm'); ?> грн/год.</span>
						<?php } ?>
					</div>
					<div class="price-title">
						<?php the_field('ceny-zagolovok-gm'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>	
	
	<section class="zakaz">
		<div class="container">
			<?php if(get_locale() == 'ru_RU') { ?>
			<p class="zakaz-right">Мы выполняем <span>более 45 заказов в день</span></p>
			<p class="zakaz-left"><span>Всегда рады</span> новым партнерам!</p>
			<?php } ?>
			<?php if(get_locale() == 'uk') { ?>
			<p class="zakaz-right">Ми виконуємо <span>більше 45 замовлень в день.</span></p>
			<p class="zakaz-left"><span>Завжди раді</span> новим партнерам!</p>
			<?php } ?>
		</div>
	</section>	

	<section class="advants">
		<div class="container">
			<div class="section-title">
				<?php if(get_locale() == 'ru_RU') { ?>
				<span>наши преимущества</span>
				<?php } ?>
				<?php if(get_locale() == 'uk') { ?>
				<span>Наші переваги</span>
				<?php } ?>
			</div>
			<div class="advants-wr">
				<div class="advants-in">
					<div class="advants-icon">
						<img src="<?php bloginfo('template_url'); ?>/images/icon/zakaz.svg">
					</div>
					<div class="adv-desc">
						<div class="advants-desc">
							<?php if(get_locale() == 'ru_RU') { ?>
							При наличии свободной техники или раннего заказа, то "сегодня на сейчас"
							<?php } ?>
							<?php if(get_locale() == 'uk') { ?>
							Завчасно плануємо всі завдання</span>
							<?php } ?>
						</div>
					</div>
					<div class="advants-title">
						<?php if(get_locale() == 'ru_RU') { ?>
						Заказ техники<br>«сегодня на завтра»
						<?php } ?>
						<?php if(get_locale() == 'uk') { ?>
						<span>Замовлення техніки<br>«сьогодні на завтра» </span>
						<?php } ?>
					</div>
				</div>
				<div class="advants-in">
					<div class="advants-icon">
						<img src="<?php bloginfo('template_url'); ?>/images/icon/avtopark.svg">
					</div>
					<div class="adv-desc">
						<div class="advants-desc">
							<?php if(get_locale() == 'ru_RU') { ?>
							К Вашим услугам более 20 видов спецтехники.
							<?php } ?>
							<?php if(get_locale() == 'uk') { ?>
							До Ваших послуг більше 20 видів спеціалізованої техніки
							<?php } ?>
						</div>
					</div>
					<div class="advants-title">
						<?php if(get_locale() == 'ru_RU') { ?>
						Собственный<br>автопарк техники
						<?php } ?>
						<?php if(get_locale() == 'uk') { ?>
						Власний<br>автопарк техніки 
						<?php } ?>
					</div>
				</div>
				<div class="advants-in">
					<div class="advants-icon">
						<img src="<?php bloginfo('template_url'); ?>/images/icon/doverie.svg">
					</div>
					<div class="adv-desc">
						<div class="advants-desc">
							<?php if(get_locale() == 'ru_RU') { ?>
							Уже много лет помогаем вывозить мусор с Вашего дома, склада, офиса, гаража или участка.
							<?php } ?>
							<?php if(get_locale() == 'uk') { ?>
							Ми вже більше 15 років допомагаємо вивозити сміття з Вашого двору, складу чи офісу
							<?php } ?>
						</div>
					</div>
					<div class="advants-title">
						<?php if(get_locale() == 'ru_RU') { ?>
						15 лет доверия<br>в Днепре
						<?php } ?>
						<?php if(get_locale() == 'uk') { ?>
						15 років довіри<br>в Дніпрі 
						<?php } ?>
					</div>
				</div>
				<div class="advants-in">
					<div class="advants-icon">
						<img src="<?php bloginfo('template_url'); ?>/images/icon/oplata.svg">
					</div>
					<div class="adv-desc">
						<div class="advants-desc">
							<?php if(get_locale() == 'ru_RU') { ?>
							Наличный и безналичный расчет.
							<?php } ?>
							<?php if(get_locale() == 'uk') { ?>
							Готівковий та безготівковий розрахунок
							<?php } ?>
						</div>
					</div>
					<div class="advants-title">
						<?php if(get_locale() == 'ru_RU') { ?>
						Удобный способ<br>оплаты
						<?php } ?>
						<?php if(get_locale() == 'uk') { ?>
						Зручний спосіб<br>оплати  
						<?php } ?>
					</div>
				</div>
				<div class="advants-in">
					<div class="advants-icon">
						<img src="<?php bloginfo('template_url'); ?>/images/icon/skidka.svg">
					</div>
					<div class="adv-desc">
						<div class="advants-desc">
							<?php if(get_locale() == 'ru_RU') { ?>
							Постоянным клиентам скидки!
							<?php } ?>
							<?php if(get_locale() == 'uk') { ?>
							Першочергова подача техніки для постійних замовників
							<?php } ?>
						</div>
					</div>
					<div class="advants-title">
						<?php if(get_locale() == 'ru_RU') { ?>
						Скидки постоянным<br>клиентам
						<?php } ?>
						<?php if(get_locale() == 'uk') { ?>
						Знижки постійним<br>клієнтам 
						<?php } ?>
					</div>
				</div>
				<div class="advants-in">
					<div class="advants-icon">
						<img src="<?php bloginfo('template_url'); ?>/images/icon/consultation.svg">
					</div>
					<div class="adv-desc">
						<div class="advants-desc">
							<?php if(get_locale() == 'ru_RU') { ?>
							Поможем подобрать необходимую технику и её количество.
							<?php } ?>
							<?php if(get_locale() == 'uk') { ?>
							Допоможемо підібрати необхідну техніку та її кількісь
							<?php } ?>
						</div>
					</div>
					<div class="advants-title">
						<?php if(get_locale() == 'ru_RU') { ?>
						Бесплатная<br>консультация
						<?php } ?>
						<?php if(get_locale() == 'uk') { ?>
						Безкоштовна<br>консультація 
						<?php } ?>
					</div>
				</div>
				<div class="advants-in">
					<div class="advants-icon">
						<img src="<?php bloginfo('template_url'); ?>/images/icon/nadejnost.svg">
					</div>
					<div class="adv-desc">
						<div class="advants-desc">
							<?php if(get_locale() == 'ru_RU') { ?>
							Вы платите только за выполненный объём работ. Никаких посредников.
							<?php } ?>
							<?php if(get_locale() == 'uk') { ?>
							Ви сплачуєте тільки за виконаний об’єм робіт. Ніяких посередників
							<?php } ?>
						</div>
					</div>
					<div class="advants-title">
						<?php if(get_locale() == 'ru_RU') { ?>
						Надёжно
						<?php } ?>
						<?php if(get_locale() == 'uk') { ?>
						Надійно
						<?php } ?>
					</div>
				</div>
				<div class="advants-in">
					<div class="advants-icon">
						<img src="<?php bloginfo('template_url'); ?>/images/icon/kompleks.svg">
					</div>
					<div class="adv-desc">
						<div class="advants-desc">
							<?php if(get_locale() == 'ru_RU') { ?>
							Экскаватор+ КАМАЗ., КАМАЗ+ грузчики. Доставка сыпучих  стройматериалов от 10 тонн песка, щебня, отсева, глины, грунта и пр.
							<?php } ?>
							<?php if(get_locale() == 'uk') { ?>
							Экскаватор+КамЗ, КамЗ+вантажники. Доставка від 10 тон: пісок, відсів, щебінь, глину, ґрунт, каміння на підсипку та ін.)
							<?php } ?>
						</div>
					</div>
					<div class="advants-title">
						<?php if(get_locale() == 'ru_RU') { ?>
						Комплексные<br>услуги
						<?php } ?>
						<?php if(get_locale() == 'uk') { ?>
						Комплексні<br>послуги
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section>	




<center>
<div style="max-width:1200px;text-align: left;padding:10px;font-size:17px;color:#000;line-height: 1.2;">

<?php if(get_locale() == 'ru_RU') { ?>

Планируете строительство или ремонт в городе Днепр, но не знаете, где найти лучшее оборудование для выполнения вашего проекта? PRIVEZEM.DP.UA – ваш надежный партнер в мире строительства, ремонта и перевозок весом от 10 тонн.
<br><br>
 Наша компания специализируется на: услуги экскаватора-погрузчика, аренде гидромолота и самосвала, чтобы обеспечить вас всем необходимым для успешного выполнения любых строительных задач. Наши работники помогут Вам: <a href="https://privezem.dp.ua/ru/vyvoz-stroitelnogo-musora-i-hlama/">вывезти строительный мусор</a>, хлам, грунт и т.д. Лучшая <a href="https://privezem.dp.ua/ru/dostavka-pesok-otsev-shcheben/">доставка песка, отсева и щебня в Днепр</a>: быстро, надежно и удобно благодаря нашей спецтехнике и команде профессионалов.		

<br><br>

<a href="https://privezem.dp.ua/ru/uslugi-arenda-ekskavatora/">Услуги экскаватора и гидромолота</a> в г. Днепр: Все, что нужно для эффективной разработки котлована, расчистки участка, копания траншеи, фундамента, ямы, выемки и транспортировки грунта, а также демонтажных работ и т.д.
<br><br>
Наши экскаваторы-погрузчики - это мощные и надежные машины, которые обеспечат быструю и эффективную разработку любой территории. Они идеально подходят для выполнения различных задач, от выравнивания поверхности до удаления больших объектов.
<br><br>

<a href="https://privezem.dp.ua/ru/orenda-gidromolota/">Аренда гидромолота</a> в г. Днепр: Быстрое и эффективное разрушение твердых материалов.
<br><br>
Наш гидромолот – это инновационное устройство, которое поможет вам разрушать твердые материалы легко и быстро. Он идеально подходит для ремонтных работ, помогает демонтировать фундамент, стены, перегородки, стяжки и сносить все виды строительных конструкций.
<br><br>

<a href="https://privezem.dp.ua/category/uslugi-samosvala/">Услуги самосвала</a> в г. Днепр: Надежный и мощный транспорт для вывоза материалов.
<br><br>
Наши самосвалы – это незаменимый инструмент, который удовлетворит <a href="https://privezem.dp.ua/ru/vyvoz-grunta/">вывоз грунта</a>, строительного мусора, камня, песка, отсева, щебня, глины и других материалов со строительной площадки в городе Днепр. Они обеспечат вас надежной и быстрой доставкой материалов в нужные места в Днепре.



<h2>Почему выбирать нас?</h2>
<br>
<b>- Надежность:</b> Наше оборудование всегда готово к работе и обеспечивает высокую производительность.<br>
<b>- Профессионализм:</b> Наша команда опытных специалистов готова выполнить любые задачи с высоким качеством и своевременно. Мы понимаем важность скорости и надежности в выполнении работ, поэтому мы всегда стремимся удовлетворить потребности наших клиентов с максимальной эффективностью.
<br>
<b>- Гибкость:</b> Мы предлагаем широкий выбор моделей и конфигураций оборудования, чтобы удовлетворить ваши конкретные потребности.
<br>
<b>- Быстрая и удобная служба:</b> Мы понимаем, что время это деньги, поэтому предлагаем быстро и удобно <a href="https://privezem.dp.ua/ru/vyvoz-stroitelnogo-musora-i-hlama/">заказать вывоз мусора</a>. Просто свяжитесь с нашими менеджерами, предоставьте информацию об объеме и виде мусора, и мы обеспечим вам немедленный вывоз в удобное для вас время.


<h2>Цены на <a href="https://privezem.dp.ua/ru/vyvoz-stroitelnogo-musora-i-hlama/">вывоз мусора в Днепре</a>.</h2>
<br>
Планируете вывезти мусор в городе Днепр и интересуетесь стоимостью этой услуги? Наша компания готова предложить доступные и конкурентоспособные цены на вывоз мусора, обеспечивая при этом высокое качество обслуживания и надежность в выполнении каждого заказа.
<br><br>
Прозрачная и конкурентоспособная ценовая политика
Мы понимаем, что цена является одним из ключевых факторов при выборе услуги по вывозу мусора. Поэтому мы предлагаем прозрачную и конкурентоспособную ценовую политику, учитывающую реальные потребности наших клиентов. Наша стоимость услуги формируется в зависимости от объема и характера отходов мусора, но всегда остается доступной и привлекательной.
<br><br>
<h2>Как определяются <a href="https://privezem.dp.ua/ru/ceny/">цены на вывоз мусора</a>?</h2>
<br><br>
Цена на вывоз мусора зависит от следующих факторов:<br>
1. Объем мусора: чем больше объем отходов, тем выше будет стоимость услуги.<br>
2. Вид мусора: отдельные виды отходов могут потребовать специализированной обработки или утилизации, что также может повлиять на цену.<br>
3. Время и место: некоторые вывозные услуги могут иметь разную стоимость в зависимости от времени суток, дня недели и местоположения объекта.

<br><br>

<h2>Ориентировочные цены на <a href="https://privezem.dp.ua/ru/vyvoz-stroitelnogo-musora-i-hlama/">вывоз мусора в городе Днепр</a>:</h2>
<br>
• Вывоз стандартного мешка мусора – от 50 грн.<br>
• Вывоз грузового автомобиля – от 1000 грн.<br>
• Вывоз крупногабаритных отходов – от 1500 грн.
<br><br>
<h2>Ориентированные цены на наши услуги в городе Днепр.</h2><br>
Аренда экскаватора: 900 грн/час, мин. 3 лет.<br>
• Аренда гидромолота: 1200 грн/час, мин. 4 лет.<br>
• КамАЗ-самосвал, 10 тонн: от 1500 грн/2 часа.<br>
• КамАЗ+погрузка вручную: от 2500 грн.
<br><br>
<b>Кроме того, мы также предоставляем услуги доставки строительных материалов, которые могут быть использованы для укрепления свалки или других строительных проектов по г. Днепр:</b>
<br>
• <a href="https://privezem.dp.ua/ru/dostavka-pesok-otsev-shcheben/">Заказать песок</a> речной: 2700 грн. за 10 тонн.<br>
• Отсев: от 3500 грн. за 10 тонн.<br>
• Щебень: от 6000 грн. за 10 тонн.<br>
• Отвальный шлак: от 4800 грн. за 10 тонн.<br>
• Чернозем, глина, камни на подсыпку: по запросу.
<br><br>
Независимо от того, нужно ли вам вырыть яму, перевезти строительные материалы или <a href="https://privezem.dp.ua/ru/vyvoz-stroitelnogo-musora-i-hlama/">вывезти мусор в Днепре</a>, мы гарантируем вам высокий уровень обслуживания и надежное выполнение работ. Обращайтесь к нам, и мы с радостью поможем Вам осуществить любые строительные работы без лишних хлопот и стресса с комфортом и эффективностью!




<?php } ?>




<?php if(get_locale() == 'uk') { ?>



Плануєте будівництво або ремонт в місті Дніпро, але не знаєте, де знайти найкраще обладнання для виконання вашого проєкту? PRIVEZEM.DP.UA - ваш надійний партнер у світі будівництва, ремонту та перевезень вагою від 10 тон. Наша компанія спеціалізується на: послуги екскаватора-навантажувача, оренді гідромолота та самоскида, щоб забезпечити вас всім необхідним для успішного виконання будь-яких будівельних завдань. Наші працівники допоможуть Вам: <a href="https://privezem.dp.ua/vyvoz-stroitelnogo-musora-i-hlama/">вивезти будівельне сміття</a>, мотлох, грунт та ін. Найкраща <a href="https://privezem.dp.ua/dostavka-pesok-otsev-shcheben/">доставка піску, відсіву та щебеню</a> у м. Дніпро: швидко, надійно та зручно завдяки нашій спец-техніці та команді професіоналів.  
<br><br>
<a href="https://privezem.dp.ua/uslugi-arenda-ekskavatora/">Послуги екскаватора та гідромолота</a> у м. Дніпро: Все, що вам потрібно для ефективної розробки котловану, розчищення ділянки, копанні траншеї, фундаменту, ями, виїмки та транспортуванні грунту, а також демонтажних робіт та ін. 
<br><br>
Наші екскаватори-навантажувачі - це потужні та надійні машини, які забезпечать вам швидку та ефективну розробку будь-якої території. Вони ідеально підходять для виконання різноманітних завдань, від вирівнювання поверхні до видалення великих об'єктів.
<br><br>
<a href="https://privezem.dp.ua/orenda-gidromolota/">Оренда гідромолота</a> у м. Дніпро: Швидке та ефективне руйнування твердих матеріалів.

<br><br>
Наш гідромолот - це інноваційний пристрій, який допоможе вам руйнувати тверді матеріали легко та швидко. Він ідеально підходить для ремонтних робіт, допомагає демонтувати: фундамент, стіни, перегородки, стяжки  та зносити всі види будівельних конструкцій.
<br><br>
<a href="https://privezem.dp.ua/category/uslugi-samosvala/">Послуги самоскида</a> у м. Дніпро: Надійний та потужний транспорт для вивозу матеріалів.
<br><br>
Наші самоскиди - це незамінний інструмент, який задовільнить <a href="https://privezem.dp.ua/vyvoz-grunta/">вивіз ґрунту</a>, будівельного сміття, каменю, піску, відсіву, щебені, глини та інших матеріалів з будівельного майданчика у місті Дніпро. Вони забезпечать вас надійною та швидкою доставкою матеріалів у потрібні місця у Дніпрі.
<br><br>
<h2>Чому обирати нас?</h2>
<br>
<b>- Надійність:</b> Наше обладнання завжди готове до роботи та забезпечує високу продуктивність.<br>
<b>- Професійність:</b> Наша команда досвідчених фахівців готова виконати будь-які завдання з високою якістю та вчасно. Ми розуміємо важливість швидкості та надійності у виконанні робіт, тому завжди прагнемо задовольнити потреби наших клієнтів з максимальною ефективністю.<br>
<b>- Гнучкість:</b> Ми пропонуємо широкий вибір моделей та конфігурацій обладнання, щоб задовольнити ваші конкретні потреби.<br>
<b>- Швидка та зручна служба:</b> Ми розуміємо, що час - це гроші, тому пропонуємо швидко та зручно <a href="https://privezem.dp.ua/vyvoz-stroitelnogo-musora-i-hlama/">замовити вивіз сміття</a>. Просто зв'яжіться з нашими менеджерами, надайте інформацію про об'єм та вид сміття, і ми забезпечимо вам негайний вивіз у зручний для вас час.
<br>
<h2>Орієнтовані ціни на <a href="https://privezem.dp.ua/vyvoz-stroitelnogo-musora-i-hlama/">вивезення сміття у місті Дніпро</a></h2>
<br>
Плануєте вивезти сміття у місті Дніпро та цікавитеся вартістю цієї послуги? Наша компанія готова запропонувати вам доступні та конкурентоспроможні ціни на вивіз сміття, забезпечуючи при цьому високу якість обслуговування та надійність у виконанні кожного замовлення.
<br><br>
<b>Прозора та конкурентоспроможна цінова політика</b>
<br><br>
Ми розуміємо, що ціна є одним із ключових факторів при виборі послуги з вивезення сміття. Тому ми пропонуємо прозору та конкурентоспроможну цінову політику, яка враховує реальні потреби наших клієнтів. Наша вартість послуги формується в залежності від обсягу та характеру сміттєвих відходів, але завжди залишається доступною та привабливою.
<br><br>
<h2>Як визначаються <a href="https://privezem.dp.ua/ceny/">ціни на вивіз сміття</a>?</h2>
<br>
<b>Ціна на вивіз сміття залежить від таких факторів:</b>
<br>
1.	Обсяг сміття: чим більший обсяг відходів, тим вища буде вартість послуги<br>
2.	Вид сміття: окремі види відходів можуть вимагати спеціалізованої обробки або утилізації, що також може вплинути на ціну.<br>
3.	Час та місце: деякі вивізні послуги можуть мати різну вартість в залежності від часу доби, дня тижня та місця розташування об'єкту.
<br>

<h2>Орієнтовні ціни на <a href="https://privezem.dp.ua/vyvoz-stroitelnogo-musora-i-hlama/">вивіз сміття у місті Дніпро</a>:</h2>
<br>
•	Вивезення стандартного мішка сміття - від 50 грн.<br>
•	Вивезення вантажного автомобіля - від 1000 грн.<br>
•	Вивезення великогабаритних відходів - від 1500 грн.
<br>
<h2>Орієнтовані ціни на наші послуги у місті Дніпро.</h2><br>
Оренда екскаватора: 900 грн/год, мін. 3 год.<br>
•	Оренда гідромолота: 1200 грн/год, мін. 4 год.<br>
•	КамАЗ-самоскид, 10 тонн: від 1500 грн/ 2 год.<br>
•	КамАЗ+навантаження вручну: від 2500 грн.
<br><br>
Крім того, ми також надаємо послуги доставки будівельних матеріалів, які можуть бути використані для укріплення сміттєзвалища чи інших будівельних проектів в м. Дніпро:
<br><br>
•	<a href="https://privezem.dp.ua/dostavka-pesok-otsev-shcheben/">Замовити пісок</a> річковий: 2700 грн за 10 тонн.<br>
•	Відсів: від 3500 грн за 10 тонн.<br>
•	Щебінь: від 6000 грн за 10 тонн.<br>
•	Відвальний шлак: від 4800 грн за 10 тонн.<br>
•	Чорнозем, глина, каміння на підсипку: за запитом.
<br><br>
Незалежно від того, чи потрібно вам викопати яму, перевезти будівельні матеріали чи <a href="https://privezem.dp.ua/vyvoz-stroitelnogo-musora-i-hlama/">вивезти сміття в Дніпрі</a>, ми гарантуємо вам високий рівень обслуговування та надійне виконання робіт. Звертайтеся до нас, і ми з радістю допоможемо Вам здійснити будь-які будівельні  роботи без зайвих турбот та стресу з комфортом та ефективністю!

			
<?php } ?>

<br><br><br>

</div>
</center>


	
<?php get_footer(); ?>