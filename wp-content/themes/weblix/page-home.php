<?php
/*
Template Name: Home
*/
get_header();  ?>
<!-- carousel start -->
<div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
        <?php if (have_rows('banner')) :
            $i = 0;
            $active;
        ?>

            <?php while (have_rows('banner')) : the_row();
                $image = get_sub_field('image');

                if ($i == 0) {
                    $active = 'active';
                } else if ($i > 0) {
                    $active = '';
                } ?>
                <div class="carousel-item <?php echo $active; ?>" style="background-image: url('<?php echo $image['url']; ?>');">
                    <div class="carousel-caption">
                        <h1 class="carousel-heading"><?php the_sub_field('title'); ?></h1>
                        <p class="carousel-text"><?php the_sub_field('description'); ?></p>
                    </div>
                </div>

            <?php $i++;
            endwhile; ?>

        <?php endif; ?>






    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
<!-- carousel start -->

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
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-3">
            <div class="card shadow">
                <div class="hover-content">
                    <img src="<?php echo get_template_directory_uri(); ?>/inc/img/templates/1.jpg" class="card-img-top" alt="..."><!-- Thumbnail -->
                    <div class="img-caption">
                        <div class="social-links">
                            <a class="social-link" href=""><i class="fa fa-facebook"></i></a>
                            <a class="social-link" href=""><i class="fa fa-youtube"></i></a>
                            <a class="social-link" href=""><i class="fa fa-instagram"></i></a>
                            <a class="social-link" href=""><i class="fa fa-twitter"></i></a>
                            <a class="share-link" href=""><i class="fa fa-share"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col col-7">
                            <h6 class="card-title">Card One</h6><!-- Name -->
                        </div>
                        <div class="col buttons col-5">
                            <a class="btn btn-dark" href="https://www.google.lk/" target="_blank">tag</a><!-- Tags -->
                        </div>
                    </div>
                    <div class="card-p">
                        <div class="row">
                            <div class="col col-7">
                                <img class="user-icon" src="<?php echo get_template_directory_uri(); ?>/inc/img/user.jpg" alt="">
                                <a class="developer">By YogeeMedia</a><!-- Agency -->
                                <a class="city">Gampaha</a>
                            </div>
                            <div class="col">
                                <p class="card-text-right">April 28 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-3">
            <div class="card shadow">
                <div class="hover-content">
                    <img src="<?php echo get_template_directory_uri(); ?>/inc/img/templates/1.jpg" class="card-img-top" alt="..."><!-- Thumbnail -->
                    <div class="img-caption">
                        <div class="social-links">
                            <a class="social-link" href=""><i class="fa fa-facebook"></i></a>
                            <a class="social-link" href=""><i class="fa fa-youtube"></i></a>
                            <a class="social-link" href=""><i class="fa fa-instagram"></i></a>
                            <a class="social-link" href=""><i class="fa fa-twitter"></i></a>
                            <a class="share-link" href=""><i class="fa fa-share"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col col-7">
                            <h6 class="card-title">Card One</h6><!-- Name -->
                        </div>
                        <div class="col buttons col-5">
                            <a class="btn btn-dark" href="https://www.google.lk/" target="_blank">tag</a><!-- Tags -->
                        </div>
                    </div>
                    <div class="card-p">
                        <div class="row">
                            <div class="col col-7">
                                <img class="user-icon" src="<?php echo get_template_directory_uri(); ?>/inc/img/user.jpg" alt="">
                                <a class="developer">By YogeeMedia</a><!-- Agency -->
                                <a class="city">Gampaha</a>
                            </div>
                            <div class="col">
                                <p class="card-text-right">April 28 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-3">
            <div class="card shadow">
                <div class="hover-content">
                    <img src="<?php echo get_template_directory_uri(); ?>/inc/img/templates/1.jpg" class="card-img-top" alt="..."><!-- Thumbnail -->
                    <div class="img-caption">
                        <div class="social-links">
                            <a class="social-link" href=""><i class="fa fa-facebook"></i></a>
                            <a class="social-link" href=""><i class="fa fa-youtube"></i></a>
                            <a class="social-link" href=""><i class="fa fa-instagram"></i></a>
                            <a class="social-link" href=""><i class="fa fa-twitter"></i></a>
                            <a class="share-link" href=""><i class="fa fa-share"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col col-7">
                            <h6 class="card-title">Card One</h6><!-- Name -->
                        </div>
                        <div class="col buttons col-5">
                            <a class="btn btn-dark" href="https://www.google.lk/" target="_blank">tag</a><!-- Tags -->
                        </div>
                    </div>
                    <div class="card-p">
                        <div class="row">
                            <div class="col col-7">
                                <img class="user-icon" src="<?php echo get_template_directory_uri(); ?>/inc/img/user.jpg" alt="">
                                <a class="developer">By YogeeMedia</a><!-- Agency -->
                                <a class="city">Gampaha</a>
                            </div>
                            <div class="col">
                                <p class="card-text-right">April 28 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>