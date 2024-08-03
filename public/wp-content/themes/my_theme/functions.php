<?php
/*
Add Styles and Scripts
*/

add_action(
  'wp_enqueue_scripts',
  'my_theme_scripts'
);



function my_theme_scripts()
{
  wp_enqueue_style('main', get_stylesheet_uri());
  wp_enqueue_style('modern-normalize', 'https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/1.1.0/modern-normalize.min.css', array('main'), null);
  wp_enqueue_style('my-theme-style', get_template_directory_uri() . '/css/main.css', array('modern-normalize'), null);
  wp_enqueue_script('my-script', get_template_directory_uri() . '/js/my-script.js', array(), true);
}
