<?php get_header(); ?>
    <section class="section-page">
		<div class="container">
			<div class="page-container">
				<div class="page-404">
					<div class="page-404-404">404</div>
					<div class="page-404-text">
					<?php if(get_locale() == 'ru_RU') { ?>
					Такой страницы не существует	
					<?php } ?>
					<?php if(get_locale() == 'uk') { ?>
					Такої сторінки не існує
					<?php } ?>
					</div>
					<div class="page-404-link">
					<?php if(get_locale() == 'ru_RU') { ?>
					<a href="https://privezem.dp.ua/ru/">на главную</a>
					<?php } ?>
					<?php if(get_locale() == 'uk') { ?>
					<a href="https://privezem.dp.ua/ru/">на головну</a>
					<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>