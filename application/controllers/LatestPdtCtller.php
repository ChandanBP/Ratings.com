<?php
require(APPPATH.'/libraries/REST_Controller.php');

class LatestPdtCtller extends REST_Controller{

	public function latestPdts_get(){
	   
        $pid = $this->get('id');
		
		$this->load->model('LatPdtModel');
		$result['latProd'] = $this->LatPdtModel->getLatestPdt($pid);
  	    $this->load->view('LatestProd.html',$result);
	}
}
?>