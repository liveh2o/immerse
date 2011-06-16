<?php
/**
 * @package WordPress
 * @subpackage Theme
 * Template Name: Home Page Template
 */
get_header(); ?>

<section id="splash" class="section">
    <?php include_once 'section-menu-vert.php'; ?>
    <div id="sliderwrapper">
        <div id="slider">
	    <?php latest_articles(); ?>
        </div>
    </div>
</section><!-- e: splash -->

<section id="ads4" class="section">
    <div class="ad_wrapper">
        <?php echo adrotate_block(1); ?>
    </div>
</section><!-- e: ads 4 -->

<section id="twitter" class="section">
    <?php echo do_shortcode('[twitter-feed username="immersejournal" mode="public" num="5" img="no" followlink="no" linklove="no" timeline="no" ulclass="newsticker"]'); ?>
    <a href="#" id="go-twitter">Twitter</a>
</section><!-- e: twitter -->

<section id="blog" class="section">
    <article id="latest">
      <h2>The Latest from the Blog</h2>
    <?php query_posts('post_type=immerseblog'); ?>
  	<?php if (have_posts()) : the_post(); ?>
    		<?php the_advanced_excerpt('length=110&use_words=1&no_custom=1&ellipsis=%26hellip;'); ?>
        <a href="<?php the_permalink(); ?>" class="more">Continue Reading <span>▶</span></a>
  	<?php endif; ?>
    </article>
    <aside id="ads5">
        <?php echo adrotate_block(9); ?>
    </aside>
</section><!-- e: blog -->

<?php get_footer(); ?>
