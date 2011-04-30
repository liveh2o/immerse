<?php
/**
* @package WordPress
* @subpackage Theme
*/

function the_vimeo( $post_id, $width = 400, $height = 225, $html_options = '' ) {
  $url = get_post_meta($post_id, 'vimeo_url', true);
  if ( $url ) {
    $return = "<iframe src=\"$url\" width=\"$width\" height=\"$height\"";
    if ( $html_options != '' ) {
      $return .= $html_options;
    }
    $return .= "></iframe>";
    echo $return;
  }
}

function get_sections() {
  return array('church','arts-and-culture','story','christian-history-and-thought','theology','spiritual-formation');
}

function latest_articles() {
  foreach (get_sections() as $section) {
    query_posts('category_name='.$section); 
    if (have_posts()) {
      the_post();
      $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'slider' );
      if ($thumb) {
        echo "<a href=\"" . get_permalink() . "\"><img src=\"{$thumb[0]}\" /></a>";
      }
      $thumb = null;
    } 
  }
}

function register_my_menus() {
	register_nav_menus(
		array(
			'first-menu' => __( 'Main Menu' ),
			'second-menu' => __( 'Foot Menu' )
		)
	);
}
add_action( 'init', 'register_my_menus' );

function redirect_to_post(){
    global $wp_query;
    if( is_category(get_sections()) ){
        the_post();
        $post_url = get_permalink();
        wp_redirect( $post_url );
    }
}
add_action('template_redirect', 'redirect_to_post');


add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 144, 130, true );  
add_image_size( 'type1', 792, 275, true ); 
add_image_size( 'type2', 272, 171, true ); 
add_image_size( 'type3', 113, 134, true ); 
add_image_size( 'type4', 90, 119, true );
add_image_size( 'slider', 582, 291, true ); 

?>
