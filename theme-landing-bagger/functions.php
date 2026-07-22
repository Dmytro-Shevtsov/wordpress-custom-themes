<?php

/* загружаемые скрипты и стили */
function load_style_script(){
	wp_enqueue_style( 'pd-style', get_stylesheet_uri() );
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap' );
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css' );

	wp_enqueue_script( 'magnific-popup-script', get_stylesheet_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), null, true); 
	wp_enqueue_script( 'pd_script', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), null, true);
}	
	
/* загружаем скрипты и стили */
add_action('wp_enqueue_scripts', 'load_style_script');

/* поддержка миниатюр */
add_theme_support('post-thumbnails');

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
		'label'    => 'Номер телефона', 'wptuts',
		'section'  => 'header_section',
		'settings' => 'header_namb1',
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
		'label'    => 'Никнейм телеграм', 'wptuts',
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


?>