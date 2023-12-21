<?php 
/**
 * 
 */


defined( 'ABSPATH' ) || exit;

global $product;

if ( ! comments_open() ) {
	return;
}
?>
<div id="WPR_REVIEW" class="wpr-review-wrap">
  <div class="wpr-review-wrap__inner">
    <?php 
      /**
       * Hooks
       * 
       * @see wpr_rating_heading_information_tag - 10
       */
      do_action('WPR_REVIEW:TEMPLATE', $product); 
    ?>
  </div>
</div> <!-- #WPR_REVIEW -->