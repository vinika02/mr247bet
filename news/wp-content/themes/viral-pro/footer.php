<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Viral Pro
 */
?>

</div><!-- #content -->

<?php
if (is_singular(array('post', 'page', 'product', 'portfolio'))) {
    $hide_footer = rwmb_meta('hide_footer');
} else {
    $hide_footer = '';
}

if (!$hide_footer) {
    $viral_pro_footer_col = get_theme_mod('viral_pro_footer_col', 'col-3-1-1-1');
    $viral_pro_footer_copyright = get_theme_mod('viral_pro_footer_copyright', esc_html__('&copy; 2020 Viral Pro. All Right Reserved.', 'viral-pro'));
    $viral_pro_footer_array = explode('-', $viral_pro_footer_col);
    $count = count($viral_pro_footer_array);
    $footer_col = $count - 2;
    ?>

    <footer id="ht-colophon" class="ht-site-footer <?php echo esc_attr($viral_pro_footer_col) ?>">

        <?php if (is_active_sidebar('viral-pro-top-footer')): ?>
            <div class="ht-top-footer">
                <div class="ht-container">
                    <?php dynamic_sidebar('viral-pro-top-footer'); ?>
                </div>
            </div>
        <?php endif; ?>	

        <?php if (viral_pro_check_active_footer()) { ?>
            <div class="ht-main-footer">
                <div class="ht-container">
                    <div class="ht-main-footer-wrap ht-clearfix">
                        <?php
                        for ($i = 1; $i <= $footer_col; $i++) {
                            if (is_active_sidebar('viral-pro-footer' . $i)) {
                                ?>
                                <div class="ht-footer ht-footer<?php echo absint($i); ?>">
                                    <?php dynamic_sidebar('viral-pro-footer' . $i); ?>	
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        <?php } ?>

        <?php if (is_active_sidebar('viral-pro-bottom-footer')): ?>
            <div class="ht-bottom-top-footer">
                <div class="ht-container">
                    <?php dynamic_sidebar('viral-pro-bottom-footer'); ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if (!empty($viral_pro_footer_copyright)) { ?>
            <div class="ht-bottom-footer">
                <div class="ht-container">
                    <div class="ht-site-info">
                        <?php echo do_shortcode($viral_pro_footer_copyright); ?>
                    </div><!-- #site-info -->
                </div>
            </div>
        <?php } ?>
    </footer><!-- #colophon -->
<?php }
?>
</div><!-- #page -->

<?php
$backtotop = get_theme_mod('viral_pro_backtotop', true);
if ($backtotop) {
    ?>
    <a href="#" id="back-to-top" class="progress" data-tooltip="<?php esc_html_e('Back To Top', 'viral-pro'); ?>">
        <div class="arrow-top"></div>
        <div class="arrow-top-line"></div>
    </a>
    <?php
}
wp_footer();
?>
</body>
</html>
