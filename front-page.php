<?php
    /**
     * Template Name: Strona główna
     * 
     * @author amd
     * 
     * @package amdwptheme
     * 
     * @version 1.0.0
     * 
     */

    defined('ABSPATH') || exit;

    get_header();

        $idPost = get_the_ID();

        while(have_rows('choose-hero', $idPost)):the_row();
            $layout_hero = get_row_layout();
            get_template_part('parts/hero/' . $layout_hero);
        endwhile;

        while(have_rows('choose-section', $idPost)):the_row();
            $layout = get_row_layout();
            get_template_part('parsts/sections/' . $layout);
        endwhile;
    
    get_footer();