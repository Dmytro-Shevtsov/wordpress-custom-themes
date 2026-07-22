<?php
// Добавляем стили
function add_footer_class($classes) {
    if (is_front_page()) { // Проверяем, главная ли страница
        $classes[] = 'footer-home'; // Добавляем класс
    }
    return $classes;
}
add_filter('body_class', 'add_footer_class');
