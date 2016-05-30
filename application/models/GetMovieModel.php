<?php

class GetMovieModel extends CI_Model{

	public function getData($movieid){
	  
	  $query1 = $this->db->get_where('movies',array('Movie_id'=>$movieid));
	  $resultSet['movieinfo'] = $query1->result();
	  
	  $this->db->select('*');
	  $this->db->from('memberships u');
	  $this->db->join('CID c','c.User_id=u.ID','left');
	  $this->db->join('comments com','com.CID=c.CID','left');
	  $this->db->where('c.Prod_id',$movieid);
	  
	  $query2 = $this->db->get();
      $resultSet['ratings']= $query2->result();
           	  
	  //$query = $this->db->get_where('movies',array('Movie_id'=>$movieid));
	  return $resultSet;
	}
	
	public function getTopMovie(){
	   $query = $this->db->select('Movie_name, Director, Music_Director,DESCRIPTION, MAX(Ratings) as Ratings', false)->get('movies');
	   $result['top'] = $query->result();
	   return $result;
	}
}
?>