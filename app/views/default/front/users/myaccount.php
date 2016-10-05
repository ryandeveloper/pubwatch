<?php 
View::$title = 'Watch List';
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
                            <span class="table-toolbar pull-right">
                                <div class="btn-group">
                                    <a class=" btn btn-custom btn-default" style="margin-top:-8px;" href="<?php echo view::url('watchlist/add'); ?>">
                                        Add New
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </span>
                        </h3>
                    </div>

                    <div class="panel-body">
                        <table id="datatable-responsive" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th width="80">Photo</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Description</th>
                                    <th>Incident Note</th>
                                    <th width="200" class="text-center">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr role="row" class="odd">
                                    <td tabindex="0" class="sorting_1">
                                        <img src="http://pubwatchgroup.com/uploads/user.png" style="max-width: 50px;">
                                    </td>
                                    <td class="sorting_1">Robert Keast</td>
                                    <td>29</td>
                                    <td>Markings: <strong>beard</strong>
                                        <br>Height: <strong>6ft 5in</strong>
                                        <br>Hair Colour: <strong>Black</strong>
                                        <br>Hair Style: <strong>Clean cut</strong>
                                    </td>
                                    <td>test</td>
                                    <td class="text-center">
                                        <a href="" title="Edit" class="btn btn-warning btn-sm action"><span class="fa fa-pencil-square-o"></span></a>
                                        <a href="" title="Delete" onclick="return confirm('Are you sure you want to delete ?');" class="btn btn-danger btn-sm action"><span class="fa fa-trash"></span></a>
                                    </td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td tabindex="0" class="sorting_1">
                                        <img src="http://pubwatchgroup.com/uploads/user.png" style="max-width: 50px;">
                                    </td>
                                    <td class="sorting_1">Robert Keast</td>
                                    <td>29</td>
                                    <td>Markings: <strong>beard</strong>
                                        <br>Height: <strong>6ft 5in</strong>
                                        <br>Hair Colour: <strong>Black</strong>
                                        <br>Hair Style: <strong>Clean cut</strong>
                                    </td>
                                    <td>test</td>
                                    <td class="text-center">
                                        <a href="" title="Edit" class="btn btn-warning btn-sm action"><span class="fa fa-pencil-square-o"></span></a>
                                        <a href="" title="Delete" onclick="return confirm('Are you sure you want to delete ?');" class="btn btn-danger btn-sm action"><span class="fa fa-trash"></span></a>
                                    </td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td tabindex="0" class="sorting_1">
                                        <img src="http://pubwatchgroup.com/uploads/user.png" style="max-width: 50px;">
                                    </td>
                                    <td class="sorting_1">Robert Keast</td>
                                    <td>29</td>
                                    <td>Markings: <strong>beard</strong>
                                        <br>Height: <strong>6ft 5in</strong>
                                        <br>Hair Colour: <strong>Black</strong>
                                        <br>Hair Style: <strong>Clean cut</strong>
                                    </td>
                                    <td>test</td>
                                    <td class="text-center">
                                        <a href="" title="Edit" class="btn btn-warning btn-sm action"><span class="fa fa-pencil-square-o"></span></a>
                                        <a href="" title="Delete" onclick="return confirm('Are you sure you want to delete ?');" class="btn btn-danger btn-sm action"><span class="fa fa-trash"></span></a>
                                    </td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td tabindex="0" class="sorting_1">
                                        <img src="http://pubwatchgroup.com/uploads/user.png" style="max-width: 50px;">
                                    </td>
                                    <td class="sorting_1">Robert Keast</td>
                                    <td>29</td>
                                    <td>Markings: <strong>beard</strong>
                                        <br>Height: <strong>6ft 5in</strong>
                                        <br>Hair Colour: <strong>Black</strong>
                                        <br>Hair Style: <strong>Clean cut</strong>
                                    </td>
                                    <td>test</td>
                                    <td class="text-center">
                                        <a href="" title="Edit" class="btn btn-warning btn-sm action"><span class="fa fa-pencil-square-o"></span></a>
                                        <a href="" title="Delete" onclick="return confirm('Are you sure you want to delete ?');" class="btn btn-danger btn-sm action"><span class="fa fa-trash"></span></a>
                                    </td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td tabindex="0" class="sorting_1">
                                        <img src="http://pubwatchgroup.com/uploads/user.png" style="max-width: 50px;">
                                    </td>
                                    <td class="sorting_1">Robert Keast</td>
                                    <td>29</td>
                                    <td>Markings: <strong>beard</strong>
                                        <br>Height: <strong>6ft 5in</strong>
                                        <br>Hair Colour: <strong>Black</strong>
                                        <br>Hair Style: <strong>Clean cut</strong>
                                    </td>
                                    <td>test</td>
                                    <td class="text-center">
                                        <a href="" title="Edit" class="btn btn-warning btn-sm action"><span class="fa fa-pencil-square-o"></span></a>
                                        <a href="" title="Delete" onclick="return confirm('Are you sure you want to delete ?');" class="btn btn-danger btn-sm action"><span class="fa fa-trash"></span></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- //Container Section End -->

<?php View::footer('front'); ?>