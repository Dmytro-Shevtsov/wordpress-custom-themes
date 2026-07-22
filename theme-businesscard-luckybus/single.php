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
					<div class="col-lg-3">
						<p class="left-menu-title">Автопарк</p>
						<?php wp_nav_menu(array(
							'theme_location' => 'left_menu',
							'container' => 'ul',
							'menu_class' => 'left_menu list-inline m-0 p-0'
						)); ?> 
					</div>
				
				
					<div class="col-lg-7">
						<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; ?>
						<?php endif; ?> 
					</div>
				

				
				</div>
			</div>
		</section>	
	</main> 
<?php get_footer(); ?>