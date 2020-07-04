<div id="topsearch" class="span-7 last">
					<?php get_search_form(); ?> 
				</div>

	<div class="span-5">
		<div class="sidebar sidebar-right">
       
			<div class="sidebaradbox">
    			<?php sidebar_ads_125(); ?>
    		</div>

<ul>
<li class="widget">

<h2>Popular Posts</h2>
<ul>
<?php $result = $wpdb->get_results("SELECT comment_count,ID,post_title FROM $wpdb->posts ORDER BY comment_count DESC LIMIT 0 , 30");
foreach ($result as $post) {
setup_postdata($post);
$postid = $post->ID;
$title = $post->post_title;
$commentcount = $post->comment_count;
if ($commentcount != 0) { ?>

<li><a href="<?php echo get_permalink($postid); ?>" title="<?php echo $title ?>">
<?php echo $title ?></a></li>
<?php } } ?>
                    	
    </ul>
</li>
</ul>

<?php if (function_exists('envato_marketplace_items')) { envato_marketplace_items(); } ?>
			<ul>
				<?php 
						if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Sidebar') ) : ?>
					
					
				<?php endif; ?>
			</ul>
	
		</div>
		
	</div>
