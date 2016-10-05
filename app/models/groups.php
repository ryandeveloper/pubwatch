<?php
class Groups_model extends Model
{
    public function __construct()
    {
        parent::__construct();

        View::$footerscripts = array(
            'assets/js/front/jquery.min.js',
            'assets/js/front/bootstrap.min.js',
            'assets/js/front/raphael.js',
            'assets/js/front/livicons-1.4.min.js',
            'assets/js/front/josh_frontend.js'
        );

        View::$styles = array(
            'assets/css/front/bootstrap.min.css',
            'assets/css/front/custom.css',
            'vendor/devicon/devicon.min.css',
            'vendor/devicon/devicon-colors.css',
            'assets/css/front/font-awesome.min.css',
            'assets/css/front/tabbular.css',
            'assets/css/front/skins/warning_skin.css');

        View::$segments = $this->segment;
    }


    public function indexAssets()
    {

        // Page Custom JS


        // Imported scripts on this page // REFER ON VENDORS SCRIPTS


        // Styles

    }
}