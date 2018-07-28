<?php 
add_action( "wp_enqueue_scripts", "css" );
function css(){
	wp_enqueue_style( "bootstrap1",get_template_directory_uri().'/css/bootstrap.min.css' );
wp_enqueue_style( "style1",get_template_directory_uri().'/style.css' );
}

add_action( "wp_enqueue_scripts", "js" );
function js(){
	wp_enqueue_style( "bootstrapjs",get_template_directory_uri().'/js/bootstrap.min.js',array('jquery') );
}


add_action( "widgets_init", "save_widget" );
function save_widget(){
  register_sidebar( array( 'id'=>'zone1',  'name'=>'zone 1','description'=>'zone gauche' ) );
}

add_action( "init", "mon_menu" );
function mon_menu(){
  register_nav_menu( "mon_menu", 'mon menu haut' );
  }
 ?>
