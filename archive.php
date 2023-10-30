<?php
/**
 * WordPress Theme www2-dw2023: archive.php
 * Template for displaying archive pages
 */
    get_header();
?>


    <div class="pagettl">
        <h1 class="page-bh">海外情報ニュースフラッシュ ｜<?php single_cat_title(); ?></h1>
        <div class="list-category">
            <a href="?page_id=3111">全記事一覧</a> | <a href="?page_id=3074">Follow up 記事一覧</a> | <a href="?page_id=3200">国別記事一覧</a>
        </div>
    </div>


<?php
    if (function_exists('wp_page_numbers')) {
        wp_page_numbers(); 
    }
?>


<div class="news-list" id="<?php the_ID() ?>">
	<ul>
<?php while ( have_posts() ) : the_post(); ?>
		<li class=""><div class="sya_postcontent"><span class="sya_date"><?php the_time('Y-m-d'); ?> <span class="sya_sep"> </span></span><a href="<?php the_permalink() ?>" class="sya_postlink post-31354" rel="bookmark"><?php the_title() ?></a><span class="sya_tags"><span class="sya_bracket">(</span>
<?php echo the_country_tags(); ?>
<span class="sya_bracket">)</span></span></div></li>
<?php  endwhile; ?>
	</ul>
</div>


<?php
    if (function_exists('wp_page_numbers')) {
        wp_page_numbers(); 
    } else {
?>
    <div class="navigation">
        <div class="alignleft"><?php previous_posts_link(__('Newer entries', 'encyclopedia')) ?></div>
        <div class="alignright"><?php next_posts_link(__('Older entries', 'encyclopedia')) ?></div>
    </div>
    <br />
<?php
    }
?>


    <h2 class="index-mh mt35">国名タグ一覧</h2>
    <div class="index-tag">
        <?php the_widget('WP_Widget_Tag_Cloud'); ?>
    </div>


<?php get_footer() ?>
