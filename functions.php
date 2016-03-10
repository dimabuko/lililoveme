<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
register_nav_menus( array(  
  'primary' => __( 'Primary Navigation', 'twentysixteen' ),  
  'footery' => __( 'Footery Navigation', 'twentysixteen' ), 
  'secondary' => __('Secondary Navigation', 'twentysixteen')  
) );
?>