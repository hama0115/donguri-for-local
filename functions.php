<?php

//CSS,JSの読み込み
function enqueue_scripts() {
  //fontawesomeの読み込み
  wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.15.1/css/all.css');
  //googleフォントの読み込み
  wp_enqueue_style('google-fonts1', 'https://cdn.jsdelivr.net/npm/yakuhanjp@4.1.1/dist/css/yakuhanjp.css');
  wp_enqueue_style('google-fonts2', 'https://fonts.googleapis.com');
  wp_enqueue_style('google-fonts3', 'https://fonts.gstatic.com');  
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');