<?php
/**
 * @package WordPress
 * @subpackage Theme
 */
?>


<section id="ads1" class="section">
	<a href="#" class="ads1"></a>
</section>



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
				<li><a href="#" class="fs5">Flickr</a></li>
			</ul>
			
			<form action="/" method="post">
				<p>
					<input type="text" class="text" value="" />
					<input type="submit" class="submit" value="Go" />
				</p>
			</form>
			
			<div id="ipad">
				<h5>Immerse on your iPad</h5>
				<p>Download the free Zino app for your iPad and search Immerse Journal</p>
			</div>
		</div>
		
		<div id="fcol3">
			<h6>Contact Us</h6>			
			<form action="/" method="post">
				<p>
					<label>Your Name</label>
					<input type="text" class="text" value="" />
				</p>
				<p>
					<label>Your Email</label>
					<input type="text" class="text" value="" />
				</p>
				<p>
					<label>Your Message</label>
					<textarea class="message" rows="5" cols="5"></textarea>
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


<!-- site JS -->
<script src="<?php bloginfo('template_directory'); ?>/scripts/jquery-1.5.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/plugins.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/script.js"></script>

<?php wp_footer(); ?>

</body>
</html>
