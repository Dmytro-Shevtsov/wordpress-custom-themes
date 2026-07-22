<?php
/* загружаемые скрипты и стили */
function load_style_script(){
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}

/* загружаем скрипты и стили */
add_action('wp_enqueue_scripts', 'load_style_script');

/* поддержка миниатюр */
add_theme_support('post-thumbnails');


/* кастомизация */
function wptuts_customize_register( $wp_customize ) {

   	$wp_customize->add_section( 's_section' , array(
    'title'      => 'Настройки сайта', 'wptuts' ,
    'priority'   => 30,
	));	
/**/
	$wp_customize->add_setting( 'tel_namb' , array(
    'default'     => '', 'wptuts',
    'transport'   => 'refresh',
	));
   $wp_customize->add_control(
	'tel_namb', 
	array(
		'label'    => 'Номер телефона', 'wptuts',
		'section'  => 's_section',
		'settings' => 'tel_namb',
		'type'     => 'text',
	));	
/**/
    $wp_customize->add_setting( 'zagolov' , array(
    'default'     => '', 'wptuts',
    'transport'   => 'refresh',
	));
   $wp_customize->add_control(
	'zagolov', 
	array(
		'label'    => 'Заголовок', 'wptuts',
		'section'  => 's_section',
		'settings' => 'zagolov',
		'type'     => 'text',
	));

}
add_action( 'customize_register', 'wptuts_customize_register' );



?>