<?php
    /**
     * Functions and definitions
     * 
     * @link https://developer.wordpress.org/themes/basics/theme-functions/#what-is-functions-php
     * 
     * @author amd
     * 
     * @package amdwptheme
     * 
     * @version 1.0.0
     * 
     */

    if(!defined('ABSPATH')) {
        exit;
    }

    require get_template_directory() . '/inc/setup.php';
    require get_template_directory() . '/inc/cleanup.php';
    require get_template_directory() . '/inc/options-page-acf.php';
    require get_template_directory() . '/inc/class-nav-walker-header.php';
    require get_template_directory() . '/inc/multilanguage.php';
