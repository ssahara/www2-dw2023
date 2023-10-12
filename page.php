<?php 
get_header(); 
?>









<?php while ( have_posts() ) : the_post() ?>

<?php if(is_page( '3111' )): ?>

	<div class="pagettl">
		<h1 class="page-bh">海外情報ニュースフラッシュ ｜<?php the_title(); ?></h1>
        <div class="list-category">
            <span>全記事一覧</span> | <a href="?page_id=3074">Follow up 記事一覧</a> | <a href="?page_id=3200">国別記事一覧</a>
        </div>
	</div>
<?php elseif(is_page( '3074' )): ?>
	<div class="pagettl">
		<h1 class="page-bh">海外情報ニュースフラッシュ ｜<?php the_title(); ?></h1>
        <div class="list-category">
            <a href="?page_id=3111">全記事一覧</a> | <span>Follow up 記事一覧</span> | <a href="?page_id=3200">国別記事一覧</a>
        </div>
	</div>
<?php elseif(is_page( '3200' )): ?>
	<div class="pagettl">
		<h1 class="page-bh">海外情報ニュースフラッシュ ｜<?php the_title(); ?></h1>
        <div class="list-category">
            <a href="?page_id=3111">全記事一覧</a> | <a href="?page_id=3074">Follow up 記事一覧</a> | <span>国別記事一覧</span>
        </div>
	</div>

<?php else: ?>
<h1 class="postitle"><?php the_title(); ?><hr /></h1>
<?php endif; ?>

<div class="content" id="<?php the_ID() ?>">

	<?php the_content();  ?>
	<?php //the_content('<span class="more">'.__('More...', '').'</span>'); ?>
</div>




<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

<!--div class="navigation">
<div class="alignleft"><?php next_post_link('Newer: %link') ?></div>
<div class="alignright"><?php previous_post_link('Older: %link') ?></div>
</div-->

<div class="comments">
<?php if (comments_open()) comments_template(); ?>
</div>

<?php endwhile ?>







<?php get_footer(); ?>
