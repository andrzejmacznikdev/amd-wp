<?php
    /**
     * Part of header
     * 
     * @author amd
     * 
     * @package amdwptheme
     * 
     * @version 1.0.0
     * 
     */

    defined('ABSPATH') || exit;

    $isTopBannerActive = get_field('isTopBannerActive', 'options');
        if($isTopBannerActive === 'yes') :
            
            // TODO in acf fields do it those fields
?>

    <div class="topBanner flex">
        <div class="container h-100">
            <div class="lg-12 md-8 sm-6 h-100">
                <div class="col-7-12 col-md-5-8 h-100 jc-fe topBanner__menu">
                    <?php
                        wp_nav_menu(
                            [
                                'container'         =>  '',
                                'fallback_cb'       =>  false,
                                'items_wrap'        =>  '<ul class="flex row ai-c h-100 top-nav">$3$s</ul>',
                                'theme_location'    =>  'top_banner_menu',
                            ]
                        );
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php endif;?>

<header class="site-header pfix left-0 top-0 col-12" id="header">
    <div class="container h-100">
        <div class="lg-12 md-8 sm-6 h-100">
            <!-- logo -->
            <div class="col-1-2 col-md-1-2 site-header-logo h-100">
                <div class="logo-link flex ai-c h-100 prel">
                    <a href="<?= esc_url(home_url('/'));?>" rel="home">
                        <div class="logo-link-img">
                            
                        </div>
                    </a>
                </div>
            </div>
            <!-- end logo -->
            <!-- menu -->
            <div class="col-3-10 h-100 main-menu md-hide">
                <?php 
                    wp_nav_menu(
                        [
                            'container'         =>  '',
                            'depth'             =>  3,
                            'fallback_cp'       =>  false,
                            'items_wrap'        =>  '<ul class="flex ai-c h-100 menu-navigation c-white">%3$s</ul>',
                            'theme_location'    =>  'primary_menu',
                            'walker'            =>  new Walker_Header_Menu(),
                        ]
                    );
                ?>
            </div>
            <!-- end menu -->
        </div>
    </div>
</header>

<!-- mobile menu -->
<div class="mobileMenu">
    <div class="mobileMenu__top">
        <div class="mobileMenu__top-logo">
           
        </div>
        <div class="mobileMenu__top-close" id="closeMobileMenu">
            
        </div>
    </div>
    <div class="mobileMenu__middle">
        <?php
            wp_nav_menu(
                [
                    'container'         =>      '',
                    'depth'             =>      2,
                    'fallback_cb'       =>      false,
                    'items_wrap'        =>      '<ul class="flex column navigationMobile">%3$s</ul>',
                    'theme_location'    =>      'primary_menu',
                    'walker'            =>      new Walker_Header_Menu(),
                ]
            );
        ?>
    </div>
    <div class="mobileMenu__bottom">

    </div>
</div>