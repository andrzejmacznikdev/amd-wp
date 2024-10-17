<?php
    /**
     * Template part for displaying contact-form
     * 
     * @author amd
     * 
     * @package amdwptheme
     * 
     * @version 1.0.0
     * 
     */

    defined('ABSPATH') || exit;

    use AMDWPTheme\Content;

    global $post;

    $id = get_the_ID();

    $small_header = get_field('small_header', $id);
    $header = get_field('header', $id);
    $phone_header = get_field('phone_header', $id);
    $phone_number = get_field('phone_number', $id);
    $email_header = get_field('email_header', $id);
    $email_address = get_field('email_address', $id);
    $shortcode_form = get_field('shortcode_form', $id);

?>

<div class="contact-form">
    <div class="container">
        <div class="grid-columns">
            
        </div>
    </div>
</div>