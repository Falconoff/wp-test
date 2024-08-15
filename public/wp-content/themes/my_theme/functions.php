<?php

if (!function_exists('my_theme_setup')) {
  function my_theme_setup()
  {
    // возможность загрузить картинку логотипа в админке
    add_theme_support('custom-logo', [
      'height'      => 75,
      'width'       => 360,
      'flex-width'  => false,
      'flex-height' => false,
      'header-text' => '',
    ]);

    // Делаем заголовок сайта <title> динамическим
    add_theme_support('title-tag');
  };

  // когда ВП настраивает тему, мы подсовываем ему свою тему
  add_action('after_setup_theme', 'my_theme_setup');
};


/*
Add Styles and Scripts - Подключаем стили и скрипты
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

// ======= MENU ===============

// Регистрируем сразу несколько областей меню
function my_theme_menus()
{
  // собираем несколько зон (областей) меню
  $locations = array(
    'header' => __('Header Menu', 'my_theme'),
    'footer' => __('Footer Menu', 'my_theme'),
  );
  // регистрируем области меню, которые лежат в переменной $locations
  register_nav_menus($locations);
}
//  хук-событие - регистрируем наше меню во время инициализации темы WordPress-ом
// В "Консоли" - "Внешний вид" появилась вкладка "Меню"
add_action('init', 'my_theme_menus');


//  Добавляем класс categories-nav__item ко всем пунктам меню - элементам <li>
add_filter('nav_menu_css_class', 'custom_nav_menu_css_class', 10, 1);

function custom_nav_menu_css_class($classes)
{
  // добавляем к каждому элементу массива классов меню свой класс categories-nav__item
  $classes[] = 'categories-nav__item';
  //  возвращаем обновленный список классов
  return $classes;
}

// Добавляем класс category__link ко всем ссылкам внутри элементов списка <li> 
add_filter('nav_menu_link_attributes', 'custom_nav_menu_link_attributes', 10);
function custom_nav_menu_link_attributes($atts)
{
  $atts['class'] = 'category__link';
  return $atts;
}
