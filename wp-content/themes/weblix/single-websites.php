<?php

get_header();  ?>
<!-- single web content start -->
<div class="container-fluid single-web my-5 pt-2">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="left-content">
                        <h4><?php the_field('name');?></h4>
                        <a class="auther">
                        <?php 
                            $postID = get_field('agency');
                            $image = get_field('field_62848f8d8ea64', $postID);
                            if( !empty( $image ) ){ ?>
                                <img class="icon" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php }else{ ?>
                                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/inc/img/user.jpg" alt="">
                            <?php } ?>
                           By <?php echo get_the_title( $postID ); ?></a>
                    </div>
                </div>
                <div class="col">
                    <div class="right-content text-right">
                        <a class="btn btn-danger" target="_blank" href="<?php the_field('url');?>">Visit website <i class="fa fa-telegram"></i></a>
                    </div>
                </div>
                <div class="col-sm-12 mt-2">
                    <p class="content"><?php the_field('description');?></p>
                </div>
                <div class="col-sm-12 mt-2">
                    <span class="tag-title text-muted">Category </span>
                    <span class="tag">
                    <?php $terms = get_the_terms( $post->ID , 'website_category' ); 
                                foreach ( $terms as $term ) {

                                    $term_link = get_term_link( $term, 'website_category' );

                                    if ( is_wp_error( $term_link ) )
                                        continue;

                                    echo  $term->name .' ';

                                } ?>
                    </span>
                    <br>
                    <span class="tag-title text-muted">Technology </span>
                    <span class="tag">
                    <?php $terms = get_the_terms( $post->ID , 'technologies' ); 
                                foreach ( $terms as $term ) {

                                    $term_link = get_term_link( $term, 'technologies' );

                                    if ( is_wp_error( $term_link ) )
                                        continue;

                                    echo  $term->name.' ' ;

                                } ?>
                    </span>
                </div>
            </div>

        </div>
        <?php if( have_rows('web_image') ): ?>

            <?php while( have_rows('web_image') ): the_row(); 
                $image = get_sub_field('image');
                ?>
                <div class="single-web-img" style="background-image: url('<?php echo $image['url']; ?>')">
            <div class="content text-center">
                <h3><?php the_sub_field('caption'); ?></h3>
            </div>
        </div>
            <?php endwhile; ?>

        <?php endif; ?>
        
    </div>
    <!-- single web content end -->
    <?php get_footer(); ?> 