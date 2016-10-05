<?php
class Front extends Controller 
{
    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        // Table
        $this->model->indexAssets();


        // Page level JS
        View::$footerscripts[] = "vendor/owl-carousel/owl.carousel.js";
        View::$footerscripts[] = "assets/js/front/carousel.js";
        View::$footerscripts[] = "assets/js/front/wow.min.js";
        View::$footerscripts[] = "assets/js/jquery.circliful.js";
        View::$footerscripts[] = "assets/js/front/index.js";
        // Page level CSS
        View::$styles[] = "assets/css/front/jquery.circliful.css";
        View::$styles[] = "assets/css/front/animate.min.css";
        View::$styles[] = "vendor/owl-carousel/owl.carousel.css";
        View::$styles[] = "vendor/owl-carousel/owl.theme.css";

        View::page('front/frontpage', get_defined_vars());
    }

    public function howitworks()
    {
         // Page level JS
        View::$footerscripts[] = "vendor/owl-carousel/owl.carousel.js";
        View::$footerscripts[] = "assets/js/front/carousel.js";
        View::$footerscripts[] = "assets/js/aboutus.js";
        // Page level CSS
        View::$styles[] = "assets/css/front/aboutus.css";
        View::$styles[] = "vendor/owl-carousel/owl.carousel.css";
        View::$styles[] = "vendor/owl-carousel/owl.theme.css";

        View::page('front/howitworks', get_defined_vars());

    }
    
    public function contact()
    {
         // Page level JS
        View::$footerscripts[] = "";
        // Page level CSS
        View::$styles[] = "assets/css/front/contact.css";

        View::page('front/contact', get_defined_vars());

    }
    
    public function login()
    {
         // Page level JS
        View::$footerscripts[] = "";
        // Page level CSS
        View::$styles[] = "assets/css/front/login.css";

        View::page('front/users/login', get_defined_vars());

    }

    public function register()
    {
        // Page level JS
        View::$footerscripts[] = "";

        // Page level CSS
        View::$styles[] = "assets/css/front/register.css";

        View::page('front/users/register', get_defined_vars());

    }

    public function forgotpassword()
    {
        // Page level JS
        View::$footerscripts[] = "";

        // Page level CSS
        View::$styles[] = "assets/css/front/login.css";

        View::page('front/users/forgotpassword', get_defined_vars());

    }

    public function watchlist()
    {
        // Page level JS
        View::$footerscripts[] = "";

        // Page level CSS
        View::$styles[] = "assets/css/front/login.css";

        View::page('front/watchlist/list', get_defined_vars());

    }

    public function myaccount()
    {
        View::$styles[] = "assets/css/front/groups.css";

        View::page('front/users/myaccount', get_defined_vars());

    }

    public function settings()
    {

        if($this->auth->isLoggedIn()) {

        $this->model->doSave();

        $this->model->indexAssets();
        $settings = $this->model->getSettings();
        $levels = $this->model->getUserLevels();
        View::page('settings', get_defined_vars());
        } else {
            View::redirect('users/login');
        }
    }

    public function ajax()
    {
        echo $this->model->getUserByID($this->post['ID']);
    }
}