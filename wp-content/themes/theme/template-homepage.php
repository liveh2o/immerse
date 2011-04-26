<?php
/**
 * @package WordPress
 * @subpackage Theme
 * Template Name: Home Page Template
 */

get_header(); ?>
		


<section id="splash" class="section">
	<?php include_once 'section-menu-vert.php'; ?>
	<div id="slider">
		<?php dynamic_content_gallery(); ?>
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
