<?php
/*
 *
 * Options Page
 *
*/ 
if( function_exists('acf_add_options_page') ) {	
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Options',
		'menu_title'	=> 'Theme Options',
		'menu_slug' 	=> 'theme-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Redes Sociais',
		'menu_title'	=> 'Redes Sociais',
		'parent_slug'	=> 'theme-options',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'MailChimp',
		'menu_title'	=> 'MailChimp',
		'parent_slug'	=> 'theme-options',
	));		
}