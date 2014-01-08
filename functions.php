<?php
// Adiciona o tamanho de imagem GALERIA
if ( function_exists( 'add_image_size' ) ) { 
    add_image_size( 'galeria', 500, 500, true );
}


// Função do Carousel na Unha.
function load_caroufredsel() {
	$path_theme = get_bloginfo('stylesheet_directory');
    wp_register_script( 'caroufredsel', $path_theme . '/js/jquery.carouFredSel-6.2.1-packed.js', array( 'jquery' ), '6.2.1', true );
    wp_enqueue_script( 'caroufredsel_pre', $path_theme . '/js/caroufredsel_pre.js', array( 'caroufredsel' ), '', true );
    wp_enqueue_script( 'custom-hover', $path_theme . '/js/custom-hover.js');
}
add_action( 'wp_enqueue_scripts', 'load_caroufredsel' );


// Função para usar o Thickbox nativo do WP no tema Portfolio Brasa
function add_themescript(){
    if(!is_admin()){
    wp_enqueue_script('jquery');
    wp_enqueue_script('thickbox',null,array('jquery'));
    wp_enqueue_style('thickbox.css', '/'.WPINC.'/js/thickbox/thickbox.css', null, '1.0');
    }
}
add_action('init','add_themescript');

// Insere o CPT Portolio
require_once (get_stylesheet_directory() . '/extensions/portfolio-post-type/portfolio-post-type.php');

// Insere os metaboxes (MetaBrasa) no CPT Portolio
require_once (get_stylesheet_directory() . '/metaboxes-portfolio.php');

?>
