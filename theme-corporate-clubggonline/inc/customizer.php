<?php
// Кастомизация темы
function wptuts_customize_register($wp_customize) {
    // Секция "Контактная информация"
    $wp_customize->add_section('contact_section', [
        'title'    => 'Contact information',
        'priority' => 30,
    ]);

    // Настройки секции
    $fields = [
        'site_phone'     => 'Phone',
        'site_mail'    => 'Email',
        'whats_namb'    => 'WhatsApp',
        'telegram_namb'    => 'Telegram',
        'insta_link'    => 'Instagram link',
        'footer_text'  => 'Text in the footer',
        'footer_copyr_1' => 'Copyright',
        'footer_copyr_2' => 'Link to the Website Terms of Use',
    ];

    foreach ($fields as $field_id => $label) {
        // Поля для текста
        $wp_customize->add_setting($field_id, [
            'default'   => '',
            'transport' => 'refresh',
        ]);

        $wp_customize->add_control($field_id, [
            'label'    => esc_html($label),
            'section'  => 'contact_section',
            'settings' => $field_id,
            'type'     => 'text',
        ]);
    }


}
add_action('customize_register', 'wptuts_customize_register');



