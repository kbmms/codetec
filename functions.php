<?php
add_theme_support('post-thumbnails');


add_action( 'init', 'codex_tecnologia_init' );
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_tecnologia_init() {
	$labels = array(
		'name'               => _x( 'Tecnologias', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Tecnologia', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Tecnologias', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Tecnologia', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'book', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Tecnologia', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Tecnologia', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Tecnologia', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Tecnologia', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Tecnologias', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Tecnologias', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Tecnologias:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No books found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No books found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'tecnologias' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor',  'thumbnail' )
	);

	register_post_type( 'tecnologia', $args );
}
      add_action( 'init', 'create_taxonomy_tecnologia_category' );
      function create_taxonomy_tecnologia_category() {
          register_taxonomy( 'tecnologia_category', array( 'tecnologia' ), array(
              'hierarchical' => true,
              'label' => __( 'Categoria da Tecnologia' ),
              'show_ui' => true,
              'show_in_tag_cloud' => true,
              'query_var' => true,
              'rewrite' => true,
        )
    );
}

//add_action( 'wp_print_styles', 'ewp_film_styles' );
// 
//function ewp_film_styles() {
//  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
//  wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/css/owl.carousel.css' );
//  wp_enqueue_style( 'owl', get_template_directory_uri() . '/css/owl.theme.css' );
//  wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css');
//  wp_enqueue_style( 'principal', get_stylesheet_uri() );
// 
//}
//
//
//
//add_action( 'wp_enqueue_scripts', 'ewp_film_scripts' );
// 
//function ewp_film_scripts() {
//   if ( is_admin() ) return;  
//  wp_enqueue_script( 'jquery' );
//  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), 1.0, true );
//  wp_enqueue_script( 'owl', get_template_directory_uri() . '/js/owl.carousel.js', array( 'jquery' ), 1.0, true );
//  wp_enqueue_script( 'principal', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), 1.0, true );
// 
//}



?>
