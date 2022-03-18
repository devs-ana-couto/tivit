<?php

/*
 *
 * Post Types
 *
*/

// Posts
add_action( 'init', 'create_posts_taxonomies' );

function create_posts_taxonomies(){
	$labels = array(
		'name'              => __( 'Categorias (Tools)', ''),
		'singular_name'     => __( 'Categoria', ''),
		'add_new_item'      => __( 'Adicionar', ''),
		'new_item_name'     => __( 'Nova', ''),
		'edit_item'         => __( 'Editar', ''),
		'menu_name'         => __( 'Categorias de Tools', ''),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'areas-de-interesse-tools' ),
	);
	register_taxonomy( 'areas-de-interesse-tools', array( 'post' ), $args );


	$labels = array(
		'name'              => __( 'Tipos', ''),
		'singular_name'     => __( 'Tipo', ''),
		'add_new_item'      => __( 'Adicionar', ''),
		'new_item_name'     => __( 'Nova', ''),
		'edit_item'         => __( 'Editar', ''),
		'menu_name'         => __( 'Tipo de Post', ''),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'tipo-de-post' ),
	);
	register_taxonomy( 'tipo-de-post', array( 'post' ), $args );


}


// Cases
add_action( 'init', 'create_cases' );
function create_cases() {
	register_post_type( 'cases',
	    array(
	      	'labels' => array(
		        'name' => __( 'Cases', '' ),
		        'singular_name' => __( 'Cases', '' ),
				'add_new' => __( 'Adicionar Case', '' ),
				'add_new_item' => __( 'Adicionar Novo Case', '' ),
				'edit_item' => __( 'Editar Case', '' ),
				'new_item' => __( 'Novo Case', '' ),
			),
			'public' => true,
			'capability_type' => 'post',
			'menu_icon' => 'dashicons-awards',
			'has_archive' => true,
			'rewrite' => array('slug' => 'nossos-cases'),
			'supports' => array( 'title', 'editor', 'thumbnail')
		)
	);


	$labels = array(
		'name'              => __( 'Tags', ''),
		'singular_name'     => __( 'Tag', ''),
		'add_new_item'      => __( 'Adicionar Tag', ''),
		'new_item_name'     => __( 'Nova Tag', ''),
		'edit_item'         => __( 'Editar Tag', ''),
		'menu_name'         => __( 'Tags', ''),
	);

	$args = array(
		'hierarchical'      => false,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'tags-cases' ),
	);
	register_taxonomy( 'tags-cases', array( 'cases' ), $args );
}

// Clientes
add_action( 'init', 'create_clientes' );
function create_clientes() {
	register_post_type( 'clientes',
	    array(
	      	'labels' => array(
		        'name' => __( 'Clientes', '' ),
		        'singular_name' => __( 'Cliente', '' ),
				'add_new' => __( 'Adicionar Cliente', '' ),
				'add_new_item' => __( 'Adicionar Novo Cliente', '' ),
				'edit_item' => __( 'Editar Cliente', '' ),
				'new_item' => __( 'Novo Cliente', '' ),
			),
			'public' => true,
			'capability_type' => 'post',
			'menu_icon' => 'dashicons-smiley',
			'has_archive' => false,
			'rewrite' => array('slug' => 'clientes'),
			'supports' => array( 'title', 'thumbnail')
		)
	);
}