<?php
function besttheme_script_enqueue(){
	wp_enqueue_style('customstyle',get_template_directory().'/css/besttheme.css',array(),'1.0.0','all');
	wp_enqueue_script('customjs',get_template_directory().'/js/besttheme.js',array(),'1.0.0','true');
}
add_action('wp_enqueue_scripts','besttheme_script_enqueue');

function besttheme_theme_setup(){
	add_theme_support('menus');
	register_nav_menu('primary','Primary Header Navigation');
		register_nav_menu('secondary','Footer Navigation');
}
add_action('init','besttheme_theme_setup');
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats',array('aside','image','video'));