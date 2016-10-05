<?php 
View::$title = 'Add Group';
View::$bodyclass = 'page-body';
View::header('front');
?>
<?php $userinfo = View::userInfo(); ?>


    <!-- Container Section Start -->
    <div class="container">

        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-info table-edit">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span><?php echo View::$title; ?></span>
                        </h3>
                    </div>

                    <div class="panel-body">

                        <form method="POST" action="http://pubwatchgroup.com/watchlist/save" accept-charset="UTF-8" id="addWatchlistForm" class="form-horizontal bv-form" enctype="multipart/form-data" novalidate="novalidate"><button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button><input name="_token" type="hidden" value="LFOYIyWrBqpPSqQEHPFK2rEHqFuRL1BY70XiYF4C">                        <input type="hidden" name="group_id" value="3">
                            <div class="form-group">
                                <label class="col-md-3 control-label hidden-xs">Photo</label>

                                <div class="col-md-8 col-xs-6 colsm-6">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                                        <div>
                                            <span class="btn btn-default btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="photo">
                                            </span>
                                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label hidden-xs">Name</label>

                                <div class="col-md-8 col-xs-6 colsm-6">
                                    <input type="text" class="form-control" name="name" placeholder="Enter Name" data-bv-field="name">
                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="name" data-bv-result="NOT_VALIDATED" style="display: none;">The name is required and cannot be empty</small></div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Age</label>

                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="age" placeholder="Enter Age">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Gender</label>

                                <div class="col-md-6">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="gender" value="male" data-bv-field="gender"> Male
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="gender" value="female" data-bv-field="gender"> Female
                                        </label>
                                    </div>
                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="gender" data-bv-result="NOT_VALIDATED" style="display: none;">The gender is required</small></div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Date of Birth</label>

                                <div class="col-md-8">
                                    <input type="text" class="form-control hasdatepicker" name="dob" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Height</label>

                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="height" placeholder="Enter Height" data-bv-field="height"><small>e.g. 5ft 6in</small>
                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="height" data-bv-result="NOT_VALIDATED" style="display: none;">The height is required</small></div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Hair Style</label>

                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="hairstyle" placeholder="Enter Hair Style" data-bv-field="hairstyle">
                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="hairstyle" data-bv-result="NOT_VALIDATED" style="display: none;">The hair style is required</small></div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Hair Colour</label>

                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="haircolour" placeholder="Enter Hair Colour" data-bv-field="haircolour">
                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="haircolour" data-bv-result="NOT_VALIDATED" style="display: none;">The hair colour is required</small></div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Markings</label>

                                <div class="col-md-8">
                                    <input type="text" name="markings" class="form-control" maxlength="128" placeholder="Enter Markings Info" data-bv-field="markings">
                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="markings" data-bv-result="NOT_VALIDATED" style="display: none;">The markings is required</small><small class="help-block" data-bv-validator="stringLength" data-bv-for="markings" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a value with valid length</small></div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Known Associates</label>

                                <div class="col-md-8">
                                    <select class="form-control" name="knownassociates[]" multiple="">
                                        <option value="1">Robert Keast</option>
                                        <option value="2">Paul Sherwood</option>
                                        <option value="6">Andrew Manning</option>
                                        <option value="7">Tow Mole</option>
                                        <option value="11">Neil Curry</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Notes</label>

                                <div class="col-md-8">
                                    <textarea id="textarea" name="notes" class="form-control" maxlength="300" rows="2" placeholder="Issues information" data-bv-field="notes"></textarea>
                                <small class="help-block" data-bv-validator="stringLength" data-bv-for="notes" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a value with valid length</small></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-offset-3 col-md-8">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- //Container Section End -->

<?php View::footer('front'); ?>