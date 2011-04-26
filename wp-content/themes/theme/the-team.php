<section id="extra" class="section">
	<h4 id="team-title">The Team</h4>
	<ul id="team">
		
		<?php $f_loop = new WP_Query(); ?>
		<?php while ($f_loop->have_posts()) : $f_loop->the_post(); ?>	
			
		<li>
			<div class="my-info">
				
				<?php if ( has_post_thumbnail() ) {?>
				<?php the_post_thumbnail('type3'); ?>
				<?php };?>	
				<h5><?php the_title(); ?></h5>
				
				<?php $person_title = get_post_meta($post->ID, 'person_title', $single = true); ?>
				<strong><?php echo $person_title; ?></strong>
			</div>
			
			<div class="my-bio">
				<?php the_excerpt('Read the rest of this entry &raquo;'); ?>
			</div>
		</li>
		
		<?php endwhile; ?>
		
	</ul>
</section>	