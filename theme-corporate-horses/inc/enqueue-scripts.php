<?php
/**
 * Functions for theme setup and custom functionality
 */

// Загружаемые скрипты и стили
function theme_enqueue_assets() {

    // Подключаем стили Swiper
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), null);

    // Google Fonts
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap',
        array(),
        null
    );


	// Файлы стилей
    wp_enqueue_style('base-css', get_template_directory_uri() . '/css/base.css', array(), null);
    wp_enqueue_style('header-css', get_template_directory_uri() . '/css/header.css', array(), null);
    wp_enqueue_style('main-css', get_template_directory_uri() . '/css/main.css', array(), null);
    wp_enqueue_style('sidebar-css', get_template_directory_uri() . '/css/sidebar.css', array(), null);	
    wp_enqueue_style('footer-css', get_template_directory_uri() . '/css/footer.css', array(), null);
    wp_enqueue_style('mobile-css', get_template_directory_uri() . '/css/mobile.css', array(), null);	

    // Основной стиль темы (подключаем последним)
    wp_enqueue_style('theme-style', get_stylesheet_uri(), array(), false);
	

    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true);
	wp_enqueue_script('menu-js', get_template_directory_uri() . '/js/header-menu.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'theme_enqueue_assets');
