<?php
require(APPPATH.'/libraries/REST_Controller.php');

class Logout extends REST_Controller{

    public function __construct()
    {
        parent::__construct();
        //this condition checks the existence of session if user is not accessing  
        //login method as it can be accessed without user session
		
        if( !$this->session->userdata('is_logged_in')) {
            redirect('login'); 
        }
    }
	
	
	public function logout_get()
    {   
		$this->session->userdata = array();
        $this->session->sess_destroy();
        redirect('login');
    }
}
