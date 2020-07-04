
<div class="span-50">

  
<div id="footer-wrap">
		<div id="footer">
			
						<div class="footer first">
				<h4>Flickr RSS</h4>
				<ul>
<li>
<?php get_flickrRSS(); ?>
</li>
</ul>
			</div> <!-- end .footer .first -->
			
						<div class="footer middle">
				<h4>Write For Us</h4>

				<p>Writing a tutorial or article for a ZJT Studio site is not only a great way to get exposure and give back to the community, but we'll also give you $50 cash to boot! Aenean a lorem lacus. Nulla facilisi. Curabitur lorem turpis, cursus id aliquam non, molestie in nulla. Nulla eleifend arcu in tellus facilisis bibendum. Integer id turpis et neque placerat interdum! Ut rutrum velit a dui malesuada vitae dictum turpis sagittis. Sed malesuada neque ut eros ultricies accumsan.</p>
			</div> <!-- end .footer .middle -->
						
						<div class="footer kast">
				<h4>Contact Info</h4>
				<p>So 10, To 24 Nguyen Dinh Chieu<br />Nha Trang, VN 57000</p>
				<p>T: (84) 1278-076630</p>

				<p>Aenean a lorem lacus. Nulla facilisi. Curabitur lorem turpis eta neque placerat interdum!</p>
				<div id="social">
					<ul>
						<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.jpg" alt="" width="22" height="22" /></a></li>
						<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/facebook.jpg" alt="" width="22" height="22" /></a></li>
						<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/feedburner.jpg" alt="" width="22" height="22" /></a></li>
						<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/google.jpg" alt="" width="22" height="22" /></a></li>
						<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/youtube.png" alt="" width="22" height="22" /></a></li>

					</ul>
				</div><!-- end #social -->
			</div> <!-- end .footer .last -->
					</div><!-- end #footer -->

	</div><!-- end #footer-wrap -->	
	<div id="copyright-wrap">
										<p>&copy; Copyright 2011. Designed by <a href="http://www.interiordesignmodern.com/">Modern Interior Design</a>. Thanks to <a href="http://trucks.reviewitonline.net/">Trucks</a>, <a href="http://suv.reviewitonline.net/">SUV</a> and <a href="http://www.ipadcasespot.com/">iPad Case</a></p>
	</div> <!-- end #copyright-wrap -->


</div>
</div>
  

<?php
	 wp_footer();
	echo get_theme_option("footer")  . "\n";
?>

</body>
</html>