<?php
function campaign_theme_support() {
	add_theme_support( 'post-formats', array( 'gallery', 'link', 'image', 'video' ) );
	add_post_type_support( 'post', 'post-formats' );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'circle', 200, 200, true );   
	register_nav_menus(                      
		array( 
			'main_nav' => 'The Main Menu',   
		)
	);	
}

// Initiate Theme Support
add_action('after_setup_theme','campaign_theme_support');

function add_campaign_categories() {
		wp_insert_term('Prepare', 'category',  array('description'=> '','slug' => 'prepare'));
		wp_insert_term('Inspire', 'category',  array('description'=> '','slug' => 'inspire'));
		wp_insert_term('Discover', 'category',  array('description'=> '','slug' => 'discover'));
		wp_insert_term('Create', 'category',  array('description'=> '','slug' => 'create'));
	}
add_action('init', 'add_campaign_categories');

class PTCFP{

  function __construct(){

    add_action( 'init', array( $this, 'taxonomies_for_pages' ) );
  } // __construct

  function taxonomies_for_pages() {
      register_taxonomy_for_object_type( 'post_tag', 'page' );
      register_taxonomy_for_object_type( 'category', 'page' );
  } // taxonomies_for_pages



} // PTCFP

$ptcfp = new PTCFP();

function delete_campaign_transients($post_id) {
	global $post;
	if (isset($_GET['post_type'])) {		
		$post_type = $_GET['post_type'];
	}
	else {
		$post_type = $post->post_type;
	}
	switch($post_type) {
		case 'post' :
			delete_transient('campaign_home_query');
			delete_transient('campaign_inspirequery'); 
			delete_transient('campaign_preparequery');
			delete_transient('campaign_discoverquery');
			delete_transient('campaign_createquery');
			delete_transient('campaign_inspiresidebar_query'); 
			delete_transient('campaign_preparesidebar_query');
			delete_transient('campaign_discoversidebar_query');
			delete_transient('campaign_createsidebar_query');		
		break;
	}
} 
add_action('save_post','delete_campaign_transients');
