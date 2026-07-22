<?php get_header(); ?>

	<section class="slider">
		<div class="container">
			<h1>
				<?php if(get_locale() == 'ru_RU') { ?>
				Профессиональные грузоперевозки!
				<span>Днепр &middot; Украина</span>
				<?php } ?>
				<?php if(get_locale() == 'uk') { ?>
				Професійні вантажоперевезення!
				<span>Дніпро &middot; Україна</span>
				<?php } ?>
			</h1>
			<div class="slider-desc">
				<?php if(get_locale() == 'ru_RU') { ?>
				Компания Perevozki-Dnepr организует перевозку Вашего груза и в зависимости от объема и веса предложит самый оптимальный и выгодный для Вас вариант автомобиля
				<?php } ?>
				<?php if(get_locale() == 'uk') { ?>
				Компанія Perevozki-Dnepr організує перевезення Вашого вантажу та залежно від його обсяу та ваги запропонує найбільш оптимальний та вигідний для Вас варіант автомобіля
				<?php } ?>
			</div>
			<div class="slider-cont">
				<?php if(get_locale() == 'ru_RU') { ?>
				для связи с нами<br>
				<?php } ?>
				<?php if(get_locale() == 'uk') { ?>
				для зв'язку з нами<br>
				<?php } ?>
				<?php if(get_theme_mod('namb1') != ''):?>
					<a href="tel:+38<?php echo str_replace(array(" ", ")", "(", "-"), "", get_theme_mod( 'namb1' ))?>">
						<?php echo get_theme_mod('namb1'); ?>
					</a>
				<?php endif; ?>
				 &middot; 
				<?php if(get_theme_mod('namb2') != ''):?>
					<a href="tel:+38<?php echo str_replace(array(" ", ")", "(", "-"), "", get_theme_mod( 'namb2' ))?>">
						<?php echo get_theme_mod('namb2'); ?>
					</a>
				<?php endif; ?>	
				<br>
				<a class="btn-pink popup-call-form" href="#call-form">
					<?php if(get_locale() == 'ru_RU') { ?>
					Заказать звонок
					<?php } ?>
					<?php if(get_locale() == 'uk') { ?>
					Замовити дзвінок
					<?php } ?>
				</a>
			</div>
			<div class="slider-time">
				<?php if(get_locale() == 'ru_RU') { ?>
				<span class="time-r">Работаем</span>
				<span class="time-d">понедельник - воскресенье</span>
				<span class="time-t">8:00 - 20:00</span>
				<?php } ?>
				<?php if(get_locale() == 'uk') { ?>
				<span class="time-r">Працюємо</span>
				<span class="time-d">понеділок - неділя</span>
				<span class="time-t">7:00 - 21:00</span>
				<?php } ?>
			</div>
		</div>
	</section>
	<section class="slider-map">
		<div class="container">
			<span class="slider-tit">
				<?php if(get_locale() == 'ru_RU') { ?>
				С нами просто и удобно
				<?php } ?>
				<?php if(get_locale() == 'uk') { ?>
				З нами просто та зручно
				<?php } ?>
			</span>
			<div class="map-wrap">
				<div class="map-inner map-inner1">
					<?php if(get_locale() == 'ru_RU') { ?>
					<p><span>Лучшие водители -</span>профессионалы!</p>
					<?php } ?>
					<?php if(get_locale() == 'uk') { ?>
					<p><span>Найкращі водії -</span>професіонали!</p>
					<?php } ?>
					<div class="map-label label1"><span></span></div>
				</div>
				<div class="map-inner map-inner2">
					<?php if(get_locale() == 'ru_RU') { ?>
					<p><span>работаем -</span>Быстро! Надежно! Проверено!</p>
					<?php } ?>
					<?php if(get_locale() == 'uk') { ?>
					<p><span>працюємо -</span>Швидко! Надійно! Перевірено!</p>
					<?php } ?>
					<div class="map-label label2"><span></span></div>
				</div>
				<div class="map-inner map-inner3">
					<?php if(get_locale() == 'ru_RU') { ?>
					<p>Разумные цены!</p>
					<?php } ?>
					<?php if(get_locale() == 'uk') { ?>
					<p>Розумні ціни!</p>
					<?php } ?>
					<div class="map-label label3"><span></span></div>
				</div>
			</div>
		</div>
		<div class="slider-road">
			<div class="slider-road-l"></div>
			<div class="slider-road-c"></div>
			<div class="slider-road-r"></div>
		</div>
	</section>

	<section class="autopark">
		<div class="container">
			<div class="autopark-title">
				<?php if(get_locale() == 'ru_RU') { ?>
				Поможем вам с любой задачей
				<?php } ?>
				<?php if(get_locale() == 'uk') { ?>
				Допоможемо вам з будь-яким завданням
				<?php } ?>
			</div>
			<div class="autopark-wrap">
				<?php
				$id = 4;
				$posts_about = new WP_Query(array('cat' => $id, 'posts_per_page' => 100, 'order' => 'DESC'));
				?>
				<?php if ( $posts_about->have_posts() ) : ?>				
				<?php while ( $posts_about->have_posts() ) : $posts_about->the_post(); ?>
					<div class="autopark-inner">
						<div class="autopark-img">
							<?php if(get_field('foto_avto'))
								{
									echo get_field('foto_avto');
							} ?>
						</div>
						<div class="autopark-desc">
							<h2>
							<?php if(get_field('nazvanie_avto'))
								{
									echo get_field('nazvanie_avto');
							} ?>
							<?php if(get_field('tonnazh_avto'))
								{
									echo '<span>' . get_field('tonnazh_avto') . '</span>';
							} ?>
							</h2>
							
							<?php if(get_locale() == 'ru_RU') { ?>
								<?php if(get_field('min_zakaz'))
									{
										echo '<p><span>Мин. заказ:</span>' . get_field('min_zakaz') . ' ч</p>';
								} ?>
							<?php } ?>
							<?php if(get_locale() == 'uk') { ?>
								<?php if(get_field('min_zakaz'))
									{
										echo '<p><span>Мін. замовлення:</span>' . get_field('min_zakaz') . ' год.</p>';
								} ?>
							<?php } ?>
							
							<?php if(get_locale() == 'ru_RU') { ?>
								<?php if(get_field('razmer_kuzova'))
									{
										echo '<p><span>Кузов:</span>' . get_field('razmer_kuzova') . '</p>';
								} ?>
							<?php } ?>
							<?php if(get_locale() == 'uk') { ?>
								<?php if(get_field('razmer_kuzova'))
									{
										echo '<p><span>Кузов:</span>' . get_field('razmer_kuzova') . '</p>';
								} ?>
							<?php } ?>
							
							<?php if(get_locale() == 'ru_RU') { ?>
								<?php if(get_field('obem_kuzova'))
									{
										echo '<p><span>Объем кузова:</span>' . get_field('obem_kuzova') . ' м<sup>3</sup></p>';
								} ?>
							<?php } ?>
							<?php if(get_locale() == 'uk') { ?>
								<?php if(get_field('obem_kuzova'))
									{
										echo '<p><span>Об\'єм кузова:</span>' . get_field('obem_kuzova') . ' м<sup>3</sup></p>';
								} ?>
							<?php } ?>
							
							<?php if(get_locale() == 'ru_RU') { ?>
								<?php if(get_field('palleto_mest'))
									{
										echo '<p><span>Паллето-мест:</span>' . get_field('palleto_mest') . '</p>';
								} ?>
							<?php } ?>
							<?php if(get_locale() == 'uk') { ?>
								<?php if(get_field('palleto_mest'))
									{
										echo '<p><span>Паллето-місць:</span>' . get_field('palleto_mest') . '</p>';
								} ?>
							<?php } ?>
							
							<?php if(get_locale() == 'ru_RU') { ?>
								<?php if(get_field('vidy_zagruzok'))
									{
										echo '<p><span>Загрузка:</span>' . get_field('vidy_zagruzok') . '</p>';
								} ?>
							<?php } ?>
							<?php if(get_locale() == 'uk') { ?>
								<?php if(get_field('vidy_zagruzok'))
									{
										echo '<p><span>Завантаження:</span>' . get_field('vidy_zagruzok') . '</p>';
								} ?>
							<?php } ?>
							
							<?php if(get_locale() == 'ru_RU') { ?>
								<?php if(get_field('tarif_po_gorodu'))
									{
										echo '<p><span>Тарифы город:</span>' . get_field('tarif_po_gorodu') . ' грн/час</p>';
								} ?>
							<?php } ?>
							<?php if(get_locale() == 'uk') { ?>
								<?php if(get_field('tarif_po_gorodu'))
									{
										echo '<p><span>Тариф місто:</span>' . get_field('tarif_po_gorodu') . ' грн/год.</p>';
								} ?>
							<?php } ?>
							
							<?php if(get_locale() == 'ru_RU') { ?>
								<?php if(get_field('tarif_mezhgorod'))
									{
										echo '<p><span>Тариф межгород:</span>' . get_field('tarif_mezhgorod') . ' грн/км</p>';
								} ?>
							<?php } ?>
							<?php if(get_locale() == 'uk') { ?>
								<?php if(get_field('tarif_mezhgorod'))
									{
										echo '<p><span>Тариф міжмісто:</span>' . get_field('tarif_mezhgorod') . ' грн/км</p>';
								} ?>
							<?php } ?>
							
						</div>
						<div class="autopark-btn">
							<a class="btn-pink popup-call-auto" href="#auto-form">
							<?php if(get_locale() == 'ru_RU') { ?>
							Заказать Авто
							<?php } ?>
							<?php if(get_locale() == 'uk') { ?>
							Замовити Авто
							<?php } ?>
							</a>
						</div>
					</div>
				<?php endwhile; ?>				
				<?php else: ?>	
				<?php endif; ?>	
			</div>	
			<div class="gruz-info">
				<?php if(get_locale() == 'ru_RU') { ?>
				Стоимость заказа зависит от расстояния и объема груза.
				<?php } ?>
				<?php if(get_locale() == 'uk') { ?>
				Вартість замовлення залежить від відстані та об'єму вантажу.
				<?php } ?>
			</div>
<!-- -->
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
			<div class="autopark-gruz">
				<div class="gruz-cont">
					<div class="gruz-img">
						<img src="<?php echo get_field('foto_gruzchyky'); ?>">
					</div>
					<div class="gruz-txt">
						<div class="gruz-title">
							<?php if(get_locale() == 'ru_RU') { ?>
							Грузчики
							<?php } ?>
							<?php if(get_locale() == 'uk') { ?>
							Вантажники
							<?php } ?>
						</div>
						<p><?php echo get_field('minimalnyj_zakaz'); ?></p>
						<p><?php echo get_field('dnevnoj_tarif'); ?></p>
					</div>
				</div>
				<div class="gruz-cont">
					<div class="gruz-img">
						<img src="<?php echo get_field('foto_telezhka'); ?>">
					</div>
					<div class="gruz-txt">
						<div class="gruz-title">
							<?php if(get_locale() == 'ru_RU') { ?>
							Тележка гидравлическая
							<?php } ?>
							<?php if(get_locale() == 'uk') { ?>
							Візок гідравлічний
							<?php } ?>
						</div>
						<p><?php echo get_field('telezhka'); ?></p>

					</div>
				</div>
			</div>
<?php endwhile; ?>
<?php endif; ?>
<!-- -->
		</div>
	</section>

	<section class="step">
		<div class="container">
			<div class="step-title">
				<?php if(get_locale() == 'ru_RU') { ?>
				С нами просто и удобно
				<?php } ?>
				<?php if(get_locale() == 'uk') { ?>
				З нами просто та зручно
				<?php } ?>
			</div>
			<div class="step-wrap">
				<div class="step-inner step1">
					<div class="step-line"></div>
					<div class="step-i-wrap">
						<?php if(get_locale() == 'ru_RU') { ?>
						<div class="step-inner-title">Заявка</div>
						<div class="step-desc">Оставить заявку можно на нашем сайте или позвонив по телефону</div>
						<?php } ?>
						<?php if(get_locale() == 'uk') { ?>
						<div class="step-inner-title">Заявка</div>
						<div class="step-desc">Залишити заявку можна на нашому сайті або зателефонувавши за телефоном</div>
						<?php } ?>
					</div>
				</div>
				<div class="step-inner step2">
					<div class="step-line"></div>
					<div class="step-i-wrap">
						<?php if(get_locale() == 'ru_RU') { ?>
						<div class="step-inner-title">Погрузка</div>
						<div class="step-desc">Опытные грузчики бережно упакуют и погрузят ваши вещи в автомобиль.</div>
						<?php } ?>
						<?php if(get_locale() == 'uk') { ?>
						<div class="step-inner-title">Навантаження</div>
						<div class="step-desc">Досвідчені вантажники дбайливо запакують і завантажать ваші речі в автомобіль.</div>
						<?php } ?>
					</div>
				</div>
				<div class="step-inner step3">
					<div class="step-line"></div>
					<div class="step-i-wrap">
						<?php if(get_locale() == 'ru_RU') { ?>
						<div class="step-inner-title">Перевозка</div>
						<div class="step-desc">Перевозка осуществляется собственными автомобилями и водителями-профессионалами.</div>
						<?php } ?>
						<?php if(get_locale() == 'uk') { ?>
						<div class="step-inner-title">Перевезення</div>
						<div class="step-desc">Перевезення здійснюється власними автомобілями та водіями-професіоналами.</div>
						<?php } ?>
					</div>
				</div>
				<div class="step-inner step4">
					<div class="step-line"></div>
					<div class="step-i-wrap">
						<?php if(get_locale() == 'ru_RU') { ?>
						<div class="step-inner-title">Оплата</div>
						<div class="step-desc">Наличный/безналичный расчет после выполнения заказа.</div>
						<?php } ?>
						<?php if(get_locale() == 'uk') { ?>
						<div class="step-inner-title">Оплата</div>
						<div class="step-desc">Готівковий/безготівковий розрахунок після виконання замовлення.</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>