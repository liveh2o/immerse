<?php
/**
 * @package WordPress
 * @subpackage Theme
 */


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
    if( is_archive() ){
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
