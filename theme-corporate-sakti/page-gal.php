<?php /* Template Name: Gall */ ?>
<?php get_header(); ?>
<main>
	<section class="kompany">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="h1-page"><?php the_title(); ?></h1>
					<div class="ofm-pan">       
						<div id="tabs">				
							<ul class="ul-tabs">
								
								<?php if(get_locale() == 'ru_RU') { ?>
								<li><a href="#tabs-1">Все работы</a></li>
								<li><a href="#tabs-2">Алюминиевые двери</a><br /></li>
								<li><a href="#tabs-3">Алюминиевые окна</a></li>
								<li><a href="#tabs-4">Алюминиевые перегородки</a></li>
								<li><a href="#tabs-5">Фасадное остекление</a></li>
								<li><a href="#tabs-6">Кровля и зенитные фонари</a></li>
								<li><a href="#tabs-7">Металлоконструкции</a></li>
								<?php } ?>
								<?php if(get_locale() == 'uk') { ?>
								<li><a href="#tabs-1">Усі роботи</a></li>
								<li><a href="#tabs-2">Алюмінієві двері</a><br /></li>
								<li><a href="#tabs-3">Алюмінієві вікна</a></li>
								<li><a href="#tabs-4">Алюмінієві перегородки</a></li>
								<li><a href="#tabs-5">Фасадне скління</a></li>
								<li><a href="#tabs-6">Покрівля та зенітні ліхтарі</a></li>
								<li><a href="#tabs-7">Металоконструкції</a></li>
								<?php } ?>
							</ul>	
							<div id="tabs-1">
								<?php echo do_shortcode('[nggallery id=7]'); ?>
							</div>
							<div id="tabs-2">
								<?php echo do_shortcode('[nggallery id=1]'); ?>
							</div>
							<div id="tabs-3">
								<?php echo do_shortcode('[nggallery id=2]'); ?>
							</div>
								
							<div id="tabs-4">
								<?php echo do_shortcode('[nggallery id=3]'); ?>
							</div>
							<div id="tabs-5">
								<?php echo do_shortcode('[nggallery id=6]'); ?>
							</div>
							<div id="tabs-6">
								<?php echo do_shortcode('[nggallery id=4]'); ?>
							</div>
							<div id="tabs-7">
								<?php echo do_shortcode('[nggallery id=5]'); ?>
							</div>
						</div>				
					</div> 							
				</div>
			</div>
		</div>
	</section>
</main> 
<?php get_footer(); ?>