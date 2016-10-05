<?php 
View::$title = 'How it works';
View::$bodyclass = 'page-body';
View::header('front');
?>
<?php $userinfo = View::userInfo(); ?>

<!-- Breadcrumb Section Start -->
    <div class="breadcum">
        <div class="container">
            <ol class="breadcrumb">
                <li>
                    <a href="index.html"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                    </a>
                </li>
                <li class="hidden-xs">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="#"><?php echo View::$title; ?></a>
                </li>
            </ol>
        </div>
    </div>
    <!-- //Breadcrumb Section End -->
    <!-- Container Section Start -->
    <div class="container">
        <!-- Slider Section Start -->
        <div class="row">
            <!-- Left Heading Section Start -->
            <div class="col-md-7 col-sm-12">
                <h2><label>Welcome to Josh</label></h2>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                </p>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur corporis at explicabo nulla dolore necessitatibus doloremque exercitationem
                </p>
            </div>
            <!-- //Left Heaing Section End -->
            <!-- Slider Start -->
            <div class="col-md-5 col-sm-12 slider">
                <div id="owl-demo" class="owl-carousel owl-theme">
                    <div class="item"><img src="<?php echo view::url('assets/images/front/'); ?>image_16.jpg" alt="slider-image">
                    </div>
                    <div class="item"><img src="<?php echo view::url('assets/images/front/'); ?>image_17.jpg" alt="slider-image">
                    </div>
                    <div class="item"><img src="<?php echo view::url('assets/images/front/'); ?>image_16.jpg" alt="slider-image">
                    </div>
                </div>
            </div>
            <!-- //Slider End -->
        </div>
        <!-- //Slider Section End -->

    </div>
    <!-- //Container Section End -->

<?php View::footer('front'); ?>