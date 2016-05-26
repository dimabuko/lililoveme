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
function comments_shortcode($atts) {
	extract( shortcode_atts( array(
		'id' => ''
	), $atts ) );

	$num = 0;
	$post_id = $id;
	$queried_post = get_post($post_id);
	$cc = $queried_post->comment_count;
		if( $cc == $num || $cc > 1 ) : $cc = $cc.'';
		else : $cc = $cc.'';
		endif;
	$permalink = get_permalink($post_id).'#comments';

	return '<a href="'. $permalink .'" class="content_comments_bullet">' . $cc . '</a>';

}
add_shortcode('comments', 'comments_shortcode');
?>
