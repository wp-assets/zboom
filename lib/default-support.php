<?php
function zboom_defult(){
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('slider');
	add_theme_support('custom-background');
	add_image_size( 'slider-thumb', 920, 285, true );
}
add_action('after_setup_theme', 'zboom_defult');

?>