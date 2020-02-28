<?php
//Register Style Css
function zboom_enquque_script(){
wp_register_style('zerogrid', get_template_directory_uri().'/css/zerogrid.css"');
wp_register_style('style', get_template_directory_uri().'/css/style.css');
wp_register_style('responsive', get_template_directory_uri().'/css/responsive.css');
wp_register_style('responsiveslides', get_template_directory_uri().'/css/responsiveslides.css');
wp_register_style('bootstrap', get_template_directory_uri().'/css/ootstrap.min.css');
wp_register_style('style_common', get_template_directory_uri().'/css/style_common.css');
wp_register_style('style10', get_template_directory_uri().'/css/style10.css');
wp_register_style('protfolio', get_template_directory_uri().'/css/protfolio.css');
wp_register_style('awesome', get_template_directory_uri().'/css/font-awesome.min.css');

wp_enqueue_style('zerogrid');
wp_enqueue_style('style');
wp_enqueue_style('responsive');
wp_enqueue_style('responsiveslides');
wp_enqueue_style('bootstrap');
wp_enqueue_style('style_common');
wp_enqueue_style('style10');
wp_enqueue_style('protfolio');
wp_enqueue_style('awesome');

//Register Jquery Script

wp_register_script('responsiveslides', get_template_directory_uri().'/js/responsiveslides.js', array('jquery'));
wp_register_script('main', get_template_directory_uri().'/js/main.js', array('jquery', 'responsiveslides'));
wp_register_script('mixitup', get_template_directory_uri().'/js/jquery.mixitup.min.js', array('jquery', ''));


wp_enqueue_script('jquery');
wp_enqueue_script('responsiveslides');
wp_enqueue_script('main');
wp_enqueue_script('mixitup');

};
add_action('wp_enqueue_scripts', 'zboom_enquque_script');

?>