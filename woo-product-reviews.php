<?php 
/**
 * Plugin Name: WooCommerce Product Reviews
 * Plugin URI: #
 * Description: Customer Reviews for WooCommerce plugin helps you get more sales with social proof. Set up automated review reminders and increase conversion rate.
 * Version: 1.0.1
 * Author: Mike T
 * Author URI: #
 * Text Domain: woo-product-reviews
 * Domain Path: /i18n/languages/
 * Requires PHP: 7.4
 *
 */

{
  /**
   * Define
   */
  define('WPR_VERSION', '1.0.0');
  define('WPR_URI', '1.0.0');
  define('WPR_DIR', '1.0.0');
}

{
  /**
   * Inc
   */
  require(WPR_DIR . '/inc/static.php');
  require(WPR_DIR . '/inc/helpers.php');
  require(WPR_DIR . '/inc/hooks.php');
  require(WPR_DIR . '/inc/ajax.php');
  require(WPR_DIR . '/inc/template-tags.php');
}

{
  /**
   * Boots
   */
}