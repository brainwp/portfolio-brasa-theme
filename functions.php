<?php
// Adiciona o tamanho de imagem GALERIA
if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'galeria', 500, 500, true );
}


// Fun��o do Carousel na Unha.
function load_caroufredsel() {
	$path_theme = get_bloginfo('stylesheet_directory');
    wp_register_script( 'caroufredsel', $path_theme . '/js/jquery.carouFredSel-6.2.1-packed.js', array( 'jquery' ), '6.2.1', true );
    wp_enqueue_script( 'caroufredsel_pre', $path_theme . '/js/caroufredsel_pre.js', array( 'caroufredsel' ), '', true );
    wp_enqueue_script( 'custom-hover', $path_theme . '/js/custom-hover.js');
}
add_action( 'wp_enqueue_scripts', 'load_caroufredsel' );


// Fun��o para usar o Thickbox nativo do WP no tema Portfolio Brasa
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
function google_analytics_tracking_code(){

	?>

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-40375752-1', 'auto');
		  ga('send', 'pageview');

		</script>

		<?php
}

// include GA tracking code before the closing head tag
add_action('wp_head', 'google_analytics_tracking_code');
?>
