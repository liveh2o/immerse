<?php
	
	global $post;
		
	// get options
	$options = $this->get_acf_options($post->ID);
	
	// create temp field from creating inputs
	$temp_field = new stdClass();
?>

<input type="hidden" name="options_meta_box" value="true" />
<input type="hidden" name="ei_noncename" id="ei_noncename" value="<?php echo wp_create_nonce('ei-n'); ?>" />

<table class="acf_input" id="acf_options">
	<tr>
		<td class="label">
			<label for="post_type"><?php _e("Show on page",'acf'); ?></label>
		</td>
		<td>
			<?php 
			
			$temp_field->type = 'checkbox';
			$temp_field->input_name = 'acf[options][show_on_page]';
			$temp_field->input_class = '';
			$temp_field->input_id = 'show_on_page';
			$temp_field->value = $options->show_on_page;
			$temp_field->options = array(
				'choices' => array(
					'the_content'	=>	'Content Editor',
					'custom_fields'	=>	'Custom Fields',
					'discussion'	=>	'Discussion',
					'comments'		=>	'Comments',
					'slug'			=>	'Slug',
					'author'		=>	'Author'
				)
			);
			
			$this->create_field($temp_field); 
			
			?>
			
			<p class="description"><?php _e("Select the metaboxes you wish to keep on your edit screen.<br />
			Tip: This is useful to customise the edit screen",'acf'); ?></p>
		</td>
	</tr>
	<tr>
		<td class="label">
			<label for="post_type"><?php _e("Filter Users",'acf'); ?></label>
		</td>
		<td>
			<?php 
			
			$temp_field->type = 'select';
			$temp_field->input_name = 'acf[options][user_roles]';
			$temp_field->input_class = '';
			$temp_field->input_id = 'user_roles';
			$temp_field->value = $options->user_roles;
			$temp_field->options = array(
				'multiple' => '1',
				'choices' => array(
					'10' => 'Administrator', 
					'7' => 'Editor', 
					'4' => 'Author', 
					'1' => 'contributor'
				) 
			);
			
			$this->create_field($temp_field); 
			
			?>
			<p class="description"><?php _e("Select user types to give them access to this ACF<br />
			Tip: If no user types are selected, all user's will have access to this ACF",'acf'); ?></p>
		</td>
	</tr>
	
</table>