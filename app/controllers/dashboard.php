<?php
class Dashboard extends Controller 
{
    public function __construct()
    {
        parent::__construct();
        
        // Protected yes

        $auth = $this->load->model('auth', true);
        if(!$auth->isLoggedIn() && $this->segment[0] != 'assets') {
            View::redirect('users/login');
        }
    }

    public function index()
    {
        // Table
        $this->model->indexAssets();
        View::page('dashboard', get_defined_vars());
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