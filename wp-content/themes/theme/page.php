<?php
/**
 * @package WordPress
 * @subpackage Theme
 */
get_header(); ?>
		
<?php include_once 'section-menu.php'; ?>

<h2 class="page-title"><?php the_title(); ?></h2>

<section id="page" class="section <?php echo uri_segments(1); ?>">
	<ul id="entry-social">
        <li><span class="es1">
        <?php tweet_this('twitter', '[TITLE] [EXCERPT] [URL] via @immersejournal', '[BLANK]',
            'Tweet This [URL]', '', 'tweet-this',
            'tt', 'Post to Twitter'); ?>
        </span></li>
        <li>
        <iframe src="http://www.facebook.com/plugins/like.php?href=<?php the_permalink() ?>&layout=button_count&show_faces=false&width=79&action=like&colorscheme=light" scrolling="no" frameborder="0"  allowTransparency="true" style="overflow:hidden; width:90px; height:29px; position: absolute;"></iframe>
        </li>
    </ul>
	<?php if ( has_post_thumbnail() ) {?>
	<div id="entry-head">
	    <?php the_post_thumbnail('type1'); ?>
	</div>
	<?php };?>	
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	
			
	<div class="entry is-post" id="post-<?php the_ID(); ?>">
		<?php the_content('Read the rest of this entry &raquo;'); ?>
	</div>
	
	<?php endwhile; ?>

	<?php else : ?>

	<h2 class="center">Not Found</h2>
	<p class="center">Sorry, but you are looking for something that isn't here.</p>
	<?php get_search_form(); ?>

	<?php endif; ?>
	
</section>
<?php get_footer(); ?>
