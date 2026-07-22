<?php
/*   
Template Name: Заказ
*/
?>
<?php get_header('zakaz'); ?>
	<div class="container">
		<div class="zakaz-wr">
			<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<div class="return-wr">
					<?php
						if( $return_url = wp_get_referer() ){
							?>
							<a class="return-btn" href="<?php echo esc_url( $return_url ); ?>">
							<?php if(get_locale() == 'ru_RU') { ?>
							Вернуться назад
							<?php } ?>
							<?php if(get_locale() == 'uk') { ?>
							Повернутися назад
							<?php } ?>
							</a>
							<?php
						}
					?>	        	
					<a class="return-btn" href="/">
					<?php if(get_locale() == 'ru_RU') { ?>
					На главную
					<?php } ?>
					<?php if(get_locale() == 'uk') { ?>
					На головну
					<?php } ?>
					</a>	        	
				</div>
				<?php the_content(); ?>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>		
	</div>
<?php get_footer(); ?>