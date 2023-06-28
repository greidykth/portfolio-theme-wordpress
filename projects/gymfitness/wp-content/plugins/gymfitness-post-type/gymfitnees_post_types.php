<?php
/*
    Plugin Name: Gym Fitness - Post Types
    Plugin URI: 
    Description: Añade Post Types al sitio Gym Fitness
    Version: 1.0.0
    Author: Juan Pablo De la torre Valdez
    Author URI: http://twitter.com/JuanDevWP
    Text Domain: gymfitness
*/

if (!defined('ABSPATH')) die();

// Registrar Custom Post Type
function gymfitness_portfolio_post_type() {

	$labels = array(
		'name'                  => _x( 'Portfolio', 'Post Type General Name', 'gymfitness' ),
		'singular_name'         => _x( 'Portfolio', 'Post Type Singular Name', 'gymfitness' ),
		'menu_name'             => __( 'Portfolio', 'gymfitness' ),
		'name_admin_bar'        => __( 'Portafolio', 'gymfitness' ),
		'archives'              => __( 'Archives', 'gymfitness' ),
		'attributes'            => __( 'Attributes', 'gymfitness' ),
		'parent_item_colon'     => __( 'Project Parent', 'gymfitness' ),
		'all_items'             => __( 'All Projects', 'gymfitness' ),
		'add_new_item'          => __( 'Add New Project', 'gymfitness' ),
		'add_new'               => __( 'Add New Project', 'gymfitness' ),
		'new_item'              => __( 'New Project', 'gymfitness' ),
		'edit_item'             => __( 'Edit Project', 'gymfitness' ),
		'update_item'           => __( 'Update Project', 'gymfitness' ),
		'view_item'             => __( 'View Project', 'gymfitness' ),
		'view_items'            => __( 'View Portfolio', 'gymfitness' ),
		'search_items'          => __( 'Search Project', 'gymfitness' ),
		'not_found'             => __( 'Not Found', 'gymfitness' ),
		'not_found_in_trash'    => __( 'Not Found in Trash', 'gymfitness' ),
		'featured_image'        => __( 'Feature Image', 'gymfitness' ),
		'set_featured_image'    => __( 'Set Feature Image', 'gymfitness' ),
		'remove_featured_image' => __( 'Remove Featured Image', 'gymfitness' ),
		'use_featured_image'    => __( 'Use as Featured Image', 'gymfitness' ),
		'insert_into_item'      => __( 'Insert into Project', 'gymfitness' ),
		'uploaded_to_this_item' => __( 'Uploaded to Project', 'gymfitness' ),
		'items_list'            => __( 'List of Portfolio', 'gymfitness' ),
		'items_list_navigation' => __( 'Navigation Portfolio', 'gymfitness' ),
		'filter_items_list'     => __( 'Filter Portfolio', 'gymfitness' ),
	);
	$args = array(
		'label'                 => __( 'Portfolio', 'gymfitness' ),
		'description'           => __( 'Portfolio on Website', 'gymfitness' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => true, // true = posts , false = paginas
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'gymfitness_portfolio', $args );

}
add_action( 'init', 'gymfitness_portfolio_post_type', 0 );


// Register Custom Post Type
function gymfitness_instructores_post_type() {

	$labels = array(
		'name'                  => _x( 'Instructores', 'Post Type General Name', 'gymfitness' ),
		'singular_name'         => _x( 'Instructor', 'Post Type Singular Name', 'gymfitness' ),
		'menu_name'             => __( 'Instructores', 'gymfitness' ),
		'name_admin_bar'        => __( 'Instructor', 'gymfitness' ),
		'archives'              => __( 'Archivo', 'gymfitness' ),
		'attributes'            => __( 'Atributos', 'gymfitness' ),
		'parent_item_colon'     => __( 'Instructor Padre', 'gymfitness' ),
		'all_items'             => __( 'Todas Las Instructores', 'gymfitness' ),
		'add_new_item'          => __( 'Agregar Instructor', 'gymfitness' ),
		'add_new'               => __( 'Agregar Instructor', 'gymfitness' ),
		'new_item'              => __( 'Nueva Instructor', 'gymfitness' ),
		'edit_item'             => __( 'Editar Instructor', 'gymfitness' ),
		'update_item'           => __( 'Actualizar Instructor', 'gymfitness' ),
		'view_item'             => __( 'Ver Instructor', 'gymfitness' ),
		'view_items'            => __( 'Ver Instructores', 'gymfitness' ),
		'search_items'          => __( 'Buscar Instructor', 'gymfitness' ),
		'not_found'             => __( 'No Encontrado', 'gymfitness' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'gymfitness' ),
		'featured_image'        => __( 'Imagen Destacada', 'gymfitness' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'gymfitness' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'gymfitness' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'gymfitness' ),
		'insert_into_item'      => __( 'Insertar en Instructor', 'gymfitness' ),
		'uploaded_to_this_item' => __( 'Agregado en Instructor', 'gymfitness' ),
		'items_list'            => __( 'Lista de Instructores', 'gymfitness' ),
		'items_list_navigation' => __( 'Navegación de Instructores', 'gymfitness' ),
		'filter_items_list'     => __( 'Filtrar Instructores', 'gymfitness' ),
	);
	$args = array(
		'label'                 => __( 'Instructores', 'gymfitness' ),
		'description'           => __( 'Instructores para el Sitio Web', 'gymfitness' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 7,
		'menu_icon'             => 'dashicons-admin-users',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'instructores', $args );

}
add_action( 'init', 'gymfitness_instructores_post_type', 0 );

function gymfitness_testimoniales_post_type() {
	$labels = array(
		'name'                  => _x( 'Testimoniales', 'Post Type General Name', 'gymfitness' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'gymfitness' ),
		'menu_name'             => __( 'Testimoniales', 'gymfitness' ),
		'name_admin_bar'        => __( 'Testimonial', 'gymfitness' ),
		'archives'              => __( 'Archivo', 'gymfitness' ),
		'attributes'            => __( 'Atributos', 'gymfitness' ),
		'parent_item_colon'     => __( 'Testimonial Padre', 'gymfitness' ),
		'all_items'             => __( 'Todas Las Testimoniales', 'gymfitness' ),
		'add_new_item'          => __( 'Agregar Testimonial', 'gymfitness' ),
		'add_new'               => __( 'Agregar Testimonial', 'gymfitness' ),
		'new_item'              => __( 'Nueva Testimonial', 'gymfitness' ),
		'edit_item'             => __( 'Editar Testimonial', 'gymfitness' ),
		'update_item'           => __( 'Actualizar Testimonial', 'gymfitness' ),
		'view_item'             => __( 'Ver Testimonial', 'gymfitness' ),
		'view_items'            => __( 'Ver Testimoniales', 'gymfitness' ),
		'search_items'          => __( 'Buscar Testimonial', 'gymfitness' ),
		'not_found'             => __( 'No Encontrado', 'gymfitness' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'gymfitness' ),
		'featured_image'        => __( 'Imagen Destacada', 'gymfitness' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'gymfitness' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'gymfitness' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'gymfitness' ),
		'insert_into_item'      => __( 'Insertar en Testimonial', 'gymfitness' ),
		'uploaded_to_this_item' => __( 'Agregado en Testimonial', 'gymfitness' ),
		'items_list'            => __( 'Lista de Testimoniales', 'gymfitness' ),
		'items_list_navigation' => __( 'Navegación de Testimoniales', 'gymfitness' ),
		'filter_items_list'     => __( 'Filtrar Testimoniales', 'gymfitness' ),
	);
	$args = array(
		'label'                 => __( 'Testimoniales', 'gymfitness' ),
		'description'           => __( 'Testimoniales para el Sitio Web', 'gymfitness' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 8,
		'menu_icon'             => 'dashicons-editor-quote',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'testimoniales', $args );
}
add_action( 'init', 'gymfitness_testimoniales_post_type', 0 );