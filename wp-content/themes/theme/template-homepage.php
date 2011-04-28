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
<?php
  $args = array( 'numberposts' => 10, 'order'=> 'ASC', 'category_name' => 'church,arts-and-culture,story,christian-history-and-thought,theology,spiritual-formation');
  $postslist = get_posts( $args );
  foreach ($postslist as $post) : setup_postdata($post); ?> 
    <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_size' ); ?>
            <a href="<?php echo get_permalink(); ?>"><img src="<?php echo $thumb[0] ?>" /></a>
<?php endforeach; ?>
        </div>
    </div>
</section><!-- e: splash -->

<section id="ads4" class="section">
    <div class="ad_wrapper">
        <?php echo adrotate_block(1); ?>
    </div>
</section><!-- e: ads 4 -->

<section id="twitter" class="section">
    <?php echo do_shortcode('[twitter-feed username="immersejournal" mode="public" num="1" img="no" followlink="no" linklove="no" timeline="no"]'); ?>
    <a href="#" id="go-twitter">Twitter</a>
</section><!-- e: twitter -->

<div id="sections" class="section">
    <ul>
        <li><a href="#" class="s1">Immerse Blog</a></li>
        <li><a href="#" class="s2">Barefoot Training Blog</a></li>
        <li><a href="#" class="s3">Slant thirty-three</a></li>
        <li><a href="#" class="s4">Video Blog</a></li>
    </ul>
</div><!-- e: sections -->

<?php get_footer(); ?>
