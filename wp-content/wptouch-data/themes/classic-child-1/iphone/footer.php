				</div><!-- #content -->
		
		<!-- Menus are hard coded to simplify development -->
		<nav id="nav-bar">
			<a href="/supplement">Supplements</a>
			<a href="/immerseblog">Immerse Blog</a>
			<a href="/video-blog">Video Blog</a>
			<a href="/about-us">About Us</a>
		</nav>
		
		<nav id="feature-nav">
		  <div id="feature-nav-container">
			<h2>Feature Articles</h2>
			<a id="mobi-church" href="/church/">Church</a>
			<a id="mobi-arts" href="/arts-and-culture">Arts & Culture</a>
			<a id="mobi-story" href="/story">Story</a>
			<a id="mobi-history" href="/christian-history-and-thought">Christian History & Thought</a>
			<a id="mobi-theology" href="/theology">Theology</a>
			<a id="mobi-formation" href="/spiritual-formation">Spiritual Formation</a>
		  </div>
		</nav>		
		
	
				<?php do_action( 'wptouch_body_bottom' ); ?>
						
				<?php if ( wptouch_show_switch_link() ) { ?>
					<div id="switch">
						<a href="<?php wptouch_the_mobile_switch_link(); ?>"><?php _e( "View the Full Site", "wptouch-pro" ); ?></a>
					</div>
				<?php } ?>
						
				
	
				<?php do_action( 'wptouch_advertising_bottom' ); ?>
			</div> <!-- #inner-ajax -->
		</div> <!-- #outer-ajax -->
		<?php // include_once('web-app-bubble.php'); ?>
		<!-- <?php echo 'WPtouch Pro v.' . WPTOUCH_VERSION; ?> -->
	</body>
</html>