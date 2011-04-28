<?php
/**
 * @package WordPress
 * @subpackage Theme
 */

get_header(); ?>

	

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>		
		
<?php $term = get_term_by( 'id', get_query_var( $post->ID ), get_query_var( 'taxonomy' ) ); ?>
<?php $val = ($term->name); echo $val;?>

<section id="splash" class="section">
	<?php include_once 'section-menu-vert.php'; ?>
	
	<?php if($val == "Church"){?>
	<div id="section-image">
		<img src="<?php bloginfo('template_directory'); ?>/img/article-slide1.jpg" alt="" />
	</div>	
	<img src="<?php bloginfo('template_directory'); ?>/img/badge1.png" alt="" id="badge" />
	<?php } else if($val == "Arts and Culture"){?>
	<div id="section-image">
		<img src="<?php bloginfo('template_directory'); ?>/img/article-slide2.jpg" alt="" />
	</div>	
	<img src="<?php bloginfo('template_directory'); ?>/img/badge2.png" alt="" id="badge" />	
	<?php } else if($val == "Story"){?>
	<div id="section-image">
		<img src="<?php bloginfo('template_directory'); ?>/img/article-slide3.jpg" alt="" />
	</div>	
	<img src="<?php bloginfo('template_directory'); ?>/img/badge3.png" alt="" id="badge" />	
	<?php } else if($val == "Christian History and Thought"){?>
	<div id="section-image">
		<img src="<?php bloginfo('template_directory'); ?>/img/article-slide4.jpg" alt="" />
	</div>	
	<img src="<?php bloginfo('template_directory'); ?>/img/badge4.png" alt="" id="badge" />	
	<?php } else if($val == "Theology"){?>
	<div id="section-image">
		<img src="<?php bloginfo('template_directory'); ?>/img/article-slide5.jpg" alt="" />
	</div>	
	<img src="<?php bloginfo('template_directory'); ?>/img/badge5.png" alt="" id="badge" />	
	<?php } else {?>
	<div id="section-image">
		<img src="<?php bloginfo('template_directory'); ?>/img/article-slide6.jpg" alt="" />
	</div>	
	<img src="<?php bloginfo('template_directory'); ?>/img/badge6.png" alt="" id="badge" />	
	<?php };?>
</section><!-- e: splash -->
				
		

<section id="article-head" class="section">
	<span class="author">
		<?php the_author(); ?>
	</span>
	<a href="#" class="al1">Past Articles</a>
	<a href="#" class="al2">Like This</a>
	<a href="#" class="al3">Tweet This</a>
</section>



<section id="article" class="section">
	<article class="entry ar-entry">
	
		<?php the_content('Read the rest of this entry &raquo;'); ?>
	</article>
	
		
		<div class="navigation">
			<span class="alignleft"><?php previous_post('%', 'PREVIOUS', 'no'); ?></span>
			<span class="alignright"><?php next_post('%', 'NEXT', 'no'); ?></span>
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
