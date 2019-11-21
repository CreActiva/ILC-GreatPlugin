<?php
defined ('ABSPATH') or die ('¡No HACKS Man!');
/*Queues*/
function general_css_js() {
	$direction[0] = '/Great/public/css/bundle.css';
   $direction[1] = '/Great/public/js/bundle.js';
   /* JS BUNDLE */
   $handleJs = 'jQuery';
   //$srcJs = plugins_url().'/templates-great/templates/js/jquery-3.3.1.min.js';
   $srcJs = 'https://code.jquery.com/jquery-3.4.1.min.js';
   wp_register_script( $handleJs, $srcJs,array(),'3.3.1');

   $deps = array('jQuery');
   $handle = 'BundleJS';
 	$src = plugins_url().$direction[1];
   wp_register_script( $handle, $src, $deps, false, true );
   wp_enqueue_script( $handle );

   $handleJs = 'bootstrap-js';
   $srcJs = 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' ;
   wp_register_script( $handleJs, $srcJs,array('jquery','popper'), false, true); 
   wp_enqueue_script( $handleJs );  
   
	/* CSS BUNDLE */
   $handle = 'BundleCSS';
 	$src = plugins_url().$direction[0];
   wp_register_style($handle, $src);
   wp_enqueue_style( $handle );
	/* ========== */
}
/*======*/
add_filter( 'template_include', 'queues', 999 );
function queues( $template ) {
   if(is_page_template( '../view/great.php' )){
      /* Activar queue */
      add_action('wp_enqueue_scripts', 'general_css_js');
      general_css_js();
      /* ============= */
      /* Evitar el uso de jQuery Migrate */
      add_action( 'wp_default_scripts', 'dequeue_jquery_migrate' );
      function dequeue_jquery_migrate( $scripts ) {
         if ( ! is_admin() && ! empty( $scripts->registered['jquery'] ) ) {
             $scripts->registered['jquery']->deps = array_diff(
                 $scripts->registered['jquery']->deps,
                 [ 'jquery-migrate' ]
             );
         }
      }
      /* =============================== */
   }
   return $template;
}