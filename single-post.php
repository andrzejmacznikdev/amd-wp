<?php
    /**
     * Template part for displaying single-post
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

    use AMDWPTheme\Buttons;
    use AMDWPTheme\Content;

    $idPost = get_the_ID();

    $small_header = get_field('small_header', $idPost);
    $header = get_field('header', $idPost);
    $choose_posts = get_field('choose_posts', $idPost);
    $separator_top = get_field('separator_top', $idPost);
    $separator_bottom = get_field('separator_bottom', $idPost);

    $date_post = get_the_date('d.m.Y');
    $author_id = $post->post_author;
    $author_name = get_the_author_meta('first_name', $author_id);

    $previous_post_url = get_permalink(get_previous_post()->ID);

    $previous_post = get_previous_post();

    if ($previous_post) {
        $previous_post_url = get_permalink($previous_post->ID);
    } else {
        $previous_post = '#'; 
    }

    $next_post = get_next_post();

    if ($next_post) {
        $next_post_url = get_permalink($next_post->ID);
    } else {
        $next_post_url = '#'; 
    }
?>

<article id="post-<?= the_ID();?>" class="single--post">
    <div class="container">
    
    </div>
</article>

<div class="see-ohter-posts">
    <div class="container">

    </div>
</div>

<?php
    get_footer();