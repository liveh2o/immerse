<?php
/**
 * @package WordPress
 * @subpackage Theme
 * Template Name: About Us
 */
get_header();
include_once 'section-menu.php';
?>
<h2 class="page-title"><?php the_title(); ?></h2>
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
<?php if (have_posts()) :
        while (have_posts()) : the_post(); ?>
    <div class="entry is-post" id="post-<?php the_ID(); ?>">
        <?php the_vimeo($post->ID, 688, 387) ?>
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
    <?php get_search_form();
      endif; ?>
</section>
<?php
include_once 'the-board.php';
get_footer();
?>
