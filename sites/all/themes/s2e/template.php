<?php
/**
 * Created by JetBrains PhpStorm.
 * User: user
 * Date: 08.08.12
 * Time: 16:02
 * To change this template use File | Settings | File Templates.
 */

/**
 * Override or insert variables into the html template.
 */
function s2e_preprocess_html(&$vars) {
  // Add conditional CSS for IE6.
  drupal_add_css(path_to_theme() . '/css/style_ie6.css', array(
    'group' => CSS_THEME,
    'browsers' => array('IE' => 'lte IE 6', '!IE' => FALSE),
    'weight' => 999,
    'preprocess' => FALSE,
  ));
  //Add CSS & JS for Front page
  if (drupal_is_front_page()) {
    drupal_add_css(path_to_theme() . '/css/royalslider.css');
    drupal_add_css(path_to_theme() . '/css/royalslider-skins/default.css');
    drupal_add_js(path_to_theme() . '/js/jquery-easing-1.3.min.js');
    drupal_add_js(path_to_theme() . '/js/royal-slider-8.1.min.js');
    drupal_add_js(path_to_theme() . '/js/general.js');
  }
}

function s2e_preprocess_page(&$vars) {
  $vars['items_video'] = s2e_panels_video();
  $vars['items_page'] = s2e_panels_page();
  $vars['items_banner'] = s2e_panels_banner();
  $vars['login_block'] = s2e_panels_login();
}