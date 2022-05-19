<?php

get_header();  ?>
 	
<?php $postid = get_the_ID();?>
 <!-- single-agency content start -->
 <div class="container-fluid single-agency my-5">
        <div class="row">
            <div class="col-sm-4">
                <div class="left-sec text-center mb-1">
                    <a href="tel:<?php the_field('phone');?>"><?php the_field('phone');?></a> | <a href="mailto:<?php the_field('email');?>"><?php the_field('email');?></a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="middle-sec text-center">
                            <?php 
                            $image = get_field('agency_logo');
                            if( !empty( $image ) ){ ?>
                                <img class="round-img mb-2" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php }else{ ?>
                                <img class="round-img mb-2" src="<?php echo get_template_directory_uri(); ?>/inc/img/user.jpg" alt="">
                            <?php } ?>
                    
                   
                        <h6><?php the_title();?></h6>
                        <?php $terms = get_the_terms( $post->ID , 'cities' ); 

                            foreach ( $terms as $term ) {

                                $term_link = get_term_link( $term, 'cities' );

                                if ( is_wp_error( $term_link ) )
                                    continue;

                                echo '<span class="text-muted">' . $term->name . '</span>';

                            } ?>
                    
                    <p><?php the_field('description');?></p>
                    <div class="social">
                    <?php if( have_rows('social_media') ): ?>
                    
                    <?php while( have_rows('social_media') ): the_row();?>
                        
                             <a href="<?php the_sub_field('social_link'); ?>"><i class="<?php the_sub_field('social_icon'); ?> px-3"></i></a> 
                            
                        
                    <?php endwhile; ?>
                   
                <?php endif; ?>
                         
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="right-sec text-center mb-1">
                <?php 
                            $link = get_field('url');
                            if( !empty( $link ) ){ 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                
                             ?>
                                 <a href="<?php echo esc_url( $link_url ); ?>" target="_blank"><?php echo esc_html( $link_title ); ?></a>
                            <?php }else{ ?>
                            
                            <?php } ?>
                </div>
            </div>
        </div>
        <div class="row template mt-4">
        <?php
            $args = array(
                'post_type' => 'websites'
            );

            $post_query = new WP_Query($args);

            if($post_query->have_posts() ) {
                while($post_query->have_posts() ) {
                    $post_query->the_post();
                    ?>
                    <a href="<?php echo get_permalink( $post->ID ); ?>">  
             <?php 
                  $agency = get_field('agency');
                  
              if( $agency == $postid ){ ?>
                 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-3">
            <div class="card shadow">
                <div class="hover-content">
                            <?php $featured_img_url = get_the_post_thumbnail_url('full');
                            if(!empty($featured_img_url)){ ?>
                                <img class="card-img-top" src="<?php echo $featured_img_url; ?>"  alt="...">
                            <?php }else{ ?>
                                <img class="card-img-top" alt="..." src="<?php echo get_home_url(); ?>/wp-content/uploads/2022/05/Grey_full.png" >
                            <?php } ?>
                    
                    <div class="img-caption">
                        <div class="social-links">
                        <?php if( have_rows('social_media') ): ?>
                    <?php while( have_rows('social_media') ): the_row();?>
                     <a class="social-link" href="<?php the_sub_field('social_link'); ?>"><i class="<?php the_sub_field('social_icon'); ?> px-3"></i></a> 
                    <?php endwhile; ?>   
                         <?php endif; ?>
                         <a class="share-link" href="<?php the_field('url');?>" target="_blank"><i class="fa fa-share"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col col-7">
                            <h6 class="card-title"><?php the_field('name');?></h6><!-- Name -->
                        </div>
                        <div class="col buttons col-5">
                        <?php $terms = get_the_terms( $post->ID , 'tags' ); 

                            foreach ( $terms as $term ) {

                                $term_link = get_term_link( $term, 'tags' );

                                if ( is_wp_error( $term_link ) )
                                    continue;

                                echo '<a class="btn btn-dark">' . $term->name . '</a>';

                            } ?>
                            
                        </div>
                    </div>
                    <div class="card-p">
                        <div class="row">
                            <div class="col col-7">
                                
                                <?php 
                            $postID = get_field('agency');
                            $image = get_field('field_62848f8d8ea64', $postID);
                            if( !empty( $image ) ){ ?>
                                <img class="user-icon" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php }else{ ?>
                                <img class="user-icon" src="<?php echo get_template_directory_uri(); ?>/inc/img/user.jpg" alt="">
                            <?php } ?>
                            <a class="developer" href="<?php echo get_permalink( $postID ); ?>"><?php echo get_the_title($postID);?></a><!-- Agency -->
                                <?php $terms = get_the_terms( $post->ID , 'cities' ); 

                                    foreach ( $terms as $term ) {

                                        $term_link = get_term_link( $term, 'cities' );

                                        if ( is_wp_error( $term_link ) )
                                            continue;

                                        echo '<a class="city">' . $term->name . '</a>';

                                    } ?>
                                
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
              <?php }else{ ?>
                  
             <?php } ?>       
            
                    <?php
                    }
                }
        ?>                        
        

        
        
    </div>
    </div>
    <!-- single-agency content end -->


<?php get_footer(); ?>  