<?php
/**
 * @package WordPress
 * @subpackage Theme
 */

get_header(); ?>
		
<?php include_once 'section-menu.php'; ?>


<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>		
		
		
<h2 class="page-title"><?php the_title(); ?></h2>


<section id="page" class="section">
	<ul id="entry-social">
		<li><a href="#" class="es1">Tweet This</a></li>
		<li><a href="#" class="es2">Like This</a></li>
		<li><a href="#" class="es3">Share This</a></li>		
	</ul>
	
	<?php if ( has_post_thumbnail() ) {?>
	<div id="entry-head">		
		<?php the_post_thumbnail('type1'); ?>
	</div>
	<?php };?>	
			
	<div class="entry is-post" id="post-<?php the_ID(); ?>">
		<?php the_content('Read the rest of this entry &raquo;'); ?>
	</div>
	
	
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
