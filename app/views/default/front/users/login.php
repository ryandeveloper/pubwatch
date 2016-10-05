<?php 
View::$title = 'Login';
View::$bodyclass = 'page-body login-page';
View::header('front');
?>
<?php $userinfo = View::userInfo(); ?>

<div class="container">
    <!--Content Section Start -->
    <div class="row">
        <div class="box animation flipInX">
            <div class="box1">
            Welcome to
            <h3 class="text-primary">Pub Watch Group</h3>
                <!-- Notifications -->

                <form action="" class="omb_loginForm" autocomplete="off" method="POST">
                    
                    <div class="form-group ">
                        <label class="sr-only">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" value="">
                    </div>
                    <span class="help-block"></span>
                    <div class="form-group ">
                        <label class="sr-only">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <span class="help-block"></span>
                    <div class="checkbox">
                        <label class="">
                            <div class="icheckbox_minimal-blue" style="position: relative;"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>  Remember Password
                        </label>
                    </div>
                    <input type="submit" class="btn btn-block btn-warning" value="Login">
                    Don't have an account? <a href="<?php echo view::url(); ?>/register"><strong> Sign up</strong></a>
                </form>
            </div>
            <div class="bg-light animation flipInX">
                <a href="<?php echo view::url('forgotpassword'); ?>">Forgot Password?</a>
            </div>
        </div>
    </div>
    <!-- //Content Section End -->
</div>
