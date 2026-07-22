<?php
// Скрипты для загрузки изображения в главном меню
function add_menu_icon_field($item_id, $item) {
    $icon = get_post_meta($item_id, '_menu_item_icon', true);
    ?>
    <p class="description">
        <label for="menu-item-icon-<?php echo $item_id; ?>">
            Иконка (URL):  
            <input type="text" id="menu-item-icon-<?php echo $item_id; ?>" name="menu-item-icon[<?php echo $item_id; ?>]" value="<?php echo esc_attr($icon); ?>" />
        </label>
    </p>
    <?php
}
add_action('wp_nav_menu_item_custom_fields', 'add_menu_icon_field', 10, 2);

function save_menu_icon_field($menu_id, $menu_item_db_id) {
    if (isset($_POST['menu-item-icon'][$menu_item_db_id])) {
        update_post_meta($menu_item_db_id, '_menu_item_icon', esc_url($_POST['menu-item-icon'][$menu_item_db_id]));
    }
}
add_action('wp_update_nav_menu_item', 'save_menu_icon_field', 10, 2);

function display_menu_icon($title, $item, $args, $depth) {
    $icon = get_post_meta($item->ID, '_menu_item_icon', true);
    if ($icon) {
        $title = '<img src="' . esc_url($icon) . '" class="menu-icon" alt=""> ' . $title;
    }
    return $title;
}
add_filter('nav_menu_item_title', 'display_menu_icon', 10, 4);

