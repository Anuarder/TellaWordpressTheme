<?php

add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'scripts_theme');

function style_theme() {
    wp_enqueue_style('style', get_template_directory_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/lib/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/lib/animate/animate.min.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/lib/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Rubik|Open+Sans|Raleway');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');
}

function scripts_theme() {
    wp_enqueue_script('vue', 'https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js');
    wp_enqueue_script('sweetalert', 'https://unpkg.com/sweetalert/dist/sweetalert.min.js');
    wp_enqueue_script('jquery3.4', 'https://code.jquery.com/jquery-3.4.1.min.js');
    wp_enqueue_script('input-mask', get_template_directory_uri() . '/assets/lib/inputmask/jquery.maskedinput.min.js');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/lib/bootstrap/js/bootstrap.min.js');
    wp_enqueue_script('animate', get_template_directory_uri() . '/assets/lib/animate/wow.min.js');
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js');
}

add_action('customize_register', 'etwow_advantages_section');

function etwow_advantages_section($wp_customize) {
    $wp_customize -> add_section('etwow-advantages-section', array(
        'title' => 'Advantages'
    ));

    // Hide block
    $wp_customize -> add_setting('etwow-advantages-display', array(
        'default' => 'YES'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'etwow-advantages-display-control', array(
        'label' => 'Display this section?',
        'section' => 'etwow-advantages-section',
        'settings' => 'etwow-advantages-display',
        'type' => 'select',
        'choices' => array(
            'YES' => 'YES',
            'NO' => 'NO'
        )
    )));

    $wp_customize -> add_setting('etwow-advantages-headline', array(
        'default' => 'ВСЕ ПРЕИМУЩЕСТВА В УНИКАЛЬНОМ СТИЛЕ'
    ));

    // Headline
    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'etwow-advantages-headline-control', array(
        'label' => 'Headline',
        'section' => 'etwow-advantages-section',
        'settings' => 'etwow-advantages-headline'
    )));

    // Title image1
    $wp_customize -> add_setting('etwow-advantages-item1-title', array(
        'default' => 'Быстрый'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'etwow-advantages-item1-title-control', array(
        'label' => 'Item1_title',
        'section' => 'etwow-advantages-section',
        'settings' => 'etwow-advantages-item1-title',
        // 'type' => 'textarea'
    )));

    // Image item1
    $wp_customize -> add_setting('etwow-advantages-item1-image');

    $wp_customize -> add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'etwow-advantages-item1-image-control', array(
        'label' => 'Item1_image',
        'section' => 'etwow-advantages-section',
        'settings' => 'etwow-advantages-item1-image',
    )));

    // Text item1
    $wp_customize -> add_setting('etwow-advantages-item1-text', array(
        'default' => ' E-TWOW достигает скорости до 40 км / ч'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'etwow-advantages-item1-text-control', array(
        'label' => 'Item1_text',
        'section' => 'etwow-advantages-section',
        'settings' => 'etwow-advantages-item1-text',
        'type' => 'textarea'
    )));

    
}