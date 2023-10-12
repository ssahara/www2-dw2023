<?php 
get_header(); 
?>









	<div class="pagettl">
		<h1 class="page-bh">海外情報ニュースフラッシュ ｜<?php echo esc_html($_GET['s']); ?></h1>
        <div class="list-category">
            <a href="?page_id=3111">全記事一覧</a> | <a href="?page_id=3074">Follow up 記事一覧</a> | <a href="?page_id=3200">国別記事一覧</a>
        </div>
	</div>

<?php if (have_posts()) : ?>

<?php
if(function_exists('wp_page_numbers')) {
	wp_page_numbers(); 
} ?>



<div class="news-list" id="<?php the_ID() ?>">
	<ul>
<?php while ( have_posts() ) : the_post(); ?>
		<li class=""><div class="sya_postcontent"><span class="sya_date"><?php the_time('Y-m-d'); ?> <span class="sya_sep"> </span></span><a href="<?php the_permalink() ?>" class="sya_postlink post-31354" rel="bookmark"><?php the_title() ?></a><span class="sya_tags"><span class="sya_bracket">(</span><?php echo the_country_tags(); ?>
<span class="sya_bracket">)</span></span></div></li>
<?php  endwhile; ?>
	</ul>
</div>




<?php
if(function_exists('wp_page_numbers')) {
	wp_page_numbers(); 
} else { ?>
<div class="navigation">
<div class="alignleft"><?php previous_posts_link(__('Newer entries', 'encyclopedia')) ?></div>
<div class="alignright"><?php next_posts_link(__('Older entries', 'encyclopedia')) ?></div>
</div>
<br />
<?php } ?>


<?php else : ?>

<div id="<?php the_ID() ?>" class="excerpt">
<h2>No posts found. Try a different search?</h2>

<?php get_search_form(); ?>
</div>

<?php endif; ?>







<?php get_footer() ?>
