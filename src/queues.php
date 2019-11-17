<?php
defined ('ABSPATH') or die ('¡No HACKS Man!');
/*Queues*/
function general_css_js() {
	$direction[0] = '/Great/public/css/bundle.css';
   $direction[1] = '/Great/public/js/bundle.js';
   /* JS BUNDLE */
   $deps = array('jquery');
   $handle = 'BundleJS';
 	$src = plugins_url().$direction[1];
   wp_register_script( $handle, $src, $deps, false, true );
   wp_enqueue_script( $handle );

   $handleJs = 'bootstrap-js';
   $srcJs = 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' ;
   wp_register_script( $handleJs, $srcJs,$deps, false, true); 
   wp_enqueue_script( $handleJs );  
   
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
   if(is_page_template( '../view/great.php' )){
      /* Activar queue */
      add_action('wp_enqueue_scripts', 'general_css_js');
      general_css_js();

    //   /* Dequeue general */
    //   add_action('wp_enqueue_scripts','dequeue_default');
    //   function dequeue_default(){
    //      global $wp_styles;
    //      $wp_styles->queue = array('BundleCSS','admin-bar');
    //      global $wp_scripts;
    //      $wp_scripts->queue = array('BundleJS','admin-bar');
    //      Array ( [0] => dashicons [1] => admin-bar [2] => BundleCSS [3] => wplms_mycred )
    //   }
    //   /* Dequeue general */
      //   add_action('wp_enqueue_scripts', 'remove_default_styles');
      //   function remove_default_styles () {
      //     // get all styles data
      //     global $wp_styles;
      //     // loop over all of the registered scripts
      //     foreach ($wp_styles->registered as $handle => $data) {
      //        // remove it
      //        wp_deregister_style($handle);
      //        wp_dequeue_style($handle);
      //     }
      //     // https://gelwp.com/articles/removing-all-enqueued-and-default-css-scripts-in-wordpress/
      //     wp_dequeue_style( 'default-css' );
      //     wp_dequeue_script( 'default-js' );
      //    //  https://wplearner.org/faq/question/remove-javascript-css/
   //       $wp_styles->queue = array('BundleCSS','admin-bar');
   //       global $wp_scripts;
   //  //    $wp_scripts->queue = array('BundleJS','admin-bar');
      //  }

   }
   return $template;
}