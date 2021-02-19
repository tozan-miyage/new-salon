<?php
$Pass = get_template_directory_uri();
/**
 * スクリプトとスタイルを正しくエンキューする方法
 */
function theme_name_scripts()
{
    global $Pass;
    wp_enqueue_style('styles.css', $Pass . '/assets/css/styles.css', array(), true);
    // wp_enqueue_script( 'script-name',
    wp_enqueue_script('jquery.min.js',  $Pass . '/assets/js/jquery.min.js');
    wp_enqueue_script('modernizr-2.6.2.min.js',  $Pass . '/assets/js/modernizr-2.6.2.min.js');
    wp_enqueue_script('jquery.easing.1.3.js',  $Pass . '/assets/js/jquery.easing.1.3.js');
    wp_enqueue_script('bootstrap.min.js',  $Pass . '/assets/js/bootstrap.min.js');
    wp_enqueue_script('jquery.waypoints.min.js',  $Pass . '/assets/js/jquery.waypoints.min.js');
    wp_enqueue_script('jquery.flexslider-min.js',  $Pass . '/assets/js/jquery.flexslider-min.js');
    wp_enqueue_script('sticky-kit.min.js',  $Pass . '/assets/js/sticky-kit.min.js');
    wp_enqueue_script('jquery.magnific-popup.min.js',  $Pass . '/assets/js/jquery.magnific-popup.min.js');
    wp_enqueue_script('owl.carousel.min.js',  $Pass . '/assets/js/owl.carousel.min.js');
    wp_enqueue_script('main.js',  $Pass . '/assets/js/main.js');
};

add_action('wp_enqueue_scripts', 'theme_name_scripts');

