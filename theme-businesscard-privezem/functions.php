<?php

/* загружаемые скрипты и стили */
function load_style_script(){
	wp_enqueue_style( 'pd-style', get_stylesheet_uri() );
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;1,400;1,700&display=swap' );
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css' );
	
	wp_enqueue_script( 'magnific-popup-script', get_stylesheet_directory_uri() . '/js/jquery.magnific-popup.min.js'); 
	wp_enqueue_script( 'pd_script', get_stylesheet_directory_uri() . '/js/main.js');
	
}

/* загружаем скрипты и стили */
add_action('wp_enqueue_scripts', 'load_style_script');

/* поддержка миниатюр */
add_theme_support('post-thumbnails');


/* регистрируем меню */
register_nav_menus([
	'header_menu' => 'Меню в шапке'
]);


/* виджет языки */
register_sidebar(array(
		'name' => 'языки',
		'id' => 'lang',
		'before_widget' => '',
		'after_widget' => ''
	)
);



/* кастомизация */
function wptuts_customize_register( $wp_customize ) {

   	$wp_customize->add_section( 'header_section' , array(
    'title'      => 'Контакты', 'wptuts' ,
    'priority'   => 30,
	));
/**/
	$wp_customize->add_setting( 'header_namb1' , array(
    'default'     => '', 'wptuts',
    'transport'   => 'refresh',
	));
   $wp_customize->add_control(
	'header_namb1', 
	array(
		'label'    => 'Номер телефона 1', 'wptuts',
		'section'  => 'header_section',
		'settings' => 'header_namb1',
		'type'     => 'text',
	));
/**/
	$wp_customize->add_setting( 'header_namb2' , array(
    'default'     => '', 'wptuts',
    'transport'   => 'refresh',
	));
   $wp_customize->add_control(
	'header_namb2', 
	array(
		'label'    => 'Номер телефона 2', 'wptuts',
		'section'  => 'header_section',
		'settings' => 'header_namb2',
		'type'     => 'text',
	));
/**/
    $wp_customize->add_setting( 'header_viber' , array(
    'default'     => '', 'wptuts',
    'transport'   => 'refresh',
	));
   $wp_customize->add_control(
	'header_viber', 
	array(
		'label'    => 'Ссылка вайбер', 'wptuts',
		'section'  => 'header_section',
		'settings' => 'header_viber',
		'type'     => 'text',
	));
/**/
    $wp_customize->add_setting( 'header_tel' , array(
    'default'     => '', 'wptuts',
    'transport'   => 'refresh',
	));
   $wp_customize->add_control(
	'header_tel', 
	array(
		'label'    => 'Ссылка телеграм', 'wptuts',
		'section'  => 'header_section',
		'settings' => 'header_tel',
		'type'     => 'text',
	));
/**/
    $wp_customize->add_setting( 'grafik' , array(
    'default'     => '', 'wptuts',
    'transport'   => 'refresh',
	));
   $wp_customize->add_control(
	'grafik', 
	array(
		'label'    => 'График работы', 'wptuts',
		'section'  => 'header_section',
		'settings' => 'grafik',
		'type'     => 'text',
	));



}
add_action( 'customize_register', 'wptuts_customize_register' );



/* шорткод */
function contacts_shortcode() {
	ob_start();
	?>
	<div class="cont-sh-cont">
		<div class="cont-sh-wp">
			<?php if(get_theme_mod('header_namb1') != ''): ?>
				<a class="cont-sh-a" href="tel:+38<?php echo str_replace(array(" ", ")", "(", "-", ","), "", get_theme_mod('header_namb1')); ?>">
					<?php echo str_replace(array("+38 ", ","), "", get_theme_mod('header_namb1')); ?>
				</a>
			<?php endif; ?>

			<?php if(get_theme_mod('header_namb2') != ''): ?>
				<a class="cont-sh-a" href="tel:+38<?php echo str_replace(array(" ", ")", "(", "-", ","), "", get_theme_mod('header_namb2')); ?>">
					<?php echo str_replace(array("+38 ", ","), "", get_theme_mod('header_namb2')); ?>
				</a>
			<?php endif; ?>
		</div>

		<div class="cont-sh-wp">
			<?php if(get_theme_mod('header_viber') != ''): ?>
				<a class="vib cont-sh-img" target="_blank" href="<?php echo get_theme_mod('header_viber'); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon/viber.svg">
				</a>
			<?php endif; ?>

			<?php if(get_theme_mod('header_tel') != ''): ?>
				<a class="tg cont-sh-img" target="_blank" href="<?php echo get_theme_mod('header_tel'); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon/telegram.svg">
				</a>
			<?php endif; ?>
		</div>
	</div>
	<?php
	return ob_get_clean();
}

add_shortcode('contacts', 'contacts_shortcode');












?>