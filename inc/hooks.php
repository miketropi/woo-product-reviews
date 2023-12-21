<?php 
/**
 * Hooks 
 */

add_filter('comments_template', 'wpr_override_wc_comment_template', 30);

function wpr_override_wc_comment_template($path) {
  if(basename($path) === 'single-product-reviews.php') {
    return WPR_DIR . '/templates/single-product-reviews.php';
  } 
  return $path;
}

add_action('WPR_REVIEW:TEMPLATE', 'wpr_rating_heading_information_tag', 10);