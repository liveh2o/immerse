<?php
/**
 * @package WordPress
 * @subpackage Theme
 */

get_header(); ?>

	

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>		
		
		
<section id="splash" class="section">
	<ul id="article-menu">
		<li><a href="<?php bloginfo('url'); ?>/article-categories/church/" class="ai1 active">Church</a></li>
		<li><a href="<?php bloginfo('url'); ?>/article-categories/arts-and-culture/" class="ai2">Arts &amp; Culture</a></li>
		<li><a href="<?php bloginfo('url'); ?>/article-categories/story/" class="ai3">Story</a></li>
		<li><a href="<?php bloginfo('url'); ?>/article-categories/christian-history-and-thought/" class="ai4">Christian History &amp; Though</a></li>
		<li><a href="<?php bloginfo('url'); ?>/article-categories/theology/" class="ai5">Theology</a></li>
		<li><a href="<?php bloginfo('url'); ?>/article-categories/spiritual-formation/" class="ai6">Spiritual Formation</a></li>
	</ul>
	
	<?php if(is_category( 'Church' ) ){?>
	<div id="section-image">
		<img src="<?php bloginfo('template_directory'); ?>/img/article-slide1.jpg" alt="" />
	</div>	
	<img src="<?php bloginfo('template_directory'); ?>/img/badge1.png" alt="" id="badge" />
	<?php };?>
</section><!-- e: splash -->
				
		

<section id="article-head" class="section">
	<span class="author">
		<?php the_author(); ?>
	</span>
	<a href="#" class="al1">Past Articles</a>
	<a href="#" class="al2">Like This</a>
	<a href="#" class="al3">Tweet This</a>
</section>



<section id="article" class="section">
	<article class="entry">What HAPPENS!!!
		<?php the_content('Read the rest of this entry &raquo;'); ?>
	</article>
</section>


<section id="about" class="section">
	<img src="img/avatar.jpg" alt="" />
	<strong>About the Author</strong>
	<p>content</p>
</section>


<section id="ads2" class="section">
	<a href="#" class="ads2"></a>
</section>



<section id="comments" class="section">
	<h3>Comments</h3>
	<div id="comwrap">
		<?php comments_template(); ?>
	</div>
</section>


	
	
<?php endwhile; ?>

<div class="navigation">
	<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
	<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
</div>

<?php else : ?>

<h2 class="center">Not Found</h2>
<p class="center">Sorry, but you are looking for something that isn't here.</p>
<?php get_search_form(); ?>

<?php endif; ?>


<?php include_once 'the-team.php'; ?>		
	

<?php get_footer(); ?>
