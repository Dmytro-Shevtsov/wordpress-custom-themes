<?php
/*   
Template Name: Contact
*/
?>
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
					<div class="col-lg-10">
						<div class="row">
						<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
							<div class="col-md-5 page-content">
								<p class="p-kont">Наші контакти:</p>
								<ul class="ul-kont ul-kont-kont list-inline m-0">
									<li>Україна, Київ, вул. Польова 47</li>
									<li><a href="tel:+380689665779">+38 (068) 966-57-79</a></li>
									<li><a href="tel:+380739665779">+38 (073) 966-57-79</a></li>
								</ul>
								<ul class="ul-soc list-inline">
									<li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
									<li class="list-inline-item"><a href="tg://resolve?domain=nikname" target="_blank"><i class="fab fa-telegram"></i></a></li>
									<li class="list-inline-item"><a href="whatsapp://send?phone=+380689665779" target="_blank"><i class="fab fa-whatsapp-square"></i></a></li>
									<li class="list-inline-item"><a href="viber://add?number=380689665779" target="_blank"><i class="fab fa-viber"></i></a></li>
								</ul>
							</div>
							<div class="col-md-7 page-content">
								<?php echo do_shortcode('[contact-form-7 id="efb84b3"]'); ?>
							</div>
						</div>
					</div>
					<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</section>	
	</main>
<?php get_footer(); ?>