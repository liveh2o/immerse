<?php
/**
 * @package WordPress
 * @subpackage Theme
 */
?>
<section id="ads1" class="section">
	<?php echo footer_ad_space(); ?>
</section>
</div>
<footer id="footer">
	
	<div id="foot">
		<div id="fcol1">
			<h5>Subscribe Today!</h5>
			<a href="<?php bloginfo('url'); ?>/subscribe/"><img src="<?php bloginfo('template_directory'); ?>/img/book.jpg" alt="" /></a>
		</div>
		
		<div id="fcol2">
			<ul>
				<li><a href="/feed/" class="fs1">RSS</a></li>
				<li><a href="http://twitter.com/immersejournal" class="fs2">Twitter</a></li>
				<li><a href="http://www.youtube.com/immersejournal" class="fs3">YouTube</a></li>
				<li><a href="http://www.facebook.com/#!/profile.php?id=100002211903019" class="fs4">Facebook</a></li>
				<li><a href="http://vimeo.com/channels/181320" class="fs5">Vimeo</a></li>
			</ul>
			
			<form action="<?php bloginfo('url'); ?>/">
				<p>
					<input type="text" class="text" value="" name="s" />
					<input type="submit" class="submit" value="Go" />
				</p>
			</form>
			
			<div id="ipad">
				<h5>Immerse on your iPad</h5>
				<p><a href="http://itunes.apple.com/us/app/zinio-magazine-newsstand-reader/id364297166?mt=8&uo=4" target="itunes_store">Download the free Zinio app</a> for your iPad and search Immerse Journal</p>
			</div>
		</div>
		
		<div id="fcol3" class="contact">
			<h6>Contact Us</h6>
			<div id="node"></div>
			<div id="success">Thanks. We'll get back to you shortly.</div>
			<form name="contact_form" id="contact_me">
				<p>
					<label for="name">Your Name</label>
					<input type="text" class="text" name="name" value="" />
				</p>
				<p>
					<label for="mail">Your Email</label>
					<input type="text" class="text" name="mail" value="" />
				</p>
				<p>
					<label for="message">Your Message</label>
					<textarea class="message" rows="5" cols="5" name="message"></textarea>
				</p>
				<p>
					<input type="submit" class="submit" value="Submit" />
				</p>
			</form>
		</div>
	</div>
	
	<div id="foot-nav">
				
		<?php wp_nav_menu( array('menu' => 'Foot Menu' )); ?>
		
	</div>
	
</footer>
<?php wp_footer(); ?>
</body>
</html>
