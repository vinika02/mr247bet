<?php

/**
 * Viral Pro Custom JS
 *
 * @package Viral Pro
 */
function viral_pro_check_slider_type_rev($control) {
    $viral_pro_slider_type = $control->manager->get_setting('viral_pro_slider_type')->value();
    if ($viral_pro_slider_type == 'revolution') {
        return true;
    } else {
        return false;
    }
}
