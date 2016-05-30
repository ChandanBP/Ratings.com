<?php
require(APPPATH.'/libraries/REST_Controller.php');

class GetMovieController extends REST_Controller{

public function movie_get(){
    
      $mId =  $this->get('id');	
	
	  // Check the id obtained.If it is null throw error response
	  if(!$mId){
	     $this->response(NULL,400);
	  }
	  
	  /* If the id is not empty then process the request using the id obtained*/
	  
	  /* Load the cache Driver */
	  $this->load->driver('Cache');
	  
	  /* First check movie information in the cache, if present then fetch it from cache */
	  $__movie = "movie".$mId;
	  $cache = $this->cache->file->get($__movie);
	  if($cache){
		  echo "inside cache";
	    $data = $this->cache->file->get($__movie);
		$this->deliver_response(200,"Successfull",$data);
	  }
	  // Else fetch the information from the database
	  else{
		  echo "inside db";
	     $this->load->model('GetMovieModel');
		 $data['records'] = $this->GetMovieModel->getData($mId);
		 $this->cache->file->save($__movie,$data,NULL,3600);
		 //$this->response($data, 200);
		 $this->deliver_response(200,"Successfull",$data);
	  }  
}

public function deliver_response($status,$status_message,$info){

	header("HTTP/1.1 $status $status_message");
	$response['status'] = $status;
	$response['status_message'] = $status_message;
	$response['datad'] = $info;
	$this->load->view('home.html',$response);	
}

public function index_get($movieid){
  
   $this->load->model('GetMovieModel');
   
   // Load the cache driver
   $this->load->driver('Cache');
   

   /*First check in the cache, if result present then fetch the result*/
  // $cache = $this->cache->file->get('cache_data');
   
   //if($cache){
    //   echo "From Cache";
    //   $data = $this->cache->file->get('cache_data');
	   //var_dump($data);
   //}
   
   // else obtain it from the database
   //else{
       //echo "From DB<br>";
	   $data['records'] = $this->GetMovieModel->getData($movieid);
	   $ret = $this->cache->file->save('cache_data',$data,NULL,3600);
	   if($ret){
	     echo "Saved<br>";
	   }
	   else{
	     echo "Not Saved";
	   }
	   
	//}
   
   // Load the view with the results obtained
   $this->load->view('MovieInfo',$data);
   }
}