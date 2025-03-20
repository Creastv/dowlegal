<?php
function register_social_media_settings($wp_customize)
{
    // Dodanie sekcji Social Media
    $wp_customize->add_section('social_media_section', [
        'title'    => __('Linki do Social Media', 'go'),
        'priority' => 35,
    ]);

    // Tablica z social media
    $social_media = [
        'facebook' => __('Facebook', 'go'),
        'twitter' => __('Twitter', 'go'),
        'instagram' => __('Instagram', 'go'),
        'linkedin' => __('LinkedIn', 'go'),
        'tiktok' => __('TikTok', 'go'),
    ];

    foreach ($social_media as $key => $label) {
        $wp_customize->add_setting("{$key}_url", [
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ]);
        $wp_customize->add_control("{$key}_url", [
            'label'   => sprintf(__('%s URL', 'go'), $label),
            'section' => 'social_media_section',
            'type'    => 'url',
        ]);
    }
}
add_action('customize_register', 'register_social_media_settings');

function register_header_settings($wp_customize)
{
    // Dodanie sekcji dla zakładki "Header"
    $wp_customize->add_section('header_section', [
        'title'    => __('Ustawienia Headera', 'go'),
        'priority' => 50,
    ]);

    // 📞 Ustawienie dla numeru telefonu
    $wp_customize->add_setting('header_phone_number', [
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('header_phone_number', [
        'label'   => __('Numer telefonu', 'go'),
        'section' => 'header_section',
        'type'    => 'text',
    ]);

    // ✉️ Ustawienie dla adresu e-mail
    $wp_customize->add_setting('header_email_address', [
        'default'           => '',
        'sanitize_callback' => 'sanitize_email',
    ]);
    $wp_customize->add_control('header_email_address', [
        'label'   => __('Adres e-mail', 'go'),
        'section' => 'header_section',
        'type'    => 'email',
    ]);
    // ✉️ Ustawienie dla adresu
    $wp_customize->add_setting('header_address', [
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('header_address', [
        'label'   => __('Adres', 'go'),
        'section' => 'header_section',
        'type'    => 'text',
    ]);
    // 🌐 Opcja checkbox dla wyświetlania social media
    $wp_customize->add_setting('header_display_socialmedia', [
        'default'           => false,
        'sanitize_callback' => 'wp_validate_boolean',
    ]);
    $wp_customize->add_control('header_display_socialmedia', [
        'label'   => __('Wyświetlaj ikony social media', 'go'),
        'section' => 'header_section',
        'type'    => 'checkbox',
    ]);

    // 🖼️ Zdjęcie w tle
    $wp_customize->add_setting('header_bg', [
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ]);

    $wp_customize->add_control(
        new WP_Customize_Image_Control($wp_customize, 'header_bg', [
            'label'       => __('Zdjęcie w tle nagłówku', 'go'),
            'description' => __('Wybierz obraz tła nagłówka, który będzie widoczny na wszystkich stronach. Możesz zdjęcie nadpisać wybierająć zdjęcie w edycji każdej podstrony', 'go'),
            'section'     => 'header_section',
        ])
    );
}
add_action('customize_register', 'register_header_settings');


function register_footer_settings($wp_customize)
{
    // SEKCJA FOOTERA
    $wp_customize->add_section('footer_section', [
        'title'    => __('Ustawienia Footer', 'go'),
        'priority' => 55,
    ]);

    // 🖼️ Logo w Footerze
    $wp_customize->add_setting('footer_logo', [
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control(
        new WP_Customize_Image_Control($wp_customize, 'footer_logo', [
            'label'   => __('Logo w Footerze', 'go'),
            'section' => 'footer_section',
        ])
    );

    // 📝 Tekst pod logo
    $wp_customize->add_setting('footer_text_under_logo', [
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('footer_text_under_logo', [
        'label'   => __('Tekst pod logo', 'go'),
        'section' => 'footer_section',
        'type'    => 'text',
    ]);

    // 📞 Numer telefonu w Footerze
    $wp_customize->add_setting('footer_phone_number', [
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('footer_phone_number', [
        'label'   => __('Numer telefonu', 'go'),
        'section' => 'footer_section',
        'type'    => 'text',
    ]);

    // ✉️ Adres e-mail w Footerze
    $wp_customize->add_setting('footer_email_address', [
        'default'           => '',
        'sanitize_callback' => 'sanitize_email',
    ]);
    $wp_customize->add_control('footer_email_address', [
        'label'   => __('Adres e-mail', 'go'),
        'section' => 'footer_section',
        'type'    => 'email',
    ]);
    // ✉️ Ustawienie dla adresu
    $wp_customize->add_setting('footer_address', [
        'default'           => '',
        // 'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('footer_address', [
        'label'   => __('Adres', 'go'),
        'section' => 'footer_section',
        'type'    => 'text',
    ]);

    // ✉️ Ustawienie godziny otwarcia
    $wp_customize->add_setting('footer_opening', [
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('footer_opening', [
        'label'   => __('Godziny otwarcia', 'go'),
        'section' => 'footer_section',
        'type'    => 'text',
    ]);
    // ✉️ Ustawienie map
    $wp_customize->add_setting('footer_map', [
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('footer_map', [
        'label'   => __('Jak dojechać', 'go'),
        'section' => 'footer_section',
        'type'    => 'url',
    ]);

    // Pobranie wszystkich utworzonych menu
    $menus = wp_get_nav_menus();
    $menu_choices = ['' => __('Wybierz menu', 'go')];

    foreach ($menus as $menu) {
        $menu_choices[$menu->term_id] = $menu->name;
    }

    // 📋 5 pól do wyboru menu w Footerze (dropdown z utworzonymi menu) + Tytuł dla każdego menu
    for ($i = 1; $i <= 5; $i++) {
        // Pole tytułu menu
        $wp_customize->add_setting("footer_menu_title_$i", [
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control("footer_menu_title_$i", [
            'label'   => sprintf(__('Tytuł menu %d', 'go'), $i),
            'section' => 'footer_section',
            'type'    => 'text',
        ]);

        // Pole wyboru menu
        $wp_customize->add_setting("footer_menu_$i", [
            'default'           => '',
            'sanitize_callback' => 'absint', // ID menu powinno być liczbą
        ]);
        $wp_customize->add_control("footer_menu_$i", [
            'label'   => sprintf(__('Wybierz menu %d', 'go'), $i),
            'section' => 'footer_section',
            'type'    => 'select',
            'choices' => $menu_choices,
        ]);
    }

    // 🌐 Checkbox: Włącz Social Media w Footerze
    $wp_customize->add_setting('footer_display_socialmedia', [
        'default'           => false,
        'sanitize_callback' => 'wp_validate_boolean',
    ]);
    $wp_customize->add_control('footer_display_socialmedia', [
        'label'   => __('Włącz Social Media w Footerze', 'go'),
        'section' => 'footer_section',
        'type'    => 'checkbox',
    ]);
}
add_action('customize_register', 'register_footer_settings');
