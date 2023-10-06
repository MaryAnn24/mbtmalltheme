<?php

function mbtmall_customize_register($wp_customize) {
    // Add a section for theme options.
    $wp_customize->add_section('mbtmall_theme_options', array(
        'title'    => __('MBTMall Theme Options', 'mbtmall'),
        'priority' => 120,
    ));

    // Add a setting for the custom logo.
    $wp_customize->add_setting('mbtmall_custom_logo', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw', // Ensure a valid URL.
    ));

    // Add a control to upload a custom logo.
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mbtmall_custom_logo', array(
        'label'    => __('Upload Mall Logo', 'mbtmall'),
        'section'  => 'mbtmall_theme_options',
        'settings' => 'mbtmall_custom_logo',
    )));

    // Add a setting for header background color.
    $wp_customize->add_setting('mbtmall_header_background_color', array(
        'default'           => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color', // Ensure a valid hex color.
    ));

    // Add a control for header background color.
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mbtmall_header_background_color', array(
        'label'    => __('Header Background Color', 'mbtmall'),
        'section'  => 'mbtmall_theme_options',
        'settings' => 'mbtmall_header_background_color',
    )));
}
add_action('customize_register', 'mbtmall_customize_register');

