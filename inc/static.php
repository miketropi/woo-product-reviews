<?php 
/**
 * Static
 */

add_action('wp_enqueue_scripts', 'wpr_enqueue_scripts');

function wpr_enqueue_scripts() {
  wp_enqueue_style('woo-product-reviews-css', WPR_URI . '/dist/css/woo-product-reviews.bundle.css', false, WPR_VERSION);
  wp_enqueue_script('woo-product-reviews-js', WPR_URI . '/dist/woo-product-reviews.bundle.js', ['jquery'], WPR_VERSION, true);

  wp_localize_script('woo-product-reviews-js', 'WPR_PHP_DATA', [
    'ajax_url' => admin_url('admin-ajax.php'),
    'lang' => [],
    'settings' => [],
  ]);
}

add_action('admin_enqueue_scripts', 'wpr_admin_enqueue_scripts');

function wpr_admin_enqueue_scripts() {
  wp_enqueue_style('woo-product-reviews-css', WPR_URI . '/dist/css/woo-product-reviews.admin.bundle.css', false, WPR_VERSION);
  wp_enqueue_script('woo-product-reviews-js', WPR_URI . '/dist/woo-product-reviews.admin.bundle.js', ['jquery'], WPR_VERSION, true);
}