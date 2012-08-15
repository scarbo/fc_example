<?php

function json_content_page($nid) {
  $node = node_load($nid);
  drupal_json_output(array(
    'title' => $node->title,
    'content' => check_markup($node->field_content[LANGUAGE_NONE][0]['value'], 'full_html')
  ));
}