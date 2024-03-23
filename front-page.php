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

        while(have_rows('chooseHero', $idPost)) : the_row();
            if(get_row_layout() === 'heroOne') {
                get_template_part('parts/hero/hero-one');
            }
        endwhile;

        while(have_rows('chooseSection', $idPost)) : the_row();
            if(get_row_layout() === 'fullWidthDescription') {
                get_template_part('parts/sections/full-width-description');
            }
        endwhile;
    
    get_footer();