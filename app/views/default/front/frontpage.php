<?php 
View::$title = 'Homepage';
View::$bodyclass = 'page-body';
View::header('front');
?>
<?php $userinfo = View::userInfo(); ?>

<!--Carousel Start -->
    <div id="owl-demo" class="owl-carousel owl-theme">
        <div class="item"><img src="<?php echo view::url('assets/images/front/'); ?>slide_1.jpg" alt="slider-image">
        </div>
        <div class="item"><img src="<?php echo view::url('assets/images/front/'); ?>slide_a2.jpg" alt="slider-image">
        </div>
        <div class="item"><img src="<?php echo view::url('assets/images/front/'); ?>slide_a3.jpg" alt="slider-image">
        </div>
    </div>
    <!-- Container Start -->
    <div class="container">

        <div class="row">
            <!-- What we are Start -->
            <div class="col-md-6 col-sm-6 wow zoomInLeft">
                <div class="text-left">
                    <div>
                        <h4 class="border-warning"><span class="heading_border bg-warning">What We Are</span></h4>
                    </div>
                </div>
                <img src="<?php echo view::url('assets/images/front/'); ?>image_12.jpg" class="img-responsive">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <p>
                    <div class="text-right primary"><a href="#">Read more</a></div>
                </p>
            </div>
            <!-- //What we are End -->
            <!-- About Us Start -->
            <div class="col-md-6 col-sm-6">
                <div class="text-left">
                    <div>
                        <h4 class="border-success"><span class="heading_border bg-success">About Us</span></h4>
                    </div>
                </div>
                <img src="<?php echo view::url('assets/images/front/'); ?>image_11.jpg" class="img-responsive">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <p>
                    <div class="text-right primary"><a href="#">Read more</a>
                    </div>
                </p>
            </div>
            <!-- //About Us End -->
        </div>

        <div class="row">
            <!-- Responsive Section Start -->
            <div class="col-sm-6 col-md-3">
                <div class="box">
                    <div class="box-icon">
                        <i class="livicon icon" data-name="desktop" data-size="55" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    </div>
                    <div class="info">
                        <h3 class="success text-center">Responsive</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur corporis at explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem architecto perferendis quas aperiam debitis dolor soluta!</p>
                        <div class="text-right primary"><a href="#">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Responsive Section End -->
            <!-- Easy to Use Section Start -->
            <div class="col-sm-6 col-md-3">
                <!-- Box Start -->
                <div class="box">
                    <div class="box-icon box-icon1">
                        <i class="livicon icon1" data-name="gears" data-size="55" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>
                    </div>
                    <div class="info">
                        <h3 class="primary text-center">Easy to Use</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur corporis at explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem architecto perferendis quas aperiam debitis dolor soluta!.</p>
                        <div class="text-right primary"><a href="#">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Easy to Use Section End -->
            <!-- Clean Design Section Start -->
            <div class="col-sm-6 col-md-3">
                <div class="box">
                    <div class="box-icon box-icon2">
                        <i class="livicon icon1" data-name="doc-portrait" data-size="55" data-loop="true" data-c="#f89a14" data-hc="#f89a14"></i>
                    </div>
                    <div class="info">
                        <h3 class="warning text-center">Clean Design</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur corporis at explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem architecto perferendis quas aperiam debitis dolor soluta!</p>
                        <div class="text-right primary"><a href="#">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Clean Design Section End -->
            <!-- 20+ Page Section Start -->
            <div class="col-sm-6 col-md-3">
                <div class="box">
                    <div class="box-icon box-icon3">
                        <i class="livicon icon1" data-name="folder-open" data-size="55" data-loop="true" data-c="#FFD43C" data-hc="#FFD43C"></i>
                    </div>
                    <div class="info">
                        <h3 class="yellow text-center">20+ Pages</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur corporis at explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem architecto perferendis quas aperiam debitis dolor soluta!</p>
                        <div class="text-right primary"><a href="#">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //20+ Page Section End -->
        </div>

        <div class="row">
            <!-- Testimonial Section -->
            <div class="text-center">
                <h3 class="border-primary"><span class="heading_border bg-primary">Testimonials</span></h3>
            </div>
            <div class="col-md-4">
                <div class="author">
                    <img src="<?php echo view::url('assets/images/front/'); ?>authors/avatar3.jpg" class="img-responsive img-circle pull-left">
                    <p class="text-right">
                        Tonny Jakson
                        <br>
                        <small class="text-right">Themeforest.net</small>
                    </p>
                    <p>
                        <label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."</label>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="author">
                    <img src="<?php echo view::url('assets/images/front/'); ?>authors/avatar2.jpg" class="img-responsive img-circle pull-left">
                    <p class="text-right">
                        Tonny Jakson
                        <br>
                        <small class="text-right">Themeforest.net</small>
                    </p>
                    <p>
                        <label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."</label>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="author">
                    <img src="<?php echo view::url('assets/images/front/'); ?>authors/avatar4.jpg" class="img-responsive img-circle pull-left">
                    <p class="text-right">
                        Tonny Jakson
                        <br>
                        <small class="text-right">Themeforest.net</small>
                    </p>
                    <p>
                        <label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."</label>
                    </p>
                </div>
            </div>
            <!-- Testimonial Section End -->
        </div>

        <!-- Our Skills Start -->
        
	</div>
        
    <!-- //Container End -->

<?php View::footer('front'); ?>