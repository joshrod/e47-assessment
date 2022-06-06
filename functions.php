<?php
/**
 * Element 47 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Element_47
 */

require get_template_directory() . '/inc/theme_setup.php';
require get_template_directory() . '/inc/theme_wp_cleanup.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/theme_scripts.php';

function main_section_block_types() {

    if ( function_exists('acf_register_block_type') ) {

        acf_register_block_type(array(
            'name' => 'dual-color-section',
            'title' => __('Dual Color Section'),
            'description' => __('A custom dual section block'),
            'render_template' =>'template-parts/blocks/dual-color-section.php',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'keywords' => array( 'dual', 'section' ),
        ));

        acf_register_block_type(array(
            'name' => 'primary-section',
            'title' => __('Primary Section'),
            'description' => __('A custom primary section block'),
            'render_template' =>'template-parts/blocks/primary-section.php',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'keywords' => array( 'primary', 'section' ),
        ));

    }
}

add_action('acf/init', 'main_section_block_types');