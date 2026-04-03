<?php

/**
 * Viral Pro functions and definitions
 *
 * @package Viral Pro
 */
if (!defined('VIRAL_PRO_VER')) {
    $viral_plus_get_theme = wp_get_theme();
    $viral_plus_version = $viral_plus_get_theme->Version;
    define('VIRAL_PRO_VER', $viral_plus_version);
}


if ( SITECOOKIEPATH != COOKIEPATH ) {
setcookie(TEST_COOKIE, 'WP Cookie check', 0, SITECOOKIEPATH, COOKIE_DOMAIN);
}

if (!function_exists('viral_pro_setup')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function viral_pro_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Viral Pro, use a find and replace
         * to change 'viral-pro' to the name of your theme in all the template files
         */
     
        add_action('init', function() {
            load_theme_textdomain('viral-pro', get_template_directory() . '/languages');
        });

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        add_theme_support('post-thumbnails');
        add_image_size('viral-pro-1300x540', 1300, 540, true);
        add_image_size('viral-pro-800x500', 800, 500, true);
        add_image_size('viral-pro-700x700', 700, 700, true);
        add_image_size('viral-pro-650x500', 650, 500, true);
        add_image_size('viral-pro-500x500', 500, 500, true);
        add_image_size('viral-pro-500x600', 500, 600, true);
        add_image_size('viral-pro-360x240', 360, 240, true);
        add_image_size('viral-pro-150x150', 150, 150, true);

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'primary' => esc_html__('Primary Menu', 'viral-pro'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        add_theme_support('post-formats', array('gallery', 'link', 'quote', 'video', 'audio'));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('viral_pro_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        add_theme_support('custom-logo', array(
            'height' => 62,
            'width' => 300,
            'flex-height' => true,
            'flex-width' => true,
            'header-text' => array('.ht-site-title', '.ht-site-description'),
        ));

        add_theme_support('woocommerce');
        add_theme_support('wc-product-gallery-zoom');
        add_theme_support('wc-product-gallery-lightbox');
        add_theme_support('wc-product-gallery-slider');

        /*
         * This theme styles the visual editor to resemble the theme style,
         * specifically font, colors, icons, and column width.
         */
        add_editor_style(array('css/editor-style.css', viral_pro_fonts_url()));

        add_theme_support('customize-selective-refresh-widgets');

        // Add support for Block Styles.
        add_theme_support('wp-block-styles');

        // Add support for full and wide align images.
        add_theme_support('align-wide');

        // Add support for editor styles.
        add_theme_support('editor-styles');

        // Add support for responsive embedded content.
        add_theme_support('responsive-embeds');
    }

endif; // viral_pro_setup
add_action('after_setup_theme', 'viral_pro_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function viral_pro_content_width() {
    $GLOBALS['content_width'] = apply_filters('viral_pro_content_width', 640);
}

add_action('after_setup_theme', 'viral_pro_content_width', 0);

/**
 * Enables the Excerpt meta box in Page edit screen.
 */
function viral_pro_add_excerpt_support_for_pages() {
    add_post_type_support('page', 'excerpt');
}

add_action('init', 'viral_pro_add_excerpt_support_for_pages');

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function viral_pro_widgets_init() {
    register_sidebar(array(
        'name' => esc_html__('Right Sidebar', 'viral-pro'),
        'id' => 'viral-pro-right-sidebar',
        'description' => __('Add widgets here to appear in your sidebar.', 'viral-pro'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Left Sidebar', 'viral-pro'),
        'id' => 'viral-pro-left-sidebar',
        'description' => __('Add widgets here to appear in your sidebar.', 'viral-pro'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Below Menu', 'viral-pro'),
        'id' => 'viral-pro-below-menu',
        'description' => __('Add widgets here to appear below menu.', 'viral-pro'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Front Page Right Sidebar', 'viral-pro'),
        'id' => 'viral-pro-frontpage-right-sidebar',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Front Page Left Sidebar', 'viral-pro'),
        'id' => 'viral-pro-frontpage-left-sidebar',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    if (viral_pro_is_woocommerce_activated()) {
        register_sidebar(array(
            'name' => esc_html__('Shop Right Sidebar', 'viral-pro'),
            'id' => 'viral-pro-shop-right-sidebar',
            'description' => __('Add widgets here to appear in your sidebar of shop page.', 'viral-pro'),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        ));

        register_sidebar(array(
            'name' => esc_html__('Shop Left Sidebar', 'viral-pro'),
            'id' => 'viral-pro-shop-left-sidebar',
            'description' => __('Add widgets here to appear in your sidebar of shop page.', 'viral-pro'),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        ));
    }

    register_sidebar(array(
        'name' => esc_html__('Header Widget', 'viral-pro'),
        'id' => 'viral-pro-header-widget',
        'description' => __('Add widgets in the Header. Works with Header 4 and Header 5 Only', 'viral-pro'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => esc_html__('OffCanvas Sidebar', 'viral-pro'),
        'id' => 'viral-pro-offcanvas-sidebar',
        'description' => __('Add widgets here to appear in your OffCanvas Sidebar.', 'viral-pro'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Top Footer', 'viral-pro'),
        'id' => 'viral-pro-top-footer',
        'description' => __('Add widgets here to appear in your Footer.', 'viral-pro'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer One', 'viral-pro'),
        'id' => 'viral-pro-footer1',
        'description' => __('Add widgets here to appear in your Footer.', 'viral-pro'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer Two', 'viral-pro'),
        'id' => 'viral-pro-footer2',
        'description' => __('Add widgets here to appear in your Footer.', 'viral-pro'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer Three', 'viral-pro'),
        'id' => 'viral-pro-footer3',
        'description' => __('Add widgets here to appear in your Footer.', 'viral-pro'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer Four', 'viral-pro'),
        'id' => 'viral-pro-footer4',
        'description' => __('Add widgets here to appear in your Footer.', 'viral-pro'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer Five', 'viral-pro'),
        'id' => 'viral-pro-footer5',
        'description' => __('Add widgets here to appear in your Footer.', 'viral-pro'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer Six', 'viral-pro'),
        'id' => 'viral-pro-footer6',
        'description' => __('Add widgets here to appear in your Footer.', 'viral-pro'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Bottom Footer', 'viral-pro'),
        'id' => 'viral-pro-bottom-footer',
        'description' => __('Add widgets here to appear in your Footer.', 'viral-pro'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Front Page Ads', 'viral-pro'),
        'id' => 'viral-pro-frontpage-ads',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Single Post - Before Article', 'viral-pro'),
        'description' => __('Add widgets here to appear in the post before the article', 'viral-pro'),
        'id' => 'viral-pro-single-post-before-article',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Single Post - After Article', 'viral-pro'),
        'description' => __('Add widgets here to appear in the post after the article', 'viral-pro'),
        'id' => 'viral-pro-single-post-after-article',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));
}

add_action('widgets_init', 'viral_pro_widgets_init');

if (!function_exists('viral_pro_fonts_url')) :

    /**
     * Register Google fonts for Viral Pro.
     *
     * @since Viral Pro 1.0
     *
     * @return string Google fonts URL for the theme.
     */
    function viral_pro_fonts_url() {
        $fonts_url = '';
        $fonts = $standard_font_family = array();
        $subsets = 'latin,latin-ext';
        $variants_array = $font_array = $google_fonts = array();
        $viral_pro_standard_font = viral_pro_standard_font_array();
        $customizer_fonts = viral_pro_get_customizer_fonts();
        $google_font_list = viral_pro_google_font_array();

        /*
         * Translators: If there are characters in your language that are not supported
         * by Pontano Sans, translate this to 'off'. Do not translate into your own language.
         */
        if ('off' !== _x('on', 'Pontano Sans font: on or off', 'viral-pro')) {
            $font_family_array[] = 'Pontano Sans';
        }

        /*
         * Translators: If there are characters in your language that are not supported
         * by Oswald, translate this to 'off'. Do not translate into your own language.
         */
        if ('off' !== _x('on', 'Oswald font: on or off', 'viral-pro')) {
            $font_family_array[] = 'Oswald';
        }

        foreach ($viral_pro_standard_font as $key => $value) {
            $standard_font_family[] = $value['family'];
        }

        foreach ($customizer_fonts as $key => $value) {
            $font_family_array[] = get_theme_mod($key . '_font_family', $value['font_family']);
        }

        $font_family_array = array_unique($font_family_array);
        $font_family_array = array_diff($font_family_array, $standard_font_family);

        foreach ($font_family_array as $font_family) {
            $font_array = viral_pro_search_key($google_font_list, 'family', $font_family);
            $variants_array = $font_array['0']['variants'];
            $variants_keys = array_keys($variants_array);
            $variants = implode(',', $variants_keys);

            $fonts[] = $font_family . ':' . str_replace('italic', 'i', $variants);
        }
        /*
         * Translators: To add an additional character subset specific to your language,
         * translate this to 'greek', 'cyrillic', 'devanagari' or 'vietnamese'. Do not translate into your own language.
         */
        $subset = _x('no-subset', 'Add new subset (greek, cyrillic, devanagari, vietnamese)', 'viral-pro');

        if ('cyrillic' == $subset) {
            $subsets .= ',cyrillic,cyrillic-ext';
        } elseif ('greek' == $subset) {
            $subsets .= ',greek,greek-ext';
        } elseif ('devanagari' == $subset) {
            $subsets .= ',devanagari';
        } elseif ('vietnamese' == $subset) {
            $subsets .= ',vietnamese';
        }

        if ($fonts) {
            $fonts_url = add_query_arg(array(
                'family' => urlencode(implode('|', $fonts)),
                'subset' => urlencode($subsets),
                'display' => 'swap',
                    ), '//fonts.googleapis.com/css');
        }

        return $fonts_url;
    }

endif;

/**
 * Enqueue scripts and styles.
 */
function viral_pro_scripts() {
    $customizer_gdpr_settings = of_get_option('customizer_gdpr_settings', '1');
    if ($customizer_gdpr_settings) {
        wp_enqueue_script('js-cookie', get_template_directory_uri() . '/js/jquery.cookie.js', array('jquery'), VIRAL_PRO_VER, true);
    }

    wp_register_script('YTPlayer', get_template_directory_uri() . '/js/jquery.mb.YTPlayer.min.js', array('jquery'), VIRAL_PRO_VER, true);
    wp_register_script('youtube-api', '//youtube.com/iframe_api', array(), 'v3', false);
    wp_enqueue_script('jquery-nav', get_template_directory_uri() . '/js/jquery.nav.js', array('jquery'), VIRAL_PRO_VER, true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/owl.carousel.js', array('jquery'), VIRAL_PRO_VER, true);
    wp_enqueue_script('isotope-pkgd', get_template_directory_uri() . '/js/isotope.pkgd.js', array('jquery', 'imagesloaded'), VIRAL_PRO_VER, true);
    wp_enqueue_script('hoverintent', get_template_directory_uri() . '/js/hoverintent.js', array(), VIRAL_PRO_VER, true);
    wp_enqueue_script('superfish', get_template_directory_uri() . '/js/superfish.js', array('jquery'), VIRAL_PRO_VER, true);
    wp_enqueue_script('jquery-stellar', get_template_directory_uri() . '/js/jquery.stellar.js', array('imagesloaded'), VIRAL_PRO_VER, false);
    wp_enqueue_script('odometer', get_template_directory_uri() . '/js/odometer.js', array('jquery'), VIRAL_PRO_VER, true);
    wp_enqueue_script('waypoint', get_template_directory_uri() . '/js/waypoint.js', array('jquery'), VIRAL_PRO_VER, true);
    wp_enqueue_script('espy', get_template_directory_uri() . '/js/jquery.espy.min.js', array('jquery'), VIRAL_PRO_VER, true);
    wp_enqueue_script('motio', get_template_directory_uri() . '/js/motio.min.js', array('jquery'), VIRAL_PRO_VER, true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/js/slick.js', array('jquery'), VIRAL_PRO_VER, true);
    wp_enqueue_script('jquery-mcustomscrollbar', get_template_directory_uri() . '/js/jquery.mCustomScrollbar.js', array('jquery'), VIRAL_PRO_VER, true);
    wp_enqueue_script('jquery-accordion', get_template_directory_uri() . '/js/jquery.accordion.js', array('jquery'), VIRAL_PRO_VER, true);
    wp_enqueue_script('photostream', get_template_directory_uri() . '/js/jquery.photostream.min.js', array('jquery'), VIRAL_PRO_VER, true);
    wp_enqueue_script('justifiedGallery', get_template_directory_uri() . '/js/jquery.justifiedGallery.min.js', array('jquery'), VIRAL_PRO_VER, true);
    wp_enqueue_script('countdown', get_template_directory_uri() . '/js/jquery.countdown.js', array('jquery'), VIRAL_PRO_VER, true);
    wp_enqueue_script('viral-pro-megamenu', get_template_directory_uri() . '/inc/walker/assets/megaMenu.js', array('jquery'), VIRAL_PRO_VER, true);
    wp_enqueue_script('headroom', get_template_directory_uri() . '/js/headroom.js', array('jquery'), VIRAL_PRO_VER, true);
    wp_enqueue_script('theia-sticky-sidebar', get_template_directory_uri() . '/js/theia-sticky-sidebar.js', array('jquery'), VIRAL_PRO_VER, true);
    wp_enqueue_script('resizesensor', get_template_directory_uri() . '/js/ResizeSensor.js', array('jquery'), VIRAL_PRO_VER, true);
    wp_enqueue_script('jquery-lazy', get_template_directory_uri() . '/js/jquery.lazy.js', array('jquery'), VIRAL_PRO_VER, true);
    wp_enqueue_script('viral-pro-custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), VIRAL_PRO_VER, true);

    $is_rtl = (is_rtl()) ? 'true' : 'false';

    $is_customize_preview = (is_customize_preview()) ? 'true' : 'false';

    wp_localize_script('viral-pro-custom', 'viral_pro_options', array(
        'template_path' => get_template_directory_uri(),
        'rtl' => $is_rtl,
        'customize_preview' => $is_customize_preview,
        'customizer_gdpr_settings' => $customizer_gdpr_settings
    ));

    wp_localize_script('viral-pro-megamenu', 'viral_pro_megamenu', array(
        'rtl' => $is_rtl
    ));

    wp_enqueue_style('viral-pro-style', get_stylesheet_uri(), array('viral-pro-loaders'), VIRAL_PRO_VER);
    wp_style_add_data('viral-pro-style', 'rtl', 'replace');
    wp_enqueue_style('viral-pro-fonts', viral_pro_fonts_url(), array(), NULL);
    wp_enqueue_style('eleganticons', get_template_directory_uri() . '/css/eleganticons.css', array(), VIRAL_PRO_VER);
    wp_enqueue_style('materialdesignicons', get_template_directory_uri() . '/css/materialdesignicons.css', array(), VIRAL_PRO_VER);
    wp_enqueue_style('viral-pro-loaders', get_template_directory_uri() . '/css/loaders.css', array(), VIRAL_PRO_VER);
    wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css', array(), VIRAL_PRO_VER);
    wp_enqueue_style('icofont', get_template_directory_uri() . '/css/icofont.css', array(), VIRAL_PRO_VER);
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/css/owl.carousel.css', array(), VIRAL_PRO_VER);
    wp_enqueue_style('slick', get_template_directory_uri() . '/css/slick.css', array(), VIRAL_PRO_VER);
    wp_enqueue_style('YTPlayer', get_template_directory_uri() . '/css/jquery.mb.YTPlayer.min.css', array(), VIRAL_PRO_VER);
    wp_enqueue_style('jquery-mcustomscrollbar', get_template_directory_uri() . '/css/jquery.mCustomScrollbar.css', array(), VIRAL_PRO_VER);
    wp_enqueue_style('justifiedGallery', get_template_directory_uri() . '/css/justifiedGallery.min.css', array(), VIRAL_PRO_VER);

    if ('file' != get_theme_mod('viral_pro_style_option', 'head')) {
        wp_add_inline_style('viral-pro-style', viral_pro_dymanic_styles());
    } else {

        // We will probably need to load this file
        require_once( ABSPATH . 'wp-admin' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'file.php' );

        global $wp_filesystem;
        $upload_dir = wp_upload_dir(); // Grab uploads folder array
        $dir = trailingslashit($upload_dir['basedir']) . 'viral-pro' . DIRECTORY_SEPARATOR; // Set storage directory path

        WP_Filesystem(); // Initial WP file system
        $wp_filesystem->mkdir($dir); // Make a new folder 'viral-pro' for storing our file if not created already.
        $wp_filesystem->put_contents($dir . 'custom-style.css', viral_pro_dymanic_styles(), 0644); // Store in the file.
        wp_enqueue_style('viral-pro-dynamic-style', trailingslashit($upload_dir['baseurl']) . 'viral-pro/custom-style.css', array(), NULL);
    }

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'viral_pro_scripts');

/**
 * BreadCrumb
 */
require get_template_directory() . '/inc/breadcrumbs.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/theme-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer/customizer.php';

/**
 * Custom PostType additions.
 */
require get_template_directory() . '/inc/custom-post-types.php';

/**
 * MetaBox additions.
 */
require get_template_directory() . '/inc/metabox.php';

/**
 * Icons Array
 */
require get_template_directory() . '/inc/font-icons.php';

/**
 * Typography
 */
require get_template_directory() . '/inc/typography/typography.php';

/**
 * Menu Icons
 */
if (!class_exists('Menu_Icons')) {
    require get_template_directory() . '/inc/assets/menu-icons/menu-icons.php';
}

/**
 * Theme Settings
 */
require get_template_directory() . '/inc/theme-panel/welcome.php';

/**
 * Widgets
 */
require get_template_directory() . '/inc/widgets/widgets.php';

/**
 * Header Functions
 */
require get_template_directory() . '/inc/header/header-functions.php';

/**
 * Home Page Functions
 */
require get_template_directory() . '/inc/frontpage-hooks.php';

/**
 * Hooks
 */
require get_template_directory() . '/inc/theme-hooks.php';

/**
 * Woo Commerce Functions
 */
require get_template_directory() . '/inc/woo-functions.php';

/**
 * Elementor Elements
 */
require get_template_directory() . '/inc/elements/elements.php';

/**
 * AriColor
 */
require get_template_directory() . '/inc/aricolor.php';

/**
 * MetaBox
 */
require get_template_directory() . '/inc/assets/meta-box/meta-box.php';
require get_template_directory() . '/inc/assets/meta-box-columns/meta-box-columns.php';
require get_template_directory() . '/inc/assets/meta-box-tabs/meta-box-tabs.php';
require get_template_directory() . '/inc/assets/meta-box-conditional-logic/meta-box-conditional-logic.php';
require get_template_directory() . '/inc/assets/meta-box-group/meta-box-group.php';

/**
 * Menu Walker
 */
require get_template_directory() . '/inc/walker/init.php';
require get_template_directory() . '/inc/walker/menu-walker.php';

/**
 * Dynamic Styles additions
 */
require get_template_directory() . '/inc/style.php';

function load_js_assets() {
    if( is_page( ID ) ) {
        wp_enqueue_script('custom.js', '/js/custom.js', array('jquery'), '', false);
	
		
		
     
    } 
}

// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

  global $wp_version;
  if ( $wp_version !== '4.7.1' ) {
     return $data;
  }

  $filetype = wp_check_filetype( $filename, $mimes );

  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];

}, 10, 4 );

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
  echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );

function filter_post_name( $data, $postarr, $unsanitized_postarr){
    $data['post_title'] = $data['post_title'] ."test";
	
	
	if(strlen($data)<10){
        return __( 'Please remove mention of "Old Company Name".' );
    }
    return $data;
}

//enqueue the admin scripts / styles for the related pages functionality
//function enqueue_related_pages_scripts_and_styles(){
//wp_enqueue_style('related-pages-admin-styles', get_stylesheet_directory_uri() . '/admin-related-pages-styles.css');
//wp_enqueue_script('releated-pages-admin-script', get_stylesheet_directory_uri() . '/admin-related-pages-scripts.js');
//}
//add_action('admin_enqueue_scripts','enqueue_related_pages_scripts_and_styles');


	 add_action('admin_footer', function() {
?>
<script>
	jQuery(document).ready(function() {
    console.log("Ready!");
		let locked = false;

wp.data.subscribe( () => {
  // get the current title
  const postTitle = wp.data.select( 'core/editor' ).getEditedPostAttribute( 'title' );

  // Lock the post if the title is empty.
  if ( ! postTitle ) {
    if ( ! locked ) {
      locked = true;
      wp.data.dispatch( 'core/editor' ).lockPostSaving( 'title-lock' );
    }
  } else if ( locked ) {
    locked = false;
    wp.data.dispatch( 'core/editor' ).unlockPostSaving( 'title-lock' );
  }
} );
//jQuery( "#acf-field_6247f4c09fc9f" ).focus(function() {
 // alert( "Handler for .focus() called." );
//});
	
	

	});
</script>
<?php
});

add_filter( 'get_the_date', 'meks_convert_to_time_ago', 10, 1 ); //override date display
add_filter( 'the_date', 'meks_convert_to_time_ago', 10, 1 ); //override date display
//add_filter( 'get_the_time', 'meks_convert_to_time_ago', 10, 1 ); //override time display
//add_filter( 'the_time', 'meks_convert_to_time_ago', 10, 1 ); //override time display
 
/* Callback function for post time and date filter hooks */
function meks_convert_to_time_ago( $orig_time ) {
global $post;
$orig_time = strtotime( $post->post_date );
return human_time_diff( $orig_time, current_time( 'timestamp' ) ).' '.__( 'ago' );
}



function my_acf_validate_meta_desc( $valid, $value, $field, $input_name ) {

    // Bail early if value is already invalid.
    if( $valid !== true ) {
        return $valid;
    }
	 if( in_category( 'roulette' ) ) {
        return $valid;
    }
	
    // Prevent value from saving if it contains the companies old name.
   if(strlen($value)<140){
        return __( 'Length: '.strlen($value).'; Meta description must be between 140 and 160 characters".' );
    }
	if(strlen($value)>160){
        return __( 'Length: '.strlen($value).'; Meta description must be between 140 and 160 characters".' );
    }
    return $valid;
}

function my_acf_validate_meta_title( $valid, $value, $field, $input_name ) {

    // Bail early if value is already invalid.
    if( $valid !== true ) {
        return $valid;
    }

    // Prevent value from saving if it contains the companies old name.
   if(strlen($value)<55){
        return __( 'Length: '.strlen($value).'; Meta title must be between 55 and 65 characters".' );
    }
	if(strlen($value)>65){
        return __( 'Length: '.strlen($value).'; Meta title must be between 55 and 65 characters".' );
    }
    return $valid;
}

function my_acf_validate_titlee( $valid, $value, $field, $input_name ) {

    // Bail early if value is already invalid.
    if( $valid !== true ) {
        return $valid;
    }

    // Prevent value from saving if it contains the companies old name.
   if(strlen($value)<55){
        return __( 'Length: '.strlen($value).';  Title must be between 55 and 65 characters".' );
    }
	if(strlen($value)>65){
        return __( 'Length: '.strlen($value).'; Title must be between 55 and 65 characters".' );
    }
    return $valid;
}


// Apply to all fields.
//add_filter('acf/validate_value', 'my_acf_validate_value', 10, 4);

// Apply to textarea fields.
// add_filter('acf/validate_value/type=textarea', 'my_acf_validate_value', 10, 4);

// Apply to fields named "hero_text".
// add_filter('acf/validate_value/name=Languages', 'my_acf_validate_value', 10, 4);
//add_filter('acf/validate_value/name=Available at', 'my_acf_validate_value', 10, 4);
//add_filter('acf/validate_value/name=meta_description', 'my_acf_validate_meta_desc', 10, 4);

add_filter('acf/validate_value/type=text&name=meta_description','my_acf_validate_meta_desc', 10, 4);
add_filter('acf/validate_value/type=text&name=meta_title', 'my_acf_validate_meta_title', 10, 4);

//add_filter('acf/validate_value/name=titlee', 'my_acf_validate_titlee', 10, 4);



// Apply to field with key "field_123abcf".
// add_filter('acf/validate_value/key=field_123abcf', 'my_acf_validate_value', 10, 4);
function my_query_by_post_meta( $query ) {

	// Get current meta Query
     $meta_query = $query;

	// If there is no meta query when this filter runs, it should be initialized as an empty array.
	if ( ! $meta_query ) {
		$meta_query = [];
	}

	$category = get_queried_object();
echo $category->term_id;
	// Append our meta query
	$meta_query[] = [
		
		'category__not_in' => array( $category->term_id),
		
	];

	$query->set( 'meta_query', $meta_query );

}
add_action( 'elementor/query/exclude_catq', 'my_query_by_post_meta' );
// 
// 
function my_query_by_different_order( $query ) {
	$query->set( 'orderby', 'comments' );
}
add_action( 'elementor/query/popular_posts', 'my_query_by_different_order' );

function wpc_elementor_shortcode( $atts ) {
   $rating = get_field( 'Rating' );

	if ( $rating ) {
		$average_stars = round( $rating * 2 ) / 2;
	
		$drawn = 5;

		echo "<div class='star-rating'>";
		
		// full stars.
		for ( $i = 0; $i < floor( $average_stars ); $i++ ) {
			$drawn--;
			echo "<svg aria-hidden='true' data-prefix='fas' data-icon='star' class='svg-inline--fa fa-star fa-w-18' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 576 512'><path fill='currentColor' d='M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z'/></svg>";
		}

		// half stars.
		if ( $rating - floor( $average_stars ) === 0.5 ) {
			$drawn--;
			echo "<svg aria-hidden='true' data-prefix='fas' data-icon='star-half-alt' class='svg-inline--fa fa-star-half-alt fa-w-17' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 536 512'><path fill='currentColor' d='M508.55 171.51L362.18 150.2 296.77 17.81C290.89 5.98 279.42 0 267.95 0c-11.4 0-22.79 5.9-28.69 17.81l-65.43 132.38-146.38 21.29c-26.25 3.8-36.77 36.09-17.74 54.59l105.89 103-25.06 145.48C86.98 495.33 103.57 512 122.15 512c4.93 0 10-1.17 14.87-3.75l130.95-68.68 130.94 68.7c4.86 2.55 9.92 3.71 14.83 3.71 18.6 0 35.22-16.61 31.66-37.4l-25.03-145.49 105.91-102.98c19.04-18.5 8.52-50.8-17.73-54.6zm-121.74 123.2l-18.12 17.62 4.28 24.88 19.52 113.45-102.13-53.59-22.38-11.74.03-317.19 51.03 103.29 11.18 22.63 25.01 3.64 114.23 16.63-82.65 80.38z'/></svg>";
		}

		// empty stars.
		for ( $i = 0; $i < $drawn; $i++ ) {
			echo "<svg aria-hidden='true' data-prefix='far' data-icon='star' class='svg-inline--fa fa-star fa-w-18' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 576 512'><path fill='currentColor' d='M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z'/></svg>";
		}

		echo "</div>";
	}
}
add_shortcode( 'my_elementor_php_output', 'wpc_elementor_shortcode');

//add_filter( 'upload_dir', function () {
//    return _wp_upload_dir( '2022/03' );
//}, 100, 0 );
//

add_shortcode( 'return_post_id', 'the_dramatist_return_post_id' );

function the_dramatist_return_post_id() {
    return get_the_ID();
}

// hide update notifications
function remove_core_updates(){
global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
}
add_filter('pre_site_transient_update_core','remove_core_updates'); //hide updates for WordPress itself
//add_filter('pre_site_transient_update_plugins','remove_core_updates'); //hide updates for all plugins
//add_filter('pre_site_transient_update_themes','remove_core_updates'); //hide updates for all themes