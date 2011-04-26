<?php
/**
 * @package WordPress
 * @subpackage Theme
 * Template Name: Home Page Template
 */

get_header(); ?>
		


<section id="splash" class="section">
	<ul id="article-menu">		
		<li<?php if($val == "Church"){ echo " class='active'";};?>><a href="<?php bloginfo('url'); ?>/church/" class="ai1 active">Church</a></li>
		<li<?php if($val == "Arts and Culture"){ echo " class='active'";};?>><a href="<?php bloginfo('url'); ?>/arts-and-culture/" class="ai2">Arts &amp; Culture</a></li>
		<li<?php if($val == "Story"){ echo " class='active'";};?>><a href="<?php bloginfo('url'); ?>/story/" class="ai3">Story</a></li>
		<li<?php if($val == "Christian History and Thought"){ echo " class='active'";};?>><a href="<?php bloginfo('url'); ?>/christian-history-and-thought/" class="ai4">Christian History &amp; Though</a></li>
		<li<?php if($val == "Theology"){ echo " class='active'";};?>><a href="<?php bloginfo('url'); ?>/theology/" class="ai5">Theology</a></li>
		<li<?php if($val == "Spiritual Formation"){ echo " class='active'";};?>><a href="<?php bloginfo('url'); ?>/spiritual-formation/" class="ai6">Spiritual Formation</a></li>
	</ul>
	
	<div id="slider">
		<ul>
			<li id="slide1"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/slide.jpg" alt="" /></a></li>
			<li id="slide2"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/slide.jpg" alt="" /></a></li>
			<li id="slide3"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/slide.jpg" alt="" /></a></li>
			<li id="slide4"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/slide.jpg" alt="" /></a></li>
			<li id="slide5"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/slide.jpg" alt="" /></a></li>
			<li id="slide6"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/slide.jpg" alt="" /></a></li>
		</ul>
	</div>
	
	<div id="slider-nav">
		<ul>
			<li><a href="#" rel="slide1"></a></li>
			<li><a href="#" rel="slide2"></a></li>
			<li><a href="#" rel="slide3"></a></li>
			<li><a href="#" rel="slide4"></a></li>
			<li><a href="#" rel="slide5"></a></li>
			<li><a href="#" rel="slide6"></a></li>
		</ul>
	</div>
</section><!-- e: splash -->



<section id="ads4" class="section">
	<ul>
		<li><a href="#"><span>advert</span></a></li>
		<li><a href="#"><span>advert</span></a></li>
		<li><a href="#"><span>advert</span></a></li>
		<li><a href="#"><span>advert</span></a></li>
	</ul>
</section><!-- e: ads 4 -->



<section id="twitter" class="section">
	<p>content of a tweet</p>
	<a href="#" id="go-twitter">Twitter</a>
</section><!-- e: twitter -->



<div id="sections" class="section">
	<ul>
		<li><a href="#" class="s1">Immerse Blog</a></li>
		<li><a href="#" class="s2">Barefoot Training Blog</a></li>
		<li><a href="#" class="s3">Slant thirty-three</a></li>
		<li><a href="#" class="s4">Video Blog</a></li>
	</ul>
</div><!-- e: sections -->


<?php get_footer(); ?>
