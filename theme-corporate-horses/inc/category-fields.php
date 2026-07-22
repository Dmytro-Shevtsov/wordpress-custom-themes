<?php
// Скрипты для загрузки изображения в рубриках
function enqueue_category_image_script() {
    wp_enqueue_media(); // Подключение медиа-загрузчика WordPress
    wp_enqueue_script(
        'category-image-upload',
        get_template_directory_uri() . '/js/category-image-upload.js',
        ['jquery'],
        null,
        true
    );

}
add_action('admin_enqueue_scripts', 'enqueue_category_image_script');

// Добавление поля для загрузки изображения в рубриках
function add_category_image_field() {
    ?>
    <div class="form-field">
        <label for="category-image">Изображение рубрики</label>
        <input type="text" name="category_image" id="category-image" value="" />
        <button class="button category-image-upload">Загрузить изображение</button>
    </div>
    <?php
}
add_action('category_add_form_fields', 'add_category_image_field');

// Поле для редактирования изображения рубрики
function edit_category_image_field($term) {
    $image_url = get_term_meta($term->term_id, 'category_image', true);
    ?>
    <tr class="form-field">
        <th scope="row">
            <label for="category-image">Изображение рубрики</label>
        </th>
        <td>
            <input type="text" name="category_image" id="category-image" value="<?php echo esc_url($image_url); ?>" />
            <button class="button category-image-upload">Загрузить изображение</button>
        </td>
    </tr>
    <?php
}
add_action('category_edit_form_fields', 'edit_category_image_field');

// Сохранение значения поля изображения рубрики
function save_category_image($term_id) {
    if (isset($_POST['category_image'])) {
        update_term_meta($term_id, 'category_image', esc_url($_POST['category_image']));
    }
}
add_action('edited_category', 'save_category_image');
add_action('create_category', 'save_category_image');

