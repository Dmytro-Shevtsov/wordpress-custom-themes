<?php get_header(); ?>
  <main>
		<section class="services">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<?php if(get_locale() == 'ru_RU') { ?>
						<h1 class="h1-page">Продукция</h1>		
						<?php } ?>
						<?php if(get_locale() == 'uk') { ?>
						<h1 class="h1-page">Продукція</h1>
						<?php } ?>
					</div>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="col-lg-4 col-sm-6 col-post">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						<a class="col-post-zag" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<p class="col-post-cit"><?php the_excerpt(); ?></p>
						<?php if(get_locale() == 'ru_RU') { ?>
						<a class="col-post-btn" href="<?php the_permalink(); ?>">подробнее<span></span></a>		
						<?php } ?>
						<?php if(get_locale() == 'uk') { ?>
						<a class="col-post-btn" href="<?php the_permalink(); ?>">Детальніше<span></span></a>
						<?php } ?>
					</div>
					<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</section>  
  </main> 
<?php get_footer(); ?>