<?php

/**
 * Easy Digital Downloads Theme Updater
 *
 * @package EDD Sample Theme
 */
// Includes the files needed for the theme updater
if (!class_exists('EDD_Theme_Updater_Admin')) {
    include( dirname(__FILE__) . '/theme-updater-admin.php' );
}

$theme = wp_get_theme('viral-pro');
// Loads the updater classes
$updater = new EDD_Theme_Updater_Admin(
        // Config settings
        $config = array(
            'remote_api_url' => 'https://hashthemes.com', // Site where EDD is hosted
            'item_name' => 'Viral Pro', // Name of theme
            'theme_slug' => 'viral-pro', // Theme slug
            'version' => $theme->get('Version'), // The current version of this theme
            'author' => 'HashThemes', // The author of this theme
            'download_id' => '', // Optional, used for generating a license renewal link
            'renew_url' => '', // Optional, allows for a custom license renewal link
            'beta' => false, // Optional, set to true to opt into beta versions
        ),
        // Strings
        $strings = array(
            'theme-license' => __('Viral Pro License', 'viral-pro'),
            'description' => __('Enter your theme license key to get automatic updates of the theme. Check this <a href="https://hashthemes.com/articles/adding-license-key-and-updating-a-premium-theme/" target="_blank">Instruction</a>.', 'viral-pro'),
            'enter-key' => __('Enter your theme license key.', 'viral-pro'),
            'license-key' => __('License Key', 'viral-pro'),
            'license-action' => __('License Action', 'viral-pro'),
            'deactivate-license' => __('Deactivate License', 'viral-pro'),
            'activate-license' => __('Activate License', 'viral-pro'),
            'status-unknown' => __('License status is unknown.', 'viral-pro'),
            'renew' => __('Renew?', 'viral-pro'),
            'unlimited' => __('unlimited', 'viral-pro'),
            'license-key-is-active' => __('License key is active.', 'viral-pro'),
            'expires%s' => __('Expires %s.', 'viral-pro'),
            'expires-never' => __('Lifetime License.', 'viral-pro'),
            '%1$s/%2$-sites' => __('You have %1$s / %2$s sites activated.', 'viral-pro'),
            'license-key-expired-%s' => __('License key expired %s.', 'viral-pro'),
            'license-key-expired' => __('License key has expired.', 'viral-pro'),
            'license-keys-do-not-match' => __('License keys do not match.', 'viral-pro'),
            'license-is-inactive' => __('License is inactive.', 'viral-pro'),
            'license-key-is-disabled' => __('License key is disabled.', 'viral-pro'),
            'site-is-inactive' => __('Site is inactive.', 'viral-pro'),
            'license-status-unknown' => __('License status is unknown.', 'viral-pro'),
            'update-notice' => __("Updating this theme will lose any customizations you have made. 'Cancel' to stop, 'OK' to update.", 'viral-pro'),
            'update-available' => __('<strong>%1$s %2$s</strong> is available. <a href="%3$s" class="thickbox" title="%4s">Check out what\'s new</a> or <a href="%5$s"%6$s>update now</a>.', 'viral-pro'),
        )
);
