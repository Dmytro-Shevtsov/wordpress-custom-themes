<?php get_header(); ?>
						<div class="row text-center justify-content-center">
							<div class="col-lg-8 align-self-center tr-cl-best tr-cl-best-page">
								<div class="top-best-bl">
									<h1 class="top-best"><?php single_cat_title(); ?></h1>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<main>
		<section class="page-content">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xl-10 col-lg-12">
						<p class="zagolovok text-center">Оренда автобуса</p>
						<div class="row justify-content-between">
							<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
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
							<?php endif; ?> 
						</div>	
					</div>
				</div>
			</div>
		</section>	
	</main> 
<?php get_footer(); ?>