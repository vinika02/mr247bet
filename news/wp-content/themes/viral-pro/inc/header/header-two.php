<?php
/**
 * @package Viral Pro
 */
$viral_pro_mh_menu_hover_style = get_theme_mod('viral_pro_mh_menu_hover_style', 'hover-style6');
$viral_pro_th_disable_mobile = get_theme_mod('viral_pro_th_disable_mobile', false);
$viral_pro_tagline_position = get_theme_mod('viral_pro_tagline_position', 'ht-tagline-inline-logo');
$viral_pro_mh_border = get_theme_mod('viral_pro_mh_border', 'ht-no-border');

$header_class = array('ht-site-header', 'ht-header-two', $viral_pro_mh_menu_hover_style, $viral_pro_tagline_position, $viral_pro_mh_border);

if ($viral_pro_th_disable_mobile) {
    $header_class[] = 'ht-topheader-mobile-disable';
}
?>

<header id="ht-masthead" class="<?php echo esc_attr(implode(' ', $header_class)); ?>">
    <?php
    $viral_pro_top_header = get_theme_mod('viral_pro_top_header', 'on');
    if ($viral_pro_top_header == 'on') {
        ?>
        <div class="ht-top-header">
            <div class="ht-container">
                <?php do_action('viral_pro_top_header'); ?>
            </div>
        </div><!-- .ht-top-header -->
    <?php } ?>

    <div class="ht-middle-header">
        <div class="ht-container">
            <div class="ht-middle-header-left">
                <?php
                $enable_social = get_theme_mod('viral_pro_mh_show_social', false);
                if ($enable_social) {
                    echo viral_pro_social_icons();
                }
                ?>
            </div>

            <div id="ht-site-branding">
                <?php viral_pro_header_logo(); ?>
            </div><!-- .site-branding -->

            <div class="ht-middle-header-right">
                <?php
                $enable_offcanvas = get_theme_mod('viral_pro_mh_show_offcanvas', true);
                $enable_search = get_theme_mod('viral_pro_mh_show_search', true);

                if ($enable_search) {
                    ?>
                    <div class="ht-search-button"><a href="javascript:void(0)"><i class="icofont-search-1"></i></a></div>
                    <?php
                }

                if ($enable_offcanvas) {
                    ?>
                    <div class="ht-offcanvas-nav"><a href="javascript:void(0)"><span></span><span></span><span></span></a></div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>

    <div class="ht-header">
        <div class="ht-container">
            <nav id="ht-site-navigation" class="ht-main-navigation">
                <?php viral_pro_main_navigation(); ?>
                <?php do_action('viral_pro_mobile_header'); ?>
            </nav><!-- #ht-site-navigation -->
        </div>
    </div>
</header><!-- #ht-masthead -->