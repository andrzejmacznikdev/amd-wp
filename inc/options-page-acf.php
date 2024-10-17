<?php
    /**
     * ACF Options page
     * 
     * @author amd
     * 
     * @package amdwptheme
     * 
     * @version 1.0.0
     * 
     */

    defined('ABSPATH') || exit;

    if(function_exists('acf_add_options_page')) {
        acf_add_options_page(array(
            'page_title'    =>  'Główne ustawienia strony',
            'menu_title'    =>  'Opcje',
            'redirect'      =>  false,
            'menu_slug'     =>  "acf-options",
            'position'      =>  1,
        ));
        acf_add_options_sub_page(array(
            'page_title'    => 'Informacje',
            'menu_title'    => 'Informacje',
            'parent_slug'   => 'acf-options',
        ));
        acf_add_options_sub_page(array(
            'page_title'    => 'Stopka strony',
            'menu_title'    => 'Stopka strony',
            'parent_slug'   => 'acf-options',
        ));
    }