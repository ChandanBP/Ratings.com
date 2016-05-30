<?php
require(APPPATH.'/libraries/REST_Controller.php');

class TopProductController extends REST_Controller{

     public function topproducts_get(){
	    $id = $this->get('id');
		
		if($id == 1){
			//echo "errrrror";
			$this->load->model('GetMovieModel');
			$top['movies'] = $this->GetMovieModel->getTopMovie();
			$this->load->view('TopMovies.html',$top);
		}
	 }
}
?>