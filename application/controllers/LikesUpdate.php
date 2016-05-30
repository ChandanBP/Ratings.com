<?php
require(APPPATH.'/libraries/REST_Controller.php');

class LikesUpdate extends REST_Controller{
    	
	public function like_post(){
	   
	   $CID = $this->input->post('comID');
	   $l = $this->input->post('torf');
	   $isLoggedIn = $this->session->userdata('is_logged_in');
	   if($isLoggedIn == true){
			// Load the model class and update into DB
		   $this->load->model('CommUpdateModel');
		   if($l==1){
			   $this->CommUpdateModel->updateLikes($CID);
		   }
		   if($l==0){
		       $this->CommUpdateModel->updatedisLikes($CID);
		   }
		   $status['like'] = true;
	   }
	   else{
	       $status['like'] = false;
	   }
	   echo json_encode($status);
	}
}
?>