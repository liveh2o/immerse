<?php
/**
 * @package WordPress
 * @subpackage Theme
 */

get_header();
		
include_once 'section-menu.php'; ?>

<h2 class="page-title">Search Results</h2>
<section id="page" class="section search">
    <h3><?php echo $wp_query->found_posts; ?> results for "<?php the_search_query() ?>"</h3>

	<?php while (have_posts()) : the_post(); ?>
	<div class="entry is-post" id="post-<?php the_ID(); ?>">
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<p><?php relevanssi_the_excerpt(); ?></p>
        <?php if (get_the_category()) { ?>
        <p><em>From <?php the_category(' '); ?></em></p>
        <?php } ?>
	</div>
	<?php endwhile; ?>

    <div class="navigation">
        <div class="alignleft"><?php previous_posts_link('PREVIOUS') ?></div>
        <div class="alignright"><?php next_posts_link('NEXT') ?></div>
    </div>

</section>	

<?php get_footer(); ?>
