<?php
get_header();
?>





<?php if( function_exists('ADDTOANY_SHARE_SAVE_KIT') ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>

<?php if(function_exists('wp_email')) { email_link(); } ?>

<?php if (function_exists('wp_print')) { print_link(); } ?>


<?php while ( have_posts() ) : the_post() ?>







<div class="excerpt">


<a name="<?php the_time('Y-m-d'); ?>"></a>
	<div class="posthead">
                
                <div class="taglist">
		<?php echo the_country_tags(); ?>
                </div>
		<p class="postdate"><?php the_date('Y年m月d日'); ?></p> <?php edit_post_link('記事編集'); ?>
                <h2><?php the_title() ?></h2>
	</div><!--posthead-->
	<div class="content">
		<?php //the_content('<span class="more">'.__('More...', '').'</span>'); ?>
		<?php the_content();  ?>
	</div>

    <div style="font-size:small; color:#E6E6FA;">
    	<p>(post by <?php the_author_meta('nickname'); //the_author(); ?> , last modified:  <?php the_modified_date('Y-m-d'); ?> )</p>
    </div>


<?php
$prevpost = get_adjacent_post(true, '', true); //前の記事
$nextpost = get_adjacent_post(true, '', false); //次の記事
if( $prevpost or $nextpost ){ //前の記事、次の記事いずれか存在しているとき
?>
        <div class="detail-pager">
          <ul>
<?php
if ( $prevpost ) { //前の記事が存在しているとき
echo '<li class="detail-pager-prev"><a href="' . get_permalink($prevpost->ID) . '"><p><span class="detail-pager-date">' . mysql2date('Y-m-d', $prevpost->post_date) .'</span>' . get_the_title($prevpost->ID) . '</p></a></li>';
}

if ( $nextpost ) { //次の記事が存在しているとき
echo '<li class="detail-pager-next"><a href="' . get_permalink($nextpost->ID) . '"><p><span class="detail-pager-date">' . mysql2date('Y-m-d', $nextpost->post_date) .'</span>' . get_the_title($nextpost->ID) . '</p></a></li>';

}
?>
          </ul>
        </div>
<?php } ?>


</div><!--excerpt-->

<?php // related_posts(); ?>



<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>




<?php endwhile ?>




<?php get_footer() ?>
