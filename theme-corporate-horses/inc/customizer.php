<?php
// Кастомизация темы
function wptuts_customize_register($wp_customize) {
    // Секция "Контактная информация"
    $wp_customize->add_section('contact_section', [
        'title'    => 'Контактная информация',
        'priority' => 30,
    ]);

    // Настройки секции
    $fields = [
        'site_phone_1'     => 'Телефон 1',
        'site_phone_2'     => 'Телефон 2',
        'site_mail_1'    => 'Почта 1',
        'site_mail_2'    => 'Почта 2',
		'site_telegram'    => 'Телеграм',
		'site_viber'    => 'Вайбер',
		'site_whatsapp'    => 'Ватсап',
        'youtube_link'    => 'Ютюб',
        'facebook_link'    => 'Фейсбук',
        'insta_link'    => 'Инстаграм',
        'footer_text'  => 'Текст в футере',
        'hero_video'  => 'Видео на главной',
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



