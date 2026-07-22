<?php
/* загружаемые скрипты и стили */
function load_style_script(){
	wp_enqueue_style( 'pd-style', get_stylesheet_uri() );
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto&display=swap' );
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css' );
	
	wp_enqueue_script( 'magnific-popup-script', get_stylesheet_directory_uri() . '/js/jquery.magnific-popup.min.js'); 
	wp_enqueue_script( 'pd_script', get_stylesheet_directory_uri() . '/js/main.js');
	
}

/* загружаем скрипты и стили */
add_action('wp_enqueue_scripts', 'load_style_script');

/* регистрируем меню */
register_nav_menus(array(
	'top-menu' => 'Меню в шапке',
	'left-menu' => 'Меню в сайдбаре',
	'mobile-menu' => 'Мобильное'
));

/* поддержка миниатюр */
add_theme_support('post-thumbnails');


/* Виджет в сайдбаре */
register_sidebar(array(
		'name' => 'Виджет в сайдбаре',
		'id' => 'leftvidget',
		'description' => '',
		'before_widget' => '',
		'after_widget' => ''
	)
);
register_sidebar(array(
		'name' => 'Виджет языки',
		'id' => 'lang',
		'description' => '',
		'before_widget' => '',
		'after_widget' => ''
	)
);


/* Стили в админке */
function my_stylesheet1(){
wp_enqueue_style("style-admin",get_bloginfo('stylesheet_directory')."/css/mystyle.css");
}
add_action('admin_head', 'my_stylesheet1');


/* кастомизация */
function wptuts_customize_register( $wp_customize ) {

   	$wp_customize->add_section( 'header_section' , array(
    'title'      => 'Контакты', 'wptuts' ,
    'priority'   => 30,
	));
/**/
	$wp_customize->add_setting( 'namb1' , array(
    'default'     => '', 'wptuts',
    'transport'   => 'refresh',
	));
   $wp_customize->add_control(
	'namb1', 
	array(
		'label'    => 'Телефон - 1', 'wptuts',
		'section'  => 'header_section',
		'settings' => 'namb1',
		'type'     => 'text',
	));
/**/
	$wp_customize->add_setting( 'namb2' , array(
    'default'     => '', 'wptuts',
    'transport'   => 'refresh',
	));
   $wp_customize->add_control(
	'namb2', 
	array(
		'label'    => 'Телефон - 2', 'wptuts',
		'section'  => 'header_section',
		'settings' => 'namb2',
		'type'     => 'text',
	));
	
/**/
    $wp_customize->add_setting( 'viber' , array(
    'default'     => '', 'wptuts',
    'transport'   => 'refresh',
	));
   $wp_customize->add_control(
	'viber', 
	array(
		'label'    => 'Номер вайбер', 'wptuts',
		'section'  => 'header_section',
		'settings' => 'viber',
		'type'     => 'text',
	));	
/**/
    $wp_customize->add_setting( 'telegram' , array(
    'default'     => '', 'wptuts',
    'transport'   => 'refresh',
	));
   $wp_customize->add_control(
	'telegram', 
	array(
		'label'    => 'Ник телеграм', 'wptuts',
		'section'  => 'header_section',
		'settings' => 'telegram',
		'type'     => 'text',
	));	
/**/
    $wp_customize->add_setting( 'faceb' , array(
    'default'     => '', 'wptuts',
    'transport'   => 'refresh',
	));
   $wp_customize->add_control(
	'faceb', 
	array(
		'label'    => 'Ссылка фейсбук', 'wptuts',
		'section'  => 'header_section',
		'settings' => 'faceb',
		'type'     => 'text',
	));	
/**/
    $wp_customize->add_setting( 'insta' , array(
    'default'     => '', 'wptuts',
    'transport'   => 'refresh',
	));
   $wp_customize->add_control(
	'insta', 
	array(
		'label'    => 'Ссылка инстаграм', 'wptuts',
		'section'  => 'header_section',
		'settings' => 'insta',
		'type'     => 'text',
	));	
/**/
    $wp_customize->add_setting( 'adres1' , array(
    'default'     => '', 'wptuts',
    'transport'   => 'refresh',
	));
   $wp_customize->add_control(
	'adres1', 
	array(
		'label'    => 'Адрес 1', 'wptuts',
		'section'  => 'header_section',
		'settings' => 'adres1',
		'type'     => 'text',
	));	
/**/
    $wp_customize->add_setting( 'adres1ua' , array(
    'default'     => '', 'wptuts',
    'transport'   => 'refresh',
	));
   $wp_customize->add_control(
	'adres1ua', 
	array(
		'label'    => 'Адрес 1 UA', 'wptuts',
		'section'  => 'header_section',
		'settings' => 'adres1ua',
		'type'     => 'text',
	));	
/**/
    $wp_customize->add_setting( 'adres2' , array(
    'default'     => '', 'wptuts',
    'transport'   => 'refresh',
	));
   $wp_customize->add_control(
	'adres2', 
	array(
		'label'    => 'Адрес 2', 'wptuts',
		'section'  => 'header_section',
		'settings' => 'adres2',
		'type'     => 'text',
	));
/**/
    $wp_customize->add_setting( 'adres2ua' , array(
    'default'     => '', 'wptuts',
    'transport'   => 'refresh',
	));
   $wp_customize->add_control(
	'adres2ua', 
	array(
		'label'    => 'Адрес 2 UA', 'wptuts',
		'section'  => 'header_section',
		'settings' => 'adres2ua',
		'type'     => 'text',
	));	
/**/
    $wp_customize->add_setting( 'pochta' , array(
    'default'     => '', 'wptuts',
    'transport'   => 'refresh',
	));
   $wp_customize->add_control(
	'pochta', 
	array(
		'label'    => 'Почта', 'wptuts',
		'section'  => 'header_section',
		'settings' => 'pochta',
		'type'     => 'text',
	));

}
add_action( 'customize_register', 'wptuts_customize_register' );
/* /кастомизация */


?>