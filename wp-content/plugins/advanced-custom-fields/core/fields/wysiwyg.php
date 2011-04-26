<?php

class Wysiwyg
{
	var $name;
	var $title;
	
	function Wysiwyg()
	{
		$this->name = 'wysiwyg';
		$this->title = __("Wysiwyg Editor",'acf');
	}
	
	function html($field)
	{
		echo '<div class="acf_wysiwyg"><textarea name="'.$field->input_name.'" >';
		echo wp_richedit_pre($field->value);
		echo '</textarea></div>';
	}
	
	function format_value_for_api($value)
	{
		$value = apply_filters('the_content',$value); 
		return $value;
	}
}

?>