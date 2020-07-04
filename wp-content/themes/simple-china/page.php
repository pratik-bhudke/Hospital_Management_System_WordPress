<?php get_header(); ?>
	<div id="container">
		<div id="content">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div  id="post-<?php the_ID(); ?>" <?php post_class(array('post','page', 'bgpng')); ?> >
				<div class="title bgpng" >
					<h2><?php the_title(); ?></h2>
				</div>
				<div class="post-inner">
					<div class="entry">
   						<?php 
   						if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
   							?>
   						<div class="postthumb">	
						
   						 <?php the_post_thumbnail('thumbnail');  ?>
   					 </div>
   						 <?php
   						} 
   						?>
						<?php the_content(); ?>
						<?php wp_link_pages(); ?>
					</div>
				</div>
				<div class="bottom bgpng">
				</div>
			</div><!-- //post -->
			<?php endwhile;?>        	
				<div id="nav">
					<ul>
						<li><?php previous_comments_link(); ?></li>
						<li><?php next_comments_link(); ?></li>
					</ul>
				</div>
			<?php else : ?>
				<h2>Not found</h2>
			<?php  endif; ?>
		</div><!-- / Content -->
		
		<?php get_sidebar(); ?>
	</div><!-- / container -->
<?php get_footer(); ?>