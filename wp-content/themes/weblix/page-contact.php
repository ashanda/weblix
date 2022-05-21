<?php
/*
Template Name: Contact
*/
 get_header();  ?>
 

    <!-- agencies content start -->
    <div class="container-fluid agencies my-5">
        <div class="row">
            <div class="col-sm-6">
            <h3 class="text-center"><?php the_field('section_01_title');?></h3>
                    
            </div>
            <div class="content">
                <p class="text-content">
                    <?php the_field('section_01_description'); ?>
                </p>
            </div>
        </div>
        <div class="contact">
            <?php echo do_shortcode('[contact-form-7 id="5584" title="Submit Web"]');?>
        </div>
    </div>
    <!-- agencies content end -->

<?php get_footer(); ?>  