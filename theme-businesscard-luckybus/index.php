<?php 
if (is_page()) {
 include(TEMPLATEPATH.'/header-home.php');
 } else {
 include(TEMPLATEPATH.'/header.php');
 } 
?>
		<section class="avtopark">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xl-10 col-lg-12">
						<p class="zagolovok text-center">замовлення автобуса</p>
						<div class="row justify-content-between">
							<?php
							$id = 2; // номер категории
							$posts_about = new WP_Query(array('cat' => $id, 'posts_per_page' => 12, 'order' => 'DESC'));
							?>
							
							<?php if ( $posts_about->have_posts() ) : ?>				
							<?php while ( $posts_about->have_posts() ) : $posts_about->the_post(); ?>
							<div class="col-lg-4 col-md-6">
								<div class="zakaz-bl">
									<div class="row zakaz-mesta">
										<div class="col-9 zakaz">
											<p><strong class="und"><?php echo get_post_meta($post->ID, 'Тип', true); ?></strong><br>
											<span><?php echo get_post_meta($post->ID, 'Наименование', true); ?></span></p>
										</div>
										<div class="col-3 mesta pl-0">
											<div class="tr-cl-mest text-center">
												<div class="mesta-romb">
													<p><strong><?php echo get_post_meta($post->ID, 'Мест', true); ?></strong><br>
													місць</p>
												</div>
											</div>
										</div>
									</div>
									<div class="img-tmb">
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
									</div>
									<div class="price">Від <strong><?php echo get_post_meta($post->ID, 'Цена', true); ?></strong> грн./км</div>
									<div class="zakaz-btn text-center">
										<a href="<?php the_permalink(); ?>"><span>Орендувати</span></a>
									</div>
								</div>
							</div>
							<?php endwhile; ?>				
							<?php else: ?>	
							<?php endif; ?>
						</div>	
					</div>
				</div>
			</div>
		</section>
		
		<section class="recomend">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xl-10 col-lg-12">
						<p>Оренда автобусів по Києву та Україні - наша спеціалізація. У нас можна замовити Мікроавтобус як для невеликого перевезення, так і автобус для великого корпоративу. Так само надаємо послуги міжміських перевезень, трансфери в аеропорт, індивідуальних перевезень, оренда автобуса на весілля. Якщо хочете замовити автобусні перевезення по Києву та області – звертайтеся до нас.</p>
						<div class="row star-bl">
							<div class="col-lg-3 text-center"><img src="<?php bloginfo('template_url'); ?>/images/star.jpg"></div>
							<div class="col-lg-9 text-center">
								<p class="zagolovok">нас рекомендують <span class="red">96%</span> клієнтів</p>
								<p class="">Щодня ми організуємо дешеві перевезення по Києву та області для десятків клієнтів. Тільки у одного з 25 виникає питання, чи варто скористатися транспортними послугами компанії знову. Більшість же залишають позитивні відгуки про нашу роботу, рекомендують колегам і друзям взяти в оренду Автобус у нас. Багато з них замовляють оренду мікроавтобусів ще дешевше на постійній основі вже кілька років.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="uslugi">
			<div class="container">
				<div class="row poch justify-content-center">
					<div class="col-xl-10 col-lg-12 text-center">
						<p class="zagolovok text-center">чому у нас такі низькі ціни на оренду</p>
						<p class="tr-cl-neposr"><span class="neposr">ми не посередники</span></p>
						<p class="">Дізнайтеся, скільки коштує замовити Автобус для перевезення, і переконайтеся, що у нас в середньому на 15% дешевше, ніж в інших компаніях. Низька ціна оренди мікроавтобуса з водієм підтримується за рахунок використання тільки власних машин, грамотної логістики, оптимальної чисельності штату.</p>
						<p class="">В автопарку завжди є вільні машини. Подамо Автобус через 30 хвилин після оформлення замовлення.</p>
					</div>
				</div>
				<div class="row usl-ar justify-content-center">
					<div class="col-xl-10 col-lg-12 text-center">
						<p class="zagolovok text-center">орендувати автобус для:</p>
						<div class="row usl-bl">
							<?php
							$id = 3; // номер категории
							$posts_about = new WP_Query(array('cat' => $id, 'posts_per_page' => 12, 'order' => 'DESC'));
							?>

							<?php if ( $posts_about->have_posts() ) : ?>				
							<?php while ( $posts_about->have_posts() ) : $posts_about->the_post(); ?>
							<div class="col-lg-3 col-md-4 col-sm-6 col-6">
								<a class="usl-bl-a" href="<?php the_permalink(); ?>">
									<div class="usl-bl-img">
										<?php the_post_thumbnail(); ?>
										<img class="img-ok" src="<?php bloginfo('template_url'); ?>/images/img-ok.png">
									</div>
									<span><?php the_title(); ?></span>
								</a>
							</div>
							<?php endwhile; ?>				
							<?php else: ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</section>
<?php get_footer(); ?>