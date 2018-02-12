<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
add_theme_support( 'post-thumbnails' );

add_action('init', 'my_custom_init');
function my_custom_init()
{
  register_post_type(
  'projet',
  array(
    'label' => 'Projets',
    'labels' => array(
      'name' => 'Projets',
      'singular_name' => 'Projet',
      'all_items' => 'Tous les projets',
      'add_new_item' => 'Ajouter un projet',
      'edit_item' => 'Éditer le projet',
      'new_item' => 'Nouveau projet',
      'view_item' => 'Voir le projet',
      'search_items' => 'Rechercher parmi les projets',
      'not_found' => 'Pas de projet trouvé',
      'not_found_in_trash'=> 'Pas de projet dans la corbeille'
      ),
    'public' => true,
    'capability_type' => 'post',
    'supports' => array(
      'title',
      'editor',
      'thumbnail'
    ),
    'has_archive' => true
  )
);
/* notre code PHP pour rajouter les custom post type */
}
