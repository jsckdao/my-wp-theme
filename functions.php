<?php
function myblog_styles() {
	wp_enqueue_style( 'myblog-basic-style', get_stylesheet_uri() );
    wp_enqueue_style( 'myblog-bootstrap-style', get_template_directory_uri().'/css/bootstrap.min.css' );
	wp_enqueue_style( 'myblog-prettify-style', get_template_directory_uri().'/css/prettify.css' );
}
add_action( 'wp_enqueue_scripts', 'myblog_styles' );

function myblog_excerpt_length( $length ) {
    return 100;
}
add_filter( 'excerpt_length', 'myblog_excerpt_length', 999 );

function curPageURL() {
    $pageURL = 'http';
    if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    }
    return $pageURL;
}