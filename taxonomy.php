<?php
    /**
     * Template Name: Custom Category Page
     * Template part for displaying category
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

    $terms = get_terms(array(
        'taxonomy'  =>  'kategoria-produktu',
        'hide_empty'    =>  false,
    ));
    $current_term = get_queried_object();
?>

    <div class="category-page mt-h">
        <div class="container">
            <div class="grid-columns category-page-content md-gap-30 sm-gap-20">
                <div class="grid col-1-3 col-md-1-8">
                    <div class="flex flex-col p-rel gap-30">
                        <div class="main-header h2">
                            <?= pll_e('Kategorie','AMD WP Theme');?>
                        </div>
                        <div class="filtration p-rel" id="filtration-catList-tax">
                            <span class="text a1">
                                <?= pll_e('Filtruj produkty', 'AMD WP Theme');?>
                            </span>  
                            <span class="icon">
                                <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.29335 8.53553L5.53599 4.29289M1.29335 1.46447L5.53599 5.70711" stroke="#5F6369" stroke-width="2"/>
                                </svg>
                            </span>      
                        </div>
                        <div class="flex flex-col p-rel gap-20 category-page-content-catList">
                            <div class="main-header md-show h2 filtration-top-header">
                                <?= pll_e('Filtruj produkty', 'AMD WP Theme');?>
                            </div>
                            <?php
                                $count = 1;
                                foreach($terms as $term):
                            ?>
                                <a href="<?php echo esc_url( get_term_link( $term ) ); ?>">
                                    <div class="category-page-content-box <?php if($current_term->slug === $term->slug) echo 'active-cat-box';?> flex flex-row p-rel">
                                        <span class="text main-header a1"><?= $term->name;?></span>
                                        <span class="icon">
                                            <svg width="10" height="7" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.46447 1.29292L5.70711 5.53556M8.53553 1.29292L4.29289 5.53556" stroke="#5F6369" stroke-width="2"/>
                                            </svg>
                                        </span>
                                    </div>
                                </a>
                            <?php   
                                $count++;
                                endforeach;
                            ?>
                            <div class="main-header flex flex-row p-rel gap-20 ai-c filtration-header md-show" id="close-filtration">
                                <span class="icon">
                                    <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.94982 8.53553L0.707177 4.29289M4.94982 1.46447L0.707177 5.70711" stroke="#E94E30" stroke-width="2"/>
                                    </svg>
                                </span>
                                <span class="text">Powrót</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid col-4-11 col-md-1-8">
                    <div class="flex flex-col p-rel category-page-content-list gap-30">
                        <div class="main-header h2 md-hide">
                            <?= $current_term->name;?>
                        </div>
                        <div class="flex flex-row p-rel flex-wrap gap-x-20 gap-y-30">
                            <?php
                                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                $args = array(
                                    'post_type'     => 'produkt',
                                    'posts_per_page' =>  12,
                                    'paged'             =>  $paged,
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => $current_term->taxonomy,
                                            'field'    => 'term_id',
                                            'terms'    => $current_term->term_id,
                                        ),
                                    ),
                                );

                                $query = new WP_Query($args);
                                if($query->have_posts()):
                                    while($query->have_posts()): $query->the_post();
                                        get_template_part('parts/products/product-box');
                                    endwhile;
                                    if($query->max_num_pages > 1):
                            ?>
                            <div class="postsPagination">
                                    <?php
                            
                                        $big = 999999999; // need an unlikely integer
                                        
                                        echo paginate_links( array(
                                            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                            'format' => '?paged=%#%',
                                            'current' => max( 1, get_query_var('paged') ),
                                            'total' => $query->max_num_pages,
                                            'prev_text' => '<button class="pagin__prev" aria-label="Poprzedna strona"><svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.94982 1.46447L0.707177 5.70711M4.94982 8.53553L0.707177 4.29289" stroke="#E94E30" stroke-width="2"/>
                                            </svg>
                                            </button>',
                                            'next_text' => '<button class="pagin__next" aria-label="Następna strona"><svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.05018 1.46447L5.29282 5.70711M1.05018 8.53553L5.29282 4.29289" stroke="#E94E30" stroke-width="2"/>
                                            </svg>
                                            </button>',
                                        ) );
                                    ?>
                                </div>
                                <?php
                                    endif;
                                    wp_reset_postdata();
                                endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sp bcg-grey"></div>
    <div class="sp bcg-grey"></div>
<?php
    get_footer();