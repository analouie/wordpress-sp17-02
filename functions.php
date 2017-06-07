<?php
/**
Theme Name: Demo
Theme URI: https://github.com/analouie/wordpress-sp17-02
Author: Analia Arredondo
Author URI: analiaarredondo.com
Description: Demo theme for WEB170 Spring 2017
Version: 42.0
*/

//Register My Nav
register_nav_menus(array('main-menu' =>__('Main Menu'),));

//Register My Sidebar
register_sidebar(array(
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
));
 
//register my menu
register_nav_menus(array(
    'main-menu' => __( 'Main' ),
));
 
//add post thumbnails
add_theme_support('post-thumbnails');
 
//create page excerpts
add_post_type_support( 'page', 'excerpt' );

//add a title
function get_my_title_tag(){    
    global $post;
    
    if(is_front_page()){
        bloginfo('description');
        }elseif(is_page() || is_single()){
            the_title();
        }else{
            bloginfo('description');
        }
        if($post->post_parent){
            echo ' | ';
            echo get_the_title($post->post_parent);
        }
    
    echo ' | ';
    bloginfo('name');
    echo ' | ';
    echo 'Nine Lives';
    }
 
?>
