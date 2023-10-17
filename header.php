<html class="wordpress" <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="author" content="（公財）原子力環境整備促進・資金管理センター" />
  <!--meta name="description" content="諸外国の高レベル放射性廃棄物の処分動向をニュースフラッシュとしてお知らせしています。" /--> 
  <meta name="keyword" content="rwmc,高レベル放射性廃棄物,地層処分,海外情報">
  <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>

  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" />
  <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon.png" />

  <?php wp_head(); ?>

<?php if (!is_user_logged_in()): ?>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-PXZLJP2XJ1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-PXZLJP2XJ1');
  </script>
<?php endif; ?>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">	
  <link rel="stylesheet" media="print" href="<?php echo get_stylesheet_directory_uri(); ?>/css/print.css">	

  <script src="<?php echo get_template_directory_uri(); ?>/js/common.js?v=1"></script>
  <style>
    html.wordpress { margin-top:0 !important; }
    #wpadminbar { z-index:10000000 !important; }
  </style>
</head>

<body>
<div id="dokuwiki__site">
<!-- ********** HEADER ********** -->
<header id="dokuwiki__header">
<div class="pad group">

    <div class="headings group">

<?php if ( is_home() || is_front_page() ): ?>
        <h1 class="logo">
            <a href="https://www2.rwmc.or.jp/">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_03.png" width="64" height="64" alt="" />
                <span><?php bloginfo('name'); ?></span>
            </a>
        </h1>
<?php else: ?>
        <p class="logo">
            <a href="https://www2.rwmc.or.jp/">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_03.png" width="64" height="64" alt="" />
                <span><?php bloginfo('name'); ?></span>
            </a>
        </p>
<?php endif; ?>
        <p class="claim">Learn from foreign experiences in HLW management</p>
    </div>
    <!-- SITE TOOLS relocation -->
    <div id="dokuwiki__sitetools" class="tools nosp">

        <form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url(); ?>">
            <div class="no">
                <label class="screen-reader-text" for="s">検索:</label>
                <input type="text" value="" name="s" id="s" />
                <input type="submit" id="searchsubmit" value="検索" />
            </div>
        </form>
        <ul>
            <li class="action recent"><a href="/start?do=index" title="サイトマップ [x]" rel="nofollow" accesskey="x">サイトマップ</a></li>
        </ul>
    </div>

    <div class="tools group nosp">
        <!-- USER TOOLS -->
        <div id="dokuwiki__usertools">
            <p class="action">
<?php if ( is_user_logged_in() ): ?>
                <a href="<?= get_admin_url() ?>" rel="nofollow"><span>ダッシュボード</span></a> 
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 17.25V14H3v-4h7V6.75L15.25 12 10 17.25M8 2h9a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-4h2v4h9V4H8v4H6V4a2 2 0 0 1 2-2z"/></svg>
                <a href="<?= wp_logout_url( get_permalink() ); ?>" title="ログアウト" rel="nofollow"><span>ログアウト</span></a>
<?php else: ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 17.25V14H3v-4h7V6.75L15.25 12 10 17.25M8 2h9a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-4h2v4h9V4H8v4H6V4a2 2 0 0 1 2-2z"/></svg>
                <a href="<?= wp_login_url( get_permalink() ); ?>" title="ログイン" rel="nofollow"><span>ログイン</span></a>
<?php endif; ?>
            </p>
        </div>
        <!-- SITE TOOLS --><!--
        <div id="dokuwiki__sitetools">

            <form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url(); ?>">
                <div class="no">
                    <label class="screen-reader-text" for="s">検索:</label>
                    <input type="text" value="" name="s" id="s" />
                    <input type="submit" id="searchsubmit" value="検索" />
                </div>
            </form>
            <ul>
                <li class="action recent"><a href="/start?do=index" title="サイトマップ [x]" rel="nofollow" accesskey="x">サイトマップ</a></li>
            </ul>
        </div> -->

    </div><!--tools group nosp -->
    <!-- Hamburger menu -->
    <div class="nav-toggle nopc">
        <div>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="spnav nopc">
        <div class="sp-navcontent">
            <div class="nav-toggle nopc">
                <div>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <ul class="spnav-list">
                <!--<li><a href="<?php echo home_url(); ?>">HOME</a></li>-->
                <!--<li><a href="<?php echo home_url(); ?>/?page_id=2249">海外情報ニュースフラッシュについて</a></li>-->
                <li>記事アーカイブ
                    <ul class="spsubnav">
                        <li><a href="<?php echo get_page_link(3111); ?>">全記事一覧</a></li>
                        <li><a href="<?php echo get_page_link(3074); ?>">Follow Up 記事一覧</a></li>
                        <li><a href="<?php echo get_page_link(3200); ?>">国別記事一覧</a></li>
                        <li><a href="<?php echo get_feed_link('rss2'); ?>" target="_blank">RSS</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo get_page_link(1516); ?>">ポイントピックアップ</a></li>
                <li><a href="https://www2.rwmc.or.jp/publications:publications" target="_blank">情報冊子</a></li>
                <li><a href="https://www2.rwmc.or.jp/links:start" target="_blank">リンク集</a></li>
                <!--<li>諸外国トピカル情報
                    <ul class="spsubnav">
                        <li><a href="https://www2.rwmc.or.jp/srsr:start" target="_blank">安全評価事例集</a></li>
                        <li><a href="https://www2.rwmc.or.jp/hlw:regional-development" target="_blank">高レベル放射性廃棄物処分事業と地域振興の係わり</a></li>
                    </ul>
                </li>-->
            </ul>
            <form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url(); ?>/">
                <div class="no">
                    <label class="screen-reader-text" for="s">検索:</label>
                    <input type="text" value="" name="s" id="s" />
                    <input type="submit" id="searchsubmit" value="検索" />
                </div>
            </form>
            <p class="spnav-sitemap"><a href="/start?do=index" title="サイトマップ [x]" rel="nofollow" accesskey="x">サイトマップ</a></p>
        </div>
    </div><!-- spnav nopc -->

    <!-- BREADCRUMBS -->
    <div class="breadcrumbs">
        <div class="youarehere">
            <span class="bchead">現在位置:</span><bdi><a href="https://www2.rwmc.or.jp/" class="wikilink1">top</a></bdi>
            &gt;&nbsp;<bdi><a href="<?php echo home_url(); ?>" class="wikilink1" style="font-weight: bold;">海外情報ニュースフラッシュ</a></bdi> 
<?php if (is_home() || is_front_page()): ?>
            &nbsp;
<?php elseif (is_category()): ?>
            &gt;&nbsp;<bdi><?php single_cat_title(); ?></bdi>
<?php elseif (is_search()): ?>
            &gt;&nbsp;<bdi>検索結果</bdi>
<?php elseif ( is_single() ): ?>
            &gt;&nbsp;<bdi><?php echo get_the_date('Y-m-d'); ?>｜<?php wp_title('',true); ?></bdi>
<?php else: ?>
            &gt;&nbsp;<bdi><?php wp_title('',true); ?></bdi>
<?php endif; ?>
        </div>
    </div>

</div>
</header>
<!-- /header -->
<nav class="gnav nosp">
<ul class="gnav-list">
    <!--<li><a href="<?php echo home_url(); ?>">HOME</a></li>-->
    <!--<li><a href="<?php echo home_url(); ?>/?page_id=2249">海外情報ニュースフラッシュについて</a></li>-->
    <li class="gnav-toggle"><button class="is-tab">記事アーカイブ</button>
        <div class="gnav-mega">
            <ul class="gnav-mega-list">
                <li><a href="<?php echo get_page_link(3111); ?>">全記事一覧</a></li>
                <li><a href="<?php echo get_page_link(3074); ?>">Follow Up 記事一覧</a></li>
                <li><a href="<?php echo get_page_link(3200); ?>">国別記事一覧</a></li>
                <li><a href="<?php echo get_feed_link('rss2'); ?>" target="_blank">RSS</a></li>
            </ul>
        </div>
    </li>
    <li><a href="<?php echo get_page_link(1516); ?>">ポイントピックアップ</a></li>
    <li><a href="https://www2.rwmc.or.jp/publications:publications" target="_blank">情報冊子</a></li>
    <li><a href="https://www2.rwmc.or.jp/links:start" target="_blank">リンク集</a></li>
    <!--<li class="gnav-toggle"><button class="is-tab">諸外国トピカル情報</button>
        <div class="gnav-mega">
            <ul class="gnav-mega-list">
                <li><a href="https://www2.rwmc.or.jp/srsr:start" target="_blank">安全評価事例集</a></li>
                <li><a href="https://www2.rwmc.or.jp/hlw:regional-development" target="_blank">高レベル放射性廃棄物処分事業と地域振興の係わり</a></li>
            </ul>
        </div>
    </li>-->
</ul>

</nav><!-- gnav -->


<main id="dokuwiki__content">

<div id="wp__content">
