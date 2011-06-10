<?php
/**
 * @package WordPress
 * @subpackage Theme
 */

get_header(); ?>

<?php include_once 'section-menu.php'; ?>
		
		
<h2 class="page-title">Immerse Blog</h2>

<section id="page" class="section archive-wrapper">
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

	<?php if (have_posts()) : the_post(); ?>
	<div id="entry-wrapper">		
	<div class="entry is-post blog-archive" id="post-<?php the_ID(); ?>">
		<h2><?php the_title(); ?></h2>
		<p>by <strong><?php the_author() ?></strong> on <strong><?php the_time('F jS, Y') ?></strong> -- filed under <strong><?php the_category(', ') ?></strong></p>
		<div id="featured-blog-image">
      <?php the_post_thumbnail( 'full' ); ?>
    </div>
		<?php the_content(); ?>
	</div>
	
	<div id="blog-sidebar">
		<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('blog_sidebar')) : else : ?>

		<div class="pre-widget">
			<p><strong>Widgetized Sidebar</strong></p>
			<p>This panel is active and ready for you to add some widgets via the WP Admin</p>
		</div>
	<?php endif; ?>
	</div>

	<div id="below-blog">
    <section id="comments" class="section">
        <h3 id="comments-bar">Comments</h3>
        <div id="comwrap">
            <?php comments_template(); ?>
        </div>
    </section>

		<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('below_blog')) : else : ?>
		<div class="pre-widget">
			<p><strong>Widgetized Sidebar</strong></p>
			<p>This panel is active and ready for you to add some widgets via the WP Admin</p>
		</div>
	  <?php endif; ?>
	</div>
	
	</div>

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
