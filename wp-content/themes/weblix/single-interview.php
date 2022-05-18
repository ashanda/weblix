<?php
 get_header();  ?>
 

    <!-- interviews content start -->
    <div class="container interviews my-5 pt-2">
        <div class="row">
            <div class="col-sm-7">
                <h2 class="mb-3"><?php the_title();?></h2>
                
                <p class="d-inline"><?php the_field('description');?></p>
                <hr>
                
                <div class="question">
                <?php if( have_rows('q_&_a') ): ?>
                    
                    <?php while( have_rows('q_&_a') ): the_row(); ?>
                    <span class="red font-weight-bold">Q .</span>
                    <p class="font-weight-bold d-inline"> <?php the_sub_field('question'); ?></p>
                     <?php the_sub_field('answer'); ?>
                     <hr>  
                    <?php endwhile; ?>
                    
                <?php endif; ?>
                    
                    
                    
                </div>
            </div>
            <div class="col-sm-5">
                <div class="q-img">
                <?php $interview_image = get_field('interview_image');
                            if(!empty($interview_image)){ ?>
                                <img class="card-img-top" src="<?php echo esc_url($interview_image['url']); ?>"  alt=''>
                            <?php }else{ ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/inc/img/templates/3.jpg" alt="">
                            <?php } ?>
                    
                </div>
                <h6 class="text-muted mt-3">About the Author</h6>
                <p class="small"><?php the_field('interview');?><a class="d-inline" href="<?php the_field('view_more_link');?>">view more....</a></p>
            </div>
            <div class="interview_video">
            <?php 
                $video = get_field('interview_video');
                if( !empty( $video ) ): 
                    // Load value.
                    $iframe = get_field('interview_video');

                    // Use preg_match to find iframe src.
                    preg_match('/src="(.+?)"/', $iframe, $matches);
                    $src = $matches[1];

                    // Add extra parameters to src and replace HTML.
                    $params = array(
                        'controls'  => 0,
                        'hd'        => 1,
                        'autohide'  => 1
                    );
                    $new_src = add_query_arg($params, $src);
                    $iframe = str_replace($src, $new_src, $iframe);

                    // Add extra attributes to iframe HTML.
                    $attributes = 'frameborder="0"';
                    $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

                    // Display customized HTML.
                    echo $iframe;?>
                <?php endif; ?>               
            </div>
        </div>
    </div>
    <!-- interviews content end -->


<?php get_footer(); ?>  