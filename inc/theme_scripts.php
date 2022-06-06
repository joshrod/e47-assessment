<?php
/**
 * Enqueue scripts and styles. This is where you'll call your scripts and styles.
 */

function add_e47theme_scripts() {

        $theme_version = wp_get_theme()->get( 'Version' );

        wp_enqueue_style( 'e47-minimal', get_template_directory_uri() . '/assets/css/style.css', array(), $theme_version, false);
        wp_enqueue_script( 'e47-minimal', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), $theme_version, true);
    }
    add_action( 'wp_enqueue_scripts', 'add_e47theme_scripts' );


/**
 * Everything below should stay the same.
 */

//enqueue E47 brand fonts and styles for login page
function element_47_admin_scripts() {

    // Version CSS file in a theme
    wp_enqueue_style(
        'e47-style',
        get_stylesheet_directory_uri() . '/assets/css/admin-styles.css',
        array(),
        filemtime( get_stylesheet_directory() . '/assets/css/admin-styles.css' )
    );
}
add_action( 'login_enqueue_scripts', 'element_47_admin_scripts' );

add_action( 'admin_head', 'element_47_admin_scripts' );

function element_47_google_fonts() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;700', false );
}
add_action( 'login_enqueue_scripts', 'element_47_google_fonts');
