<?php get_header(); ?>
<div class="span-24" id="contentwrap">
	<div class="span-14">
		<div id="content">

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle">Search Results</h2>

		<?php while (have_posts()) : the_post(); ?>

				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
<div id="indexthumb"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><img src="<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php getImage('1'); ?>&w=200&h=200&zc=1" class="post_thumbnail" ></a></div>

<div id="indexcontent"><h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>							<p class="postdate"><span>Posted <?php the_author() ?> on  <?php the_time('F jS, Y') ?> / <?php comments_number('No Comment', 'One Comment', '% Comments' );?></span></p>
			
							<div class="entry">
                              
								<?php echo excerpt(40); ?>
                                
						<div class="readmorecontent">
									(<a class="readmore" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Continue</a>)
								</div>
							</div>
						</div>

<div style="clear:both;"></div>
						</div><!--/post-<?php the_ID(); ?>-->

		<?php endwhile; ?>

		<div class="navigation">
			<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
			<?php } ?>
		</div>

	<?php else : ?>

		<h2 class="pagetitle">No posts found. Try a different search?</h2>
		<?php get_search_form(); ?>

	<?php endif; ?>

		</div>
	</div>

<?php get_sidebars('right'); ?>

</div>
<?php get_footer(); ?>