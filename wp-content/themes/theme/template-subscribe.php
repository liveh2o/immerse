<?php
/**
 * @package WordPress
 * @subpackage Theme
 * Template Name: Subscribe
 */

get_header(); ?>
		
<?php include_once 'section-menu.php'; ?>
		
<hgroup id="subscribe-title">		
<h2 class="page-title"><?php the_title(); ?></h2>
<h3 class="subtitle">This is the definitive publication for adults who work in ministry with middle school, high school, or college students in the church or parachurch. Don't miss another issue.</h3>
</hgroup>


<section id="page" class="section">
	
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	
			
	<div class="entry subscribe" id="post-<?php the_ID(); ?>">
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
