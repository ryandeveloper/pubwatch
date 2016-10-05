<?php 
View::$title = 'Group List';
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
                                    <a class=" btn btn-custom btn-default" style="margin-top:-8px;" href="<?php echo view::url('groups/add'); ?>">
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
                                    <th width="120">ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                    <th width="200" class="text-center">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>12</td>
                                    <td>teext</td>
                                    <td>teterwfeasfsefsfs</td>
                                    <td>dateaer</td>
                                    <td class="text-center">
                                        <a href="" title="Edit" class="btn btn-warning btn-sm action"><span class="fa fa-pencil-square-o"></span></a>
                                        <a href="" title="Delete" onclick="return confirm('Are you sure you want to delete ?');" class="btn btn-danger btn-sm action"><span class="fa fa-trash"></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>teext</td>
                                    <td>teterwfeasfsefsfs</td>
                                    <td>dateaer</td>
                                    <td class="text-center">
                                        <a href="" title="Edit" class="btn btn-warning btn-sm action"><span class="fa fa-pencil-square-o"></span></a>
                                        <a href="" title="Delete" onclick="return confirm('Are you sure you want to delete ?');" class="btn btn-danger btn-sm action"><span class="fa fa-trash"></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>teext</td>
                                    <td>teterwfeasfsefsfs</td>
                                    <td>dateaer</td>
                                    <td class="text-center">
                                        <a href="" title="Edit" class="btn btn-warning btn-sm action"><span class="fa fa-pencil-square-o"></span></a>
                                        <a href="" title="Delete" onclick="return confirm('Are you sure you want to delete ?');" class="btn btn-danger btn-sm action"><span class="fa fa-trash"></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>teext</td>
                                    <td>teterwfeasfsefsfs</td>
                                    <td>dateaer</td>
                                    <td class="text-center">
                                        <a href="" title="Edit" class="btn btn-warning btn-sm action"><span class="fa fa-pencil-square-o"></span></a>
                                        <a href="" title="Delete" onclick="return confirm('Are you sure you want to delete ?');" class="btn btn-danger btn-sm action"><span class="fa fa-trash"></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>teext</td>
                                    <td>teterwfeasfsefsfs</td>
                                    <td>dateaer</td>
                                    <td class="text-center">
                                        <a href="" title="Edit" class="btn btn-warning btn-sm action"><span class="fa fa-pencil-square-o"></span></a>
                                        <a href="" title="Delete" onclick="return confirm('Are you sure you want to delete ?');" class="btn btn-danger btn-sm action"><span class="fa fa-trash"></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>teext</td>
                                    <td>teterwfeasfsefsfs</td>
                                    <td>dateaer</td>
                                    <td class="text-center">
                                        <a href="" title="Edit" class="btn btn-warning btn-sm action"><span class="fa fa-pencil-square-o"></span></a>
                                        <a href="" title="Delete" onclick="return confirm('Are you sure you want to delete ?');" class="btn btn-danger btn-sm action"><span class="fa fa-trash"></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>teext</td>
                                    <td>teterwfeasfsefsfs</td>
                                    <td>dateaer</td>
                                    <td class="text-center">
                                        <a href="" title="Edit" class="btn btn-warning btn-sm action"><span class="fa fa-pencil-square-o"></span></a>
                                        <a href="" title="Delete" onclick="return confirm('Are you sure you want to delete ?');" class="btn btn-danger btn-sm action"><span class="fa fa-trash"></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>teext</td>
                                    <td>teterwfeasfsefsfs</td>
                                    <td>dateaer</td>
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