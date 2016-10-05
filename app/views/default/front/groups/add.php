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
                        
                        <form method="POST" action="http://pubwatchgroup.com/group/save" accept-charset="UTF-8" id="addGroupForm" class="form-horizontal bv-form" enctype="multipart/form-data" novalidate="novalidate"><button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button><input name="_token" type="hidden" value="LFOYIyWrBqpPSqQEHPFK2rEHqFuRL1BY70XiYF4C">                            
                            <div class="form-group">
                                <label class="col-md-3 control-label hidden-xs">Group Name</label>

                                <div class="col-md-8 col-xs-6 colsm-6">
                                    <input type="text" class="form-control" name="name" placeholder="Enter Name" data-bv-field="name">
                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="name" data-bv-result="NOT_VALIDATED" style="display: none;">The name is required and cannot be empty</small></div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Description</label>

                                <div class="col-md-8">
                                    <textarea id="textarea" name="description" class="form-control" maxlength="300" rows="2" placeholder="Description" data-bv-field="description"></textarea>
                                <small class="help-block" data-bv-validator="stringLength" data-bv-for="description" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a value with valid length</small></div>
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