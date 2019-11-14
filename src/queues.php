<?php
/*Queues*/
function general_css_js() {
	$direction[0] = '/Great/public/css/bundle.css';
	$direction[1] = '/Great/public/css/bundle.js';
	/* JS BUNDLE */
   $handle = 'BundleJS';
 	$src = plugins_url().$direction[1];
   wp_register_script( $handle, $src);
   wp_enqueue_script( $handle );
	/* ========== */
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
   if(is_page_template( 'great/view/great.php' )){
   	/* Activar queue */
      add_action('wp_enqueue_scripts','general_css_js');
      general_css_js();
   	/* ============= */
      /* Dequeue general */
      vadd_action('wp_enqueue_scripts','dequeue_default');
      function dequeue_default(){
         global $wp_styles;
         $wp_styles->queue = array('BundleJS');
         global $wp_scripts;
         $wp_scripts->queue = array('BundleCSS');
      }
      /* =============== */
   }
   return $template;
}