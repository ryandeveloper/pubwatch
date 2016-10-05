<?php $userinfo = View::userInfo(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo View::url('assets/images/logo-s.png'); ?>" type="image/png" sizes="16x16"> 
    <title><?php echo View::$title . ' | '. Configuration::sitetitle; ?></title>
    <?php View::headers(); ?>
</head>
<body class="<?php echo View::$bodyclass; ?>">

    <!-- Head section Start -->
    <header>
        <!-- Icon Section Start -->
        <div class="icon-section">
            <div class="container">
                <ul class="list-inline">
                    <li>
                        <a href="#"> <i class="livicon" data-name="facebook" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="livicon" data-name="twitter" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="livicon" data-name="google-plus" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="livicon" data-name="linkedin" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="livicon" data-name="rss" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li class="pull-right">
                        <ul class="list-inline icon-position">
                            <li>
                                <a href="mailto:"><i class="livicon" data-name="mail" data-size="18" data-loop="true" data-c="#fff" data-hc="#fff"></i></a>
                                <label class="hidden-xs"><a href="mailto:" class="text-white">info@joshadmin.com</a></label>
                            </li>
                            <li>
                                <a href="tel:"><i class="livicon" data-name="phone" data-size="18" data-loop="true" data-c="#fff" data-hc="#fff"></i></a>
                                <label class="hidden-xs"><a href="tel:"class="text-white">(703) 717-4200</a></label>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- //Icon Section End -->
        <!-- Nav bar Section Start -->
        <nav class="navbar navbar-default container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
                    <span><a href="#"> <i class="livicon" data-name="responsive-menu" data-size="25" data-loop="true" data-c="#757b87" data-hc="#ccc"></i>
                    </a></span>
                </button>
                <a class="navbar-brand" href="#">PubWatchGroup<!--<img src="<?php echo view::url('assets/images/front/'); ?>logo.png" class="logo_position">--></a>
            </div>
            <div class="collapse navbar-collapse" id="collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo view::url(); ?>"> Home</a></li>
                    <li><a href="<?php echo view::url('howitworks'); ?>"> How it works</a></li>
                    <li><a href="<?php echo view::url('contact'); ?>"> contact</a></li>
                    <li><a href="<?php echo view::url('groups'); ?>"> Groups</a></li>
                    <li><a href="<?php echo view::url('watchlist'); ?>"> watch list</a></li>
                    <li><a href="<?php echo view::url('dps'); ?>"> dps</a></li>

<!--                    <li><a href="<?php echo view::url('myaccount'); ?>"> my account</a></li>
                    <li><a href="<?php echo view::url('logout'); ?>"> logout</a></li>-->

                    <li><a href="<?php echo view::url('login'); ?>"> sign in</a></li>
                    <li><a href="<?php echo view::url('register'); ?>"> register</a></li>
                </ul>
            </div>
        </nav>
        <!-- //Nav bar Section End -->
    </header>
    <!-- //Head section End -->