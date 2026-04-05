<?php
/**
 * SK Kicks Theme Functions
 */

function sk_kicks_enqueue_scripts() {
    // This loads your main style.css (the one in your root folder)
    wp_enqueue_style( 'sk-kicks-main-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'sk_kicks_enqueue_scripts' );