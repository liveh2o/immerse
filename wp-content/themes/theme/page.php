<?php
/**
 * @package WordPress
 * @subpackage Theme
 */

get_header(); ?>
		
<?php include_once 'section-menu.php'; ?>
		
		
<h2 class="page-title"><?php the_title(); ?></h2>



<section id="page" class="section">
	<ul id="entry-social">
		<li><span class="es1">
		<?php tweet_this('twitter', '[TITLE] [EXCERPT] [URL] via @immersejournal', 'Tweet This',
		'Tweet This [URL]', 'noicon', 'tweet-page',
		'tt', 'Post to Twitter'); ?>
		</span></li>
		<li><span class="es2">
		<?php tweet_this('facebook', '[TITLE] [EXCERPT] [URL]', 'Post This',
		'Post This [URL]', 'noicon', 'post-page',
		'tt', 'Post to Facebook'); ?>
		</span></li>
		<li><a href="#" class="es3">Share This</a></li>		
	</ul>

	<div id="entry-head">
		
		<?php if ( has_post_thumbnail() ) {?>
			<?php the_post_thumbnail('type1'); ?>
		<?php } else {?>
			<img src="<?php bloginfo('template_directory'); ?>/img/about-image.jpg" alt="" />
		<?php };?>	
		
	</div>
	
	
	
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	
			
	<div class="entry is-post" id="post-<?php the_ID(); ?>">
		<?php the_content('Read the rest of this entry &raquo;'); ?>
	</div>
	
	
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
	
	
	
</section>


<?php include_once 'the-team.php'; ?>		
	

<?php get_footer(); ?>
