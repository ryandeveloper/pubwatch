<?php
class Watchlist extends Controller 
{
    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        // Page level JS
        View::$footerscripts[] = "vendor/datatables/js/jquery.dataTables.min.js";
        View::$footerscripts[] = "vendor/datatables/dataTables.bootstrap.js";
        View::$footerscripts[] = "vendor/datatables/yadcf/jquery.dataTables.yadcf.js";
        View::$footerscripts[] = "vendor/datatables/tabletools/dataTables.tableTools.min.js";
        View::$footerscripts[] = 'assets/js/table.js';

        // Page level CSS
        View::$styles[] = "vendor/datatables/dataTables.bootstrap.css";
        View::$styles[] = 'assets/css/fileinput.css';
        View::$styles[] = "assets/css/front/groups.css";


        View::page('front/watchlist/list', get_defined_vars());
    }

    public function add()
    {

        View::page('front/watchlist/add', get_defined_vars());

    }

    public function edit()
    {
        
        View::page('front/watchlist/edit', get_defined_vars());

    }

    public function delete()
    {

    }


}