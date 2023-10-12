<?php
/**
 * 404.php
 */
get_header();
?>








<h1 class="postitle">Page not found</h1>
<hr />
<div class="pagettl">
    <h2 class="page-bh">海外情報ニュースフラッシュ</h2>
    <div class="list-category">
        <a href="?page_id=3111">全記事一覧</a> | <a href="?page_id=3074">Follow up 記事一覧</a> | <a href="?page_id=3200">国別記事一覧</a>
    </div>
</div>

<?php
if (function_exists('simpleYearlyArchive')) {
   simpleYearlyArchive('yearly','','24');
}
?>





<?php get_footer(); ?>
