<?php
class Site_model extends CI_Model{
	
	function getAll(){
			$q = $this->db->query("SELECT * FROM test");
			if($q->num_rows()>0){
				foreach ($q->result()as $row)
				{
					$data[] = $row;
					}
				return $data;
				
			}
	}
	
	/* function getAll(){
		
		$query = $this->db->get('test');
	  return $query->result();
		
		/* 
		 $q = $this->db->get('test');
		 if($q->num_rows()>0){
			 foreach ($q->result()as $row)
			{
				$data[] = $row;
				}
		return $data;
		 } */
/* $query = $this->db->get('movies');
	  return $query->result();
		 */
		
	/* $q = $this->db->get('movies');
	if($q->num_rows()>0){
		foreach ($q->result()as $row)
		{
			$data[] = $row;
			}
				return $data;
		} */		
	 
	
	
	
}
?>

