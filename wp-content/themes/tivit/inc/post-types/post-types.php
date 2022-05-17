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
	register_taxonomy( 'areas-de-interesse-tools', array( 'cases' ), $args );


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
	register_taxonomy( 'tipo-de-post', array( 'cases' ), $args );


	$labels = array(
		'name'              => __( 'Por serviços', ''),
		'singular_name'     => __( 'Por serviço', ''),
		'add_new_item'      => __( 'Adicionar', ''),
		'new_item_name'     => __( 'Nova', ''),
		'edit_item'         => __( 'Editar', ''),
		'menu_name'         => __( 'Por serviços', ''),
	);
	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'por-servico' ),
	);
	register_taxonomy( 'por-servico', array( 'solucoes' ), $args );


	$labels = array(
		'name'              => __( 'Por indústrias', ''),
		'singular_name'     => __( 'Por indústria', ''),
		'add_new_item'      => __( 'Adicionar', ''),
		'new_item_name'     => __( 'Nova', ''),
		'edit_item'         => __( 'Editar', ''),
		'menu_name'         => __( 'Por indústrias', ''),
	);
	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'por-industria' ),
	);
	register_taxonomy( 'por-industria', array( 'solucoes' ), $args );


	$labels = array(
		'name'              => __( 'Por desafios', ''),
		'singular_name'     => __( 'Por desafio', ''),
		'add_new_item'      => __( 'Adicionar', ''),
		'new_item_name'     => __( 'Nova', ''),
		'edit_item'         => __( 'Editar', ''),
		'menu_name'         => __( 'Por desafios', ''),
	);
	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'por-desafio' ),
	);
	register_taxonomy( 'por-desafio', array( 'solucoes' ), $args );


	$labels = array(
		'name'              => __( 'Categorias', ''),
		'singular_name'     => __( 'Categoria', ''),
		'add_new_item'      => __( 'Adicionar', ''),
		'new_item_name'     => __( 'Nova', ''),
		'edit_item'         => __( 'Editar', ''),
		'menu_name'         => __( 'Categorias', ''),
	);
	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'tipo-faq' ),
	);
	register_taxonomy( 'tipo-faq', array( 'faq' ), $args );


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
			'supports' => array( 'title', 'thumbnail')
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

// Soluções
add_action( 'init', 'create_solucoes' );
function create_solucoes() {
	register_post_type( 'solucoes',
	    array(
	      	'labels' => array(
		        'name' => __( 'Solucões', '' ),
		        'singular_name' => __( 'Solução', '' ),
				'add_new' => __( 'Adicionar Solução', '' ),
				'add_new_item' => __( 'Adicionar Nova Solução', '' ),
				'edit_item' => __( 'Editar Solução', '' ),
				'new_item' => __( 'Nova Solução', '' ),
			),
			'public' => true,
			'capability_type' => 'post',
			'menu_icon' => 'dashicons-forms',
			'has_archive' => false,
			'rewrite' => array('slug' => 'solucoes'),
			'supports' => array( 'title', 'thumbnail'),
			// 'taxonomies' => array('category')
		)
	);
}


// Faq
add_action( 'init', 'create_faq' );
function create_faq() {
	register_post_type( 'faq',
	    array(
	      	'labels' => array(
		        'name' => __( 'FAQs', '' ),
		        'singular_name' => __( 'FAQ', '' ),
				'add_new' => __( 'Adicionar FAQ', '' ),
				'add_new_item' => __( 'Adicionar Nova FAQ', '' ),
				'edit_item' => __( 'Editar FAQ', '' ),
				'new_item' => __( 'Nova FAQ', '' ),
			),
			'public' => true,
			'capability_type' => 'post',
			'menu_icon' => 'dashicons-paperclip',
			'has_archive' => false,
			'rewrite' => array('slug' => 'faq'),
	        'supports' => array('title','editor'),
			'taxonomies' => array('tipos-faq')
		)
	);
}


// Vagas
add_action( 'init', 'create_vaga' );
function create_vaga() {
	register_post_type( 'vaga',
	    array(
	      	'labels' => array(
		        'name' => __( 'Vagas', '' ),
		        'singular_name' => __( 'Vaga', '' ),
				'add_new' => __( 'Adicionar Vaga', '' ),
				'add_new_item' => __( 'Adicionar Nova Vaga', '' ),
				'edit_item' => __( 'Editar Vaga', '' ),
				'new_item' => __( 'Nova Vaga', '' ),
			),
			'public' => true,
			'capability_type' => 'post',
			'menu_icon' => 'dashicons-megaphone',
			'has_archive' => false,
			'rewrite' => array('slug' => 'vaga'),
	        'supports' => array('title','editor'),
		)
	);
}
