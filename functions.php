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

// top (www2.rwmc.or.jp/nf) のタイトルを修正する
// WPトップの場合 wp_title() は空を返すが、
// サイト全体では nfディレクトリトップなので「ニュースフラッシュ」と出力させる
add_filter( 'wp_title', function ($title) {
    if (empty($title) && is_home()) {
        $title = 'ニュースフラッシュ';
    }
    return $title;
});
