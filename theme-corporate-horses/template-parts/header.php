<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112744057-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-112744057-1');
	</script>
</head>

<body id="top" <?php body_class(); ?>>
<header class="header-page">
    <div class="container">
        <div class="header-wr">
            <div class="header-soc-page soc-icons">
                <?php get_template_part('template-parts/soc-icons'); ?>
            </div>
            <div class="header-logo-page">
                <a href="<?php echo esc_url(home_url()); ?>">
                    <img src="<?php bloginfo('template_url'); ?>/images/logo.svg" alt="Логотип сайту">
                </a>
            </div>
            <div class="header-mess-icons">
                <?php get_template_part('template-parts/messenjer'); ?>
            </div>
        </div>
    </div>
</header>

<?php get_template_part('template-parts/header-menu'); ?>