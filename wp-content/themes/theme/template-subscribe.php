<?php
/**
 * @package WordPress
 * @subpackage Theme
 * Template Name: Subscribe
 */

get_header(); ?>
		
<?php include_once 'section-menu.php'; ?>
		
		
<h2 class="page-title"><?php the_title(); ?></h2>
<p class="subtitle">This is the definitive publication for adults who work in ministry with middle school, high school, or college students in the church or parachurch. Don't miss another issue.</p>



<section id="page" class="section">
	<ul id="entry-social">
		<li><span class="es1">
		<?php tweet_this('twitter', '[TITLE] [EXCERPT] [URL] via @immersejournal', 'Tweet This',
		'Tweet This [URL]', 'noicon', 'tweet-page',
		'tt', 'Post to Twitter'); ?>
		</span></li>
		<li><img class="es2" src="<?php bloginfo('template_directory'); ?>/img/ss2.jpg" />
        <iframe src="http://www.facebook.com/plugins/like.php?href=<?php the_permalink() ?>&layout=button_count&show_faces=false&width=79&action=like&colorscheme=light" scrolling="no" frameborder="0"  allowTransparency="true" style="overflow:hidden; width:90px; height:29px; position: absolute;"></iframe>
        </li>
		<li><a href="#" class="es3">Share This</a></li>		
	</ul>
	
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	
			
	<div class="entry subscribe" id="post-<?php the_ID(); ?>">
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
<?php get_footer(); ?>
