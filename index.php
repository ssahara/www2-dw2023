<?php
/**
 * index.php
 */
    get_header();
?>

<?php if ( is_home() || is_front_page() ): ?>
    <div class="mv">
        <p class="mv-img">
            <picture>
                <source media="(min-width:768px)" srcset="<?php bloginfo('template_url'); ?>/images/img_mv_pc.png">
                <source media="(max-width:767px)" srcset="<?php bloginfo('template_url'); ?>/images/img_mv_sp.png">
                <img src="<?php bloginfo('template_url'); ?>/images/img_mv_pc.png" alt="海外情報ニュースフラッシュ">
            </picture>
        </p>
    </div>
    <p class="index-txt">※海外情報ニュースフラッシュは、経済産業省資源エネルギー庁の委託事業として、公益財団法人 原子力環境整備促進・資金管理センターが提供しています。</p>
<?php endif; ?>


<?php
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


    <h2 class="index-mh mt35">国名タグ一覧</h2>
    <div class="index-tag">
        <?php the_widget('WP_Widget_Tag_Cloud'); ?>
    </div>


<?php get_footer(); ?>
