<?php
/**
 * The header for our theme.
 *
 * @package Viral Pro
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <?php wp_head(); ?>
		
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-PB6RBGG0JV"></script>

	<!-- Hotjar Tracking Code for https://mr247bet.com/ -->
	<script>
		(function(h,o,t,j,a,r){
			h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
			h._hjSettings={hjid:3032306,hjsv:6};
			a=o.getElementsByTagName('head')[0];
			r=o.createElement('script');r.async=1;
			r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
			a.appendChild(r);
		})(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
	</script>
		
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-PB6RBGG0JV');
	</script>
			
	</head>

    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
        <?php
        do_action('viral_pro_before_page');
        ?>
        <div id="ht-page">
            <?php
            if (is_singular(array('post', 'page', 'product', 'portfolio'))) {
                $hide_header = rwmb_meta('hide_header');
            } else {
                $hide_header = '';
            }

            if (!$hide_header) {
                do_action('viral_pro_header');
            }
            ?>
            <div id="ht-content" class="ht-site-content ht-clearfix">
                <?php
                if (is_active_sidebar('viral-pro-below-menu')) {
                    ?>
                    <div class="header-widget-area">
                        <div class="ht-container">
                            <?php dynamic_sidebar('viral-pro-below-menu'); ?>
                        </div>
                    </div>
                    <?php
                }
                ?>		