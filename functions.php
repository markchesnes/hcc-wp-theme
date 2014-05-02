<?php
/**
 * Enqueue scripts and styles for the front end.
 *
 * @since Twenty Thirteen 1.0
 *
 * @return void
 */
function hccminimalblog_scripts_styles() {

	// Loads bootstrap file.
	wp_enqueue_script( 'hccminimalblog-script', get_template_directory_uri() . '/js/bootstrap-3.1.1-dist/js/bootstrap.min.js', array( 'jquery' ), '', false );

	wp_enqueue_style( 'hccminimalblog-script-style-1', get_template_directory_uri() . '/js/bootstrap-3.1.1-dist/css/bootstrap.min.css', array(), '', false );

	wp_enqueue_style( 'hccminimalblog-script-style-2', get_template_directory_uri() . '/js/bootstrap-3.1.1-dist/css/bootstrap-theme.min.css', array(''), '', false );

	// Loads our main stylesheet.
	wp_enqueue_style( 'hccminimalblog-style', get_stylesheet_uri(), array(), '', false );
}
add_action( 'wp_enqueue_scripts', 'hccminimalblog_scripts_styles' );

function custom_excerpt_length( $length ) {
	return 50;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Link to "read more" excerpt the actual post

function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

function the_breadcrumb() {
	global $post;
	echo '<ul id="hcc_breadcrumb">';
	echo '<li><a href="' . get_option('home') . '">' . get_bloginfo('name') . '</a></li>' ;
	echo '<li class="hcc_breadcrumb_separator"> / </li>';
	if ( is_category() || is_single() ){
		echo '<li>';
		the_category(', ');
		echo '</li>';
		if ( is_single() ) {
	        echo '<li class="hcc_breadcrumb_separator"> / </li><li>' . the_title() . '</li>';
        }
    }
    elseif ( is_page() ){
    	if($post->post_parent){
            $anc = get_post_ancestors( $post->ID );
            $title = get_the_title();
            foreach ( $anc as $ancestor ) {
                $output = '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li> <li class="separator">/</li>';
            }
            echo $output;
            echo '<strong title="'.$title.'"> '.$title.'</strong>';
        } 
        else {
        	echo '<li><strong> '.get_the_title().'</strong></li>';
        }
    } 
	echo '</ul>';
}

?>