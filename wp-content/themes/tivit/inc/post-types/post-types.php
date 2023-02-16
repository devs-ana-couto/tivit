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
		'name'              =>'Categorias (Cases)',
		'singular_name'     =>'Categoria',
		'add_new_item'      =>'Adicionar',
		'new_item_name'     =>'Nova',
		'edit_item'         =>'Editar',
		'menu_name'         =>'Categorias de Cases',
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
		'name'              =>'Tipos',
		'singular_name'     =>'Tipo',
		'add_new_item'      =>'Adicionar',
		'new_item_name'     =>'Nova',
		'edit_item'         =>'Editar',
		'menu_name'         =>'Tipo de Post',
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
		'name'              =>'Por serviços',
		'singular_name'     =>'Por serviço',
		'add_new_item'      =>'Adicionar',
		'new_item_name'     =>'Nova',
		'edit_item'         =>'Editar',
		'menu_name'         =>'Por serviços',
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
		'name'              =>'Por indústrias',
		'singular_name'     =>'Por indústria',
		'add_new_item'      =>'Adicionar',
		'new_item_name'     =>'Nova',
		'edit_item'         =>'Editar',
		'menu_name'         =>'Por indústrias',
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
		'name'              =>'Por desafios',
		'singular_name'     =>'Por desafio',
		'add_new_item'      =>'Adicionar',
		'new_item_name'     =>'Nova',
		'edit_item'         =>'Editar',
		'menu_name'         =>'Por desafios',
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
		'name'              =>'Categorias',
		'singular_name'     =>'Categoria',
		'add_new_item'      =>'Adicionar',
		'new_item_name'     =>'Nova',
		'edit_item'         =>'Editar',
		'menu_name'         =>'Categorias',
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
		        'name' =>'Cases',
		        'singular_name' =>'Cases',
				'add_new' =>'Adicionar Case',
				'add_new_item' =>'Adicionar Novo Case',
				'edit_item' =>'Editar Case',
				'new_item' =>'Novo Case',
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
		'name'              =>'Tags',
		'singular_name'     =>'Tag',
		'add_new_item'      =>'Adicionar Tag',
		'new_item_name'     =>'Nova Tag',
		'edit_item'         =>'Editar Tag',
		'menu_name'         =>'Tags',
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
		        'name' =>'Clientes',
		        'singular_name' =>'Cliente',
				'add_new' =>'Adicionar Cliente',
				'add_new_item' =>'Adicionar Novo Cliente',
				'edit_item' =>'Editar Cliente',
				'new_item' =>'Novo Cliente',
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
		        'name' =>'Solucões',
		        'singular_name' =>'Solução',
				'add_new' =>'Adicionar Solução',
				'add_new_item' =>'Adicionar Nova Solução',
				'edit_item' =>'Editar Solução',
				'new_item' =>'Nova Solução',
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
		        'name' =>'FAQs',
		        'singular_name' =>'FAQ',
				'add_new' =>'Adicionar FAQ',
				'add_new_item' =>'Adicionar Nova FAQ',
				'edit_item' =>'Editar FAQ',
				'new_item' =>'Nova FAQ',
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
		        'name' =>'Vagas',
		        'singular_name' =>'Vaga',
				'add_new' =>'Adicionar Vaga',
				'add_new_item' =>'Adicionar Nova Vaga',
				'edit_item' =>'Editar Vaga',
				'new_item' =>'Nova Vaga',
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


// Equipe
add_action( 'init', 'create_equipe' );
function create_equipe() {
	register_post_type( 'equipe',
	    array(
	      	'labels' => array(
		        'name' =>'Equipe',
		        'singular_name' =>'Equipe',
				'add_new' =>'Adicionar Equipe',
				'add_new_item' =>'Adicionar Nova Equipe',
				'edit_item' =>'Editar Equipe',
				'new_item' =>'Nova Equipe',
			),
			'public' => true,
			'capability_type' => 'post',
			'menu_icon' => 'dashicons-buddicons-buddypress-logo',
			'has_archive' => false,
			'rewrite' => array('slug' => 'equipe'),
	        'supports' => array('title'),
		)
	);
}

// Landings
add_action( 'init', 'create_lp' );
function create_lp() {
	register_post_type( 'lp',
	    array(
	      	'labels' => array(
		        'name' =>'Landings',
		        'singular_name' =>'Landing',
				'add_new' =>'Adicionar Landing',
				'add_new_item' =>'Adicionar Nova Landing',
				'edit_item' =>'Editar Landing',
				'new_item' =>'Nova Landing',
			),
			'public' => true,
			'capability_type' => 'post',
			'menu_icon' => 'dashicons-awards',
			'has_archive' => true,
			'rewrite' => array('slug' => 'landing'),
			'supports' => array( 'title', 'thumbnail')
		)
	);


	$labels = array(
		'name'              =>'Tags',
		'singular_name'     =>'Tag',
		'add_new_item'      =>'Adicionar Tag',
		'new_item_name'     =>'Nova Tag',
		'edit_item'         =>'Editar Tag',
		'menu_name'         =>'Tags',
	);

	$args = array(
		'hierarchical'      => false,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'tags-landings' ),
	);
	register_taxonomy( 'tags-landings', array( 'landings' ), $args );
}

// Projetos
add_action( 'init', 'create_projetos' );
function create_projetos() {
	register_post_type( 'projetos',
	    array(
	      	'labels' => array(
		        'name' =>'Projetos',
		        'singular_name' =>'Projeto',
				'add_new' =>'Adicionar Projeto',
				'add_new_item' =>'Adicionar Novo Projeto',
				'edit_item' =>'Editar Projeto',
				'new_item' =>'Nova Projeto',
			),
			'public' => true,
			'capability_type' => 'post',
			'menu_icon' => 'dashicons-universal-access',
			'has_archive' => true,
			'rewrite' => array('slug' => 'projeto-esg'),
			'supports' => array( 'title', 'editor', 'thumbnail'),
			'taxonomies' => array('categorias-esg'),
		)
	);

	$labels = array(
		'name'              =>'Categorias Projetos ESG',
		'singular_name'     =>'Categoria Projetos ESG',
		'add_new_item'      =>'Adicionar categoria',
		'new_item_name'     =>'Nova categoria',
		'edit_item'         =>'Editar categoria',
		'menu_name'         =>'Categorias Projetos ESG',
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'categorias-esg' ),
	);
	register_taxonomy( 'categorias-esg', array( 'projetos' ), $args );
}

// Rodape
add_action( 'init', 'create_rodape' );
function create_rodape() {
	register_post_type( 'rodape',
	    array(
	      	'labels' => array(
		        'name' =>'Rodapé',
		        'singular_name' =>'Rodapé',
				'add_new' =>'Adicionar Rodapé',
				'add_new_item' =>'Adicionar Novo Rodapé',
				'edit_item' =>'Editar Rodapé',
				'new_item' =>'Novo Rodapé',
			),
			'public' => true,
			'capability_type' => 'post',
			'menu_icon' => 'dashicons-align-full-width',
			'has_archive' => true,
			'rewrite' => array('slug' => 'vm50-rodape'),
			'supports' => array( 'title', 'thumbnail'),
		)
	);
}
