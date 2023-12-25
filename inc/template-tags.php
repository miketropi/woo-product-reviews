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
  $count = $product->get_rating_count();
  $average = $product->get_average_rating();
  $rating_1 = $product->get_rating_count(1);
  $rating_2 = $product->get_rating_count(2);
  $rating_3 = $product->get_rating_count(3);
  $rating_4 = $product->get_rating_count(4);
  $rating_5 = $product->get_rating_count(5);
  ?>
  <div class="wpr-review-wrap__rating-info">
    <?php print_r([
      'count' => $count,
      'average' => $average,
      'rating_1' => $rating_1,
      'rating_2' => $rating_2,
      'rating_3' => $rating_3,
      'rating_4' => $rating_4,
      'rating_5' => $rating_5,
    ]); ?>
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
  }
  echo '</div>';
}