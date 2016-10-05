<?php 
View::$title = 'Register';
View::$bodyclass = 'page-body';
View::header('front');
?>
<?php $userinfo = View::userInfo(); ?>

<div class="container">
    <!--Content Section Start -->
    <div class="row">
        <div class="box animation flipInX">
            
            <h3 class="text-primary"><?php echo View::$title; ?></h3>
            <!-- Notifications -->
            <form action="<?php echo view::url('register'); ?>" method="POST">
                <!-- CSRF Token -->
                <div id="stepOne">
                    <div class="form-group ">
                        <label class=""> I Am a</label>
                        <select class="form-control" id="iama" name="iama" placeholder="I am a *" required="">
                            <option value="">I am a *</option>
                            <option value="Leader">Pubwatch leader</option>
                            <option value="Member">Pubwatch member</option>
                        </select>

                    </div>
                    <div class="form-group groupset Leader " style="display: none;">
                        <label class=""> Pubwatch Group Name</label>
                        <input type="text" class="form-control" id="groupname" name="groupname" placeholder="Pubwatch Group Name *" value="">

                    </div>
                    <div class="form-group groupset Member " style="display: none;">
                        <label class=""> Pubwatch Group</label>
                        <select class="form-control" id="group" name="groupid">
                            <option value="">Select group *</option>
                            <option value="2">Power</option>
                            <option value="3">Pampam</option>
                            <option value="4">Easy Pub Whatever</option>
                            <option value="5">Hover</option>
                            <option value="6">Night sky</option>
                            <option value="7">Wonder Light Pub</option>
                            <option value="8">Wonder Light Pub</option>
                            <option value="9">whatever group here</option>
                            <option value="10">Wonder Light Pubpub</option>
                        </select>

                    </div>
                    <div class="form-group ">
                        <label class=""> Pub Name</label>
                        <input type="text" class="form-control" id="pub_name" name="pub_name" placeholder="Pub Name *" value="" required="">

                    </div>
                    <div class="form-group ">
                        <label class=""> First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name *" value="" required="">

                    </div>
                    <div class="form-group ">
                        <label class=""> Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name *" value="" required="">

                    </div>
                    <div class="form-group ">
                        <label class=""> Email</label>
                        <input type="email" class="form-control" id="Email" name="email" placeholder="Email *" value="" required="">

                    </div>
                    <div class="form-group ">
                        <label class=""> Password</label>
                        <input type="password" class="form-control" id="Password1" name="password" placeholder="Password *">

                    </div>
                    <div class="form-group ">
                        <label class=""> Confirm Password</label>
                        <input type="password" class="form-control" id="Password2" name="password_confirm" placeholder="Confirm Password *">

                    </div>
                    <input type="button" id="goStepTwo" class="btn btn-block btn-warning" value="Continue">
                </div>
                <div id="stepTwo" style="display: none;">
                    <div class="form-group">
                        <label class="">Find address, enter postal code e.g. GU32 2EN</label>
                        <div id="postcode_lookup"><input type="text" id="opc_input" value="Enter your Postcode" style="color:#CBCBCB;" autocomplete="off" class="form-control col-md-6"><button id="opc_button" type="button" onclick="return false;" class="btn btn-success">Find your Address</button></div> 
                    </div>

                    <div class="form-group ">
                        <label class="">Address</label>
                        <input class="form-control" id="line1" name="address" value="" placeholder="Address">

                    </div>
                    <div class="form-group ">
                        <label class="">Address 2</label>
                        <input class="form-control" id="line2" name="address2" value="" placeholder="Address 2">

                    </div>
                    <div class="form-group ">
                        <label class="">Address 3</label>
                        <input class="form-control" id="line3" name="address3" value="" placeholder="Address 3">

                    </div>
                    <div class="form-group ">
                        <label class="">Town/City</label>
                        <input class="form-control" id="town" name="city" value="" placeholder="Town">

                    </div>
                    <div class="form-group ">
                        <label class="">County/State</label>
                        <input class="form-control" id="county" name="state" value="" placeholder="County">
                        
                    </div>
                    <div class="form-group ">
                        <label class="">Postal Code</label>
                        <input class="form-control" id="postcode" name="postal" value="" placeholder="Postal Code">
                        
                    </div>

                    <div class="checkbox">
                        <label>
                            <div class="icheckbox_minimal-blue checked" style="position: relative;"><input type="checkbox" checked="" name="subscribed" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>  I accept <a href="#"> Terms and Conditions</a>
                        </label>
                    </div>
                    <input type="submit" class="btn btn-block btn-warning" value="Sign up" name="submit">
                </div>
                Already have an account? Please <a href="<?php echo view::url('login'); ?>"> Sign In</a>
            </form>
        </div>
    </div>
    <!-- //Content Section End -->
</div>
