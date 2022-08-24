<?php

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
register_nav_menus(
array('primary-menu'=>'Header Menu')

);
add_theme_support('post-thumbnails');
add_theme_support('custom-header');
add_theme_support('custom-background');
add_post_type_support('page','excerpt');
add_post_type_support('post','excerpt');

register_sidebar(
    array(
        'name'=> 'Sidebar Location',
        'id'=> 'sidebar'
    )
)

?>

