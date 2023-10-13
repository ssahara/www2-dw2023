<?php
/**
 * 404.php
 */
    get_header();
?>


<h1 class="postitle">Page not found</h1>
<p>指定された記事ページはありません。最新の記事をお知らせします</p>
<hr />
<div class="pagettl">
    <h2 class="page-bh">海外情報ニュースフラッシュ</h2>
    <div class="list-category">
        <a href="?page_id=3111">全記事一覧</a> | <a href="?page_id=3074">Follow up 記事一覧</a> | <a href="?page_id=3200">国別記事一覧</a>
    </div>
</div>

<?php
    /*-----------------------*
     * index.php から転載
     *-----------------------*/
    // 最新記事 を 以下の条件で検索
    $args = array(
        'post_type' => 'post',
        'category_name' => 'news,followup',
        'posts_per_page' => 5,
    );
    $the_query = new WP_Query( $args );
?>
    <h2 class="index-mh">最新記事</h2>
<?php if ( $the_query->have_posts() ): ?>
    <div class="news-list" id="<?php the_ID() ?>">
        <ul>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <li class="">
                <div class="sya_postcontent">
                    <span class="sya_date"><?php the_time('Y-m-d'); ?> <span class="sya_sep"> </span></span>
                    <a href="<?php the_permalink() ?>" class="sya_postlink" rel="bookmark"><?php the_title() ?></a>
        <?php if ( has_tag() ): ?>
                    <span class="sya_tags"><span class="sya_bracket">(</span>
                    <?php echo the_country_tags(); ?>
                    <span class="sya_bracket">)</span></span>
        <?php endif; ?>
                </div>
            </li>
    <?php endwhile; ?>
        </ul>
    </div>
    <p class="index-btn"><a href="<?php echo get_page_link(3111); ?>">全記事一覧へ</a></p>
<?php endif; ?>


<?php get_footer(); ?>
