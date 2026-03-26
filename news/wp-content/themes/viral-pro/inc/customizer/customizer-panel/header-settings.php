<?php

/**
 * Viral Pro Theme Customizer
 *
 * @package Viral Pro
 */
/* HEADER PANEL */
$wp_customize->add_panel('viral_pro_header_settings_panel', array(
    'title' => esc_html__('Header Settings', 'viral-pro'),
    'priority' => 15
));

$wp_customize->get_section('title_tagline')->panel = 'viral_pro_header_settings_panel';
$wp_customize->get_section('title_tagline')->title = esc_html__('Logo & Favicon', 'viral-pro');

$wp_customize->add_setting('viral_pro_hide_title', array(
    'sanitize_callback' => 'viral_pro_sanitize_text',
    'default' => false,
    'transport' => 'postMessage'
));

$wp_customize->add_control('viral_pro_hide_title', array(
    'type' => 'checkbox',
    'section' => 'title_tagline',
    'label' => esc_html__('Hide Site Title', 'viral-pro')
));

$wp_customize->add_setting('viral_pro_hide_tagline', array(
    'sanitize_callback' => 'viral_pro_sanitize_text',
    'default' => false,
    'transport' => 'postMessage'
));

$wp_customize->add_control('viral_pro_hide_tagline', array(
    'type' => 'checkbox',
    'section' => 'title_tagline',
    'label' => esc_html__('Hide Site Tagline', 'viral-pro')
));

$wp_customize->add_setting('viral_pro_tagline_position', array(
    'sanitize_callback' => 'viral_pro_sanitize_text',
    'default' => 'ht-tagline-inline-logo',
    'transport' => 'postMessage'
));

$wp_customize->add_control('viral_pro_tagline_position', array(
    'section' => 'title_tagline',
    'type' => 'select',
    'label' => esc_html__('Title/Tagline Position', 'viral-pro'),
    'choices' => array(
        'ht-tagline-inline-logo' => esc_html__('Inline With Logo', 'viral-pro'),
        'ht-tagline-below-logo' => esc_html__('Below Logo', 'viral-pro')
    )
));

$wp_customize->add_setting('viral_pro_title_color', array(
    'default' => '#333333',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'postMessage'
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'viral_pro_title_color', array(
    'section' => 'title_tagline',
    'label' => esc_html__('Title/Tagline Color', 'viral-pro')
)));

$wp_customize->selective_refresh->add_partial('viral_pro_hide_title', array(
    'selector' => '#ht-site-branding',
    'render_callback' => 'viral_pro_header_logo'
));

$wp_customize->selective_refresh->add_partial('viral_pro_hide_tagline', array(
    'selector' => '#ht-site-branding',
    'render_callback' => 'viral_pro_header_logo'
));


//HEADER SETTINGS
$wp_customize->add_section('viral_pro_header_options', array(
    'title' => esc_html__('Header Options', 'viral-pro'),
    'panel' => 'viral_pro_header_settings_panel'
));

$wp_customize->add_setting('viral_pro_header_nav', array(
    'transport' => 'postMessage',
    'sanitize_callback' => 'wp_kses_post',
));

$wp_customize->add_control(new Viral_Pro_Control_Tab($wp_customize, 'viral_pro_header_nav', array(
    'type' => 'tab',
    'section' => 'viral_pro_header_options',
    'priority' => 1,
    'buttons' => array(
        array(
            'name' => esc_html__('Layouts', 'viral-pro'),
            'fields' => array(
                'viral_pro_mh_layout',
                'viral_pro_header_position',
                'viral_pro_responsive_width',
                'viral_pro_header_layouts',
                'viral_pro_logo_height',
                'viral_pro_logo_padding',
                'viral_pro_mh_header_bg'
            ),
            'active' => true,
        ),
        array(
            'name' => esc_html__('Top Bar', 'viral-pro'),
            'fields' => array(
                'viral_pro_top_header',
                'viral_pro_th_bg_color',
                'viral_pro_th_bottom_border_color',
                'viral_pro_th_text_color',
                'viral_pro_th_anchor_color',
                'viral_pro_th_height',
                'viral_pro_th_disable_mobile',
                'viral_pro_top_header_options_heading',
                'viral_pro_th_left_display',
                'viral_pro_th_right_display',
                'viral_pro_top_header_seperator',
                'viral_pro_social_link',
                'viral_pro_th_menu',
                'viral_pro_th_widget',
                'viral_pro_th_text',
                'viral_pro_th_ticker_title',
                'viral_pro_th_ticker_category'
            ),
        ),
        array(
            'name' => esc_html__('Main Menu', 'viral-pro'),
            'fields' => array(
                'viral_pro_sticky_header',
                'viral_pro_mh_bg_color',
                'viral_pro_mh_bg_color_mobile',
                'viral_pro_mh_height',
                'viral_pro_add_menu',
                'viral_pro_mh_button_color',
                'viral_pro_mh_border_sep_start',
                'viral_pro_mh_border',
                'viral_pro_mh_border_color',
                'viral_pro_mh_border_sep_end',
                'viral_pro_mh_show_search',
                'viral_pro_mh_show_cart',
                'viral_pro_mh_show_social',
                'viral_pro_mh_show_offcanvas',
                'viral_pro_menu_seperator',
                'viral_pro_mh_menu_color',
                'viral_pro_mh_menu_hover_color',
                'viral_pro_mh_menu_hover_bg_color',
                'viral_pro_submenu_seperator',
                'viral_pro_mh_submenu_bg_color',
                'viral_pro_mh_submenu_color',
                'viral_pro_mh_submenu_hover_color',
                'viral_pro_menuhover_seperator',
                'viral_pro_mh_menu_hover_style',
                'viral_pro_toggle_button_color',
                'viral_pro_menu_dropdown_padding'
            ),
        ),
    ),
)));

//HEADER LAYOUTS
$wp_customize->add_setting('viral_pro_mh_layout', array(
    'sanitize_callback' => 'viral_pro_sanitize_text',
    'default' => 'header-style4'
));

$wp_customize->add_control(new Viral_Pro_Selector($wp_customize, 'viral_pro_mh_layout', array(
    'section' => 'viral_pro_header_options',
    'label' => esc_html__('Header Layout', 'viral-pro'),
    'class' => 'ht-full-width',
    'options' => array(
        'header-style1' => $imagepath . '/inc/customizer/images/headers/header-1.png',
        'header-style2' => $imagepath . '/inc/customizer/images/headers/header-2.png',
        'header-style3' => $imagepath . '/inc/customizer/images/headers/header-3.png',
        'header-style4' => $imagepath . '/inc/customizer/images/headers/header-4.png',
        'header-style5' => $imagepath . '/inc/customizer/images/headers/header-5.png',
        'header-style6' => $imagepath . '/inc/customizer/images/headers/header-6.png',
        'header-style7' => $imagepath . '/inc/customizer/images/headers/header-7.png'
    )
)));

$wp_customize->add_setting('viral_pro_logo_height', array(
    'sanitize_callback' => 'absint',
    'default' => 60,
    'transport' => 'postMessage'
));

$wp_customize->add_control(new Viral_Pro_Range_Control($wp_customize, 'viral_pro_logo_height', array(
    'section' => 'viral_pro_header_options',
    'label' => esc_html__('Logo Height(px)', 'viral-pro'),
    'description' => esc_html__('The logo height will not increase beyond the header height. Increase the header height first. Logo will appear blur if the image size is small.', 'viral-pro'),
    'input_attrs' => array(
        'min' => 40,
        'max' => 200,
        'step' => 1
    )
)));

$wp_customize->add_setting('viral_pro_logo_padding', array(
    'sanitize_callback' => 'absint',
    'default' => 15,
    'transport' => 'postMessage'
));

$wp_customize->add_control(new Viral_Pro_Range_Control($wp_customize, 'viral_pro_logo_padding', array(
    'section' => 'viral_pro_header_options',
    'label' => esc_html__('Logo Top & Bottom Spacing(px)', 'viral-pro'),
    'input_attrs' => array(
        'min' => 0,
        'max' => 100,
        'step' => 1
    )
)));

$wp_customize->add_setting('viral_pro_mh_header_bg_url', array(
    'sanitize_callback' => 'esc_url_raw',
    'transport' => 'postMessage'
));

$wp_customize->add_setting('viral_pro_mh_header_bg_id', array(
    'sanitize_callback' => 'absint',
    'transport' => 'postMessage'
));

$wp_customize->add_setting('viral_pro_mh_header_bg_repeat', array(
    'default' => 'no-repeat',
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'postMessage'
));

$wp_customize->add_setting('viral_pro_mh_header_bg_size', array(
    'default' => 'cover',
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'postMessage'
));

$wp_customize->add_setting('viral_pro_mh_header_bg_position', array(
    'default' => 'center-center',
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'postMessage'
));

$wp_customize->add_setting('viral_pro_mh_header_bg_attach', array(
    'default' => 'scroll',
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'postMessage'
));

// Registers example_background control
$wp_customize->add_control(new Viral_Pro_Background_Control($wp_customize, 'viral_pro_mh_header_bg', array(
    'label' => esc_html__('Header Background', 'viral-pro'),
    'section' => 'viral_pro_header_options',
    'settings' => array(
        'image_url' => 'viral_pro_mh_header_bg_url',
        'image_id' => 'viral_pro_mh_header_bg_id',
        'repeat' => 'viral_pro_mh_header_bg_repeat', // Use false to hide the field
        'size' => 'viral_pro_mh_header_bg_size',
        'position' => 'viral_pro_mh_header_bg_position',
        'attach' => 'viral_pro_mh_header_bg_attach'
    )
)));

$wp_customize->add_setting('viral_pro_responsive_width', array(
    'sanitize_callback' => 'absint',
    'default' => 780
));

$wp_customize->add_control(new Viral_Pro_Range_Control($wp_customize, 'viral_pro_responsive_width', array(
    'section' => 'viral_pro_header_options',
    'label' => esc_html__('Enable Responsive Menu After(px)', 'viral-pro'),
    'description' => esc_html__('Set the value of the screen immediately after the menu item breaks into multiple line.', 'viral-pro'),
    'input_attrs' => array(
        'min' => 480,
        'max' => 1200,
        'step' => 10
    )
)));

//TOP HEADER SETTINGS
$wp_customize->add_setting('viral_pro_top_header', array(
    'sanitize_callback' => 'viral_pro_sanitize_text',
    'default' => 'on'
));

$wp_customize->add_control(new Viral_Pro_Switch_Control($wp_customize, 'viral_pro_top_header', array(
    'section' => 'viral_pro_header_options',
    'label' => esc_html__('Enable Top Header', 'viral-pro'),
    'on_off_label' => array(
        'on' => esc_html__('Yes', 'viral-pro'),
        'off' => esc_html__('No', 'viral-pro')
    )
)));

$wp_customize->add_setting('viral_pro_th_height', array(
    'sanitize_callback' => 'absint',
    'default' => 45,
    'transport' => 'postMessage'
));

$wp_customize->add_control(new Viral_Pro_Range_Control($wp_customize, 'viral_pro_th_height', array(
    'section' => 'viral_pro_header_options',
    'label' => esc_html__('Top Header Height', 'viral-pro'),
    'input_attrs' => array(
        'min' => 5,
        'max' => 100,
        'step' => 1
    )
)));

$wp_customize->add_setting('viral_pro_th_bg_color', array(
    'default' => '#0078af',
    'sanitize_callback' => 'viral_pro_sanitize_color_alpha',
    'transport' => 'postMessage'
));

$wp_customize->add_control(new Viral_Pro_Alpha_Color_Control($wp_customize, 'viral_pro_th_bg_color', array(
    'label' => esc_html__('Top Header Background', 'viral-pro'),
    'section' => 'viral_pro_header_options',
    'palette' => array(
        '#FFFFFF',
        '#000000',
        '#f5245f',
        '#1267b3',
        '#feb600',
        '#00C569',
        'rgba( 255, 255, 255, 0.2 )',
        'rgba( 0, 0, 0, 0.2 )'
    )
)));

$wp_customize->add_setting('viral_pro_th_bottom_border_color', array(
    'default' => '',
    'sanitize_callback' => 'viral_pro_sanitize_color_alpha',
    'transport' => 'postMessage'
));

$wp_customize->add_control(new Viral_Pro_Alpha_Color_Control($wp_customize, 'viral_pro_th_bottom_border_color', array(
    'label' => esc_html__('Top Header Bottom Border Color', 'viral-pro'),
    'description' => esc_html__('Leave Empty to Hide Border', 'viral-pro'),
    'section' => 'viral_pro_header_options'
)));

$wp_customize->add_setting('viral_pro_th_text_color', array(
    'default' => '#FFFFFF',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'postMessage'
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'viral_pro_th_text_color', array(
    'section' => 'viral_pro_header_options',
    'label' => esc_html__('Text Color', 'viral-pro')
)));

$wp_customize->add_setting('viral_pro_th_anchor_color', array(
    'default' => '#EEEEEE',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'postMessage'
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'viral_pro_th_anchor_color', array(
    'section' => 'viral_pro_header_options',
    'label' => esc_html__('Anchor(Link) Color', 'viral-pro')
)));

$wp_customize->add_setting('viral_pro_th_disable_mobile', array(
    'sanitize_callback' => 'viral_pro_sanitize_text',
    'default' => false,
    'transport' => 'postMessage'
));

$wp_customize->add_control(new Viral_Pro_Checkbox_Control($wp_customize, 'viral_pro_th_disable_mobile', array(
    'section' => 'viral_pro_header_options',
    'label' => esc_html__('Disable in Mobile', 'viral-pro')
)));

$wp_customize->add_setting('viral_pro_top_header_options_heading', array(
    'sanitize_callback' => 'viral_pro_sanitize_text'
));

$wp_customize->add_control(new Viral_Pro_Customize_Heading($wp_customize, 'viral_pro_top_header_options_heading', array(
    'section' => 'viral_pro_header_options',
    'label' => esc_html__('Top Header Content', 'viral-pro')
)));

$wp_customize->add_setting('viral_pro_th_left_display', array(
    'default' => 'date',
    'sanitize_callback' => 'viral_pro_sanitize_choices',
));

$wp_customize->add_control('viral_pro_th_left_display', array(
    'section' => 'viral_pro_header_options',
    'type' => 'select',
    'label' => esc_html__('Display in Left Header', 'viral-pro'),
    'choices' => array(
        'social' => esc_html__('Social Icons', 'viral-pro'),
        'menu' => esc_html__('Menu', 'viral-pro'),
        'widget' => esc_html__('Widget', 'viral-pro'),
        'text' => esc_html__('HTML Text', 'viral-pro'),
        'date' => esc_html__('Date & Time', 'viral-pro'),
        'ticker' => esc_html__('News Ticker', 'viral-pro'),
        'none' => esc_html__('None', 'viral-pro')
    )
));

$wp_customize->add_setting('viral_pro_th_right_display', array(
    'default' => 'social',
    'sanitize_callback' => 'viral_pro_sanitize_choices',
));

$wp_customize->add_control('viral_pro_th_right_display', array(
    'section' => 'viral_pro_header_options',
    'type' => 'select',
    'label' => esc_html__('Display in Right Header', 'viral-pro'),
    'choices' => array(
        'social' => esc_html__('Social Icons', 'viral-pro'),
        'menu' => esc_html__('Menu', 'viral-pro'),
        'widget' => esc_html__('Widget', 'viral-pro'),
        'text' => esc_html__('HTML Text', 'viral-pro'),
        'date' => esc_html__('Date & Time', 'viral-pro'),
        'none' => esc_html__('None', 'viral-pro')
    )
));

$wp_customize->add_setting('viral_pro_top_header_seperator', array(
    'sanitize_callback' => 'viral_pro_sanitize_text'
));

$wp_customize->add_control(new Viral_Pro_Separator_Control($wp_customize, 'viral_pro_top_header_seperator', array(
    'section' => 'viral_pro_header_options'
)));

$wp_customize->add_setting('viral_pro_social_link', array(
    'sanitize_callback' => 'viral_pro_sanitize_text'
));

$wp_customize->add_control(new Viral_Pro_Info_Text($wp_customize, 'viral_pro_social_link', array(
    'label' => esc_html__('Social Icons', 'viral-pro'),
    'section' => 'viral_pro_header_options',
    'description' => sprintf(esc_html__('Add your %s here', 'viral-pro'), '<a href="#" target="_blank">Social Icons</a>')
)));

$wp_customize->add_setting('viral_pro_th_menu', array(
    'sanitize_callback' => 'viral_pro_sanitize_text',
));

$wp_customize->add_control('viral_pro_th_menu', array(
    'section' => 'viral_pro_header_options',
    'type' => 'select',
    'label' => esc_html__('Select Menu', 'viral-pro'),
    'choices' => $viral_pro_menu_choice
));

$wp_customize->add_setting('viral_pro_th_widget', array(
    'sanitize_callback' => 'viral_pro_sanitize_text',
));

$wp_customize->add_control('viral_pro_th_widget', array(
    'section' => 'viral_pro_header_options',
    'type' => 'select',
    'label' => esc_html__('Select Widget', 'viral-pro'),
    'choices' => $viral_pro_widget_list
));

$wp_customize->add_setting('viral_pro_th_text', array(
    'sanitize_callback' => 'viral_pro_sanitize_text',
    'default' => 'California, TX 70240 | (1800) 456 7890',
));

$wp_customize->add_control(new Viral_Pro_Page_Editor($wp_customize, 'viral_pro_th_text', array(
    'section' => 'viral_pro_header_options',
    'label' => esc_html__('Html Text', 'viral-pro'),
    'include_admin_print_footer' => true
)));

$wp_customize->add_setting('viral_pro_th_ticker_title', array(
    'sanitize_callback' => 'viral_pro_sanitize_text',
    'default' => esc_html__('Breaking News', 'viral-pro'),
));

$wp_customize->add_control('viral_pro_th_ticker_title', array(
    'section' => 'viral_pro_header_options',
    'type' => 'text',
    'label' => esc_html__('Ticker Title', 'viral-pro'),
));

$wp_customize->add_setting('viral_pro_th_ticker_category', array(
    'default' => '-1',
    'sanitize_callback' => 'viral_pro_sanitize_integer'
));

$wp_customize->add_control(new Viral_Pro_Category_Dropdown($wp_customize, 'viral_pro_th_ticker_category', array(
    'settings' => 'viral_pro_th_ticker_category',
    'section' => 'viral_pro_header_options',
    'label' => __('Ticker Category', 'viral-pro')
)));

//MAIN HEADER SETTINGS
$wp_customize->add_setting('viral_pro_add_menu', array(
    'sanitize_callback' => 'viral_pro_sanitize_text'
));

$wp_customize->add_control(new Viral_Pro_Info_Text($wp_customize, 'viral_pro_add_menu', array(
    'section' => 'viral_pro_header_options',
    'description' => sprintf(esc_html__('Add %1$s and configure the below Settings. Set Menu Typography from %2$s.', 'viral-pro'), '<a href="' . admin_url() . '/nav-menus.php" target="_blank">Menu</a>', '<a href="#" id="menu_typography_link">Here</a>')
)));

$wp_customize->add_setting('viral_pro_sticky_header', array(
    'sanitize_callback' => 'viral_pro_sanitize_text',
    'default' => 'off'
));

$wp_customize->add_control(new Viral_Pro_Switch_Control($wp_customize, 'viral_pro_sticky_header', array(
    'section' => 'viral_pro_header_options',
    'label' => esc_html__('Enable Sticky Header', 'viral-pro'),
    'on_off_label' => array(
        'on' => esc_html__('Yes', 'viral-pro'),
        'off' => esc_html__('No', 'viral-pro')
    )
)));

$wp_customize->add_setting('viral_pro_mh_height', array(
    'sanitize_callback' => 'absint',
    'default' => 65,
    'transport' => 'postMessage'
));

$wp_customize->add_control(new Viral_Pro_Range_Control($wp_customize, 'viral_pro_mh_height', array(
    'section' => 'viral_pro_header_options',
    'label' => esc_html__('Header Height', 'viral-pro'),
    'input_attrs' => array(
        'min' => 50,
        'max' => 200,
        'step' => 1
    )
)));

$wp_customize->add_setting('viral_pro_mh_show_search', array(
    'sanitize_callback' => 'viral_pro_sanitize_text',
    'default' => true
));

$wp_customize->add_control(new Viral_Pro_Checkbox_Control($wp_customize, 'viral_pro_mh_show_search', array(
    'section' => 'viral_pro_header_options',
    'label' => esc_html__('Show Search Button', 'viral-pro')
)));

$wp_customize->add_setting('viral_pro_mh_show_cart', array(
    'sanitize_callback' => 'viral_pro_sanitize_text',
    'default' => false
));

$wp_customize->add_control(new Viral_Pro_Checkbox_Control($wp_customize, 'viral_pro_mh_show_cart', array(
    'section' => 'viral_pro_header_options',
    'label' => esc_html__('Show Cart Button', 'viral-pro'),
    'active_callback' => 'viral_pro_is_woocommerce_activated'
)));

$wp_customize->add_setting('viral_pro_mh_show_social', array(
    'sanitize_callback' => 'viral_pro_sanitize_text',
    'default' => false,
));

$wp_customize->add_control(new Viral_Pro_Checkbox_Control($wp_customize, 'viral_pro_mh_show_social', array(
    'section' => 'viral_pro_header_options',
    'label' => esc_html__('Show Social Icons', 'viral-pro')
)));

$wp_customize->add_setting('viral_pro_mh_show_offcanvas', array(
    'sanitize_callback' => 'viral_pro_sanitize_text',
    'default' => true
));

$wp_customize->add_control(new Viral_Pro_Checkbox_Control($wp_customize, 'viral_pro_mh_show_offcanvas', array(
    'section' => 'viral_pro_header_options',
    'label' => esc_html__('Show Offcanvas Menu', 'viral-pro')
)));


$wp_customize->add_setting('viral_pro_mh_button_color', array(
    'default' => '#000000',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'postMessage'
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'viral_pro_mh_button_color', array(
    'section' => 'viral_pro_header_options',
    'label' => esc_html__('Buttons Color(Search, Social Icons, Offcanvas Menu)', 'viral-pro')
)));

$wp_customize->add_setting('viral_pro_menu_seperator', array(
    'sanitize_callback' => 'viral_pro_sanitize_text'
));

$wp_customize->add_control(new Viral_Pro_Separator_Control($wp_customize, 'viral_pro_menu_seperator', array(
    'section' => 'viral_pro_header_options'
)));

$wp_customize->add_setting('viral_pro_mh_bg_color', array(
    'default' => '#0078af',
    'sanitize_callback' => 'viral_pro_sanitize_color_alpha',
    'transport' => 'postMessage'
));

$wp_customize->add_control(new Viral_Pro_Alpha_Color_Control($wp_customize, 'viral_pro_mh_bg_color', array(
    'label' => esc_html__('Header Background Color', 'viral-pro'),
    'section' => 'viral_pro_header_options',
    'palette' => array(
        '#FFFFFF',
        '#000000',
        '#f5245f',
        '#1267b3',
        '#feb600',
        '#00C569',
        'rgba( 255, 255, 255, 0.2 )',
        'rgba( 0, 0, 0, 0.2 )'
    )
)));

$wp_customize->add_setting('viral_pro_mh_bg_color_mobile', array(
    'default' => '#0078af',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'postMessage'
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'viral_pro_mh_bg_color_mobile', array(
    'section' => 'viral_pro_header_options',
    'label' => esc_html__('Header Bar Background Color(Mobile)', 'viral-pro')
)));

$wp_customize->add_setting('viral_pro_toggle_button_color', array(
    'default' => '#FFFFFF',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'postMessage'
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'viral_pro_toggle_button_color', array(
    'section' => 'viral_pro_header_options',
    'label' => esc_html__('Mobile Menu Button Color', 'viral-pro')
)));

$wp_customize->add_setting('viral_pro_mh_border_sep_start', array(
    'sanitize_callback' => 'viral_pro_sanitize_text'
));

$wp_customize->add_control(new Viral_Pro_Separator_Control($wp_customize, 'viral_pro_mh_border_sep_start', array(
    'section' => 'viral_pro_header_options'
)));

$wp_customize->add_setting('viral_pro_mh_border', array(
    'default' => 'ht-no-border',
    'sanitize_callback' => 'viral_pro_sanitize_choices',
    'transport' => 'postMessage'
));

$wp_customize->add_control('viral_pro_mh_border', array(
    'section' => 'viral_pro_header_options',
    'type' => 'select',
    'label' => esc_html__('Top and Bottom Border Settings', 'viral-pro'),
    'choices' => array(
        'ht-no-border' => esc_html__('Disable', 'viral-pro'),
        'ht-top-border' => esc_html__('Enable Top Border', 'viral-pro'),
        'ht-bottom-border' => esc_html__('Enable Bottom Border', 'viral-pro'),
        'ht-top-bottom-border' => esc_html__('Enable Top & Bottom Border', 'viral-pro')
    )
));

$wp_customize->add_setting('viral_pro_mh_border_color', array(
    'default' => '#EEEEEE',
    'sanitize_callback' => 'viral_pro_sanitize_color_alpha',
    'transport' => 'postMessage'
));

$wp_customize->add_control(new Viral_Pro_Alpha_Color_Control($wp_customize, 'viral_pro_mh_border_color', array(
    'label' => esc_html__('Border Color', 'viral-pro'),
    'section' => 'viral_pro_header_options'
)));

$wp_customize->add_setting('viral_pro_mh_border_sep_end', array(
    'sanitize_callback' => 'viral_pro_sanitize_text'
));

$wp_customize->add_control(new Viral_Pro_Separator_Control($wp_customize, 'viral_pro_mh_border_sep_end', array(
    'section' => 'viral_pro_header_options'
)));

$wp_customize->add_setting('viral_pro_mh_menu_color', array(
    'default' => '#FFFFFF',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'postMessage'
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'viral_pro_mh_menu_color', array(
    'section' => 'viral_pro_header_options',
    'label' => esc_html__('Menu Link Color', 'viral-pro')
)));

$wp_customize->add_setting('viral_pro_mh_menu_hover_color', array(
    'default' => '#FFFFFF',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'postMessage'
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'viral_pro_mh_menu_hover_color', array(
    'section' => 'viral_pro_header_options',
    'label' => esc_html__('Menu Link Color - Hover', 'viral-pro')
)));

$wp_customize->add_setting('viral_pro_mh_menu_hover_bg_color', array(
    'default' => '#0078af',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'postMessage'
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'viral_pro_mh_menu_hover_bg_color', array(
    'section' => 'viral_pro_header_options',
    'label' => esc_html__('Menu Link Background Color - Hover', 'viral-pro')
)));

$wp_customize->add_setting('viral_pro_submenu_seperator', array(
    'sanitize_callback' => 'viral_pro_sanitize_text'
));

$wp_customize->add_control(new Viral_Pro_Separator_Control($wp_customize, 'viral_pro_submenu_seperator', array(
    'section' => 'viral_pro_header_options'
)));

$wp_customize->add_setting('viral_pro_mh_submenu_bg_color', array(
    'default' => '#F2F2F2',
    'sanitize_callback' => 'viral_pro_sanitize_color_alpha',
    'transport' => 'postMessage'
));

$wp_customize->add_control(new Viral_Pro_Alpha_Color_Control($wp_customize, 'viral_pro_mh_submenu_bg_color', array(
    'label' => esc_html__('SubMenu Background Color', 'viral-pro'),
    'section' => 'viral_pro_header_options',
    'palette' => array(
        '#FFFFFF',
        '#000000',
        '#f5245f',
        '#1267b3',
        '#feb600',
        '#00C569',
        'rgba( 255, 255, 255, 0.2 )',
        'rgba( 0, 0, 0, 0.2 )'
    )
)));

$wp_customize->add_setting('viral_pro_mh_submenu_color', array(
    'default' => '#333333',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'postMessage'
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'viral_pro_mh_submenu_color', array(
    'section' => 'viral_pro_header_options',
    'label' => esc_html__('SubMenu Text/Link Color', 'viral-pro')
)));

$wp_customize->add_setting('viral_pro_mh_submenu_hover_color', array(
    'default' => '#333333',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'postMessage'
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'viral_pro_mh_submenu_hover_color', array(
    'section' => 'viral_pro_header_options',
    'label' => esc_html__('SubMenu Link Color - Hover', 'viral-pro')
)));

$wp_customize->add_setting('viral_pro_menuhover_seperator', array(
    'sanitize_callback' => 'viral_pro_sanitize_text'
));

$wp_customize->add_control(new Viral_Pro_Separator_Control($wp_customize, 'viral_pro_menuhover_seperator', array(
    'section' => 'viral_pro_header_options'
)));

$wp_customize->add_setting('viral_pro_mh_menu_hover_style', array(
    'default' => 'hover-style6',
    'sanitize_callback' => 'viral_pro_sanitize_text',
    'transport' => 'postMessage'
));

$wp_customize->add_control(new Viral_Pro_Image_Select($wp_customize, 'viral_pro_mh_menu_hover_style', array(
    'section' => 'viral_pro_header_options',
    'type' => 'select',
    'label' => esc_html__('Menu Hover Style', 'viral-pro'),
    'image_path' => $imagepath . '/inc/customizer/images/hover-styles/',
    'choices' => array(
        'hover-style1' => esc_html__('Hover Style 1', 'viral-pro'),
        'hover-style2' => esc_html__('Hover Style 2', 'viral-pro'),
        'hover-style3' => esc_html__('Hover Style 3', 'viral-pro'),
        'hover-style4' => esc_html__('Hover Style 4', 'viral-pro'),
        'hover-style5' => esc_html__('Hover Style 5', 'viral-pro'),
        'hover-style6' => esc_html__('Hover Style 6', 'viral-pro'),
        'hover-style7' => esc_html__('Hover Style 7', 'viral-pro'),
        'hover-style8' => esc_html__('Hover Style 8', 'viral-pro'),
        'hover-style9' => esc_html__('Hover Style 9', 'viral-pro'),
        'hover-style10' => esc_html__('Hover Style 10', 'viral-pro')
    )
)));

$wp_customize->add_setting('viral_pro_menu_dropdown_padding', array(
    'default' => 0,
    'sanitize_callback' => 'absint',
    'transport' => 'postMessage'
));

$wp_customize->add_control(new Viral_Pro_Range_Control($wp_customize, 'viral_pro_menu_dropdown_padding', array(
    'section' => 'viral_pro_header_options',
    'label' => esc_html__('Menu item Top/Bottom Padding', 'viral-pro'),
    'description' => sprintf(esc_html__('(in px) Select appropriate number so that the submenu on hover appears just below the header bar. %s', 'viral-pro'), '<a href="https://hashthemes.com/articles/menu-top-and-bottom-padding/" target="_blank">' . esc_html__('Detail Article Here', 'viral-pro') . '</a>'),
    'input_attrs' => array(
        'min' => 0,
        'max' => 100,
        'step' => 1
    )
)));

//HEADER BUTTON SETTINGS
$wp_customize->add_section('viral_pro_header_button_section', array(
    'title' => esc_html__('Header CTA Button', 'viral-pro'),
    'panel' => 'viral_pro_header_settings_panel',
    'description' => esc_html__('The CTA button will show at the end of the menu', 'viral-pro')
));

$wp_customize->add_setting('viral_pro_header_button_disable', array(
    'sanitize_callback' => 'viral_pro_sanitize_text',
    'default' => 'on',
));

$wp_customize->add_control(new Viral_Pro_Switch_Control($wp_customize, 'viral_pro_header_button_disable', array(
    'section' => 'viral_pro_header_button_section',
    'label' => esc_html__('Disable Button', 'viral-pro'),
    'on_off_label' => array(
        'on' => esc_html__('Yes', 'viral-pro'),
        'off' => esc_html__('No', 'viral-pro')
    ),
    'class' => 'switch-section'
)));

$wp_customize->add_setting('viral_pro_hb_text', array(
    'default' => esc_html__('Call Us', 'viral-pro'),
    'sanitize_callback' => 'viral_pro_sanitize_text',
    'transport' => 'postMessage'
));

$wp_customize->add_control('viral_pro_hb_text', array(
    'section' => 'viral_pro_header_button_section',
    'type' => 'text',
    'label' => esc_html__('Button Text', 'viral-pro')
));

$wp_customize->add_setting('viral_pro_hb_link', array(
    'default' => 'tel:981123232',
    'sanitize_callback' => 'viral_pro_sanitize_text',
    'transport' => 'postMessage'
));

$wp_customize->add_control('viral_pro_hb_link', array(
    'section' => 'viral_pro_header_button_section',
    'type' => 'text',
    'label' => esc_html__('Button Link', 'viral-pro')
));

$wp_customize->add_setting('viral_pro_hb_text_color', array(
    'default' => '#FFFFFF',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'postMessage'
));

$wp_customize->add_setting('viral_pro_hb_text_hov_color', array(
    'default' => '#FFFFFF',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'postMessage'
));

$wp_customize->add_setting('viral_pro_hb_bg_color', array(
    'default' => '#0078af',
    'sanitize_callback' => 'viral_pro_sanitize_color_alpha',
    'transport' => 'postMessage'
));

$wp_customize->add_setting('viral_pro_hb_bg_hov_color', array(
    'default' => '#0078af',
    'sanitize_callback' => 'viral_pro_sanitize_color_alpha',
    'transport' => 'postMessage'
));

$wp_customize->add_control(new Viral_Pro_Color_Tab_Control($wp_customize, 'viral_pro_hb_color_group', array(
    'label' => esc_html__('Button Colors', 'viral-pro'),
    'section' => 'viral_pro_header_button_section',
    'show_opacity' => false,
    'settings' => array(
        'normal_viral_pro_hb_text_color' => 'viral_pro_hb_text_color',
        'normal_viral_pro_hb_bg_color' => 'viral_pro_hb_bg_color',
        'hover_viral_pro_hb_text_hov_color' => 'viral_pro_hb_text_hov_color',
        'hover_viral_pro_hb_bg_hov_color' => 'viral_pro_hb_bg_hov_color'
    ),
    'group' => array(
        'normal_viral_pro_hb_text_color' => 'Button Text Color',
        'normal_viral_pro_hb_bg_color' => 'Button Backgroud Color',
        'hover_viral_pro_hb_text_hov_color' => 'Button Text Color',
        'hover_viral_pro_hb_bg_hov_color' => 'Button Backgroud Color'
    )
)));

$wp_customize->add_setting('viral_pro_hb_borderradius', array(
    'sanitize_callback' => 'absint',
    'default' => 0,
    'transport' => 'postMessage'
));

$wp_customize->add_control(new Viral_Pro_Range_Control($wp_customize, 'viral_pro_hb_borderradius', array(
    'section' => 'viral_pro_header_button_section',
    'label' => esc_html__('Button Border Radius', 'viral-pro'),
    'input_attrs' => array(
        'min' => 0,
        'max' => 100,
        'step' => 1
    )
)));

$wp_customize->add_setting('viral_pro_hb_disable_mobile', array(
    'sanitize_callback' => 'viral_pro_sanitize_text',
    'default' => true,
    'transport' => 'postMessage'
));

$wp_customize->add_control(new Viral_Pro_Checkbox_Control($wp_customize, 'viral_pro_hb_disable_mobile', array(
    'section' => 'viral_pro_header_button_section',
    'label' => esc_html__('Disable in Mobile', 'viral-pro')
)));
/*
$wp_customize->selective_refresh->add_partial('viral_pro_mh_show_social', array(
    'selector' => '#ht-masthead',
    'render_callback' => 'viral_pro_header_styles',
    'container_inclusive' => true
));

$wp_customize->selective_refresh->add_partial('viral_pro_mh_show_cart', array(
    'selector' => '#ht-masthead',
    'render_callback' => 'viral_pro_header_styles',
    'container_inclusive' => true
));

$wp_customize->selective_refresh->add_partial('viral_pro_th_left_display', array(
    'selector' => '#ht-masthead',
    'render_callback' => 'viral_pro_header_styles',
    'container_inclusive' => true
));

$wp_customize->selective_refresh->add_partial('viral_pro_th_right_display', array(
    'selector' => '#ht-masthead',
    'render_callback' => 'viral_pro_header_styles',
    'container_inclusive' => true
));

$wp_customize->selective_refresh->add_partial('viral_pro_th_menu', array(
    'selector' => '#ht-masthead',
    'render_callback' => 'viral_pro_header_styles',
    'container_inclusive' => true
));

$wp_customize->selective_refresh->add_partial('viral_pro_th_widget', array(
    'selector' => '#ht-masthead',
    'render_callback' => 'viral_pro_header_styles',
    'container_inclusive' => true
));

$wp_customize->selective_refresh->add_partial('viral_pro_th_text', array(
    'selector' => '#ht-masthead',
    'render_callback' => 'viral_pro_header_styles',
    'container_inclusive' => true
));

$wp_customize->selective_refresh->add_partial('viral_pro_th_ticker_title', array(
    'selector' => '#ht-masthead',
    'render_callback' => 'viral_pro_header_styles',
    'container_inclusive' => true
));

$wp_customize->selective_refresh->add_partial('viral_pro_th_ticker_category', array(
    'selector' => '#ht-masthead',
    'render_callback' => 'viral_pro_header_styles',
    'container_inclusive' => true
));

$wp_customize->selective_refresh->add_partial('viral_pro_header_button_disable', array(
    'selector' => '#ht-masthead',
    'render_callback' => 'viral_pro_header_styles',
    'container_inclusive' => true
));
*/