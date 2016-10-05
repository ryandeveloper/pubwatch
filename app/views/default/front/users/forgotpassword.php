<?php 
View::$title = 'Forgot Password';
View::$bodyclass = 'page-body login-page';
View::header('front');
?>
<?php $userinfo = View::userInfo(); ?>

<div class="container">
    <!--Content Section Start -->
    <div class="row">
        <div class="box animation flipInX">
            <div class="box1">
            <h3 class="text-primary"><?php echo View::$title; ?></h3>
                <!-- Notifications -->

                <form action="" class="omb_loginForm" autocomplete="off" method="POST">
                    
                    <div class="form-group ">
                        <p>Enter your email to send the password</p>
                        <label class="sr-only">Enter your email to send the password</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" value="">
                    </div>
                    <span class="help-block"></span>
                    <input type="submit" class="btn btn-block btn-warning" value="Reset">
                    Don't have an account? <a href="<?php echo view::url(); ?>/register"><strong> Sign up</strong></a>
                </form>
            </div>
        <div class="bg-light animation flipInX">
            <a href="<?php echo view::url('login'); ?>">Sign In?</a>
        </div>
        </div>
    </div>
    <!-- //Content Section End -->
</div>
