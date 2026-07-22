<?php get_header(); ?>

	<section class="services">
		<div class="container">
			<div class="section-title">Наші послуги</div>
			<div class="services-wr">
				<?php
				$id = 3;
				$posts_about = new WP_Query(array('cat' => $id, 'posts_per_page' => 100, 'order' => 'DESC'));
				?>
				<?php if ( $posts_about->have_posts() ) : ?>				
				<?php while ( $posts_about->have_posts() ) : $posts_about->the_post(); ?>
			
				<div class="services-in">
					<div class="services-img">
						<?php the_post_thumbnail(); ?>
					</div>
					<div class="services-main">
						<div class="services-title"><?php the_title(); ?></div>
						<div class="services-desc"><?php the_content(); ?></div>
					</div>
					<div class="services-pr-bl">
						<?php if( get_field('zag_pr') ): ?>
							<div class="services-nampr"><?php the_field('zag_pr'); ?></div>
						<?php endif; ?>
						
						<div class="services-pr">
							<?php if( get_field('n_pr') ): ?>
								<span class="sp-pr"><?php the_field('n_pr'); ?></span>
							<?php endif; ?>
							<?php if( get_field('s_pr') ): ?>
								<span><?php the_field('s_pr'); ?></span>
							<?php endif; ?>
							<?php if( get_field('v_pr') ): ?>
								<span class="sp-pr"><?php the_field('v_pr'); ?></span>
							<?php endif; ?>
						</div>
					</div>
					<div class="services-btn">
						<?php if(get_theme_mod('header_namb1') != ''):?>
						<a href="tel:<?php echo str_replace(array(" ", ")", "(", "-", "<span>", "</span>", ","), "", get_theme_mod( 'header_namb1' ))?>">
							<?php echo str_replace(array("+38 ", ","), "", get_theme_mod( 'header_namb1' ))?>
						</a>
						<?php endif; ?>						
												
						<?php if(get_theme_mod('header_namb2') != ''):?>
						<a href="tel:<?php echo str_replace(array(" ", ")", "(", "-", "<span>", "</span>"), "", get_theme_mod( 'header_namb2' ))?>">
							<?php echo str_replace(array("+38 "), "", get_theme_mod( 'header_namb2' ))?>
						</a>
						<?php endif; ?>
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
			<div class="target-text-bl">
				<div class="target-title">чому з нами</div>
				<div class="target-desc">вигідно співпрацювати?</div>
			</div>
			<div class="target-wr">
				<div class="target-in">
					<div class="target-icon">
						<img class="worker" src="<?php bloginfo('template_url'); ?>/images/icon/worker.svg">
					</div>
					<div class="target-ic-txt">Досвідчені фахівці</div>
				</div>
				<div class="target-in">
					<div class="target-icon ">
						<img class="bulldozer" src="<?php bloginfo('template_url'); ?>/images/icon/bulldozer.svg">
					</div>
					<div class="target-ic-txt">Справна техніка</div>
				</div>
				<div class="target-in">
					<div class="target-icon">
						<img class="user" src="<?php bloginfo('template_url'); ?>/images/icon/user.svg">
					</div>
					<div class="target-ic-txt">Без посередників</div>
				</div>
				<div class="target-in">
					<div class="target-icon">
						<img class="speed" src="<?php bloginfo('template_url'); ?>/images/icon/speed.svg">
					</div>
					<div class="target-ic-txt">Швидка подача</div>
				</div>
			</div>
		</div>
	</section>	
	
	<section class="price">
		<div class="container">
			<div class="section-title">Наші роботи</div>
			<div class="price-wr">
			<?php
			$id = 2;
			$posts_about = new WP_Query(array('cat' => $id, 'posts_per_page' => 100, 'order' => 'DESC'));
			?>
			<?php if ( $posts_about->have_posts() ) : ?>				
			<?php while ( $posts_about->have_posts() ) : $posts_about->the_post(); ?>
				<div class="price-in">
					<div class="price-title"><?php the_title(); ?></div>
					<div class="price-cont"><?php the_content(); ?></div>
				</div>
			<?php endwhile; ?>				
			<?php else: ?>	
			<?php endif; ?>		
			</div>
			<?php wp_reset_postdata(); ?>
		</div>
	</section>	

<?php get_footer(); ?>