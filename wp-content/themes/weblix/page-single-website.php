<?php
/*
Template Name: single website
*/
 get_header();  ?>
 

    <!-- single web content start -->
    <div class="container-fluid single-web my-5 pt-2">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="left-content">
                        <h4>Sample</h4>
                        <a class="auther" href=""><img class="icon" src="<?php echo get_template_directory_uri(); ?>/inc/img/user.jpg" alt="">By Name</a>
                    </div>
                </div>
                <div class="col">
                    <div class="right-content text-right">
                        <a class="btn btn-danger" href="">Visit website <i class="fa fa-telegram"></i></a>
                    </div>
                </div>
                <div class="col-sm-12 mt-2">
                    <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. A nesciunt velit quidem
                        iste quam, amet incidunt? Explicabo adipisci autem enim magni nulla eum commodi sequi pariatur
                        dolor earum, qui alias! Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum esse
                        quasi amet distinctio id alias tempore rerum ullam incidunt ipsam hic, fugit facilis asperiores
                        exercitationem consectetur, omnis in laborum! Odit.</p>
                </div>
                <div class="col-sm-12 mt-2">
                    <span class="tag-title text-muted">Category </span>
                    <span class="tag">E-Commerce, Landing Page</span>
                    <br>
                    <span class="tag-title text-muted">Category </span>
                    <span class="tag">E-Commerce, Landing Page</span>
                </div>
            </div>

        </div>
        <div class="single-web-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/inc/img/single_img.jpg')">
            <div class="content text-center">
                <h3>Sample Heading</h3>
            </div>
        </div>
    </div>
    <!-- single web content end -->

<?php get_footer(); ?>  