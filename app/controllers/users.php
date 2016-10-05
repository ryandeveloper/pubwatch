<?php
class Users extends Controller 
{
    public function __construct()
    {
        parent::__construct();
        
        // Load model Auth
        $this->load->model('auth');
    }

    public function index()
    {    
        if($this->auth->isLoggedIn()) {
            $this->model->indexAssets();
            $users = $this->model->getUsers();        
            View::page('users/list', get_defined_vars());
        } else {            
            View::redirect('users/login');
        }
    }
    
    public function trashbin()
    {    
        if($this->auth->isLoggedIn()) {
            $this->model->indexAssets();
            $users = $this->model->getTrashedUsers();        
            View::page('users/trashbin', get_defined_vars());
        } else {            
            View::redirect('users/login');
        }
    }
        
    public function login()
    {
        if($this->auth->isLoggedIn()) {
            View::redirect();
        } else {     
            $this->model->indexAssets();
            $this->setSession('error', false);
            $this->model->doLogin();        
                  
            View::page('users/login', get_defined_vars());
        }   
    }
    
    public function register()
    {
        $this->load->view('users/register', get_defined_vars());
    }
    
    public function profile()
    {
        if($this->auth->isLoggedIn()) {
            
            $this->model->doSave();
            
            $this->model->indexAssets();
            
            $levels = $this->model->getUserLevels();
            View::page('users/profile', get_defined_vars());
            
            $this->model->updateUserInfo();
        } else {       
            View::redirect('users/login');
        }   
    }
    
    public function trash()
    {
        if($this->auth->isLoggedIn()) {
            $user = $this->model->doTrash($this->segment[2]);
            View::redirect('users/');
        } else {       
            View::redirect('users/login');
        }     
        
    }
    
    public function restore()
    {
        if($this->auth->isLoggedIn()) {
            $user = $this->model->doRestore($this->segment[2]);
            View::redirect('users/');
        } else {       
            View::redirect('users/login');
        }     
        
    }
    
    public function delete()
    {
        if($this->auth->isLoggedIn()) {
            $user = $this->model->doDelete($this->segment[2]);
            View::redirect('users/trashbin/');
        } else {       
            View::redirect('users/login');
        }     
        
    }
    
    public function emptytrashbin()
    {
        if($this->auth->isLoggedIn()) {
            $user = $this->model->doEmptyTrash();
            View::redirect('users/trashbin/');
        } else {       
            View::redirect('users/login');
        }     
        
    }
    
    public function edit()
    {
        if($this->auth->isLoggedIn()) {
            
            $this->model->doSave();
            
            $this->model->indexAssets();
            
            $user = $this->model->getUser($this->segment[2]);
            $levels = $this->model->getUserLevels();
            View::page('users/edit', get_defined_vars());
        } else {       
            View::redirect('users/login');
        }     
        
    }
    
    public function add()
    {
        if($this->auth->isLoggedIn()) {
            
            $pdata = $this->model->doSave();
            
            $this->model->indexAssets();
                        
            $levels = $this->model->getUserLevels();
            View::page('users/add', get_defined_vars());
        } else {       
            View::redirect('users/login');
        }     
        
    }
    
    public function userRole()
    {
        if($this->auth->isLoggedIn()) {
            View::$footerscripts = array(
                'assets/js/jquery-3.1.0.min.js',
                'assets/js/bootstrap.min.js',
                'assets/js/xenon-api.js',
                'assets/js/xenon-toggles.js',
                'assets/js/xenon-custom.js',
                'vendor/daterangepicker/daterangepicker.js');

            View::page('user/userrole', get_defined_vars());
        } else {       
            View::redirect();
        }     
        
    }
    
    public function lostPassword()
    {
        $this->load->view('users/request', get_defined_vars());
    }
    
    public function logout()
    {
        $this->model->doLogout();
    }
}