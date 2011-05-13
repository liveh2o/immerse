<?php
/**
 * @package WordPress
 * @subpackage Theme
 */

get_header(); ?>

    

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>     
        
<?php $category = get_the_category(); ?>
<?php $val = ($category[0]->name); ?>

<section id="splash" class="section">
    <?php include_once 'section-menu-vert.php'; ?>
    <div id="section-image">
        <?php the_post_thumbnail( 'full' ); ?>
    </div>  
    <?php if($val == "Church"){?>
    <img src="<?php bloginfo('template_directory'); ?>/img/badge1.png" alt="" id="badge" />
    <?php } else if($val == "Arts and Culture"){?>
    <img src="<?php bloginfo('template_directory'); ?>/img/badge2.png" alt="" id="badge" /> 
    <?php } else if($val == "Story"){?>
    <img src="<?php bloginfo('template_directory'); ?>/img/badge5.png" alt="" id="badge" /> 
    <?php } else if($val == "Christian History and Thought"){?>
    <img src="<?php bloginfo('template_directory'); ?>/img/badge3.png" alt="" id="badge" /> 
    <?php } else if($val == "Theology"){?>
    <img src="<?php bloginfo('template_directory'); ?>/img/badge6.png" alt="" id="badge" /> 
    <?php } else {?>
    <img src="<?php bloginfo('template_directory'); ?>/img/badge4.png" alt="" id="badge" /> 
    <?php };?>
</section><!-- e: splash -->
                
        

<section id="article-head" class="section">
    <span class="author">
        <?php the_author(); ?>
    </span>
    <a href="#" class="al1">Past Articles</a>
    <span class="al2">
    <iframe src="http://www.facebook.com/plugins/like.php?href=<?php the_permalink() ?>&layout=button_count&show_faces=false&width=79&action=like&colorscheme=light" scrolling="no" frameborder="0"  allowTransparency="true" style="overflow:hidden; width:90px; height:20px; float:right; padding:0 0 0 5px;"></iframe>
    </span>
    <span class="al3"><?php tweet_this('twitter', '[TITLE] [EXCERPT] [URL] via @immersejournal', '[BLANK]',
        'Tweet This [URL]', '', 'tweet-this',
        'tt', 'Post to Twitter'); ?>
    </span>
</section>



<section id="article" class="section">
    <div id="page-window">
        <article class="entry ar-entry paginate">
            <?php the_content('Read the rest of this entry &raquo;'); ?>
        </article>
    </div>
    <div class="navigation">
        <span class="alignleft"><a href="#" id="previous_button" style="display:none;">PREVIOUS</a></span>
        <span class="alignright"><a href="#" id="next_button">NEXT</a></span>
    </div>
</section>


<section id="about" class="section">
    <?php echo get_avatar( get_the_author_email(), '84' ); ?>
    <strong>About the Author</strong>
    <p><?php the_author_meta('description'); ?></p>
</section>


<section id="ads2" class="section">
    <a href="#" class="ads2"></a>
</section>

<section id="comments" class="section">
    <h3 id="comments-bar">Comments</h3>
    <div id="comwrap">
        <?php comments_template(); ?>
    </div>
</section>
    
<?php endwhile; ?>


<?php else : ?>

<h2 class="center">Not Found</h2>
<p class="center">Sorry, but you are looking for something that isn't here.</p>
<?php get_search_form(); ?>

<?php endif; ?>

<?php get_footer(); ?>
