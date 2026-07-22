<!doctype html>
<html>
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-137986422-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-137986422-1');
		</script>
		<?php wp_head(); ?> 
	</head>
	<body>
    	<header class="header-home">
			<div class="container">
				<div class="header-top">
					<div class="row menu-bl justify-content-center align-items-center">
						<div class="col-12">
							<div class="row justify-content-between align-items-center menu-ind">
								<div class="col-xl-2 col-lg-3 col-md-4 col-sm-12 logo-head">
									<img src="<?php bloginfo('template_url'); ?>/images/logo-head.png"> 
								</div>
								<div class="col-md-8 col-sm-12 mob-cont">
									<div class="tr-cl-tel">
										<ul class="row list-inline m-0 ul-tel">
											<li><a href="tel:+380689665779">+38 (068) 966-57-79</a></li>
											<li><a href="tel:+380739665779">+38 (073) 966-57-79</a></li>
										</ul> 
									</div>
								</div>
								<div class="col-xl-7 col-lg-5 col-sm-12 justify-content-center">
									<nav class="tr-cl-nav">
									<?php wp_nav_menu( array( 'theme_location' => 'header_menu' ) ); ?>
									</nav>
								</div>
								<div class="col-xl-3 col-lg-4 dt-cont">
									<div class="tr-cl-tel">
										<ul class="row list-inline m-0 ul-tel">
											<li><a href="tel:+380689665779">+38 (068) 966-57-79</a></li>
											<li><a href="tel:+380739665779">+38 (073) 966-57-79</a></li>
										</ul> 
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				<div class="row text-center justify-content-center">
					<div class="col-xl-8 col-sm-12 align-self-center tr-cl-best">
						<div class="top-best-bl">
							<p class="top-best">Кращі ціни на прокат автобуса для:</p>
							Міжміські перевезення, трансфери в аеропорт, індивідуальні перевезення, автобуси на корпоратив, оренда автобуса на весілля, дитячі автобусні перевезення, екскурсійні перевезення, туристичні маршрути, автобуси на випускний, автобуси для виставок, дитячі екскурсійні автобуси, автобуси для співробітників
						</div>
					</div>
				</div>
			</div>
		</header>