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
        'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap',
        array(),
        null
    );

	// Файлы стилей
    wp_enqueue_style('base-css', get_template_directory_uri() . '/css/base.css', array(), null);
    wp_enqueue_style('typography-css', get_template_directory_uri() . '/css/typography.css', array(), null);
    wp_enqueue_style('header-css', get_template_directory_uri() . '/css/header.css', array(), null);
    wp_enqueue_style('sliders-css', get_template_directory_uri() . '/css/sliders.css', array(), null);	
    wp_enqueue_style('main-css', get_template_directory_uri() . '/css/main.css', array(), null);	
    wp_enqueue_style('page-css', get_template_directory_uri() . '/css/page.css', array(), null);	
    wp_enqueue_style('faq-css', get_template_directory_uri() . '/css/faq.css', array(), null);	
    wp_enqueue_style('category-css', get_template_directory_uri() . '/css/category-post.css', array(), null);	
    wp_enqueue_style('error-css', get_template_directory_uri() . '/css/pageerror.css', array(), null);	
    wp_enqueue_style('footer-css', get_template_directory_uri() . '/css/footer.css', array(), null);
    wp_enqueue_style('mobile-css', get_template_directory_uri() . '/css/mobile.css', array(), null);

    // Основной стиль темы (подключаем последним)
    wp_enqueue_style('theme-style', get_stylesheet_uri(), array(), false);
	
	

    // Подключаем скрипт Swiper
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);

    // Основной файл, общие функции
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true);
	
	// Подключаем слайдеры
    wp_enqueue_script('slider-app', get_template_directory_uri() . '/js/slider-app.js', array('swiper-js'), null, true);
    wp_enqueue_script('slider-poker', get_template_directory_uri() . '/js/slider-poker.js', array('swiper-js'), null, true);

    // Скрипт мобильного меню
    wp_enqueue_script('mobile-menu-js', get_template_directory_uri() . '/js/mobile-menu.js', array('jquery'), null, true);
	
	// Скрипт кнопки
    wp_enqueue_script('button-script', get_template_directory_uri() . '/js/button.js', array('jquery'), null, true);
	
	// Подключаем скрипт для аккордеона FAQ
	wp_enqueue_script('faq-js', get_template_directory_uri() . '/js/faq.js', array('jquery'), null, true);


}

add_action('wp_enqueue_scripts', 'theme_enqueue_assets');







