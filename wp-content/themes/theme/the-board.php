<section id="extra" class="section">
	<h4 id="board-title">The Board</h4>
	<ul id="board">
		<?php $f_loop = new WP_Query('post_type=board&posts_per_page=-1'); ?>
		<?php while ($f_loop->have_posts()) : $f_loop->the_post(); ?>	
		<li>
			<?php if ( has_post_thumbnail() ) {?>
				<?php the_post_thumbnail('type4'); ?>
			<?php };?>
			<h5><?php the_title(); ?></h5>
			
			<?php $profession = get_post_meta($post->ID, 'profession', $single = true); ?>
			<?php $employer = get_post_meta($post->ID, 'employer', $single = true); ?>
			<?php $location = get_post_meta($post->ID, 'location', $single = true); ?>
			
			<p><?php echo $profession; ?></p>
			<p><?php echo $employer; ?></p>
			<p><?php echo $location; ?></p>
		</li>
		<?php endwhile; ?>
	</ul>
</section>	
