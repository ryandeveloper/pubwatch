<?php 
View::$title = 'Contact';
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
                    <a href="<?php echo view::url('contact'); ?>"><?php echo View::$title; ?></a>
                </li>
            </ol>
        </div>
    </div>
    <!-- //Breadcrumb Section End -->
    <!-- Map Section Start -->
    <div class="">
        <div id="map" style="width:100%; height:400px;"></div>
    </div>
    <!-- //map Section End -->
    <!-- Container Section Start -->
    <div class="container">
        <div class="row">
            <!-- Contact form Section Start -->
            <div class="col-md-6">
                <h2>Contact Form</h2>
                <form class="contact">
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Your name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control input-lg" placeholder="Your email address">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control input-lg no-resize" rows="6" placeholder="Your comment"></textarea>
                    </div>
                    <div class="input-group">
                        <button class="btn btn-primary">submit</button>
                        <button class="btn btn-danger">cancel</button>
                    </div>
                </form>
            </div>
            <!-- //Conatc Form Section End -->
            <!-- Address Section Start -->
            <div class="col-md-6 col-sm-6">
                <div class="media media-right">
                    <div class="media-left media-top">
                        <a href="#">
                            <div class="box-icon">
                                <i class="livicon" data-name="home" data-size="22" data-loop="true" data-c="#fff" data-hc="#fff"></i>
                            </div>
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Address:</h4>
                        <div class="danger">Jyostna</div>
                        <address>
                            Pediatric Surgeons of Alaska
                            <br> 3340 Providence Drive #565
                            <br> Anchorage, AK(Alaska)
                            <br> North Las Vegas, NV
                        </address>
                    </div>
                </div>
                <div class="media padleft10">
                    <div class="media-left media-top">
                        <a href="#">
                            <div class="box-icon">
                                <i class="livicon" data-name="phone" data-size="22" data-loop="true" data-c="#fff" data-hc="#fff"></i>
                            </div>
                        </a>
                    </div>
                    <div class="media-body padbtm2">
                        <h4 class="media-heading">Telephone:</h4> (703) 717-4200
                        <br /> Fax:400 423 1456
                    </div>
                </div>
            </div>
            <!-- //Address Section End -->
        </div>
    </div>
    <!-- //Container Section End -->
    

<?php View::footer('front'); ?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="<?php echo view::url('app/views/default/'); ?>assets/js/front/gmap.js"></script>
