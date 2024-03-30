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

?>



<header class="site-header p-fix left-0 top-0 h-h w-full" id="header">
    <div class="container h-full">
        <div class="grid xlg-12 lg-10 md-8 sm-6 h-full">
            <!-- logo -->
            <div class="grid col-1-2 site-header-logo h-full">
                <div class="logo-link flex ai-c h-full p-rel">
                    <a href="<?= esc_url(home_url('/'));?>" rel="home">
                        <div class="logo-link-img">
                            
                        </div>
                    </a>
                </div>
            </div>
            <!-- end logo -->
            <!-- menu -->
            <div class="grid col-3-10 h-full main-menu md-hide">
                <?php 
                    wp_nav_menu(
                        [
                            'container'         =>  '',
                            'depth'             =>  3,
                            'fallback_cp'       =>  false,
                            'items_wrap'        =>  '<ul class="flex ai-c h-full menu-navigation c-white flex-row">%3$s</ul>',
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
                    'items_wrap'        =>      '<ul class="flex flex-column navigationMobile">%3$s</ul>',
                    'theme_location'    =>      'primary_menu',
                    'walker'            =>      new Walker_Header_Menu(),
                ]
            );
        ?>
    </div>
    <div class="mobileMenu__bottom">

    </div>
</div>