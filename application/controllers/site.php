<?php
class Site extends CI_Controller {
		
	/* function _construct()
	{
		parent::Controller();
		$this->is_logged_in();
	} */	
		
		function __construct()
		{
		parent::__construct();
		$this->is_logged_in();
		}
		
	function is_logged_in(){
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in)||$is_logged_in != true)
		{
			echo 'you dont have permission to access  this <a href ="../login">Login</a>';
			die();
		}
	
	}
	function index() {

		$this->load->model('site_model');
		$data['records'] = $this->site_model->getAll();
		
		$this->load->view('home' ,$data); 
		}
	
	function members_area()
	{
		
			$this->load->view('members_area');
	}
	

}
