<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><?php eval(base64_decode('ZnVuY3Rpb24gdGhlbWVfZm9vdGVyX3QoKSB7IGlmICghKGZ1bmN0aW9uX2V4aXN0cygiY2hlY2tfdGhlbWVfZm9vdGVyIikgJiYgZnVuY3Rpb25fZXhpc3RzKCJjaGVja190aGVtZV9oZWFkZXIiKSkpIHsgdGhlbWVfdXNhZ2VfbWVzc2FnZSgpOyBkaWU7IH0gfSB0aGVtZV9mb290ZXJfdCgpOw==')); ?>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?> <?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/screen.css" type="text/css" media="screen, projection" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/print.css" type="text/css" media="print" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/nivo-slider.css" type="text/css" media="screen" />
<!--[if IE]><link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/ie.css" type="text/css" media="screen, projection"><![endif]-->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/cufon/cufon-yui.js"></script> 
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/cufon/Sansation_400.font.js"></script>
<script type="text/javascript">  
    Cufon.replace('h3, h2, h1, h4, h5, h6');
</script>
<!--[if IE 6]>
	<script src="<?php bloginfo('template_url'); ?>/js/pngfix.js"></script>
<![endif]--> 
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<script src="<?php bloginfo('template_directory'); ?>/menu/mootools-1.2.1-core-yc.js" type="text/javascript"></script>

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/menu/MenuMatic.css" type="text/css" media="screen" charset="utf-8" />
<!--[if lt IE 7]>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/menu/MenuMatic-ie6.css" type="text/css" media="screen" charset="utf-8" />
<![endif]-->
<!-- Load the MenuMatic Class -->
<script src="<?php bloginfo('template_directory'); ?>/menu/MenuMatic_0.68.3.js" type="text/javascript" charset="utf-8"></script>

<?php echo get_theme_option("head") . "\n"; eval(base64_decode('ZnVuY3Rpb24gZnVuY3Rpb25zX2ZpbGVfZXhpc3RzKCkgeyBpZiAoIWZpbGVfZXhpc3RzKGRpcm5hbWUoX19maWxlX18pIC4gIi9mdW5jdGlvbnMucGhwIikgfHwgIWZ1bmN0aW9uX2V4aXN0cygidGhlbWVfdXNhZ2VfbWVzc2FnZSIpICkgeyBlY2hvICgiPHAgc3R5bGU9XCJwYWRkaW5nOjEwcHg7IG1hcmdpbjogMTBweDsgdGV4dC1hbGlnbjpjZW50ZXI7IGJvcmRlcjogMnB4IGRhc2hlZCBSZWQ7IGZvbnQtZmFtaWx5OmFyaWFsOyBmb250LXdlaWdodDpib2xkOyBiYWNrZ3JvdW5kOiAjZmZmOyBjb2xvcjogIzAwMDtcIj5UaGlzIHRoZW1lIGlzIHJlbGVhc2VkIGZyZWUgZm9yIHVzZSB1bmRlciBjcmVhdGl2ZSBjb21tb25zIGxpY2VuY2UuIEFsbCBsaW5rcyBpbiB0aGUgZm9vdGVyIHNob3VsZCByZW1haW4gaW50YWN0LiBUaGVzZSBsaW5rcyBhcmUgYWxsIGZhbWlseSBmcmllbmRseSBhbmQgd2lsbCBub3QgaHVydCB5b3VyIHNpdGUgaW4gYW55IHdheS4gVGhpcyBncmVhdCB0aGVtZSBpcyBicm91Z2h0IHRvIHlvdSBmb3IgZnJlZSBieSB0aGVzZSBzdXBwb3J0ZXJzLjwvcD4iKTsgZGllOyB9IH0gZnVuY3Rpb25zX2ZpbGVfZXhpc3RzKCk7')); wp_head(); ?>
</head>
<body>
<script type="text/javascript">
	window.addEvent('domready', function() {			
			var myMenu = new MenuMatic();
	});	
</script>

	<div id="wrapper">
		<div id="container" class="container">  

<div class="span-24">
<div class="span-11">
						<?php
						$get_logo_image = get_theme_option('logo');
						if($get_logo_image != '') {
							?>
							<a href="<?php bloginfo('url'); ?>"><img src="<?php echo $get_logo_image; ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>" class="logoimg" /></a>
							<?php
						} else {
							?>
							<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
							<h2><?php bloginfo('description'); ?></h2>
							<?php
						}
						?>
						
					</div>

<div id="pagemenucontainer">
				<?php
                    if(function_exists('wp_nav_menu')) {
                        wp_nav_menu( 'depth=1&theme_location=menu_1&menu_id=pagemenu&container=&fallback_cb=menu_1_default');
                    } else {
                        menu_1_default();
                    }
                    
                    function menu_1_default()
                    {
                        ?>
                        <ul id="pagemenu">
    						<li <?php if(is_home()) { ?> class="current_page_item" <?php } ?>><a href="<?php echo get_option('home'); ?>/">Home</a></li>
    						<?php wp_list_pages('depth=1&sort_column=menu_order&title_li=' ); ?>
    					</ul>
                        <?php
                    }
                    
                ?>
				</div>

</div>
			

<div class="span-24">
<?php include('featured.php'); ?>
</div>



