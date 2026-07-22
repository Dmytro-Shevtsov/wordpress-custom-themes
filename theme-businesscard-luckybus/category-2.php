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
				<div class="row usl-ar justify-content-center">
					<div class="col-xl-10 col-lg-12 text-center">
						<p class="zagolovok text-center">орендувати автобус для:</p>
						<div class="row usl-bl">
							<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
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
							<?php endif; ?> 
						</div>
					</div>
				</div>
			</div>
		</section>	
	</main> 
<?php get_footer(); ?>