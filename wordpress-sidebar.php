ia<div class="span-8 last">

	
	<div class="sidebar">
        <div id="topsearch" > 
    		<?php get_search_form(); ?> 
    	</div>
        
		<!-- second Google Adds -->
		
		<div style="float: left; margin-left: -7px; margin-top: 7px;">
		<script type="text/javascript"><!--
		google_ad_client = "pub-32423552352";
		/* 300x250, created 9/2/10 */
		google_ad_slot = "4323434";
		google_ad_width = 450;
		google_ad_height = 220;
		//-->
		</script>
		<script type="text/javascript"
		src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
		</script>
		<hr style="color:#D6D3D6;width:97%">
		</div>
		

        <?php if(get_theme_option('ads_125') == '') {
			?>
			<div class="sidebaradbox">
				<?php sidebar_ads_125(); ?>
			</div>
			<!-- finding ebay API -->
		<?php } else {
				echo "<b>You may also interested in...</b>";
	    //$categories = get_the_category();
		if(is_home()) {
			//echo "You reached Home page <br />";
			$args = array( 'posts_per_page' => 1, 'orderby' => 'post_date','order'=> 'DESC',);
			$myposts = get_posts( $args );
			if(get_the_tags($myposts[0]->ID)!= null)
			{
			$categories = get_the_tags($myposts[0]->ID);
			}
			else{
				$categories = get_the_category($myposts[0]->ID);
			}
		}
		else
		{
			if(get_the_tags($post->ID) != null){
			$categories = get_the_tags($post->ID);
			}
			else{
				$categories = get_the_category($post->ID);
			}
		}

		foreach($categories as $category)
		{
			$arrayCategory[] = $category->name;
		}

		$productUrl = "http://localhost/Finding.php?category=". rawurlencode(serialize($arrayCategory));

		?>        	

		<div class="sidebaradbox">
				<iframe
					src=<?php echo $productUrl ?>
					id="AmzAd"  frameborder="0"  vspace="0"  hspace="0"  marginwidth="0"  marginheight="0"
                  	width="299"  scrolling="no"  height="250" >
                </iframe>
	    </div>
		<?php } ?>
		
		<!-- finding ebay API -->
        
        
        
		
        <?php
		if(get_theme_option('rssbox') == 'true') {
			?>
    			<div class="socialboxes">
    				<a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/rss.png"  alt="RSS Feed" title="RSS Feed" style="vertical-align:middle; margin-right: 5px;"  /></a><a href="<?php bloginfo('rss2_url'); ?>"><?php echo get_theme_option('rssboxtext'); ?></a>
    			</div>
    			<?php
    		}
    	?>
    	
    	<?php
    		if(get_theme_option('twitter') != '') {
    			?>
    			<div class="socialboxes">
    				<a href="<?php echo get_theme_option('twitter'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/twitter.png"  alt="<?php echo get_theme_option('twittertext'); ?>" title="<?php echo get_theme_option('twittertext'); ?>" style="vertical-align:middle; margin-right: 5px;"  /></a><a href="<?php echo get_theme_option('twitter'); ?>"><?php echo get_theme_option('twittertext'); ?></a>
    			</div>
    			<?php
    		}
    	?>

		<?php if(get_theme_option('video') != '') {
			?>
			<div class="sidebarvideo">
				<ul> <li><h2 style="margin-bottom: 10px;">Featured Video</h2>
				<object width="290" height="220"><param name="movie" value="http://www.youtube.com/v/<?php echo get_theme_option('video'); ?>&hl=en&fs=1&rel=0&border=1"></param>
					<param name="allowFullScreen" value="true"></param>
					<param name="allowscriptaccess" value="always"></param>
					<embed src="http://www.youtube.com/v/<?php echo get_theme_option('video'); ?>&hl=en&fs=1&rel=0&border=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="290" height="220"></embed>
				</object>
				</li>
				</ul>
			</div>
		<?php
		}
		?>
        
		<?php if(get_theme_option('ad_sidebar1_bottom') != '') {
		?>
		<div class="sidebaradbox">
			<?php echo get_theme_option('ad_sidebar1_bottom'); ?>
		</div>
		<?php
		}
		?>
		
		


		<!--  Facebook Fan Start-->
		<div style="background-color: #FFFFFF;margin-top:15px;"> 
			<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2Fabcd-kklf-sdfs-ADVISE%2F189152047640&amp;width=292&amp;colorscheme=light&amp;connections=10&amp;stream=true&amp;header=true&amp;height=587" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:587px;" allowTransparency="true">
			</iframe>
		</div>

		<!--  Facebook Fan End-->


		<ul>
			<?php 
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

				
				<li><h2><?php _e('Recent Posts'); ?></h2>
			               <ul>
					<?php wp_get_archives('type=postbypost&limit=5'); ?>  
			               </ul>
				</li>
				
				<li><h2>Archives</h2>
					<ul>
					<?php wp_get_archives('type=monthly'); ?>
					</ul>
				</li>
				
				<!--
				<li> 
					<h2>Calendar</h2>
					<?php get_calendar(); ?> 
				</li>
				
				-->

				<?php wp_list_categories('hide_empty=0&depth=1&show_count=1&title_li=<h2>Categories</h2>'); ?>
				
				<li id="tag_cloud"><h2>Tags</h2>
					<?php wp_tag_cloud('largest=16&format=flat&number=20'); ?>
				</li>
				
				<!--
				<?php wp_list_bookmarks(); ?>
				-->

				<!-- 
				<?php include (TEMPLATEPATH . '/recent-comments.php'); ?>
				<?php if (function_exists('get_recent_comments')) { get_recent_comments(); } ?> 
				-->
				
				<li><h2>Meta</h2>
					<ul>
						<!-- <?php wp_register(); ?> -->
						<li><?php wp_loginout(); ?></li>
						<!-- <li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li> 
						<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
						
						<?php wp_meta(); ?>-->
					</ul>
					</li>
					
			<?php endif; ?>
		</ul>
        
        
		
	</div>
</div>
