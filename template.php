<?php
/**
 * @file
 * ewika's primary theme functions and alterations.
 */

/**
 * Implements hook_preprocess_PANELS_LAYOUT().
 */
function ewika_bootstrap_preprocess_item_list(&$variables) {
  $variables['attributes']['class'][] = 'nav';
  $variables['attributes']['class'][] = 'nav-list';
  $variables['attributes']['class'][] = 'ewika-menu';
}
