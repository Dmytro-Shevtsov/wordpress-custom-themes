<?php
/* загружаемые скрипты и стили */
function load_style_script(){
	wp_enqueue_style( 'pd-style', get_stylesheet_uri() );
	wp_enqueue_style( 'pd-fonts', get_template_directory_uri() . '/fonts/font.css' );
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css' );
	
	wp_enqueue_script( 'magnific-popup-script', get_stylesheet_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), null, true);
	wp_enqueue_script( 'pd_script', get_stylesheet_directory_uri() . '/js/script.js');
}

/* загружаем скрипты и стили */
add_action('wp_enqueue_scripts', 'load_style_script');



/* поддержка миниатюр */
add_theme_support('post-thumbnails');


/* регистрируем меню */
register_nav_menus([
	'header_menu' => 'Меню в шапке',
	'soc_menu' => 'Соцсети'
]);


/* виджет языки */
register_sidebar(array(
		'name' => 'языки',
		'id' => 'lang',
		'before_widget' => '',
		'after_widget' => ''
	)
);
/* виджет телефон */
register_sidebar(array(
		'name' => 'телефон',
		'id' => 'vtel',
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

}
add_action( 'customize_register', 'wptuts_customize_register' );
/* /кастомизация */


add_filter('wpcf7_skip_mail', 'cf7_limit_submissions', 10, 2);

function cf7_limit_submissions($skip_mail, $contact_form) {

    $ip = $_SERVER['REMOTE_ADDR'];
    $key = 'cf7_limit_' . md5($ip);

    if (get_transient($key)) {
        return true;
    }

    set_transient($key, true, 60); // 1 форма в минуту

    return $skip_mail;
}























?>