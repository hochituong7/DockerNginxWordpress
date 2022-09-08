<?php

//add thumbnails post
add_theme_support('post-thumbnails', array(
    'post',
    'page',
    'custom-post-type-name',
    ));
//menu
function register_my_menu() {
    register_nav_menu('header-menu',__( 'Menu chính' ));
}
add_action( 'init', 'register_my_menu' );

//sidebar
if (function_exists('register_sidebar')){
    register_sidebar(array(
    'name'=> 'SiteBar Location',
    'id' => 'sidebar',
));
}

add_filter('use_block_editor_for_post', '__return_false');


//