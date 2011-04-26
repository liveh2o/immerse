<?php
/**
 * @package WordPress
 * @subpackage Theme
 */

get_header(); ?>

<?php include_once 'section-menu.php'; ?>

<h2 class="page-title">Supplements</h2>


<div id="supplements">
	
	<ul class="supplements">
	
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	
		<li>
			
			<?php $v_link = get_post_meta($post->ID, 'video', $single = true); ?>
			
			<?php if($v_link != ""){?>
			<div class="sup-feature">
			<?php echo $v_link; ?>
			</div>
			
			<?php } else {?>
			
			<?php if ( has_post_thumbnail() ) {?>
			
			<div class="sup-feature">
			<?php the_post_thumbnail('type2'); ?>
			</div>		
			
			<?php };?>	
			
			<?php };?>	
			
			<h3><?php the_title(); ?></h3>
			<p><strong>By <?php the_author(); ?></strong></p>
			
			<?php $d_link = get_post_meta($post->ID, 'download_link', $single = true); ?>			
			<?php if($d_link != ""){?>
			<a href="<?php echo $d_link; ?>" class="download-this">Download a PDF</a>
			<?php }; ?>
		</li>

	<?php endwhile; ?>
	
	</ul>
	
	<div class="navigation">
		<div class="alignleft"><?php next_posts_link('Previous') ?></div>
		<div class="alignright"><?php previous_posts_link('Next') ?></div>
	</div>

	<?php else : ?>

	<h2 class="center">Not Found</h2>
	<p class="center">Sorry, but you are looking for something that isn't here.</p>
	<?php get_search_form(); ?>

	<?php endif; ?>


	
</div>
			
	

<?php get_footer(); ?>
