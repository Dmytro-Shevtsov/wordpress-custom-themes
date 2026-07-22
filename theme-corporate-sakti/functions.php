<?php
/* загружаемые скрипты и стили */
function load_style_script(){
	wp_enqueue_style('style-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
	
	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.js');
	wp_enqueue_script( 'jquery-ui', 'https://code.jquery.com/ui/1.13.2/jquery-ui.js');
	wp_enqueue_script( 'pd_script', get_stylesheet_directory_uri() . '/js/main.js');
}

/* загружаем скрипты и стили */
add_action('wp_enqueue_scripts', 'load_style_script');

/* поддержка миниатюр */
add_theme_support('post-thumbnails');


/* Форма контактов */
register_sidebar(array(
		'name' => 'Форма контактов',
		'id' => 'forma_kontact',
		'before_widget' => '',
		'after_widget' => ''
	)
);
/* Слайдер */
register_sidebar(array(
		'name' => 'Слайдер',
		'id' => 'sliderh',
		'before_widget' => '',
		'after_widget' => ''
	)
);
/* Языки */
register_sidebar(array(
		'name' => 'Языки',
		'id' => 'lang',
		'before_widget' => '',
		'after_widget' => ''
	)
);

/* регистрируем меню */
register_nav_menus(array(
	'header_menu' => 'Меню в шапке',
	'footer_menu' => 'Меню в подвале'
));


?>