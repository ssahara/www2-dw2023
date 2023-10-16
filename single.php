<?php
/**
 * single.php
 */
    get_header();
?>


<?php while ( have_posts() ) : the_post() ?>

<?php
    // excerpt は「抜粋」という意味
    // WordPressのテンプレートタグに記事抜粋を表示する the_excerpt() がある。
    // the_content()でも moreタグを本文中に入れるとそこまでの文字が出力できるが、
    // 毎回moreタグ入れるのが面倒（入れ忘れたり）なら the_excerpt()を使った方が
    // 作業が楽になる。excerpt のクラス名は、これを指向した際の名残りと思われる
    // ニュースフラッシュ記事では moreタグを使用しないので、
    // excerpt クラスのdivタグで囲む必要は（本来は）ない。
?>
    <div class="excerpt">


        <a name="<?php the_time('Y-m-d'); ?>"></a>
        <div class="posthead">
            <div class="taglist"><?php echo the_country_tags(); ?></div>
            <p class="postdate"><?php the_date('Y年m月d日'); ?></p> <?php edit_post_link('記事編集'); ?>
            <h2><?php the_title() ?></h2>
        </div><!--posthead-->

        <div class="content">
            <?php //the_content('<span class="more">'.__('More...', '').'</span>'); ?>
            <?php the_content(); ?>
        </div>

        <div style="font-size:small; color:#E6E6FA;">
            <p>(post by <?php the_author_meta('nickname'); ?> , last modified:  <?php the_modified_date('Y-m-d'); ?> )</p>
        </div>

<?php
    // 前の記事、次の記事の存在確認
    $prevpost = get_adjacent_post(true, '', true);  //前の記事
    $nextpost = get_adjacent_post(true, '', false); //次の記事
?>

    <?php if ( $prevpost or $nextpost ): ?>
        <div class="detail-pager">
            <ul>
        <?php if ( $prevpost ): //前の記事が存在しているとき ?>
            <li class="detail-pager-prev">
                <a href="<?php echo get_permalink($prevpost->ID); ?>"><p>
                    <span class="detail-pager-date"><?php echo mysql2date('Y-m-d', $prevpost->post_date); ?></span>
                    <?php echo get_the_title($prevpost->ID); ?></p>
                </a>
            </li>
        <?php endif; ?>

        <?php if ( $nextpost ): //次の記事が存在しているとき ?>
            <li class="detail-pager-next">
                <a href="<?php echo get_permalink($nextpost->ID); ?>"><p>
                    <span class="detail-pager-date"><?php echo mysql2date('Y-m-d', $nextpost->post_date); ?></span>
                    <?php echo get_the_title($nextpost->ID); ?></p>
                </a>
            </li>
        <?php endif; ?>
    <?php endif; ?>
            </ul>
        </div>

    </div><!--excerpt-->

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




<?php get_footer() ?>
