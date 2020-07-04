<?php get_header(); ?>
	<div class="span-24" id="contentwrap">	
      
			<div class="span-14">
				<div id="content">	
					<?php if (have_posts()) : ?>	
						<?php while (have_posts()) : the_post(); ?>
						<div class="single" id="single-<?php the_ID(); ?>">
							
<h2 class="pagetitle"><?php the_title(); ?></h2>

							<p class="postdate"><span>Posted <?php the_author() ?> on  <?php the_time('F jS, Y') ?> / <?php comments_number('No Comment', 'One Comment', '% Comments' );?></span></p>
			
							<div class="entry">
                                
								<?php the_content('Read the rest of this entry &raquo;'); ?>
								<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
							</div>
							
						</div><!--/post-<?php the_ID(); ?>-->

<div class="author clearfix"><?php echo get_avatar(get_the_author_email(), $size = '80', $default = $urlHome . '/images/default_avatar_author.gif' ); ?>
<div class="shortbio"><h4>About the Author</h4><p><?php the_author_description(); ?></p></div></div>


<div class="RelatedContainer">

<h4>Related Posts</h4>
	<ol class="related-posts-thumbs">

    <?php
    //for use in the loop, list 5 post titles related to first tag on current post
    $tags = wp_get_post_tags($post->ID);
    if ($tags) {
    echo '';
    $first_tag = $tags[0]->term_id;
    $args=array(
    'tag__in' => array($first_tag),
    'post__not_in' => array($post->ID),
    'showposts'=>5,
    'caller_get_posts'=>1
    );
    $my_query = new WP_Query($args);
    if( $my_query->have_posts() ) {
    while ($my_query->have_posts()) : $my_query->the_post(); ?>
    
		
    
					<li>
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                    <span class="yarpp-thumb"><img src="<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php getImage('1'); ?>&w=100&h=100&zc=1" class="post_relative" ></span>
                    
                </a>
			</li>


    <?php
    endwhile;
    }
    wp_reset_query();
    }
    ?>

</ol>

					</div>
						
				<?php comments_template(); ?>
				
				<?php endwhile; ?>
			
				<?php endif; ?>
			</div>
			</div>

		<?php get_sidebars('right'); ?>

	</div>
</div>

<?php get_footer(); ?>


