<?php 
/**
 * Helpers
 */

function wpr_load_template($name, $require_once = false) {
  load_template(WPR_DIR . '/templates/' . $name . '.php', $require_once);
}

function wpr_icon($name) {
  $icons = require(__DIR__ . '/svg-icons.php');
  return isset($icons[$name]) ? $icons[$name] : '';
}