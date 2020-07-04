<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?> >

<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<?php  if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	
	<?php wp_head(); ?>
	<link rel="canonical" href="<?php echo "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>"/>
	
	
</head>
<body  <?php body_class(); ?> >

<div id="wrapper">
	<div id="header">
		<div id="head">
			<div class="bgpng" style="background:url(<?php echo get_template_directory_uri(); ?>/images/head1.png)"></div>
			<div class="bgpng" style="background:url(<?php echo get_template_directory_uri(); ?>/images/head2.png)"></div>
			<div class="bgpng" style="background:url(<?php echo get_template_directory_uri(); ?>/images/head3.png)"></div>
			<div class="bgpng" style="background:url(<?php echo get_template_directory_uri(); ?>/images/head4.png)"></div>
			<div class="bgpng" style="background:url(<?php echo get_template_directory_uri(); ?>/images/head5.png)"></div>
			<div class="bgpng" style="background:url(<?php echo get_template_directory_uri(); ?>/images/head6.png)"></div>
			<div class="bgpng" style="background:url(<?php echo get_template_directory_uri(); ?>/images/head7.png)">
				<div id="mainmenu">
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					
				</div>
			</div>
		</div>		
		<div id="logo">
			<div id="logo-inner" class="bgpng" style="background:url(<?php echo get_template_directory_uri(); ?>/images/logo.png)">
				<h1><a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></h1>
				<h2><?php bloginfo('description'); ?></h2>
			</div>
			<div id="logo-r" class="bgpng" style="background:url(<?php echo get_template_directory_uri(); ?>/images/logo-r.png);">&nbsp;</div>
		</div>
		<a id="feed" type="application/rss+xml" title="<?php printf(__('%s RSS Feed', 'china-theme'), get_bloginfo('name')); ?>" href="<?php bloginfo('rss2_url'); ?>" /></a>
		
	</div><!-- / Header-->