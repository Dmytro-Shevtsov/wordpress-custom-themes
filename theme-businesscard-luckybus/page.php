<?php get_header(); ?>
						<div class="row text-center justify-content-center">
							<div class="col-lg-8 align-self-center tr-cl-best tr-cl-best-page">
								<div class="top-best-bl">
									<h1 class="top-best"><?php the_title(); ?></h1>
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
				<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
					<div class="col-lg-10">
						<?php the_content(); ?>
					</div>
				<?php endwhile; ?>
				<?php endif; ?> 	
				</div>
			</div>
		</section>	
	</main> 
<?php get_footer(); ?>