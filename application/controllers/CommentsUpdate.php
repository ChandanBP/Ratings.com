<?php
require(APPPATH.'/libraries/REST_Controller.php');

class CommentsUpdate extends REST_Controller{

	public function update_post(){

	   $movieId = $this->input->post('id');
	   $comments = $this->input->post('comm');
	   $ratings = $this->input->post('rate');
	   $isLoggedIn = $this->session->userdata('is_logged_in');
	   if($isLoggedIn == true){
			$userID = $this->session->userdata('userId');
			// Load the model class and update into DB
		   $this->load->model('CommUpdateModel');
		   $this->CommUpdateModel->updateComments($movieId,$comments,$userID);
		   $this->CommUpdateModel->updateRatings($movieId,$ratings,$userID);
		   $status['update'] = true;
	   }
	   else{
	       $status['update'] = false;
	   }
	   
	   echo json_encode($status);
	}
	
}
?>