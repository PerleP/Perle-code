<?php
//NE PAS fermer cette balise !!!
//ajoute la possibilité d'avoir une image à la une
add_theme_support( 'post-thumbnails' );
//Fonction "Lire la suite"
function excerpt_read_more_link($output) {
  global $post;
  return $output . '<a href="'. get_permalink($post->ID) . '">Je veux la lire la suite, moi...</a>';
}
add_filter('the_excerpt', 'excerpt_read_more_link');
//Création de menus
function register_my_menus() {
  register_nav_menus (
    array(
    'secondary-nav' => 'Secondary Menu',
     'third-nav' => 'Third Menu',
    )
  );
}

require_once('wp_bootstrap_navwalker.php');

add_action( 'init', 'register_my_menus' );

if ( function_exists('register_sidebar') ) {
  register_sidebar(array(
    'name' => 'Main Sidebar',
    'id' => 'main-sidebar',
    'description' => 'Displayed in my home',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="section">',
    'after_title' => '</h4>',
  ));
}

