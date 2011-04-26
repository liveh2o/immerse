<?php
/**
 * @package WordPress
 * @subpackage Theme
 */

get_header(); ?>

	


		
<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>
<?php $val = ($term->name);?>
		
<section id="splash" class="section">
	<ul id="article-menu">		
		<li<?php if($val == "Church"){ echo " class='active'";};?>><a href="<?php bloginfo('url'); ?>/article-categories/church/" class="ai1">Church</a></li>
		<li<?php if($val == "Arts and Culture"){ echo " class='active'";};?>><a href="<?php bloginfo('url'); ?>/article-categories/arts-and-culture/" class="ai2">Arts &amp; Culture</a></li>
		<li<?php if($val == "Story"){ echo " class='active'";};?>><a href="<?php bloginfo('url'); ?>/article-categories/story/" class="ai3">Story</a></li>
		<li<?php if($val == "Christian History and Thought"){ echo " class='active'";};?>><a href="<?php bloginfo('url'); ?>/article-categories/christian-history-and-thought/" class="ai4">Christian History &amp; Though</a></li>
		<li<?php if($val == "Theology"){ echo " class='active'";};?>><a href="<?php bloginfo('url'); ?>/article-categories/theology/" class="ai5">Theology</a></li>
		<li<?php if($val == "Spiritual Formation"){ echo " class='active'";};?>><a href="<?php bloginfo('url'); ?>/article-categories/spiritual-formation/" class="ai6">Spiritual Formation</a></li>
	</ul>
	
	
	
	<?php if($val == "Church"){?>
	<div id="section-image">
		<img src="<?php bloginfo('template_directory'); ?>/img/article-slide1.jpg" alt="" />
	</div>	
	<img src="<?php bloginfo('template_directory'); ?>/img/badge1.png" alt="" id="badge" />
	<?php } else if($val == "Arts and Culture"){?>
	<div id="section-image">
		<img src="<?php bloginfo('template_directory'); ?>/img/article-slide2.jpg" alt="" />
	</div>	
	<img src="<?php bloginfo('template_directory'); ?>/img/badge2.png" alt="" id="badge" />	
	<?php } else if($val == "Story"){?>
	<div id="section-image">
		<img src="<?php bloginfo('template_directory'); ?>/img/article-slide3.jpg" alt="" />
	</div>	
	<img src="<?php bloginfo('template_directory'); ?>/img/badge3.png" alt="" id="badge" />	
	<?php } else if($val == "Christian History and Thought"){?>
	<div id="section-image">
		<img src="<?php bloginfo('template_directory'); ?>/img/article-slide4.jpg" alt="" />
	</div>	
	<img src="<?php bloginfo('template_directory'); ?>/img/badge4.png" alt="" id="badge" />	
	<?php } else if($val == "Theology"){?>
	<div id="section-image">
		<img src="<?php bloginfo('template_directory'); ?>/img/article-slide5.jpg" alt="" />
	</div>	
	<img src="<?php bloginfo('template_directory'); ?>/img/badge5.png" alt="" id="badge" />	
	<?php } else {?>
	<div id="section-image">
		<img src="<?php bloginfo('template_directory'); ?>/img/article-slide6.jpg" alt="" />
	</div>	
	<img src="<?php bloginfo('template_directory'); ?>/img/badge6.png" alt="" id="badge" />	
	<?php };?>
</section><!-- e: splash -->
				

<section id="article" class="section no-header">

	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>	
		
	
	<article class="entry in-list">
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<p>by <strong><?php the_author() ?></strong> on <strong><?php the_time('F jS, Y') ?></strong></p>
			
		<?php the_content('Read the rest of this entry &raquo;'); ?>
	</article>
	
	
	<?php endwhile; ?>

	<div class="navigation">
		<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
		<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
	</div>

	<?php else : ?>

	<h2 class="center">Not Found</h2>
	<p class="center">Sorry, but you are 	looking for something that isn't here.</p>
	<?php get_search_form(); ?>

	<?php endif; ?>
	
</section>



<?php include_once 'the-team.php'; ?>		
	

<?php get_footer(); ?>
