<?php
remove_action('wp_head', 'wp_generator');
add_filter('show_admin_bar', '__return_false');
function new_excerpt_more( $more ) { return '...';}
add_filter('excerpt_more', 'new_excerpt_more');
add_theme_support( 'post-thumbnails' );
//-----------------Register Sidebars
register_sidebar( array(
	'name' => 'Sidebar',
	'id' => 'sidebar-1',
	'before_widget' => '<aside class="sidebar %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
) );
register_sidebar( array(
	'name' => 'Footer',
	'id' => 'sidebar-2'
) );
?>