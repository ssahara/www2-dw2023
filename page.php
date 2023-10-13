<?php
/**
 * page.php
 */
    get_header();
?>


<?php while ( have_posts() ) : the_post() ?>


<?php if (is_page( '3111' )): //全記事一覧 ?>
    <div class="pagettl">
        <h1 class="page-bh">海外情報ニュースフラッシュ ｜<?php the_title(); ?></h1>
        <div class="list-category">
            <span>全記事一覧</span> | <a href="?page_id=3074">Follow up 記事一覧</a> | <a href="?page_id=3200">国別記事一覧</a>
        </div>
    </div>

<?php elseif (is_page( '3074' )): //Follow Up 記事一覧 ?>
    <div class="pagettl">
        <h1 class="page-bh">海外情報ニュースフラッシュ ｜<?php the_title(); ?></h1>
        <div class="list-category">
            <a href="?page_id=3111">全記事一覧</a> | <span>Follow up 記事一覧</span> | <a href="?page_id=3200">国別記事一覧</a>
        </div>
	</div>

<?php elseif (is_page( '3200' )): //国別記事一覧 ?>
    <div class="pagettl">
        <h1 class="page-bh">海外情報ニュースフラッシュ ｜<?php the_title(); ?></h1>
        <div class="list-category">
            <a href="?page_id=3111">全記事一覧</a> | <a href="?page_id=3074">Follow up 記事一覧</a> | <span>国別記事一覧</span>
        </div>
    </div>

<?php else: // ポイントピックアップ関係の固定ページ ?>
    <h1 class="postitle"><?php the_title(); ?></h1>
    <hr />
<?php endif; ?>


    <div class="content" id="<?php the_ID() ?>">
        <?php the_content(); ?>
        <?php //the_content('<span class="more">'.__('More...', '').'</span>'); ?>
    </div>


<?php
    /**
     * 投稿された記事に <!--nextpage--> と入力すると記事を分割できる。
     * 記事が長い場合には適当なところで分割してページングすることができる。
     * 分割ページのリンクを出力するためにテンプレートタグ wp_link_pages() を使う。
     * ニュースフラッシュではこの機能は使用しないため、コメントアウトしておく
     */
    /*
    wp_link_pages(array(
        'before' => '<p><strong>Pages:</strong> ',
        'after' => '</p>',
        'next_or_number' => 'number',
    ));
    */
?>

<?php
    /**
     * ニュースフラッシュではコメント機能を使用しない。
     * もしコメント機能を使う場合に備えてdivタグのみ出力しておく。
     */
?>
    <div class="comments">
        <?php //if (comments_open()) comments_template(); ?>
    </div>


<?php endwhile ?>




<?php get_footer(); ?>
