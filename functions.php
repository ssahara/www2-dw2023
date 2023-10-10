<?php
/**
 * WordPress Theme "www2-dw2023"
 */
add_action( 'wp_enqueue_scripts', function () {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() .'/style.css' );
  wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() .'/style.css', array('parent-style'));
});

// エクストラフィードの生成を抑止する
remove_action('wp_head', 'feed_links_extra', 3);
// WPサイトフィード、全体のコメントフィードを生成する
//add_theme_support( 'automatic-feed-links' );

