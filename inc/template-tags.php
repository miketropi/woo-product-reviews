<?php 
/**
 * Tags
 */

function wpr_rating_heading_information_tag($product) {
  ?>
  <div class="wpr-review-wrap__heading">
    <?php 
    wpr_rating_info_tag($product);
    wpr_rating_buttons_tag($product); 
    ?>
  </div>
  <?php
}

function wpr_rating_info_tag($product) {
  ?>
  <div class="wpr-review-wrap__rating-info">
    
  </div>
  <?php
}

function wpr_rating_buttons_tag($product) {
  $buttons = apply_filters('WPR_REVIEW:BUTTONS', [
    'write_a_review' => [
      'name' => __('Write a Review', 'woo-product-reviews'),
      'href' => '#',
      'classes' => 'wpr-btn__write-a-review',
      'ID' => '',
    ],
    'ask_a_question' => [
      'name' => __('Ask a Question', 'woo-product-reviews'),
      'href' => '#',
      'classes' => 'wpr-btn__ask-a-question',
      'ID' => '',
    ],
  ], $product);
  
  echo '<div class="wpr-review-wrap__buttons">';
  foreach($buttons as $_key => $button) {
    $id_attr = ($button['ID'] ? 'id="'. $button['ID'] .'"' : '');
  ?>
  <a <?php echo $id_attr; ?> 
    href="<?php echo $button['href'] ?>"
    class="<?php echo implode(' ', ['wpr-btn', $button['classes']]); ?>">
    <?php echo $button['name']; ?>
  </a>
  <?php
  echo '</div> <!-- .wpr-review-wrap__buttons -->';
  }
}