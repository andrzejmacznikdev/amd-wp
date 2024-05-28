<?php
    /**
     * The template for displaying header of the pages
     * 
     * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/#header-php
     * 
     * @author amd
     * 
     * @package amdwptheme
     * 
     * @version 1.0.0
     * 
     */

    defined('ABSPATH') || exit;

?>

<!DOCTYPE html>
    <html <?php language_attributes();?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="/wp-content/themes/amd-wp/swiper/swiper-bundle.min.css" />
        <?php wp_head(); ?>
    </head>

    <body <?php body_class();?>>
        <?php wp_body_open();?>
        <?php get_template_part('parts/core/header');?>

        <main id="main-content" class="flex flex-col w-full p-rel">