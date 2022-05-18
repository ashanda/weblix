<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package weblix
 */

?>

<!-- FOOTER -->
<footer class="w-100 py-4 flex-shrink-0">
        <div class="container py-4">
            <div class="row gy-4 gx-5">
                <div class="col-lg-4 col-md-6">
                    <a class="navbar-brand mb-3" href="#">WEBLIX<span class="after-logo">web design awards UK</span>
                    </a>
                    <p class="small text-muted"><?php the_field('footer_block_01_description','option');?></p>
                    <p class="small text-muted mb-0">&copy; Copyrights. All rights reserved. <a class="text-primary"
                            href="#">yogeemedia.com</a></p>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-3"><?php the_field('footer_block_02_title','option');?></h5>
                    <?php if( have_rows('footer_block_02_links','option') ): ?>
                        <ul class="list-unstyled text-muted">
                        <?php while( have_rows('footer_block_02_links','option') ): the_row();?>
                            <li><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('link_title'); ?></a></li>
                        <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                    
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-3"><?php the_field('footer_block_03_title','option');?></h5>
                     <?php if( have_rows('footer_block_03_links','option') ): ?>
                       <ul class="list-unstyled text-muted">
                        <?php while( have_rows('footer_block_03_links','option') ): the_row();?>
                            <li><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('link_title'); ?></a></li>
                        <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-white mb-3"><?php the_field('footer_block_04_title','option');?></h5>
                    <p class="small text-muted"><?php the_field('footer_block_04_description','option');?></p>
                    <?php echo do_shortcode('[contact-form-7 id="5501" title="Newsletter"]');?>
                </div>
            </div>
        </div>
    </footer>
    <!-- Category section end -->

    <!-- Optional JavaScript -->
    <script src="<?php echo get_template_directory_uri(); ?>/inc/js/script.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>


<?php wp_footer(); ?>

</body>
</html>
