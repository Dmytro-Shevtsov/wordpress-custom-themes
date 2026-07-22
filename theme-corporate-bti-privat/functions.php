<?php

/* загружаемые скрипты и стили */
function load_style_script(){
	
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('style-icon', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');

}

/* загружаем скрипты и стили */
add_action('wp_enqueue_scripts', 'load_style_script');

/* Баннер */
register_sidebar(array(
		'name' => 'Баннер',
		'id' => 'banner_vidget',
		'description' => 'Используйте виджет слайдера',
		'before_widget' => '',
		'after_widget' => ''
	)
);

/* Форма на главной */
register_sidebar(array(
		'name' => 'Форма на главной',
		'id' => 'form_home',
		'description' => 'Используйте виджет слайдера',
		'before_widget' => '',
		'after_widget' => ''
	)
);

/* Форма на главной */
register_sidebar(array(
		'name' => 'Переключатель языков',
		'id' => 'lang',
		'description' => '',
		'before_widget' => '',
		'after_widget' => ''
	)
);

/* регистрируем меню */
register_nav_menus(array(
	'header_menu' => 'Меню в шапке',
	'top_menu' => 'Top menu'
));

/* поддержка миниатюр */
add_theme_support('post-thumbnails');



?>