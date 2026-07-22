<?php
// Поддержка миниатюр
add_theme_support('post-thumbnails');

// Регистрация меню
register_nav_menus([
    'header_menu' => 'Меню в шапке',
    'footer_menu' => 'Меню в футере',
    'footer_dop' => 'Меню в футере Доп',
]);

function custom_breadcrumbs() {
    // Не показывать на главной странице
    if (is_front_page()) return;

    echo '<nav class="breadcrumbs">';
    echo '<a href="' . home_url() . '">Головна</a> / ';

    if (is_category()) {
        // Категория блога
        $category = get_queried_object();
        echo '<span>' . single_cat_title('', false) . '</span>';
    } elseif (is_single()) {
        // Если пост, показать категорию + название поста
        $category = get_the_category();
        if (!empty($category)) {
            echo '<a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->name . '</a> &raquo; ';
        }
        echo '<span>' . get_the_title() . '</span>';
    } elseif (is_page()) {
        // Если обычная страница
        echo '<span>' . get_the_title() . '</span>';
    } elseif (is_search()) {
        // Страница поиска
        echo '<span>Результати пошуку</span>';
    } elseif (is_404()) {
        // Страница 404
        echo '<span>Помилка 404</span>';
    }

    echo '</nav>';
}

















