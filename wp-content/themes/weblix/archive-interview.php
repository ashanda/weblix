<?php
/*
Template Name: Interviews
*/
 get_header();  ?>
 

    <!-- paragraph section start -->
    <div class="paragraph container mt-5">
        <div class="heading mb-4">
            <h3 class="text-center"><?php the_field('section_01_title'); ?></h3>
        </div>
        <div class="content">
            <p class="text-content">
            <?php the_field('section_01_description'); ?>
            </p>
        </div>
    </div>
    <!-- paragraph section end -->

    <!-- Category section start -->
    <div class="container-fluid category mt-5 mb-5">
    <div class="heading">
        <h5 class="category-heading mb-5 text-center"><?php the_field('section_01_sub_title'); ?> <span class="text-muted"><?php the_field('section_01_sub_title_colour_text'); ?></span></h5>
    </div>
    <div class="row template">
    <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                $args = array(
                    'post_type'=>'interview',
                    'posts_per_page' => 9,
                    'paged' => $paged,
                    'orderby' => 'title', 
                    'order' => 'ASC',
                );

                $loop = new WP_Query( $args );
                if ( $loop->have_posts() ) {
                    while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <a href="<?php echo get_permalink( $post->ID ); ?>"> 
                 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-3">
            <div class="card shadow">
                <div class="hover-content">
                <?php $featured_img_url = get_the_post_thumbnail_url('full');
                            if(!empty($featured_img_url)){ ?>
                                <img class="card-img-top" src="<?php echo $featured_img_url; ?>"  alt="...">
                            <?php }else{ ?>
                                <img class="card-img-top" alt="..." src="<?php echo get_home_url(); ?>/wp-content/uploads/2022/05/Grey_full.png" >
                            <?php } ?>
                    
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col col-7">
                            <h6 class="card-title"><?php the_title();?></h6><!-- Name -->
                        </div>
                        
                    </div>
                    <div class="card-p">
                        <div class="row">
                            <div class="col col-7">
                            <h6 class="card-title"><?php the_field('persons_name');?></h6><!-- Name -->
                                
                            </div>
                            <div class="col">
                                <p class="card-text-right"><?php echo get_the_date(); ?></p>
                            </div>
                        </div>
                    </div>
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
    <?php get_footer(); ?>