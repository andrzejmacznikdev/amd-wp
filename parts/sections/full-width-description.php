<?php
    /**
     * Section - Full Width Description
     * 
     * @author amd
     * 
     * @package amdwptheme
     * 
     * @version 1.0.0
     * 
     */

    defined('ABSPATH') || exit;

    $f_w_description = get_sub_field('f_w_description');
    // TODO ACF - here
?>

<div class="f-w-description">
    <div class="container">
        <div class="flex flex-col p-rel description gap-20">
            <?= $f_w_description;?>
        </div>
    </div>
</div>