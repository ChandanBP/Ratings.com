<?php
class CommUpdateModel extends CI_Model{

	public function updateComments($id,$comm,$uid){
	   
	   $movieID = $id;
	   $comments = $comm;
	   $userID = $uid;
	   
	   $this->db->select('*');
	   $this->db->from('comments');
	   $q1 = $this->db->get();
	   
	   
	   $numrows = $q1->num_rows();
	   if($numrows!="")
	   {
		   $numrows+=1;
	   }
	   else
	   {
		   $numrows = 1;
		   //$numrows+=1;
	   }
	   
	   
	   $data1 = array('CID'=>$numrows,'Comments'=>$comments,'No_Likes'=>0,'No_Dislikes'=>0);
	   $data2 = array('CID'=>$numrows,'Prod_id'=>$movieID,'User_id'=>$userID);
       
	   $this->db->insert('comments',$data1);
	   $this->db->insert('cid',$data2);
	}
	
	
	public function updateRatings($movieId,$ratings,$userID){
	    
		$data = array('Prod_id'=>$movieId,'User_id'=>$userID,'User_rating'=>$ratings);
		$this->db->insert('ratings',$data);
		
		$this->db->select_avg('User_rating','avg_rat');
		$this->db->from('ratings');
		$this->db->where('Prod_id',$movieId);
		
		$q1 = $this->db->get();
		foreach ($q1->result() as $row)
		{
			$val = $row->avg_rat;
		}
		
		$data1 = array('Ratings'=>$val);
	    $this->db->where('Movie_id', $movieId);
        $this->db->update('movies', $data1);
	}
	
	public function updateLikes($CID){    
	   
	  $this->db->select('No_Likes');
	  $this->db->from('comments');
	  $this->db->where('CID',$CID);
	  
	  $q1 = $this->db->get();
	 foreach ($q1->result() as $row)
	 {
		$val = $row->No_Likes;
	 }
	 $val++; 
     
	 $data = array('No_Likes'=>$val);
	 $this->db->where('CID', $CID);
     $this->db->update('comments', $data);
	 
	}
	
	public function updatedisLikes($CID){
	  $this->db->select('No_Dislikes');
	  $this->db->from('comments');
	  $this->db->where('CID',$CID);
	  
	  $q1 = $this->db->get();
	 foreach ($q1->result() as $row)
	 {
		$val = $row->No_Dislikes;
	 }
	 $val++; 
     
	 $data = array('No_Dislikes'=>$val);
	 $this->db->where('CID', $CID);
     $this->db->update('comments', $data);
	}
}
?>