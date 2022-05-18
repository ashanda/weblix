<?php
/*
Template Name: Agencies
*/
 get_header();  ?>
 

    <!-- agencies content start -->
    <div class="container-fluid agencies my-5">
        <div class="row">
            <div class="col-sm-6">
                <span class="top-text"><?php the_field('section_01_title');?>
                    <a href="<?php the_field('join_url');?>"><?php the_field('section_01_sub_title');?></a></span>
            </div>
            <div class="col-sm-6 dropdowns">
           
                

                <a class="dropdown-toggle" type="button" id="dropdownMenuButton02" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Province
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton02">
                <?php  
                            $cities= get_terms(
                                array(
                                    'taxonomy'   => 'cities',
                                    'hide_empty' => true,
                                )
                            ); 
                            if ( ! empty( $cities ) && is_array( $cities ) ){
                                foreach ( $cities as $citie ) {

                                    $citie_link = get_term_link( $citie, 'cities' );

                                    if ( is_wp_error( $citie_link ) )
                                        continue;?>

                            <a class="dropdown-item" href="<?php echo esc_url( get_term_link( $citie ) ) ?>">
                                <?php echo $citie->name; ?>
                            </a>

                               <?php
                                }  
                            } ?>
                
                    
                </div>

                <a class="dropdown-toggle" type="button" id="dropdownMenuButton02" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Categories
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton02">
                <?php  
                            $website_category= get_terms(
                                array(
                                    'taxonomy'   => 'website_category',
                                    'hide_empty' => true,
                                )
                            ); 
                            if ( ! empty( $website_category ) && is_array( $website_category ) ){
                                foreach ( $website_category as $website_categorys ) {

                                    $website_categorys_link = get_term_link( $website_categorys, 'website_category' );

                                    if ( is_wp_error( $website_categorys_link ) )
                                        continue;?>

                            <a class="dropdown-item" href="<?php echo esc_url( get_term_link( $website_categorys ) ) ?>">
                                <?php echo $website_categorys->name; ?>
                            </a>

                               <?php
                                }  
                            } ?>
                </div>

                <a class="dropdown-toggle" type="button" id="dropdownMenuButton02" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Quotes
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton02">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>

                <a class="dropdown-toggle" type="button" id="dropdownMenuButton02" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Types
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton02">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>

            </div>
        </div>
        <div class="agency-grid mt-5">
            <div class="row">
            <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                $args = array(
                    'post_type'=>'agency',
                    'posts_per_page' => 6,
                    'paged' => $paged,
                    'orderby' => 'title', 
                    'order' => 'ASC',
                );

                $loop = new WP_Query( $args );
                if ( $loop->have_posts() ) {
                    while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <a href="<?php echo get_permalink( $post->ID ); ?>">  
                <div class="col-sm-3">
                    <div class="box text-center">
                        <?php $featured_img_url = get_the_post_thumbnail_url('full');
                            if(!empty($featured_img_url)){ ?>
                                <img class="agency-web" src="<?php echo $featured_img_url; ?>" alt="">
                            <?php }else{ ?>
                                <img class="agency-web" src="<?php echo get_home_url(); ?>/wp-content/uploads/2022/05/Grey_full.png" alt="">
                            <?php } ?>
                            <?php 
                            $image = get_field('agency_logo');
                            if( !empty( $image ) ){ ?>
                                <img class="agency-author" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php }else{ ?>
                                <img class="agency-author" src="<?php echo get_template_directory_uri(); ?>/inc/img/user.jpg" alt="">
                            <?php } ?>
                        
                        <div class="box-caption">
                            <h6><?php the_title()?></h6>
                            <?php 
                            $link = get_field('url');
                            if( !empty( $link ) ){ 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                
                             ?>
                                 <a href="<?php echo esc_url( $link_url ); ?>" target="_blank"><?php echo esc_html( $link_title ); ?></a>
                            <?php }else{ ?>
                            
                            <?php } 
                            $terms = get_the_terms( $post->ID , 'cities' ); 

                                foreach ( $terms as $term ) {

                                    $term_link = get_term_link( $term, 'cities' );

                                    if ( is_wp_error( $term_link ) )
                                        continue;

                                    echo '<p>' . $term->name . '</p>';

                                } ?>
                            
                        </div>
                    </div>
                </div> 
                </a>  
                <?php
                endwhile;
                $total_pages = $loop->max_num_pages;
                if ($total_pages > 1){

                    $current_page = max(1, get_query_var('paged'));
            
                    echo paginate_links(array(
                        'base' => get_pagenum_link(1) . '%_%',
                        'format' => '/page/%#%',
                        'current' => $current_page,
                        'total' => $total_pages,
                        'prev_text'    => __('« prev'),
                        'next_text'    => __('next »'),
                    ));
                }    
            }
            wp_reset_postdata();
            ?>
                
 
            </div>
        </div>
    </div>
    <!-- agencies content end -->

<?php get_footer(); ?>  