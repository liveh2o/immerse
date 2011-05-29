<?php
/**
* @package WordPress
* @subpackage Theme
*/

function uri_segments($n) {
	$segments = explode('/', $_SERVER['REQUEST_URI']);
	return $segments[$n];
}

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

function footer_ad_space() {
  $ad_map = array(
    'church' => 5,
    'arts-and-culture' => 7,
    'story' => 9,
    'christian-history-and-thought' => 11,
    'theology' => 13,
    'spiritual-formation' => 15,
    'current-issue' => 16,
    'about-us' => 17,
    'supplement' => 18,
    'immerseblog' => 19,
    'videoblog' => 20,
    'subscribe' => 21,
    'immersemobile' => 22
  );
  $slug = uri_segments(1);
  $group = ($slug == '') ? 2 : $ad_map[$slug];
  return adrotate_group($group);
}

function get_sections() {
  return array('church','arts-and-culture','story','christian-history-and-thought','theology','spiritual-formation');
}

function past_articles() {
  $past_articles = new WP_Query('category_name='.uri_segments(1).'&posts_per_page=6'); 
  if ($past_articles->have_posts()) {
    $str = '<ul>';
	  while ($past_articles->have_posts()) {
	    $past_articles->the_post();
      $str .= '<li><a href="' . get_permalink() . '" title="' . get_the_title() . '">';
      $str .= get_the_post_thumbnail();
      $str .= "<h4>" . get_the_title() . "</h4>";
      $str .= "<cite>" . get_the_author() . "<br/>";
      $str .= get_the_date() . "</cite></a></li>";
	  }
	  $str .= '</ul>';
    echo $str;
  }
}

function latest_articles() {
  foreach (get_sections() as $section) {
    query_posts('category_name='.$section); 
    if (have_posts()) : the_post();
      if (class_exists('MultiPostThumbnails')
        && MultiPostThumbnails::has_post_thumbnail('post', 'secondary-image')) {
        echo "<a href=\"" . get_permalink() . "\">". MultiPostThumbnails::get_the_post_thumbnail('post', 'secondary-image', NULL, 'fullsize') ."</a>";
      }
      $url = null;
    endif;
  }
}

function the_styles() {
  $template_url = get_bloginfo('template_directory');
  wp_enqueue_style('styles', $template_url . '/reset.css');
  wp_enqueue_style('styles', $template_url . '/styles.css');
  wp_enqueue_style('styles', WP_PLUGIN_URL . '/tubepress/content/themes/styles.css');
}
//add_action( 'wp_print_styles', 'the_styles' );

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
add_action( 'template_redirect', 'redirect_to_post' );

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 79, 100, true );

if (class_exists('MultiPostThumbnails')) {
    new MultiPostThumbnails(array(
    'label' => 'Homepage Image',
    'id' => 'secondary-image',
    'post_type' => 'post'
    ));
}

if (function_exists('register_sidebar')) {

	register_sidebar(array(
		'name' => 'Blog Sidebar',
		'id'   => 'blog_sidebar',
		'description'   => 'This is the widgetized sidebar.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));
	register_sidebar(array(
		'name' => 'Below Blog',
		'id'   => 'below_blog',
		'description'   => 'This is the widgetized sidebar.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));
}

?>
