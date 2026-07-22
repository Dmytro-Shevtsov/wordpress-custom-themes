<?php
/* загружаемые скрипты и стили */
function load_style_script(){
	wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}

/* загружаем скрипты и стили */
add_action('wp_enqueue_scripts', 'load_style_script');

/* поддержка миниатюр */
add_theme_support('post-thumbnails');

/* регистрируем меню */
register_nav_menus(array(
	'header_menu' => 'Меню в шапке',
	'left_menu' => 'Левое меню'
));


?>