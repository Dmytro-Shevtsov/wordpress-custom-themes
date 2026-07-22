<?php get_header(); ?>
  <main>
		<section class="services">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<?php if(get_locale() == 'ru_RU') { ?>
						<h1 class="h1-page">Новости</h1>	
						<?php } ?>
						<?php if(get_locale() == 'uk') { ?>
						<h1 class="h1-page">Новини</h1>
						<?php } ?>
					</div>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="col-lg-12">
						<div class="row">
							<div class="col-md-3 col-sm-6 col-post col-post-news-img">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
							</div>
							<div class="col-md-9 col-sm-6 col-post">
								<a class="col-post-zag post-zag-news" href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
								<span class="blog-span"><?php the_date('d. m. y'); ?></span>
								<div class="col-post-cit-news"><?php the_excerpt(); ?></div>
								
								<?php if(get_locale() == 'ru_RU') { ?>
								<a class="col-post-btn visible-lg" href="<?php the_permalink(); ?>">подробнее<span></span></a>
								<?php } ?>
								<?php if(get_locale() == 'uk') { ?>
								<a class="col-post-btn visible-lg" href="<?php the_permalink(); ?>">Детальніше<span></span></a>
								<?php } ?>
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