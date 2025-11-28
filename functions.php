<?php

//CSS,JSの読み込み
function enqueue_scripts() {
  //fontawesomeの読み込み
  wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.15.1/css/all.css');
  //googleフォントの読み込み
  wp_enqueue_style('google-fonts1', 'https://cdn.jsdelivr.net/npm/yakuhanjp@4.1.1/dist/css/yakuhanjp.css');
  //AOSの読み込み
  wp_enqueue_style('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
  //リセットcss、自作cssの読み込み
  wp_enqueue_style('reset-css', get_stylesheet_directory_uri() . '/css/reset.css');
  wp_enqueue_style('common-css', get_stylesheet_directory_uri() . '/css/common.css');
  wp_enqueue_style('setting-css', get_stylesheet_directory_uri() . '/css/setting.css');
  wp_enqueue_style('style-css', get_stylesheet_uri());
  //jQueryの読み込み
  wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.4.1.min.js',);
  //GSAPの読み込み
  wp_enqueue_script('gsap', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js');
  //自作jsの読み込み
  wp_enqueue_script('script-js', get_stylesheet_directory_uri() . '/js/script.js', [], '1.0', true);
  //rotate.jsの読み込み
  wp_enqueue_script('rotate-js', get_stylesheet_directory_uri() . '/js/rotate.js', [], '1.0', true);
  //AOSの読み込み
  wp_enqueue_script('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', [], '2.3.1', true);
  //AOSの初期化
  wp_add_inline_script('aos', 'AOS.init();');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');