<?php get_header(); ?>
    <section class="serv-category">

		<h1 class="category-title">
			<?php if($katimg=get_field("katimg",get_category($cat))){?>
			<div class="title-img" class="category-title-img" 
			style="background: url('<?php echo $katimg;?>')"></div>
			<?php }?>
			<span><?php single_cat_title(); ?></span>
		</h1>
		
		<div class="page-container">
			<?php if($katdescr=get_field("katdescr",get_category($cat))){?>
			<?php echo $katdescr;?>
			<?php }?>
		</div>
		<h3 class="serv-title">
			<?php if(get_locale() == 'ru_RU') { ?>
			Услуги
			<?php } ?>
			<?php if(get_locale() == 'uk') { ?>
			Послуги
			<?php } ?>
		</h3>
		<ul class="serv-list">
			<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
			<li>
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>    
			</li>
			<?php endwhile; ?>
			<?php endif; ?> 
			
		</ul>
	</section>
<?php get_footer(); ?>