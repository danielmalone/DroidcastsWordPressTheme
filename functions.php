<?php

function header_menu() {
	register_nav_menu( 'header-menu', __( 'Header Menu' ) );
}

add_action( 'init', 'header_menu' );

add_theme_support( 'title-tag' );

wp_enqueue_style( 'google-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons' );

wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700' );

wp_enqueue_style( 'main-css', get_template_directory_uri() . '/style.css' );