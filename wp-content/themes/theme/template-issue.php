<?php
/**
 * @package WordPress
 * @subpackage Theme
 * Template Name: Current Issue
 */

get_header();
include_once 'section-menu.php';
?>
    <h2 class="page-title"><?php the_title(); ?></h2>
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<div id="issue-wrap">
		<?php the_content('Read the rest of this entry &raquo;'); ?>
	</div>
	<?php endwhile; ?>
	<?php else : ?>
	<h2 class="center">Not Found</h2>
	<p class="center">Sorry, but you are looking for something that isn't here.</p>
	<?php get_search_form(); ?>
	<?php endif; ?>
<?php get_footer(); ?>
