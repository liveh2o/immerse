<?php
/**
 * @package WordPress
 * @subpackage Theme
 */
/*
$ip = $_SERVER['REMOTE_ADDR'];
if($ip != "174.126.90.246"){
	die;
}*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/reset.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/plugins/tubepress/content/themes/immerse/style.css" type="text/css" media="screen" />
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php
      if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
      wp_head();
    ?>
<!-- site JS -->
<script type="text/javascript" src="http://fast.fonts.com/jsapi/71022b32-7d25-434b-a7f2-a581c625132a.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/scripts/plugins.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/scripts/script.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/scripts/paginator.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/scripts/jquery.nivo.slider.pack.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(window).load(function() {
        $('#slider').nivoSlider({
		effect:'fade', //Specify sets like: 'fold,fade,sliceDown'
		animSpeed:300, //Slide transition speed
		pauseTime:9000,
		directionNav:false, //Next and Prev
		controlNav:true, //1,2,3...
		startSlide:0 //Set starting Slide (0 index)
        });
      });
    </script>
</head>
<body>
<header id="head">
	<div id="header">
		<h1><a href="<?php bloginfo('url'); ?>">Immerse | A Journal of Faith, Life, and Youth Ministry</a></h1>
		<form action="<?php bloginfo('url'); ?>/">
			<p><input type="text" class="text" value="" name="s" />
			<input type="submit" class="submit" value="go" /></p>			
		</form>
		<ul id="social">
			<li><a href="/feed/" class="social1">RSS</a></li>
			<li><a href="http://twitter.com/immersejournal" class="social2">Twitter</a></li>
			<li><a href="http://www.youtube.com/immersejournal" class="social3">YouTube</a></li>
			<li><a href="http://www.facebook.com/#!/profile.php?id=100002211903019" class="social4">Facebook</a></li>
			<li><a href="http://vimeo.com/channels/181320" class="social5">Vimeo</a></li>
		</ul>
		<div id="nav">
			<?php wp_nav_menu( array('menu' => 'Main Menu' )); ?>
		</div>
	</div>
</header><!-- e: head -->
<div id="wrap" class="wrap">
  <img src="<?php bloginfo('template_directory'); ?>/img/barefoot-logo.png" alt="Barefoot Ministries" id="barefoot-logo" />
