<?php
    /**
     * Template part for displaying s-text-graphic-left
     * 
     * @author amd
     * 
     * @package amdwptheme
     * 
     * @version 1.0.0
     * 
     */

    defined('ABSPATH') || exit;

    use AMDWPTheme\Buttons;
    use AMDWPTheme\Content;

    $small_header = get_sub_field('small_header');
    $header = get_sub_field('header');
    $description = get_sub_field('description');
    $enter_image = get_sub_field('enter_image');
    $link_button_one = get_sub_field('link_button_one');
    $link_button_two = get_sub_field('link_button_two');
    $separator_top = get_sub_field('separator_top');
    $separator_bottom = get_sub_field('separator_bottom');

    if($separator_top === 'yes') echo '<div class="sp"></div>';

?>

<div class="s-text-graphic-left">
    <div class="container">
        <div class="flex flex-row p-rel flex-wrap">
            <div class="s-text-graphic-left-l flex flex-col p-rel gap-30">
                <?= displayContent($small_header, $header, $description, 'h1');?>
                <?php if(!empty($link_button_one['url']) || !empty($link_button_two['url'])):?>
                    <div class="button flex flex-row gap-10">
                        <?php if(!empty($link_button_one['url'])):?>
                            <?= Buttons::btnPrimary($link_button_one);?>
                        <?php endif;?>
                        <?php if(!empty($link_button_two['url'])):?>
                            <?= Buttons::btnSecondary($link_button_two);?>
                        <?php endif;?>
                    </div>
                <?php endif;?>
            </div>
            <div class="s-text-graphic-left-r">
                <div class="image h-image">
                     <picture>
                        <source media="(max-width: 575px)" srcset="<?= $enter_image['sizes']['medium'];?>">
                        <source media="(min-width: 576px)" srcset="<?= $enter_image['sizes']['large'];?>">
                        <img src="<?= $enter_image['url'];?>" alt="<?= $enter_image['alt'];?>" width="100%" height="100%" />
                    </picture>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if($separator_bottom === 'yes') echo '<div class="sp"></div>';?>