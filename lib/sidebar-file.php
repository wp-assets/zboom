<?php

function zboom_custom_sidebar(){
    register_sidebar(array(
        'name' => 'Right Sidebar',    
        'description' => 'Right Sidebar Content here',    
        'id' => 'right-sidebar',    
        'before_widget' => '<div class="box">', 
        'after_widget' => '</div></div>', 
        'before_title' => '<div class="heading"><h2>',
        'after_title' => '</h2></div><div class="content">',
    ));
    register_sidebar(array(
        'name' => 'Footer Widgets',    
        'description' => 'Footer widgets Content here',    
        'id' => 'footer-widgets',    
        'before_widget' => '<div class="col-1-4"><div class="wrap-col"><div class="box">', 
        'after_widget' => '</div></div></div></div>', 
        'before_title' => '<div class="heading"><h2>',
        'after_title' => '</h2></div><div class="content">',
    ));
    register_sidebar(array(
        'name' => 'Contact Widgets',    
        'description' => 'Contact widgets Content here',    
        'id' => 'contact-widgets',    
        'before_widget' => '<div class="box">',
        'after_widget' => '</div></div>', 
        'before_title' => '<div class="heading"><h2>',
        'after_title' => '</h2></div><div class="content">',
    ));
    
}
add_action('widgets_init', 'zboom_custom_sidebar');
?>