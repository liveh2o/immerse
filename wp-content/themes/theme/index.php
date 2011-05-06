<?php
/**
 * @package WordPress
 * @subpackage Theme
 */

get_header(); ?>
		
<?php include_once 'section-menu.php'; ?>
		
		
<h2 class="page-title">Immerse Blog</h2>



<section id="page" class="section">
	<ul id="entry-social">
        <li><span class="es1">
        <?php tweet_this('twitter', '[TITLE] [EXCERPT] [URL] via @immersejournal', '[BLANK]',
        'Tweet This [URL]', '', 'tweet-page',
        'tt', 'Post to Twitter'); ?>
        </span></li>
        <li>
        <iframe src="http://www.facebook.com/plugins/like.php?href=<?php the_permalink() ?>&layout=button_count&show_faces=false&width=79&action=like&colorscheme=light" scrolling="no" frameborder="0"  allowTransparency="true" style="overflow:hidden; width:90px; height:29px; position: absolute;"></iframe>
        </li>
    </ul>

	<div id="entry-head">
		<img src="<?php bloginfo('template_directory'); ?>/img/blog-head.jpg" alt="" />
	</div>
	
	
	
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	
			
	<div class="entry is-post" id="post-<?php the_ID(); ?>">
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<p>by <strong><?php the_author() ?></strong> on <strong><?php the_time('F jS, Y') ?></strong> -- filed under <strong><?php the_category(', ') ?></strong></p>
			
		<?php the_excerpt('Read the rest of this entry &raquo;'); ?>
	</div>
	
	
	<?php endwhile; ?>

	<div class="navigation">
		<div class="alignleft"><?php next_posts_link('PREVIOUS') ?></div>
		<div class="alignright"><?php previous_posts_link('NEXT') ?></div>
	</div>

	<?php else : ?>

	<h2 class="center">Not Found</h2>
	<p class="center">Sorry, but you are looking for something that isn't here.</p>
	<?php get_search_form(); ?>

	<?php endif; ?>
	
	
	
</section>

<?php get_footer(); ?>
