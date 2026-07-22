<?php
/**
 * Шорткод для вывода кастомного баннера в статье.
 * Использует шорткод: [my_post_banner]
 */
function display_custom_banner_shortcode() {

    // 1. Получаем данные из наших полей ACF.
    $title = get_field('banner_title');
    $paragraph = get_field('banner_paragraph');
    $button_text = get_field('banner_button_text');
    $button_link_array = get_field('banner_button_link');
    $source_post_object = get_field('banner_image_source_post');

    // 2. Проверяем, выбрана ли запись для изображения. Если нет, баннер не показываем.
    if ( !$source_post_object ) {
        return ''; // Возвращаем пустоту, чтобы не было ошибок.
    }

    // 3. Получаем всю нужную информацию из объекта "Запись для изображения".
    $image_id = get_post_thumbnail_id( $source_post_object->ID );
    $image_html = wp_get_attachment_image( $image_id, 'medium' ); // 'medium' - хороший размер для превью.

    // 4. Готовим HTML с помощью буферизации вывода (это чище, чем склеивать строки).
    ob_start();
    ?>

    <div class="custom-post-banner">
        
        <?php if ($image_html) : ?>
            <div class="banner-image">
                <?php echo $image_html; ?>
            </div>
        <?php endif; ?>

        <div class="banner-content">
            
            <?php if ($title) : ?>
                <h3 class="banner-title"><?php echo esc_html($title); ?></h3>
            <?php endif; ?>

            <?php if ($paragraph) : ?>
                <p class="banner-paragraph"><?php echo nl2br(esc_html($paragraph)); ?></p>
            <?php endif; ?>

            <?php if ( $button_link_array && $button_text ) : 
                // Безопасно извлекаем URL и target из массива ссылки
                $link_url = esc_url($button_link_array['url']);
                $link_target = esc_attr($button_link_array['target'] ? $button_link_array['target'] : '_self');
            ?>
                <a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>" class="banner-button">
                    <?php echo esc_html($button_text); ?>
                </a>
            <?php endif; ?>

        </div>

    </div>

    <?php
    // 5. Возвращаем собранный и очищенный HTML-код.
    return ob_get_clean();
}

// 6. Регистрируем наш шорткод в WordPress.
add_shortcode('my_post_banner', 'display_custom_banner_shortcode');