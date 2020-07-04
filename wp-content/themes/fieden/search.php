<?php get_header(); ?>
<div class="span-24" id="contentwrap">
	<div class="span-40">
		<div id="content">

	<?php if (have_posts()) : ?>	
						<?php while (have_posts()) : the_post(); ?>
						
							<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><img src="<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php getImage('1'); ?>&w=258&h=80&zc=1" class="post_thumbnail" ></a>

<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			
							<div class="entry">
                              
								<?php echo excerpt(30); ?>
                                
						<div class="readmorecontent">
									<a class="readmore" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Continue</a>
								</div>
							</div>
			
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

</div>
</div>
<?php get_footer(); ?>