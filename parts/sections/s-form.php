<?php
    /**
     * Template part for displaying s-form
     * 
     * @author amd
     * 
     * @package amdwptheme
     * 
     * @version 1.0.0
     * 
     */

    defined('ABSPATH') || exit;

    $choose_form = get_sub_field('choose_form');
    $separator_top = get_sub_field('separator_top');
    $separator_bottom = get_sub_field('separator_bottom');

    if($separator_top === 'yes') echo '<div class="sp"></div>';

    foreach($choose_form as $post):
        setup_postdata($post);
        get_template_part('parts/forms/contact-form');
    endforeach;

    wp_reset_postdata();

    if($separator_bottom === 'yes') echo '<div class="sp"></div>';