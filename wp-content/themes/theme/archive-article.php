<?php
/**
 * @package WordPress
 * @subpackage Theme
 */

get_header(); ?>

	

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>		
		
		
<section id="splash" class="section">
	<?php include_once 'section-menu.php'; ?>
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

<?php get_footer(); ?>
